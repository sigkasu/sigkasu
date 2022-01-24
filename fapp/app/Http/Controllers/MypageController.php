<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mypage;
use Auth;

class MypageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $user_id = Auth::id();
        $users = DB::table('users')->where('users.id', $id)->first();
        $mypage = DB::table('mypages')->where('mypages.user_id', $id)->first();
        return view('mypage', ['mypage' => $mypage, 'users' => $users, 'id' => $id, 'user_id' => $user_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        $users = DB::table('users')->where('users.id', $id)->get();
        return view('create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auth = Auth::id();

        $mypage = new Mypage;
        $mypage->user_id = auth()->id();
        $mypage->image = $request->image;
        $mypage->movie = $request->movie;
        $mypage->party = $request->party;
        $mypage->birth = $request->birth;
        $mypage->gender = $request->gender;
        $mypage->career = $request->career;
        $mypage->introduction = $request->introduction;
        $mypage->history = $request->history;
        $mypage->save();
        
        $param = [
            'image' => $request->image,
        ];
        DB::table('users')->where('id', $auth)->update($param);

        return redirect()->route('mypage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $users = DB::table('users')->where('users.id', $id)->first();
        $mypage = DB::table('mypages')->where('mypages.user_id', $id)->first();
        $user_id = Auth::id();
        // 記事詳細画面を表示
        // print_r($id);
        // print_r("ssss");
        // print_r($user_id);
        return view('mypage')->with(['users' => $users, 'mypage' => $mypage, 'id' => $id, 'user_id' => $user_id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Int $id)
    {
        $auth = Auth::id();
        $users = DB::table('users')->where('users.id', $auth)->get();
        $mypage = DB::table('mypages')->where('mypages.id', $id)->get();
        // print_r($id);
        // print_r($mypage);
        return view('edit', [
            'users' => $users,
            'mypage' => $mypage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $auth = Auth::id();
        $param = [
            'image' => $request->image,
            'movie' => $request->movie,
            'party' => $request->party,
            'birth' => $request->birth,
            'gender' => $request->gender,
            'career' => $request->career,
            'introduction' => $request->introduction,
            'history' => $request->history,
        ];
        $param2 = [
            'image' => $request->image,
        ];
        DB::table('mypages')->where('id', $id)->update($param);
        DB::table('users')->where('id', $auth)->update($param2);

        return redirect()->route('mypage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
