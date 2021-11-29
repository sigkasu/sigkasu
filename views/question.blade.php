@extends('layouts.homelayouts')

@section('title', '候補者アンケート')    
    <style>
        .answer{
            -ms-writing-mode: tb-rl;
	        writing-mode: vertical-rl;

        }
    </style>
@include('layouts.header')
@section('contents')
    <div class="question"><a href="home1">戻る</a></div>
    <h1>【候補者アンケート】</h1>
    <div class="answer">〇：賛成　✕：反対　△：どちらともいえない　ー：無回答</div>
    <h2>データベース接続出来たら作成</h1>
@endsection