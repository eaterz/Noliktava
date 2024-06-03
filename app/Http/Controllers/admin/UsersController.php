<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\activity;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users',compact('users'));
    }

    public function create(){

        return view('admin.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'usertype' => 'required',

        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->usertype = $request->input('usertype');
        $user->password = Hash::make($request->input('password'));

        Activity::create([
            'user_id' => auth()->id(),
            'activity_type' => 'create',
            'subject_type' => 'App\Models\User',
            'subject_id' => auth()->id(),
            'description' => "Created user: {$user->name}",
        ]);

        $user->save();

        return redirect('/admin/users');

    }


    public function edit($id)
    {
        $user=User::find($id);
        return view('admin.edit',compact('user'));
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'usertype' => 'required',

        ]);

        $user=User::find($request->id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->usertype = $request->input('usertype');
        $user->password = Hash::make($request->input('password'));

        Activity::create([
            'user_id' => auth()->id(),
            'activity_type' => 'update',
            'subject_type' => 'App\Models\User',
            'subject_id' => auth()->id(),
            'description' => "Updated user: {$user->name}",
        ]);

        $user->save();
        return redirect('/admin/users');

    }

    public function destroy($id)
    {
        $user=User::find($id);
        if($user){
            $user->delete();

            Activity::create([
                'user_id' => auth()->id(),
                'activity_type' => 'delete',
                'subject_type' => 'App\Models\User',
                'subject_id' => auth()->id(),
                'description' => "Deleted user: {$user->name}",
            ]);
        }
        return redirect('/admin/users');

    }


}
