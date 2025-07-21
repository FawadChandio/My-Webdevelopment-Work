<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use DateTimeInterface;

class Transformer extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'transformers';

    protected $fillable = [
        'h2', 'ch4', 'c2h6', 'c2h4', 'c2h2',
        'temperature', 'load', 'timestamp',
        'batch_id', 'source'
    ];

    protected $casts = [
        'timestamp' => 'datetime',
        'h2' => 'float',
        'ch4' => 'float',
        'c2h6' => 'float',
        'c2h4' => 'float',
        'c2h2' => 'float',
        'temperature' => 'float',
        'load' => 'float'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}