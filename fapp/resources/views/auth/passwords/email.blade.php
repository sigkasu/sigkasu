<head>
    <link rel = "stylesheet" href = "{{ asset('css/register.css') }}">
</head>

<body>
    <div class="forgot-title"><h2>パスワードを忘れた方用</h2></div>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                送信しました。メールを確認してください。
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <table class="forgot-table" border="1">
                <tr>
                    <th>メールアドレス</th>
                    <td>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>メールアドレスの入力が正しくありません。</strong>
                            </span>
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
