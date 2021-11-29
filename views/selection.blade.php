@extends('layouts.homelayouts')

@section('title', '出馬履歴選択')

@include('layouts.header')
@include('layouts.subheader')
@section('contents')
<form action="post" action="create">
    @foreach($selection_items as $item)
        <tr>
             <td><input type="checkbox" name="selection" value="{{$item->selection_id}}">{{$item->selection}}</td>
        </tr>
    @endforeach
    <button type="submit">選択</button>
    <button action="create">戻る<button>
<form>
@endsection