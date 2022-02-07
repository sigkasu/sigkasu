@extends('layouts.homelayouts')

@section('title', 'マイページ')
@include('layouts.header')
@include('layouts.footer')
@section('contents')

    <head>
        <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    </head>

    <body>
        <div class="overall">
            <div class="create_overall1">
                <form action="{{ route('mypage.store') }}" method="POST">
            </div>
                @csrf
                @foreach($users as $users)
                    <H1>{{ $users->name }}</H1>
                @endforeach
                <div class="create_images">
                    <div class="image_text">画像<br>
                        <label>
                            <input id="image" type="file" class="image" name="image" value="{{ old('image') }}">ファイルを選択
                        </label>
                    </div>

                    <div class="image_movie">動画<br>
                        <label>
                            <input id="movie" type="file" class="movie" name="movie" value="{{ old('movie') }}">ファイルを選択
                        </label>
                    </div>
                </div>

                <div class="table_group">
                    <table>
                        <tr>
                            <td>政党名</td>
                            <td>
                                <select id="party" class="create-party" name="party" style="width: 350px; height: 25px">
                                    @foreach(config('party') as $party)
                                        <option value="{{ $party }}">{{ $party }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('party'))
                                    <div class="create-feedback1">{{$errors->first('party')}}</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>生年月日</td>
                            <td><input id="birth" type="date" class="create-birth" name="birth" style="width: 350px;" value="{{  old('birth' ) }}">
                            @if ($errors->has('birth'))
                                <div class="create-feedback1">{{$errors->first('birth')}}</div>
                            @endif                        
                        </td>
                        </tr>
                        <tr>
                            <td>性別</td>
                            <td>
                                <input id="gender" type="radio" class="man" name="gender" value="男" checked="checked">男
                                <input id="gender" type="radio" class="woman" name="gender" value="女">女
                                @if ($errors->has('gender'))
                                    <div class="create-feedback1">{{$errors->first('gender')}}</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>経歴</td>
                            <td><textarea id="career" type="text" class="create-career" name="career" value="{{ old('career') }}">{{ old('career') }}</textarea>
                                @if ($errors->has('career'))
                                    <div class="create-feedback1">{{$errors->first('career')}}</div>
                                @endif
                            </td>
                        </tr>
                    </table>

                    <div class="sentence">
                        <div class="introduction">
                            <div class="title1">自己紹介＆公約<br></div>
                            <textarea id="introduction" type="text" class="create-introductions" name="introduction" value="{{ old('introduction') }}">{{ old('introduction') }}</textarea>
                            @if ($errors->has('introduction'))
                                <div class="create-feedback2">{{$errors->first('introduction')}}</div>
                            @endif
                        </div>

                        <div class="histories">
                            <div class="title2">出馬履歴<br></div>
                            <textarea id="history" type="text" class="create-histories" name="history">{{ old('history') }}</textarea>
                            @if ($errors->has('history'))
                                <div class="create-feedback2">{{$errors->first('history')}}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-create ml-3" name='action' value='add' onclick='return confirm("この内容で作成しますか？");'>作成</button>
        </form>
                    <button type="button" class="btn btn-return" onClick="history.back()">戻る</button>
                </div>
            </div>
        
    </body>
@endsection