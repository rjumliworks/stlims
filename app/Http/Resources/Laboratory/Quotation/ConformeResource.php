<?php

namespace App\Http\Resources\Laboratory\Quotation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConformeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'value' => $this->id,
            'name' => $this-> name,
            'contact_no' => $this->contact_no
        ];
    }
}
