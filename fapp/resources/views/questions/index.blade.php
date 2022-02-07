@extends('layouts.homelayouts')

@section('title', '質問一覧')
@include('layouts.header')

@section('contents')
<head>
    <link rel="stylesheet" href="{{ asset('css/question_index.css') }}">
</head>

<body>
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
            
            <div class="mutter">
                @if(count($answered_questions) == 0 && count($unanswered_questions) == 0)
                    <div class="post-image1">
                        <img src="{{ asset('post-open.png') }}" alt="" class="active1">
                        <div class="message1 tv">
                            <div class="unanswered-message">
                                返答済の質問はありません。
                                未返答の質問はありません。
                            </div>
                        </div>
                    </div>
                        <footer class="index-footer1">
                            © 2022 E-pick
                        </footer>
                @else
                    <div class="post-messages">
                        <div class="post-image2">
                            <img src="{{ asset('post-close.png') }}" alt="" class="stop">
                            <img src="{{ asset('post-open.png') }}" alt="" class="active2">

                            <div class="message2 tv">
                                @if(count($answered_questions) == 0)
                                    <div class="unanswered-message">
                                        返答済の質問はありません。
                                    </div>
                                @endif
                                @if(count($unanswered_questions) == 0)
                                    <div class="unanswered-message">
                                        未返答の質問はありません。
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if(count($answered_questions) != 0)
                        <div class="answered">
                            <div class="title">返答済の質問</div>
                            <div class="big">
                                @foreach($answered_questions as $question)
                                    <div class="answered-content">
                                        <div class="midium-question">
                                            <div class="sub-title">質問</div>
                                                <div class="question-contents">{{ $question->question }}</div>
                                        </div>

                                        <div class="midium-answer">
                                            <div class="sub-title">返答</div>
                                                <div class="answer-contents">{{ $question->answer }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="unanswered">
                            <div class="title">未返答の質問</div>
                            <div class="big">
                                @foreach($unanswered_questions as $question)
                                    <div class="unanswered-content">
                                        <div class="midium-question">
                                            <div class="sub-title">質問</div>
                                            <div class="question-contents2">{{ $question->question }}</div>
                                        </div>

                                        <div class="midium-answer">
                                            <form style="display:inline" action="{{ route('questions.update', $question->id) }}" method="post">
                                            @csrf
                                                <div class="sub-title">返答内容</div>
                                                <div class="Unansweredarea">
                                                    <div class="UnansweredTextarea__dummy" aria-hidden="true"></div>
                                                    <textarea class="Unanswered-sentence" type="text" name="answer" size="400" placeholder="内容を400字以内で入力してください。" >{{ old('answer') }}</textarea>
                                                    <button type="submit" class="btn-send" onclick='return confirm("この内容で返答しますか？");'>返答する</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <footer class="index-footer2">
                        © 2022 E-pick
                    </footer>    
                @endif
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

            @if(count($answered_questions) != 0)
                <div class="past-questions">
                    <div class="title">過去の質問一覧</div>
                    <div class="big">
                        @foreach($answered_questions as $question)
                            <div class="pastquestion-content">
                                <div class="midium-question">
                                    <div class="sub-title">質問</div>
                                    <div class="question-contents">{{ $question->question }}</div>
                                </div>
                                
                                <div class="midium-answer">
                                    <div class="sub-title">回答</div>
                                    <div class="answer-contents">{{ $question->answer }}</div>
                                </div> 
                            </div>      
                        @endforeach
                    </div>
                </div>
                <footer class="index-footer2">
                    © 2022 E-pick
                </footer>
            @else
                <div class="post-messages">
                    <div class="post-image1">
                        @if(count($answered_questions))
                        @else
                            <img src="{{ asset('post-open.png') }}" alt="" class="active1">
                            <div class="message1 tv">
                                <div class="unanswered-message">
                                    返答済の質問はありません。
                                </div>

                            </div> 
                        @endif   
                    </div>
                </div>
                <footer class="index-footer3">
                    © 2022 E-pick
                </footer>
            @endif
        @endif
    </div>
</body>
@endsection