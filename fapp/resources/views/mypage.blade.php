@extends('layouts.homelayouts')

@section('title', 'マイページ')
@include('layouts.header')
@section('contents')
<head>
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
</head>

<body>

@if(empty($mypage))
    @if($id == $user_id)
        <div class="new">あなたはまだマイページを作成していません。<br>下記のボタンから入力してください。</div>
        <button type="button" class="btn btn-new1 mb-3 d-block w-100" onclick="location.href='{{ route('mypage.create') }}'">
            新規作成
        </button>
    @else
        <div class="new">マイページが作成されていません</div>
    @endif

@else
{{-- elseだよ --}}
    @if($id == $user_id)
    <div class="sub-header1">
        <ul>
            <li class="sub-header-item"><a href="mypage">マイページ</a></li>

            <li class="sub-header-item"><a href="{{ route('tweets.show', $mypage->user_id) }}">つぶやき</a></li>

            <li class="sub-header-item"><a href="answer">質問返答</a></li>

            <li class="sub-header-item"><a href="questionnaire">候補者アンケート</a></li>
        </ul>
    </div>

        <button type="button" class="btn btn-editing1 ml-3" onclick="location.href='{{ route('mypage.edit', $mypage->id) }}'">
        編集
        </button>
    @else
    <div class="sub-header1">
        <ul>
            <li class="sub-header-item"><a href="#">候補者ページ</a></li>
            <li class="sub-header-item"><a href="{{ route('tweets.show', $mypage->user_id) }}">つぶやき</a></li>
            <li class="sub-header-item"><a href="{{ route('questions.create', $mypage->user_id) }}">質問を送る</li>
        </ul>
    </div>
    @endif

    <button type="button" onclick="location.href='{{ route('tweets.show', $mypage->user_id) }}'">
        つぶやき
    </button>
    <div class="overall">
        <H1>{{ $users->name }}</H1>
        <div class="images">
            <img src="{{ url($mypage->image) }}"></img>
            
            <video src="{{ url($mypage->movie) }}" controls></video>
        </div>

        <table>
            <tr>
                <td>政党名</td>
                <td>{{$mypage->party}}</td>
            </tr>
            <tr>
                <td>生年月日</td>
                <td>{{$mypage->birth}}</td>
            </tr>
            <tr>
                <td>性別</td>
                <td>{{$mypage->gender}}</td>
            </tr>
            <tr>
                <td>経歴</td>
                <td><div class="mypage-career">{!! nl2br(e($mypage->career)) !!}</div></td>
            </tr>
        </table>

        <div class="sentence">
            <div class="introduction">
                <div class="title1">自己紹介&公約<br></div>
                <div class="mypage-introductions">{!! nl2br(e($mypage->introduction)) !!}</div>
            </div>

            <div class="histories">
                <div class="title2">出馬履歴<br></div>
                <div class="mypage-histories">{!! nl2br(e($mypage->history)) !!}</div>
            </div>
        </div>

        @if($id == $user_id)
            <button type="button" class="btn btn-editing2 ml-3" onclick="location.href='{{ route('mypage.edit', $mypage->id) }}'">
            編集
            </button>
        @endif
    </div>
@endif
</body>
@endsection