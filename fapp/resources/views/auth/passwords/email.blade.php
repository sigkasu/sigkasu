<head>
    <link rel = "stylesheet" href = "{{ asset('css/register.css') }}">
</head>

<body>
    @if (session('status'))
        <div class="flash-message1" role="alert">
            送信しました。メールを確認してください。
        </div>
    @endif

    <div class="email-title"><h2>パスワードを忘れた方用</h2></div>
    <div class="backtop1">
        <h2>
            <a href="/toppage">トップページへ戻る</a>
        </h2>
    </div>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <table class="email-table" border="1">
            <tr>
                <th>メールアドレス</th>
                <td>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus size="50" placeholder="メールアドレス" style="width: 20em; height: 50px;"><br>

                    @error('email')
                        <div class="invalid-feedback" role="alert">
                            <strong>メールアドレスの入力が正しくありません。</strong>
                        </div>
                    @enderror
                </td>
            </tr>
        </table>

        <div class="button-placement">
            <button type="submit" class="inside-button" onclick="alert('リンクを送信します。')">
                送信
            </button>
        </div>
    </form>
 
</body>
