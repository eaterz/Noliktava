<?php

namespace App\Http\Controllers;

use App\Models\activity;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view('activities',compact('activities'));
    }

    public function destroy($id)
    {
        $activity = Activity::find($id);
        $activity->delete();
        return redirect('/admin/activity');
    }
}
