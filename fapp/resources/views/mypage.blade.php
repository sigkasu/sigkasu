@extends('layouts.homelayouts')

@section('title', 'マイページ')
@include('layouts.header')

@section('contents')
<head>
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
</head>

<body>
@if(session('flash_message'))
    <div class="flash-message1">
        {{ session('flash_message') }}
    </div>
@endif
@if(empty($mypage))
    @if($id == $user_id)
        <div class="new1">あなたはまだマイページを作成していません。<br>下記のボタンから入力してください。</div>
        <button type="button" class="btn btn-new1 mb-3 d-block w-100" onclick="location.href='{{ route('mypage.create') }}'">
            新規作成
        </button>
        <footer class="footer1">
            © 2022 E-pick
        </footer> 
    @else
        <div class="new2">マイページが作成されていません。</div>
        <footer class="footer2">
            © 2022 E-pick
        </footer> 
    @endif

@else
{{-- elseだよ --}}
    @if($id == $user_id)
    <div class="sub-header1">
        <ul>
            <li class="sub-header-item"><a href="{{ route('mypage.index') }}">マイページ</a></li>
            <li class="sub-header-item"><a href="{{ route('tweets.show', $mypage->user_id) }}">つぶやき</a></li>
            <li class="sub-header-item"><a href="{{ route('questions.index', $mypage->user_id) }}">質問一覧</a></li>
            <li class="sub-header-item"><a href="{{ route('questions.edit', $mypage->user_id) }}">質問返答</a></li>
        </ul>
    </div>

        @if(session('flash_message'))
            <button type="button" class="btn btn-editing1-1 ml-3" onclick="location.href='{{ route('mypage.edit', $mypage->id) }}'">
            編集
            </button>
        @else
            <button type="button" class="btn btn-editing1-2 ml-3" onclick="location.href='{{ route('mypage.edit', $mypage->id) }}'">
            編集
            </button>
        @endif
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
    <footer class="footer3">
        © 2022 E-pick
    </footer> 
@endif
</body>
@endsection