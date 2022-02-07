@extends('layouts.homelayouts')
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ画面</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
@include('layouts.header')
@section('contents')

    @if(session('flash_message'))
        <div class="flash-message1">
            {{ session('flash_message') }}
        </div>
    @endif

    <div class="sub-header1">
        <ul>
            <li class="sub-header-item"><a href="{{ route('mypage.show', $mypage->id) }}">候補者ページ</a></li>
            <li class="sub-header-item"><a href="{{ route('tweets.show', $mypage->user_id) }}">つぶやき</a></li>
            <li class="sub-header-item"><a href="{{ route('questions.index', $mypage->user_id) }}">質問一覧</a></li>
            <li class="sub-header-item"><a href="{{ route('questions.create', $mypage->user_id) }}">質問を送る</li></a>
        </ul>
    </div>
    
    <div class="support-title2">
        <h2>質問を送る</h2>
    </div>

    <form action="{{ route('questions.store', $mypage->user_id) }}" method='post'>
        <table class="reset_support-table "border="1">
            @csrf
            <tr>
                <th>質問内容</th>
                <td>
                    <textarea class="inquiry" type="text" name="question" size="400" placeholder="内容を400字以内で入力してください。">{{ old('question') }}</textarea>
                        @if ($errors->has('question'))
                            <div class="support-feedback2">{{$errors->first('question')}}</div>
                        @endif
                </td>
            </tr>
        </table>
        <div class="button-placement">
            <button class ="inside-button"  type="submit" onclick='return confirm("この内容で送信しますか？");'>送信</button>
        </div>
    </form>
    @endsection
</body>