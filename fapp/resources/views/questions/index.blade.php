@extends('layouts.homelayouts')

@section('title', '質問一覧')
@include('layouts.header')
@section('contents')
<head>
    <link rel="stylesheet" href="">
</head>

<body>
    <div class="contents">
        @if($id == $user_id)
        <div class="sub-header1">
            <ul>
                <li class="sub-header-item"><a href="{{ route('mypage.index') }}">マイページ</a></li>

                <li class="sub-header-item"><a href="{{ route('tweets.show', $mypage->user_id) }}">つぶやき</a></li>

                <li class="sub-header-item"><a href="answer">質問返答</a></li>

                <li class="sub-header-item"><a href="questionnaire">候補者アンケート</a></li>
            </ul>
        </div>
        @else
        <div class="sub-header1">
            <ul>
                <li class="sub-header-item"><a href="{{ route('mypage.show', $mypage->id) }}">候補者ページ</a></li>
                <li class="sub-header-item"><a href="{{ route('tweets.show', $mypage->user_id) }}">つぶやき</a></li>
                <li class="sub-header-item"><a href="#">質問を送る</a></li>
            </ul>
        </div>
        @endif
        <div class="mutter">
            <div class="title">過去の質問一覧</div>
            <div class="mutter-area">
                @foreach($questions as $question)
                    <div class="mutter-output">
                        <div class="mutter-contents">質問
                            {{ $question->question }}
                            @if($question->tweet_id)
                                <div class="aaa">回答
                                    {{ $question->answer }}</div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
@endsection