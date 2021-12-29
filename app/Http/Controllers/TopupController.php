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

        if($result == 'Voucher Code Invalid'){
           
            // echo "<script type='text/javascript'>alert('Voucher Code Have Been Used Before');  location.reload();</script>";
            echo "<script language='javascript'>";
        echo 'alert("Voucher Code Have Already Been Used");';
        echo 'window.location.replace("home");';
        echo "</script>";
        }
        // echo "<script type='text/javascript'>alert('Redeem Success');  location.reload(); </script>";
        echo "<script language='javascript'>";
        echo 'alert("Redeem Success");';
        echo 'window.location.replace("home");';
        echo "</script>";
        
    }

    
}
