@extends('layouts.homelayouts')

@section('title', 'マイページ')
@include('layouts.header')
@include('layouts.footer')
@section('contents')

    <head>
        <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
        <script>
            function confirmFunction1() {
                ret=confirm("この内容で編集しますか？");
            }
        </script>
    </head>

    <body>
    <form action="{{ route('mypage.index') }}" method="get" id="back">
    </form>
        <div class="overall">
            <div class="create_overall1">
                @foreach($users as $users)
                    <H1>{{ $users->name }}</H1>
                @endforeach
                    <form action="{{ route('mypage.update', $mypage->id) }}" method="POST">
            </div>
                @csrf
                <div class="create_images">
                    <div class="image_text">画像<br>
                        <label>
                            <input id="image" type="file" name="image">ファイルを選択
                        </label>
                    </div>

                    <div class="image_movie">動画<br>
                        <label>
                            <input id="movie" type="file" name="movie">ファイルを選択
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
                            </td>
                        </tr>
                        <tr>
                            <td>生年月日</td>
                            <td><input id="birth" type="date" class="create-birth" name="birth" style="width: 350px;" value="{{ old('birth', $mypage->birth) }}"></td>
                        </tr>
                        <tr>
                            <td>性別</td>
                            <td>
                                <input id="gender" type="radio" class="man" name="gender" value="男" checked="checked">男
                                <input id="gender" type="radio" class="woman" name="gender" value="女">女
                            </td>
                        </tr>
                        <tr>
                            <td>経歴</td>
                            <td><textarea id="career" type="text" class="create-career" name="career">{{ old('career', $mypage->career) }}</textarea></td>
                        </tr>
                    </table>

                    <div class="sentence">
                        <div class="introduction">
                            <div class="title1">自己紹介＆公約<br></div>
                            <textarea id="introduction" type="text" class="create-introductions" name="introduction">{{ old('introduction', $mypage->introduction) }}</textarea>
                        </div>

                        <div class="histories">
                            <div class="title2">出馬履歴<br></div>
                            <textarea id="history" type="text" class="create-histories" name="history">{{ old('history', $mypage->history) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" onclick="confirmFunction1()" class="btn btn-create ml-3" name='action' value='add'>編集</button>
        </form>
                    
                    <button type="submit" class="btn btn-return" form="back">戻る</button>
                </div>
        </div>
    </body>
@endsection