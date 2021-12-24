<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * show login page
     */
    public function loginPage(){
        return view('login');
    }

    /**
     * show register page
     */
    public function registerPage(){
        return view('register');
    }

}
