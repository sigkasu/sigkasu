@section('subheader')
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="example.css">
    <title>サンプルのサイト</title>
    <style>
        * {
            margin:0; padding:0;
        }
        .subheader {
            width: 100%;
            padding: 15px 0;
            margin: 0 auto;
            text-align: center;
        }
        .subheader .headline{
            font-size: 32px;
        }
        .sub-header {
            text-align: right;
            padding: 10px 0;
            margin: 0 auto;
        }
        .sub-header-item {
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
<body>
    <div class="subheader">
        <ul class="sub-header">
            <li class="sub-header-item"><a href="mypage">マイページ</a></li>
            <li class="sub-header-item"><a href="tweet">つぶやき</a></li>
            <li class="sub-header-item"><a href="answer">質問返答</a></li>
            <li class="sub-header-item"><a href="questionnaire">候補者アンケート</a></li>
            <!-- <li class="sub-header-item"><a href="#">候補者ページ</a></li>
            <li class="sub-header-item"><a href="#">つぶやき</a></li>
            <li class="sub-header-item"><a href="#">質問を送る</li> -->
        </ul>
    </div>
</body>
@endsection