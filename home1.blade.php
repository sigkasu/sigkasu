<!-- H1とかH2は適当なので変えちゃって大丈夫です -->
@extends('layouts.homelayouts')

@section('title', 'ホーム画面')

@include('layouts.header')
@section('contents')
<div class="question"><a href="question">候補者アンケート</a></div>
<h1>候補者一覧</h1>
@foreach($people_items as $item)
    <tr>
        <td><img src="{{ url($item->image) }}"></td>
        <td>{{$item->name}}</td>
    </tr>
@endforeach
<h1>政党一覧</h1>
@foreach($party_items as $item)
    <tr>
        <td><a href="{{ url($item->url) }}"><img src="{{ url($item->image) }}"></a></td>
        <td><a href="{{ url($item->url) }}">{{$item->party}}</a></td>
    </tr>
@endforeach
@endsection