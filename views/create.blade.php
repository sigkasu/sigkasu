@extends('layouts.homelayouts')

@section('title','マイページの作成')
@include('layouts.header')
@include('layouts.subheader')

@section('contents')
<div class="content">
<form method="post">
    @csrf
    <label>画像： <input id="image" type="file" name="image" value=""></label>
    <label>動画： <input id="movie" type="file" name="movie" value=""></label>
    <label>政党： <select name="party"><option value="">所属政党を選択</option>
    @foreach($party_items as $item)
        <option value="{{$item as->party}}">{{$item as->party}}</option>
    @endforeach
    <label>本文： <input id="content" type="text" name="content" value=""></label>
    <input type="submit" name="submit" value="投稿する">
</form>
</div>

@endsection