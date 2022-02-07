<head>
    <title>新規登録画面</title>
    <link rel = "stylesheet" href = "{{ asset('css/register.css') }}">
</head>

<body>
    <div class="regist-title">
        <h2>新規登録</h2>
    </div>

    <div class="backtop1">
        <h2>
            <a href="/toppage">トップページへ戻る</a>
        </h2>
    </div>

    <script>
        function confirmFunction1() {
            ret=confirm("この内容で登録しますか？");
        }
    </script>
    
    <form method="POST" action="{{ route('register') }}">
        <table class="register-table" border="1">
            @csrf
            <tr>
                <th>お名前</th>
                <td><input type="text" name="name" size="50" value="{{ old('name') }}" placeholder="お名前" style="width: 350px; height: 50px;">
                </td>
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td><input type="email" name="email" size="50" value="{{ old('email') }}" placeholder="メールアドレス" style="width: 350px; height: 50px;">
                </td>
            </tr> 
  
            <tr>
                <th>出馬する選挙</th>
                <td><select name="selection">
                    @foreach(config('selection') as $selection)
                        <option value="{{ $selection }}">{{ $selection }}</option>
                    @endforeach
                </select>
                @error('selection')
                    <span class="invalid-feedback" role="alert">
                        選挙を選択してください。
                    </span>
                @enderror                
                </td>
            </tr>

            <tr>
                <th>パスワード</th>
                <td>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{ old('password') }}" placeholder="8~16文字で入力してください。" style="width: 350px; height: 50px;"><br>

                    @error('password')
                        <div class="invalid-feedback" role="alert">
                            パスワード入力に誤りがあります。<br>再入力してください。
                        </div>
                    @enderror
                </td>
            </div>

            <tr>
                <th>パスワード(再入力)</th>
                <td>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" value="{{ old('password_confirmation') }}" placeholder="パスワード（確認）" style="width: 350px; height: 50px;">
                </td>
            </tr>
        </table>
  
        <div class="register-button-placement">
            <button class ="inside-button" onclick="confirmFunction1()" type="submit">登録
            </button>
        </div>
    </form>

    <footer class="register-footer">
        © 2022 E-pick
    </footer>
</body>