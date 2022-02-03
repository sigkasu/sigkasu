<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Question;
use App\Models\Tweet;
use Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $id = Auth::id();
        $mypage = DB::table('mypages')->where('mypages.user_id', $user_id)->first();
        $answered_questions = Question::orderBy('updated_at', 'desc')->where('user_id', $user_id)->where('answer', '!=', null)->get();
        $unanswered_questions = Question::orderBy('id', 'desc')->where('user_id', $user_id)->where('answer', null)->get();

        return view('questions.index')->with(['mypage' => $mypage, 'answered_questions' => $answered_questions, 'unanswered_questions' => $unanswered_questions, 'id' => $id, 'user_id' => $user_id]);     
    }

    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {
        $mypage = DB::table('mypages')->where('mypages.user_id', $user_id)->first();
        return view('questions.create')->with(['mypage' => $mypage, 'user_id' => $user_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $user_id)
    {
        $mypage = DB::table('mypages')->where('mypages.user_id', $user_id)->first();

        $rules = [
            'question' => 'required'
        ];
        $messages = [
            'question.required' => '質問を入力して下さい。',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return view('questions.create')
                ->with(['mypage' => $mypage])
                ->withErrors($validator);
        }

        if(isset($request->question)) {
            $question = new Question;
            $question->user_id = $user_id;
            $question->question = $request->question;
            $question->save();
        }

        session()->flash('flash_message', '送信しました。');
        return view('questions.create')->with(['mypage' => $mypage]);
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
        $questions = Question::orderBy('id', 'desc')->where('user_id', $user_id)->get();

        return view('questions.index')->with(['mypage' => $mypage, 'questions' => $questions, 'id' => $id, 'user_id' => $user_id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        $id = Auth::id();
        $mypage = DB::table('mypages')->where('mypages.user_id', $user_id)->first();
        $unanswered_questions = Question::orderBy('id', 'desc')->where('user_id', $user_id)->where('answer', null)->get();

        return view('questions.answer')->with(['mypage' => $mypage, 'unanswered_questions' => $unanswered_questions, 'id' => $id, 'user_id' => $user_id]);    
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
        $question = Question::find($id);

        $question->answer = $request->answer;
        $question->save();

        $user_id = Auth::id();
        $id = Auth::id();
        $mypage = DB::table('mypages')->where('mypages.user_id', $user_id)->first();
        $answered_questions = Question::orderBy('id', 'desc')->where('user_id', $user_id)->where('answer', '!=', null)->get();
        $unanswered_questions = Question::orderBy('id', 'desc')->where('user_id', $user_id)->where('answer', null)->get();
        
        return view('questions.index')->with(['mypage' => $mypage, 'answered_questions' => $answered_questions, 'unanswered_questions' => $unanswered_questions, 'id' => $id, 'user_id' => $user_id]); 
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

    public function answer(Request $request, $id)
    {
        $question = Question::find($id);

        $question->answer = $request->answer;
        $question->save();

        $user_id = Auth::id();
        $mypage = DB::table('mypages')->where('mypages.user_id', $user_id)->first();
        $unanswered_questions = Question::orderBy('id', 'desc')->where('user_id', $user_id)->where('answer', null)->get();

        session()->flash('flash_message', '返答しました。');
        
        return view('questions.answer')->with(['mypage' => $mypage, 'unanswered_questions' => $unanswered_questions, 'id' => $id, 'user_id' => $user_id]);
    }
}