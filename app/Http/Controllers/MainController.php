<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    /**
     * show home page
     */
    public function homePage(){
        
        $user = null;
        
        if(Cookie::get('remember') || Session::get('remember')){

            $response = null;

            if(Cookie::get('remember')){
                $response = Http::asForm()->post('https://bilocker.000webhostapp.com/BiLocker/GetUser.php', [
                    'email' => Cookie::get('remember'),
                ]);
            }else{
                $response = Http::asForm()->post('https://bilocker.000webhostapp.com/BiLocker/GetUser.php', [
                    'email' => Session::get('remember'),
                ]); 
            }

            // dd(json_decode($response));

            $result = json_decode($response);

            $user = new User();
            $user->name = $result->UserName;
            $user->email = $result->UserEmail;
            $user->password = $result->UserPassword;
            $user->balance = $result->UserBalance;
        }

        return view('layouts.home',['user' => $user]);

    }

    /**
     * show login page
     */
    public function loginPage(){

        if(Cookie::get('remember') || Session::get('remember')){
            return back();
        }

        return view('login');
    }

    /**
     * show register page
     */
    public function registerPage(){

        if(Cookie::get('remember') || Session::get('remember')){
            return back();
        }

        return view('register');
    }

    

}
