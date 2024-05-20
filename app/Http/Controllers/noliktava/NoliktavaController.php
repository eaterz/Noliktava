<?php

namespace App\Http\Controllers\noliktava;

use App\Http\Controllers\Controller;


class NoliktavaController extends Controller
{


    public function index()
    {
        return view('noliktava.dashboard');
    }
}
