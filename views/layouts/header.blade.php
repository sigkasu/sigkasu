@section('header')
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="example.css">
    <title>サンプルのサイト</title>
    <style>
        * {
            margin:0; padding:0;
        }
        header {
            width: 100%;
            padding: 15px 0;
            margin: 0 auto;
            text-align: center;
        }
        header .headline{
            font-size: 32px;
        }
        .main-header {
            text-align: center;
            padding: 10px 0;
            margin: 0 auto;
        }
        .main-header-item {
            list-style: none;
            display: inline-block;
            margin: 0 20px;
        }
        p { 
           display:none;
        }

        input[type="checkbox"] {
            display:none}:checked + p{
            display:block;
        }
    </style>
</head>
<header>
    <h1 class="headline">
        <a>第４９回衆議院選挙</a>
    </h1>
    <ul class="main-header">
        <li class="main-header-item"><a href="/home1">HOME</a></li>
        <li class="main-header-item"><a href="/area">地域</a></li>
        <li class="main-header-item">
            <select name="selection_list">
                <!-- 今後データベースから選挙名を持ってこれるようにしますが、暫定で適当に羅列してます -->
                <option value="#">第４９回衆議院選挙</option>
                <option value="#">第４８回衆議院選挙</option>
                <option value="#">第４７回衆議院選挙</option>
                <option value="#">第４６回衆議院選挙</option>
            </select>
        </li>
        <li class="main-header-item">
            <select name="party_list">
                <!-- 上に同じ -->
                <option value="
                ">政党一覧</option>
                <option value="#">自民党</option>
                <option value="#">立憲民主党</option>
                <option value="#">公明党</option>
                <option value="#">社民党</option>
            </select>
        </li>
        <li class="main-header-item"><a href="mypage">マイページ</a></li>
        <li class="main-header-item"><a href="support">お問い合わせ</a></li>
    </ul>
</header>
@endsection