<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Start a view_(register)
    public function view_register()
    {
        $genders = Gender::all();
        return view('Auth.register', compact('genders'));
    }

    public function do_register(Request $request)
    {
        $rules = [
            'username' => 'required|max:125|min:5|unique:users,username',
            'email' => 'required|email|max:125|min:5|unique:users,email',
            'password' => 'required|max:125|min:5',
            'gender' => '',
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect('/register')->withInput($data)->withErrors($validator->errors());
        }

        $newUser = new User();
        // dd($newUser);
        $newUser->username = $data["username"];
        $newUser->email = $data["email"];
        $newUser->password = bcrypt($data["password"]);
        $newUser->gender_id = $data["gender"];
        $newUser->save();

        return redirect('/login')->with(["success" => "Registered Success"]);
    }
    // END a view_(register)

    // Start a view_(login)
    public function view_login()
    {
        return view('Auth.login');
    }

    public function do_login(Request $request)
    {
        $rules = [
            'username' => 'required|max:100|min:5',
            'password' => 'required|max:125|min:5'
        ];
        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect('login')->withInput($request->all())
                ->withErrors($validator->errors());
        }

        if (Auth::attempt([
            'username' => $data['username'],
            'password' => $data['password']
        ])) {
            return redirect('home');
        } else {
            return redirect('/login')
                ->withErrors(['login' => 'username and / or password is /are wrong']);
        }
    }
    // END LOGIN


    // Start (logout)
    public function storelogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
