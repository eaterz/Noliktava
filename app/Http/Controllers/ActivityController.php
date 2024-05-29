<?php

namespace App\Http\Controllers;

use App\Models\activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view('activities', compact('activities'));
    }

    public function destroy($id)
    {
        $activity = Activity::find($id);
        $activity->delete();
        return redirect('/admin/activity');
    }

    public function clearAll()
    {
        $activities = Activity::all();
        if ($activities){
            Activity::truncate(); // This will delete all records in the activity table
        }


        return redirect('/admin/activity');
    }
}
