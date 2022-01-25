<!-- H1とかH2は適当なので変えちゃって大丈夫です -->
@extends('layouts.homelayouts')

@section('title', 'ホーム画面')

@include('layouts.header')
<head>
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

@section('contents')
<div class="candidates">
        <h1>候補者一覧</h1>

    <div class="candidate_box">
        @foreach($people_items as $item)
            <div class="candidate">
                <tr>
                    <a href="{{ route('mypage.show', $item->id) }}">
                        <td><img src="{{ url($item->image) }}"></td><br>
                        <div class="aaa"><td>{{$item->name}}</td></div>
                    </a>
                </tr>
            </div>
        @endforeach
    </div>
</div>

<div class="politicals">
    <h1>政党一覧</h1>

    <div class="political_box">
        @foreach($party_items as $item)
            <div class="political">
                <tr>
                    <td><a href="{{ url($item->url) }}"><img src="{{ url($item->image) }}"></a></td><br>
                    <div class="political_name"><td><a href="{{ url($item->url) }}">{{$item->party}}</a></td></div>
                </tr>
            </div>
        @endforeach
    </div>
</div>

@endsection