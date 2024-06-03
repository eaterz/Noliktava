<?php

namespace App\Http\Controllers;

use App\Models\activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::orderBy('created_at', 'desc')->get();
        return view('activities', compact('activities'));
    }


}
