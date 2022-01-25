@extends('layouts.homelayouts')
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ画面</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <script>
        function confirmFunction1() {
            ret=confirm("この内容で送信しますか？");
        }
    </script>
</head>
<body>
@include('layouts.header')
@section('contents')

    @if(session('flash_message'))
        <div class="flash_message2">
            {{ session('flash_message') }}
        </div>
    @endif
    
    <div class="support-title2">
        <h2>お問い合わせ</h2>
    </div>

    <form action="{{ url('support') }}" method='post'>
        <table class="reset_support-table "border="1">
            @csrf
            <tr>
                <th>お名前</th>
                <td><input type="text" name="name" class="name-mail" size="70" text-size="10" placeholder="お名前" style="height:50px;" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        {{$errors->first('name')}}
                    @endif
                </td>
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td><input type="email" name="email" class="name-mail" size="70" placeholder="メールアドレス" style="height:50px;" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        {{$errors->first('email')}}
                    @endif
                </td>
            </tr> 
  
            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    <textarea class="inquiry" type="text" name="message" size="400" placeholder="内容を400字以内で入力してください" value="{{ old('message') }}"></textarea>
                        @if ($errors->has('message'))
                            {{$errors->first('message')}}
                        @endif
                </td>
            </tr>
        </table>
        <div class="button-placement">
            <button class ="inside-button" onclick="confirmFunction1()" type="submit">送信</button>
        </div>
    </form>
    @endsection
</body>