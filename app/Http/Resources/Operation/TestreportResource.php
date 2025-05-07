<?php

namespace App\Http\Resources\Operation;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TestreportResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->sample->id);

        return [
            'qr' => $code,
            'code' => $this->code,
            'sample_code' => $this->sample->code,
            'sample_id' => $this->sample->id,
            'tsr_code' => $this->sample->tsr->code,
            'analyses' => $this->sample->analyses,
            'user' => $this->user->profile->firstname.' '.$this->user->profile->lastname,
            'lists' => $this->lists,
            'created_at' => $this->created_at
        ]; 
    }
}
