<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TopupController extends Controller
{
    //


    function insertVoucher(Request $request){


        $response = Http::asForm()->post('https://bilocker.000webhostapp.com/BiLocker/RedeemVoucher.php', [
            'voucherID' => $request->voucherID,
            'email' => $request->email
        ]);

        $result = htmlentities($response);

        // if($result == 'Voucher Code'){
        //     return back()->withErrors(['errorVoucher' => 'Tidak bisa di Redeem']);
        // }
    
        return redirect('/home');
    }

    
}
