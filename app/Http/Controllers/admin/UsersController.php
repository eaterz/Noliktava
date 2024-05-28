<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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

        $product = new User();
        $product->name = $request->input('name');
        $product->email = $request->input('email');
        $product->usertype = $request->input('usertype');
        $product->password = Hash::make($request->input('password'));

        $product->save();

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
        $user->save();
        return redirect('/admin/users');
    }

    public function destroy($id)
    {
        $user=User::find($id);
        if($user){
            $user->delete();
        }
        return redirect('/admin/users');

    }


}
