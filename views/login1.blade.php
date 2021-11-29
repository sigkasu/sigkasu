<form action='' method='post'>
    <table>
    @csrf
        <tr><th>ID :</th><td><input type="text" name="user_id"></td></tr>
        <tr><th>パスワード :</th><td><input type="text" name="password" placeholde="8～16文字で入力してください"></td></tr>
</table>
<button name="login1" type="submit">ログイン</button>
<h3>※パスワードを忘れた方は<a href="forgot">コチラ</a></h3>

</form>