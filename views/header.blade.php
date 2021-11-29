@extends('layouts.homelayouts')
<?php $gomi = 1 ?>
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
</style>
</head>
<body>
@section('main_header')
<!-- header -->
<header>
    <h1 class="headline">
        <a>第４９回衆議院選挙</a>
    </h1>
    <ul class="main-header">
        <li class="main-header-item"><a href="#">HOME</a></li>
        <li class="main-header-item"><a href="#">地域</a></li>
        <li class="main-header-item">第４９回衆議院選挙</li>
        <li class="main-header-item">政党一覧</li>
        @if ($gomi == 1)
        <li class="main-header-item"><a href="#">マイページ</a></li>
        @endif
        <li class="main-header-item"><a href="#">お問い合わせ</a></li>
    </ul>
</header>
@endsection

@section('sub_header')
<ul class="main-header">
        @if($gomi == 1)
        <li class="main-header-item"><a href="#">マイページ</a></li>
        <li class="main-header-item"><a href="#">つぶやき</a></li>
        <li class="main-header-item"><a href="#">質問返答</li>
        <li class="main-header-item"><a href="#">候補者アンケート</li>
        @else
        <li class="main-header-item"><a href="#">候補者ページ</a></li>
        <li class="main-header-item"><a href="#">つぶやき</a></li>
        <li class="main-header-item"><a href="#">質問を送る</li>
        @endif
    </ul>
@endsection
</body>