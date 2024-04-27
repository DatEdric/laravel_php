<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('client.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        return view('client.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function postRegister(Request $request)
    {

        $request->merge(['password'=>Hash::make($request->password)]);
        User::create($request->all());
         return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function postLogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('index');
        }
        else {
            return redirect()->back()->with('error','đăng nhập không thành công');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
