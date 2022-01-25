<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\SupportSendmail;
use Mail;

class Support1Controller extends Controller
{
    public function index()
    {
        return view('support1');
    }
 
    public function send(Request $request)
    {
        $rules = [
            'name' => 'required|max:10',
            'email' => 'required|email',
            'message' => 'required|max:400',
        ];

        $messages = [
            'name.required' => '名前を入力して下さい。',
            'name.max' => '名前は10文字以下で入力して下さい。',
            'email.required' => 'メールアドレスを入力して下さい。',
            'email.email' => '正しいメールアドレスを入力して下さい。',
            'message.required' => 'メッセージを入力して下さい。',
            'message.max' => 'メッセージは400文字以下で入力して下さい。',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('support1')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $validator->validate();

        Mail::to('natu.fairytail@gmail.com')->send(new SupportSendmail($data));

        session()->flash('flash_message', '送信いたしました！');
        return redirect('support1');
    }
}