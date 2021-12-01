@extends('layouts.homelayouts')

@section('title', 'マイページ')
@include('layouts.header')
@include('layouts.subheader')
@section('contents')
@foreach($user_items as $user_items)
    <img src="{{ url($user_items->image) }}">
    <video src="{{ url($user_items->movie) }}">
    <tr>
        <td>政党名</td>
        <td>{{$user_items->party_id}}</td>
    </tr>
    <tr>
        <td>生年月日</td>
        <td>{{$user_items->birth}}</td>
    </tr>
    <tr>
        <td>性別</td>
        <td>{{$user_items->gender}}</td>
    </tr>
    <tr>
        <td>出身地</td>
        <td>{{$user_items->pref_id}}</td>
    </tr>
    <tr>
        <td>経歴</td>
        <td>{{$user_items->career}}</td>
    </tr>
@endforeach
@endsection