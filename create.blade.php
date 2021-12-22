@extends('layouts.homelayouts')

@section('title', 'マイページ')
@include('layouts.header')
@include('layouts.subheader')
@section('contents')

    <form action="{{ route('articles.store') }}" method="POST">
    <div class="image_group">
        <div class="image_text">画像</div>
        <div class="image_field">
            <input id="image" type="file" class="image" name="image" value="{{ old('image') }}">
        </div>
    </div>

    <div class="image_group">
        <div class="image_text">動画</div>
        <div class="movie_field">
            <input id="movie" type="file" class="movie" name="movie" value="{{ old('movie') }}">
        </div>
    </div>

    <div class="table_group">
        <table>
            <tr>
                <td>政党名</td>
                <td><input id="party" type="text" class="party" name="party" value="{{ old('party') }}"></td>
            </tr>
            <tr>
                <td>生年月日</td>
                <td><input id="birth" type="date" class="birth" name="birth" value="{{  old('birth ) }}"></td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                    <input id="gender" type="radio" class="gender" name="gender" value="man" checked="checked">男
                    <input id="gender" type="radio" class="gender" name="gender" value="woman">女
                </td>
            </tr>
            <tr>
                <td>経歴</td>
                <td><input id="carrer" type="text" class="carrer" name="carrer" value="{{ old('carrer') }}"></td>
            </tr>
        </table>

        <button type="button" class="btn btn-secondary" onClick="history.back()">戻る</button>
        <button type="submit" class="btn btn-primary ml-3" name='action' value='add'>作成</button>
@endsection