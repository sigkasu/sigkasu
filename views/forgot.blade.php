<script>
function confirmFunction1() {
confirm("この内容で送信しますか？");
}
</script>
<form action='' method='post'>
<table>
@csrf
    <tr><th>ユーザーID:</th><td><input type="text" name="user_id">
    <button onclick="confirmFunction1()" type="submit">送信</button>
</table>