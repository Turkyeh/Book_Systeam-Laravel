<?php

namespace App\Http\Controllers;
use App\Models\User;
// remamper use

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
    //
    /**
     * Display register page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     *
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

// dd($request->all());
$validate=$request->validate(
        [
            'name'=>'required',
            'email' => 'required|unique:users',
            'password'=>'required',

        ]

    );

    $validate["password"] = Hash::make($request->password);
    $newUser = User::create($validate);
 auth()->login($newUser);
    return redirect('/');
    }



        // return redirect('/')->with('success', "Account successfully registered.");
    }

