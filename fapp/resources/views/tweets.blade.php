@extends('layouts.homelayouts')

@section('title', 'つぶやき')
@include('layouts.header')
@include('layouts.footer')

@section('contents')
<head>
    <link rel="stylesheet" href="{{ asset('css/tweets.css') }}">
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
            <li class="sub-header-item"><a href="{{ route('questions.index', $mypage->user_id) }}">質問一覧</a></li>
            <li class="sub-header-item"><a href="{{ route('questions.edit', $mypage->user_id) }}">質問返答</a></li>
      
        </ul>
        </div>
        <div class="tweet">
            <div class="title">つぶやく</div>
            <form action="{{ route('tweets.store') }}" method="POST">
                @csrf
                <div class="Tweetarea">
                <div class="FlexTextarea__dummy" aria-hidden="true"></div>
                    <textarea class="Tweet-sentence" name="tweet" id="tweet">{{ old('tweet') }}</textarea>
                </div>
                <button type="submit" class="btn-primary" name='action' onclick='return confirm("この内容でつぶやきますか？");' value='add'>
                つぶやく
                </button>
            </form>
        </div>

        <script src="{{ asset('js/tweets.js') }}"></script>
        @else
        <div class="sub-header1">
        <ul>
            <li class="sub-header-item"><a href="{{ route('mypage.show', $mypage->id) }}">候補者ページ</a></li>
            <li class="sub-header-item"><a href="{{ route('tweets.show', $mypage->user_id) }}">つぶやき</a></li>
            <li class="sub-header-item"><a href="{{ route('questions.index', $mypage->user_id) }}">質問一覧</a></li>
            <li class="sub-header-item"><a href="{{ route('questions.create', $mypage->user_id) }}">質問を送る</li></a>
        </ul>
        </div>
        @endif
        <div class="mutter">
            <div class="title">つぶやき一覧</div>
            <div class="Mutterarea">
                @if(count($tweets) != 0)
                    @foreach($tweets as $tweet)
                        <div class="mutter-output">
                            <div class="mutter-contents">{{ $tweet->tweet }}</div>
                            <div class="Date-and-Time">
                                    <div class="date">{{ $tweet->created_at->format('Y/m/d') }}</div>
                                    <div class="time">{{ $tweet->created_at->format('H:i') }}</div>
                            </div>
                            @if($id == $user_id)
                                <form style="display:inline" action="{{ route('tweets.destroy', $tweet->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger ml-3" onclick='return confirm("削除します。よろしいですか？");'>
                                    <img src="{{ asset('trash-close.png') }}" alt="">
                                    <img src="{{ asset('trash-open.png') }}" alt="" class="active">
                                    </button>
                                </form>
                            @endif
                        </div>
                    @endforeach
                @else
                    <div class="mutter-output">
                        <div class="mutter-contents">つぶやきはありません。</div>
                    </div>
                @endif
            </div>
        </div>

        <div class="question">
            <div class="title">質問・返答閲覧画面(仮)</div>
            <div class="watch"><a href="{{ route('questions.index', $mypage->user_id) }}">過去の質問を見る</a></div>
            <div class="big">
                <div class="midium-question">            
                    <div class="sub-title">質問</div>
                    @if($question)
                        <div class="question-contents">{{ $question->question }}</div>
                    @endif
                </div>
                <div class="midium-answer">
                    <div class="sub-title">回答</div>
                    @if($question)
                        <div class="answer-contents">{{ $question->answer }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
@endsection