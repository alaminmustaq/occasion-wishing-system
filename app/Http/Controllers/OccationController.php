<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OccationController extends Controller
{
    public function create(){
        return view('create');
    }
}
