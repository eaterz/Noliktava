<?php

namespace App\Http\Controllers\plaukti;
use App\Http\Controllers\Controller;

class PlauktiController extends Controller
{


    public function index()
    {
        return view('plaukti.dashboard');
    }

}
