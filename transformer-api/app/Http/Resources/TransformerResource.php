<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransformerResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->_id,
            'h2' => $this->h2,
            'ch4' => $this->ch4,
            'c2h6' => $this->c2h6,
            'c2h4' => $this->c2h4,
            'c2h2' => $this->c2h2,
            'temperature' => $this->temperature,
            'load' => $this->load,
            'batch_id' => $this->batch_id,
            'timestamp' => $this->timestamp,
            'source' => $this->source,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}