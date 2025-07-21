<?php

namespace App\Http\Controllers;

use App\Models\Transformer;
use Illuminate\Http\Request;
use MongoDB\Client as MongoClient;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\TransformerResource;

class TransformerController extends Controller
{
    public function testConnection()
    {
        try {
            $client = new MongoClient(env('MONGODB_URI'));
            $collection = $client->transformer_db->transformers;
            
            return response()->json([
                'status' => 'success',
                'message' => 'Connected to MongoDB Atlas',
                'stats' => [
                    'total_docs' => $collection->countDocuments(),
                    'avg_temp' => $collection->aggregate([
                        ['$group' => ['_id' => null, 'avg' => ['$avg' => '$temperature']]]
                    ])->toArray()[0]['avg'] ?? 0
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Atlas connection failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            '*.h2' => 'required|numeric|min:0|max:1000',
            '*.ch4' => 'required|numeric|min:0|max:500',
            '*.c2h6' => 'required|numeric|min:0|max:200',
            '*.c2h4' => 'required|numeric|min:0|max:300',
            '*.c2h2' => 'required|numeric|min:0|max:100',
            '*.temperature' => 'required|numeric|between:-40,150',
            '*.load' => 'required|numeric|between:0,120'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $batchId = 'batch_' . uniqid();
            $timestamp = now();

            $documents = array_map(function($item) use ($batchId, $timestamp) {
                return [
                    'h2' => round($item['h2'], 2),
                    'ch4' => round($item['ch4'], 2),
                    'c2h6' => round($item['c2h6'], 2),
                    'c2h4' => round($item['c2h4'], 2),
                    'c2h2' => round($item['c2h2'], 2),
                    'temperature' => round($item['temperature'], 1),
                    'load' => round($item['load'], 1),
                    'batch_id' => $batchId,
                    'timestamp' => $timestamp,
                    'source' => 'MATLAB'
                ];
            }, $request->all());

            $result = Transformer::insert($documents);

            return response()->json([
                'status' => 'success',
                'batch_id' => $batchId,
                'inserted_count' => count($documents),
                'first_id' => $documents[0]['_id'] ?? null
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to save to Atlas',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function getLatest()
    {
        try {
            $latest = Transformer::orderBy('timestamp', 'desc')
                ->limit(10)
                ->get();

            return TransformerResource::collection($latest);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve data',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}