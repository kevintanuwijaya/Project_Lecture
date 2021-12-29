<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    public function editProfile(Request $request){

        $validator = $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric'
        ]);

        $response = Http::asForm()->post('https://bilocker.000webhostapp.com/BiLocker/EditUser.php', [
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        $result = htmlentities($response);

        if($result == 'Failed'){
            return back()->withErrors(['errorEdit' => 'Tidak bisa di Edit']);
        }

        return redirect('/edit');
    }

    public function editPassword(Request $request){

        $validator = $request->validate([
            'password' => 'required|min:8',
            'confirmed_password' => 'required|same:password'
        ]);

        $response = Http::asForm()->post('https://bilocker.000webhostapp.com/BiLocker/EditPassword.php', [
            'password' => $request->password,
            'email' => $request->email,
        ]);

        $result = htmlentities($response);

        if($result == 'Failed'){
            return back()->withErrors(['errorEdit' => 'Tidak bisa di Edit']);
        }
        return redirect(url('/edit'));
    }
}
