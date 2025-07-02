<?php

namespace App\Http\Controllers\Others;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GadController extends Controller
{
    public function index(Request $request){
        return inertia('Modules/Others/Gad/Index');
    }
}
