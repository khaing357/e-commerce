<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    public function register()
    {
        return view("register");
    }

    public function postRegister(Request $request)
    {
        $formData=request()->validate([
            'name'=>['required','max:255','min:3'],
            'username'=>['required','max:255','min:3'],
            'email'=>['required','max:255',Rule::unique('users','email')],
            'password'=>['required','min:8']
        ]);
        $user=User::create($formData);
        auth()->login($user);
        return redirect('/');
        
    }

    public function login()
    {
        return view("login");
    }

    public function postLogin(Request $request)
    {
        $formData=request()->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        if(auth()->attempt($formData))
        {
            return redirect('/');
        }
        else{
            return redirect()->back()->withErrors([
                'email'=>'User Credentials wrong']);
            }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
