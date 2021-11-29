<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    public function index(Request $request)
    {
        $user_items = DB::select('users * from party');
        $party_items = DB::select('select * from party');
        return view('create', ['user_items' => $user_items], ['party_items' => $party_items]);
    }

    public function create(Request $request){
        $create = new Create();

        $create->image = $request->image;
        $create->movie = $request->movie;
        $create->party = $request->party;
        $create->birth = $request->birth;
        $create->gender = $request->gender;
        $create->career = $request->career;
        $create->introduction = $request->introduction;
        $create->history = $request->history;

        $create->save();
        return redirect('mypage'); //とりあえずトップページに戻る。
    }
}
