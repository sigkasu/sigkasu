<?php

namespace App\Http\Controllers;

use Auth;
class MypageController extends Controller
{
    public function mypage()
    {
        $auths = Auth::user();
        return view('mypage', [ 'auths' => $auths ]);
    }
}
