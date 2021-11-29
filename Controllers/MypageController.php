<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function index(Request $request)
    {
        $user_items = DB::select('select * from users');
        return view('mypage', ['user_items' => $user_items]);
    }
}
