<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        
          # Validate Request
        $request->validate([
            'email'=>'email',
            'password'=>'required|min:7|max:12',
        ]);

        # Gets user input
        $email = $request->input('email');
        $password = $request->input('password');
        
       # If user exists
        if (Auth::attempt(['email'=>$email,'password'=>$password])) {
            $user = User::where('email',$email)->first();
             # If user's credentials is validated
            Auth::login($user);
            # Redirect homepage
            return redirect('/home');
        }else{
            # Error message if the user does not exist.
            return back()->with('fail', 'Invalid Email & Password, try again!');
        }
    }


    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function authenticated()
    {
        if(Auth::user()->role_as == '1') // 1=Admin
        {
            return redirect('admin/dashboard')->with('message', 'Welcome to Admin Dashboard');
        }
        else if(Auth::user()->role_as == '0') // 0=User
        {
            return redirect('/home')->with('message', 'Logged In Successful');
        }
    }
}



