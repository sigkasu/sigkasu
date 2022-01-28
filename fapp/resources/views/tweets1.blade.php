@extends('layouts.homelayouts')

@section('title', 'つぶやき')
@include('layouts.header')
@section('contents')
<head>
    <link rel="stylesheet" href="">
</head>
<body>
<div class="title">つぶやき画面</div>

<div class="contents">
    <form action="" method="POST">
        @csrf
        <textarea name="tweet" id="tweet">{{ old('tweet') }}</textarea>
        <button type="button" class="btn btn-primary mb-3 d-block w-100" name='action' value='add'>
        つぶやく
        </button>
    </form>
    <div class="tweet">
        <li>ねむい</li>
        <li>だるい</li>
        <li>めんどい</li>
        <li>おなかへった</li>
        <li>ばなな</li>
    </div>
<div>
</body>
@endsection