@section('subheader')
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/subheader.css') }}">

    <title>サンプルのサイト</title>

</head>
    
<body>
    <div class="sub-header">
        <ul>
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