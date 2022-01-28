<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tweet;
use App\Models\Question;
use Auth;

class TweetController extends Controller
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
        $mypage = DB::table('mypages')->where('mypages.user_id', $id)->first();
        $tweets = Tweet::orderBy('id', 'desc')->limit(100)->where('user_id', $user_id)->get();

        return view('tweets')->with(['tweets' => $tweets, 'mypage' => $mypage,'id' => $id, 'user_id' => $user_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        $user_id = Auth::id();
        $tweet = new Tweet;
        $tweet->user_id = $user_id;
        $tweet->tweet = $request->tweet;
        $tweet->save();

        return redirect()->route('tweets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $id = Auth::id();
        $mypage = DB::table('mypages')->where('mypages.user_id', $user_id)->first();
        $tweets = Tweet::orderBy('id', 'desc')->limit(100)->where('user_id', $user_id)->get();
        $questions = Question::orderBy('id', 'desc')->where('user_id', $user_id)->get();

        return view('tweets')->with(['tweets' => $tweets, 'mypage' => $mypage, 'questions' => $questions, 'id' => $id, 'user_id' => $user_id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tweet = Tweet::find($id);
        $tweet->delete();

        return redirect()->route('tweets.index');
    }
}
