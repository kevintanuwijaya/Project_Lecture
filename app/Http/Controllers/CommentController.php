<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CommentController extends Controller
{
    //
    public function insertComment(Request $request){

        $response = Http::asForm()->post('https://bilocker.000webhostapp.com/BiLocker/InsertNewComment.php', [
            'email' => $request->email,
            'content' => $request->body,
            'rating' => $request->rating,
        ]);

        $result = htmlentities($response);

        if($result == 'Failed'){
            return back();
        }else{
            return redirect(url('/comment'));
        }
    }
}