<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransformerController;


// Route::middleware(['api.key'])->group(function () {
    // Connection test
    // Route::get('/atlas/status', [TransformerController::class, 'testConnection']);
    
    // // Data operations
    // Route::prefix('data')->group(function () {
    //     Route::post('/upload', [TransformerController::class, 'store']);
    //     Route::get('/latest', [TransformerController::class, 'getLatest']);
    // });
// });
Route::get('/atlas/status', [TransformerController::class, 'testConnection']);
Route::post('/data/upload', [TransformerController::class, 'store']);  // Ensure this exists
Route::get('/data/latest', [TransformerController::class, 'getLatest']);
// Health check (no auth)
Route::get('/health', function () {
    return response()->json(['status' => 'alive']);
});