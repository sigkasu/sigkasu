@extends('layouts.homelayouts')

@section('title', 'つぶやき')
@include('layouts.header')

@section('contents')
<head>
    <link rel="stylesheet" href="">
</head>
<body>
    <script>
        function confirmFunction1() {
            ret=confirm("この内容でつぶやきますか？");
        }
        function confirmFunction2() {
            ret=confirm("削除します。よろしいですか？");
        }
    </script>

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
        <div class="tweet">
            <div class="title">つぶやく画面</div>
            <form action="{{ route('tweets.store') }}" method="POST">
                @csrf
                <textarea name="tweet" id="tweet">{{ old('tweet') }}</textarea>
                <button type="submit" class="btn btn-primary mb-3 d-block w-100" name='action' onclick="confirmFunction1()" value='add'>
                つぶやく
                </button>
            </form>
        </div>

        <script src="{{ asset('tweets.js') }}"></script>
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
            <div class="title">つぶやき画面</div>
            <div class="mutter-area">
                @foreach($tweets as $tweet)
                    <div class="mutter-output">
                        <div class="mutter-contents">{{ $tweet->tweet }}</div>

                            <div class="Date-and-Time">
                                    <div class="date">{{ $tweet->created_at->format('Y/m/d') }}</div>
                                    <div class="time">{{ $tweet->created_at->format('H:i') }}</div>
                            @if($id == $user_id)
                                <form style="display:inline" action="{{ route('tweets.destroy', $tweet->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger ml-3" onclick="confirmFunction2()">
                                    <img src="trash.jpg" onmouseover="this.src='trash-open.jpg'" onmouseout="this.src='trash.jpg'" />
                                    </button>
                                </form>
                                @endif
                        </div>
                @endforeach
            </div>
        </div>

        <div class="question">
            質問・返答を閲覧する画面(仮)
            <a href="{{ route('questions.show', $mypage->user_id) }}">過去の質問を見る</a>
            @if($questions)
                @foreach($questions as $question)
                    質問{{ $question->question }}
                    @if($question->tweet_id)
                        <div class="aaa">回答
                            {{ $question->answer }}</div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</body>
@endsection