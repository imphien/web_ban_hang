<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ],$request->input('remember')))
        {
            $user = User::where('email',$request->input('email'))->first();
            Auth::login($user);
            return redirect('/admin');
        }

        Session::flash('error','Mật khẩu hoặc email không chính xác');
        return Redirect()->route('login');
    }
    
    public function postLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
