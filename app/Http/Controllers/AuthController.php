<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

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
            return back()->with('loginError','Email or Password does not match');
        }
        $cookie = Cookie::queue('remember',$result->UserEmail,300);
        
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
            return back()->with('erorrRegister','Email Invalid');
        }
        return redirect('/login');
    }
}
