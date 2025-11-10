<?php

namespace App\Http\Resources\Executive;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
         $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->id);

        return [
            'code' => $code,
            'name' => $this->role->name,
            'laboratory' => $this->laboratory?->name,
            'province' => $this->province?->name,
            'created_at' => $this->created_at,
            'is_active' => $this->is_active
        ];
    }
}
