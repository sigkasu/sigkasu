<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
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

        $rules = [
            'image' => 'required',
            'movie' => 'required',
            'party' => 'required',
            'birth' => 'required',
            'gender' => 'required',
            'career' => 'required',
            'introduction' => 'required',
            'history' => 'required'
        ];
        $messages = [
            'image.required' => '画像を選択して下さい。',
            'movie.required' => '動画を選択して下さい。',
            'party.required' => '政党を選択して下さい。',
            'birth.required' => '生年月日を選択して下さい。',
            'gender.required' => '性別を選択して下さい。',
            'career.required' => '経歴を入力して下さい。',
            'introduction.required' => '自己紹介と公約を入力して下さい。',
            'history.required' => '出馬履歴を入力して下さい。',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('mypage.create')
                ->withErrors($validator)
                ->withInput();
        }else {

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
            session()->flash('flash_message', '作成しました。');
            return redirect()->route('mypage.index');
        }
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
    public function edit(Request $request, $id)
    {
        $auth = Auth::id();
        $users = DB::table('users')->where('users.id', $auth)->get();
        $mypage = Mypage::find($id);

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
        $mypage = Mypage::find($id);
        if($request->image) {
            $mypage->image = $request->image;
            $mypage->save();
        }
        if($request->movie) {
            $mypage->movie = $request->movie;
            $mypage->save();
        }
        $mypage->party = $request->party;
        $mypage->birth = $request->birth;
        $mypage->gender = $request->gender;
        $mypage->career = $request->career;
        $mypage->introduction = $request->introduction;
        $mypage->history = $request->history;
        $mypage->save();

        session()->flash('flash_message', '編集しました。');
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
