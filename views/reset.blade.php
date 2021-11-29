<head>
    <title>パスワード再設定画面</title>
</head>
<body>
    <script>
        function confirmFunction1() {
            ret=confirm("この内容で送信しますか？");
        }
    </script>
    <form action='' method='post'>
        <table class="bbb" border="1">
        @csrf
            <tr><th>パスワード</th><td><input type="text" name="password" size="50" placeholder="8～16文字で入力してください" style="width: 16em; height:50px;" pattern="^[a-zA-Z0-9]+$" minlength="8" maxlength="16"></td></tr>

            <tr><th>もう一度入力してください</th><td><input type="text" name="password" size="50" placeholder="8～16文字で入力してください" style="width: 16em; height:50px;" pattern="^[a-zA-Z0-9]+$" minlength="8" maxlength="16"></td></tr>
        </table>
        <button class ="regist" onclick="confirmFunction1()" type="submit">変更</button>

    </form>
</body>