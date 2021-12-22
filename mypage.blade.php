@extends('layouts.homelayouts')

@section('title', 'マイページ')
@include('layouts.header')
@include('layouts.subheader')
@section('contents')
@if(!isset($mypage))
    <button type="button" class="btn btn-primary mb-3 d-block w-100" onclick="location.href='{{ route('create') }}'">
        新規作成
    </button>
@else
    <img src="{{ url($mypage->image) }}"></img>
    <video src="{{ url($mypage->movie) }}"></video>
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
            <td>{{$mypage->career}}</td>
        </tr>
    </table>
@endif
@endsection