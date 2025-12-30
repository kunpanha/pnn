<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;
use Gate;

class UserController extends Controller
{
    public function user()
    {
        if(!Gate::allows('isAdmin')){
            abort(404,"Sorry, You can do this actions");
        }
        $data = [
            'user' => User::all(),
        ];
        return view('user.user', $data);
    }

    public function insert()
    {
        if(!Gate::allows('isAdmin')){
            abort(404,"Sorry, You can do this actions");
        }
        return view('user.insert');
    }

    public function postInsertUser(Request $request)
    {
        if(!Gate::allows('isAdmin')){
            abort(404,"Sorry, You can do this actions");
        }
        $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'type' => 'required',
                'status' => 'required',
                'password' => 'required|string|min:8|same:confirm_password',
                'confirm_password' => 'required',
            ], [
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'type.required' => 'User type is required',
                'status.required' => 'Status is required',
                'password.required' => 'Password is required',
                'confirm_password.required' => 'Confirm Password is required',
                'confirm_password.same' => 'Password and Confirm Password must match',
            ]);

        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->type = $request['type'];
        $user->status = $request['status'];
        $user->password = bcrypt($request['password']);

        $user->save();

        Toastr::success('User has been successfully created');
        return redirect()->route('user');
    }
}
