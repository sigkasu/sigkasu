@extends('layouts.homelayouts')

@section('title', '質問一覧')
@include('layouts.header')
@section('contents')
<head>
    <link rel="stylesheet" href="{{ asset('css/question_index.css') }}">
</head>

<body>

    @if(session('flash_message'))
        <div class="flash-message1">
            {{ session('flash_message') }}
        </div>
    @endif

    <div class="contents">
        <div class="sub-header1">
            <ul>
                <li class="sub-header-item"><a href="{{ route('mypage.index') }}">マイページ</a></li>
                <li class="sub-header-item"><a href="{{ route('tweets.show', $mypage->user_id) }}">つぶやき</a></li>
                <li class="sub-header-item"><a href="{{ route('questions.index', $mypage->user_id) }}">質問一覧</a></li>
                <li class="sub-header-item"><a href="{{ route('questions.edit', $mypage->user_id) }}">質問返答</a></li>
        
            </ul>
        </div>
    
        <div class="mutter">
            @if(count($unanswered_questions) != 0)
                <div class="Unanswered-questions">
                    <div class="title">未返答の質問</div>
                    <div class="big">
                        @foreach($unanswered_questions as $question)
                            <div class="unansweredquestions-content">
                                <div class="midium-question">
                                    <div class="sub-title">質問</div>
                                    <div class="question-contents">{{ $question->question }}</div>
                                </div>
                                <div class="midium-answer">
                                    <form style="display:inline" action="{{ route('questions.answer', $question->id) }}" method="post">
                                    @csrf
                                        <div class="sub-title">返答内容</div>
                                        <div class="Unanswered_questionarea">
                                            <div class="Unanswered_question-Textarea__dummy" aria-hidden="true"></div>
                                            <textarea class="Unanswered_question-sentence" type="text" name="answer" size="400" placeholder="内容を400字以内で入力してください。" >{{ old('answer') }}</textarea>
                                            <button type="submit" class="btn btn-send ml-3" onclick='return confirm("この内容で返答しますか？");'>返答する</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="post-image3">
                    <img src="{{ asset('post-open.png') }}" alt="" class="active3">
                        <div class="message3 tv">
                            <div class="unanswered-message">
                            未返答の質問はありません
                            </div>
                        </div>
                    </div>
            @endif
        </div>
        <script src="{{ asset('tweets.js') }}"></script>
    </div>

    <footer class="answer-footer">
        © 2022 E-pick
    </footer>
</body>
@endsection