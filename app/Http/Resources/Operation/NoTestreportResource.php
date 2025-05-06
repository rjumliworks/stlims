<?php

namespace App\Http\Resources\Operation;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoTestreportResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->id);

        return [
            'qr' => $code,
            'code' => null,
            'sample_code' => $this->code,
            'tsr_code' => $this->tsr->code,
            'created_at' => null
        ]; 
    }
}
