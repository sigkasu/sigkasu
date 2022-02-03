<head>
    <title>ログイン画面</title>
    <link rel = "stylesheet" href = "{{ asset('css/register.css') }}">
</head>


<body>
    @error('email')
        <div class="flash-message2">入力に誤りがあります</div>
    @enderror('email')

    <div class="login-title">
        <h2>ログイン画面</h2>
    </div>

    <form action="{{ route('login') }}" method='post'>
        <table class="login1-table" border="1">
        @csrf
            <tr>
                <th>メールアドレス</th>
                <td><input id ="email" type="email" name="email" size="50" placeholder="メールアドレス" value="{{ old('email') }}" required autocomplete="email" autofocus style="width: 20em; height: 50px;">
                </td>
            </tr>

            <tr>
                <th>パスワード</th>
                <td><input id ="password" type="password" name="password" size="50" placeholder="8～16文字で入力してください" required autocomplete="current-password" style="width: 20em; height: 50px;" pattern="^[a-zA-Z0-9]+$" minlength="8" maxlength="16">
                </td>
            </tr>
        </table>

        <div class="button-placement">
            <button class="inside-button" type="submit">ログイン</button>
        </div>
    
        <div class="lost-item">
            ※パスワードを忘れた方は<a href="{{ route('password.request') }}">コチラ</a>
        </div>
    </form>                 
</body>