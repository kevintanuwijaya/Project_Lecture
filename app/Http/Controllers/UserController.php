<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    public function edit(Request $request){
        $validator = $request->validate([
            'name' => 'required',
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_new_passowrd' => 'required|same:new_password',
            'phone' => 'required|numeric'
        ]);

        $response = Http::asForm()->post('https://bilocker.000webhostapp.com/Bilocker/EditUser.php', [
            'name' => $request->name,
            'new_password' => $request->password,
            'phone' => $request->phone
        ]);

        // $result = htmlentities($response);

        return redirect('/home');
    }
}
