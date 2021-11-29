<!-- 多分新規登録やログインで使ったcssを適用していいと思います -->
@extends('layouts.homelayouts')

@section('title', 'お問い合わせ画面')
    <script>
        function confirmFunction1() {
            ret=confirm("この内容で送信しますか？");
        }
    </script>

@include('layouts.header')
@section('contents')
    <div class="title"><h2>お問い合わせ</h2></div>
    
    <form action='' method='post'>
        <table border="1">
            @csrf
            <tr><th>お名前</th><td><input class="aaa" type="text" name="fullname" size="50" text-size="20" placeholder="お名前"></td></tr>

            <tr><th>メールアドレス</th><td><input type="email" name="email" size="50" placeholder="メールアドレス" > </td></tr> 
  
            <tr><th>お問い合わせ内容</th><td> <input type="text" name="support" size="400" placeholder="内容を400字以内で入力してください"> </td></tr>
        </table>
  
        <button class ="regist" onclick="confirmFunction1()" type="submit">登録</button>
    </form>
@endsection
