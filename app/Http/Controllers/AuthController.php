<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * login existing user
     */
    public function login(Request $request){

        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $response = Http::asForm()->post('https://bilocker.000webhostapp.com/BiLocker/Login.php', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $result = json_decode($response);

        if($result == null){
            return back()->withErrors(['errorLogin' => 'Email or Password invalid']);
        }

        Cookie::queue('remember',$result->UserEmail,300);
        Session::put('remember',$result->UserEmail);
        
        return redirect('/home');
    }

    /**
     * register new user
     */
    public function register(Request $request){

        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'confirmed_email' => 'required|same:email',
            'password' => 'required',
            'confirmed_password' => 'required|same:password',
        ]);

        $response = Http::asForm()->post('https://bilocker.000webhostapp.com/BiLocker/Register.php', [
            'email' => $request->email,
            'name' => $request->name,
            'password' => $request->password,
        ]);

        $result = htmlentities($response);

        if($result == 'Failed'){
            return back()->withErrors(['errorRegister' => 'Email already taken']);
        }
        return redirect('/login');
    }

    /**
     * logout the current user
     */
    public function logout()
    {
        Cookie::queue(Cookie::forget('remember'));
        Session::forget('remember');

        return redirect('/home');
    }
}
