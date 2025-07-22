<?php

namespace App\Http\Controllers\Others;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Others\CsfClass;

class CsfController extends Controller
{
    public function __construct(CsfClass $csf){
        $this->csf = $csf;
    }

    public function csf(){
        return inertia('Modules/Public/Csf',[
            'tsrs' => $this->csf->tsrs(),
            'questions' => $this->csf->questions(),
        ]);
    }
}
