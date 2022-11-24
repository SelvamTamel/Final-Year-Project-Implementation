<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function save(Request $request){

        # Validate Request
        $request->validate(
            [
                'name'=>'required',
                'email'=>'email|unique:users,email',
                'password'=>'required|min:7|max:12',
                'confirm_password'=>'min:7|max:12|same:password'
            ]
            );

       # Gets user input  
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make( $request->input('password'));
        # Store user info into mysql database
        $user->save();


         # Check if the user register is successful
        if($user){
            return redirect('/login')->with('success', 'New User has been successfuly added to database');
        # Check if the user register is unsuccessful
        }else{
            return back()->with('fail', 'Something went wrong, try again');
        }
        

    }
}