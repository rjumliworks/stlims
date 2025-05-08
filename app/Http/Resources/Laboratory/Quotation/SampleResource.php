<?php

namespace App\Http\Resources\Laboratory\Quotation;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SampleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->id);

        return [
            'id' => $this->id,
            'qr' => $code,
            'name' => $this->name,
            'customer_description' => $this->customer_description,
            'description' => $this->description,
            'analyses' => AnalysisResource::collection($this->analyses),
            'created_at' => $this->created_at,
            'selected' => false
        ];
    }
}
