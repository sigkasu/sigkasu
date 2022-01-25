@section('header')
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/mainheader.css') }}">

    <title>サンプルのサイト</title>
    <script>
        document.getElementById("submit").click();
    </script>
</head>

<header>
    <div class="tophead">
        <div class="logo">
            <a href="{{ route('toppage') }}"><img src="{{asset('E-pick1.png') }}"></a>
        </div>

        <div class="headline">
            @if (isset($selection) && $selection != '指定なし')
                <a>{{ $selection }}</a>
            @endif
        </div>

        <div class="search">
            <form action="{{ route('home') }}" method="get">
                <input type="text" name="name" size="20" placeholder="検索">
                <button class="search-button" type="submit"><img src="{{ asset('search.png') }}"></div>
            </form>
        </div>
    </div>

    <div class="main-header">
        <li class="main-header-item"><a href="{{ route('home') }}">HOME</a></li>

        <li class="main-header-itemA">
            <div class="form-group">
            {!! Form::open(['route' => 'home', 'method' => 'get']) !!}
                {!! Form::select('selection', Config::get('selection')) !!}
            {!! Form::submit('検索') !!}
            {!! Form::close() !!}
            </div>
        <li class="main-header-itemA">
            <a href="">政党一覧</a>
            <ul>
                <li><a href="https://www.jimin.jp/">自民党</a></li><br>
                <li><a href="https://www.cdp-japan.jp/">立憲民主党</a></li><br>
                <li><a href="http://www.komei.or.jp/">公明党</a></li><br>
                <li><a href="http://www.o-ishin.jp/">日本維新の会</a></li><br>
                <li><a href="http://www.new-kokumin.jp/">国民民主党</a></li><br>
                <li><a href="http://www.jcp.or.jp/">日本共産党</a></li><br>
                <li><a href="http://www.reiwa-shinsengumi.com/">れいわ新選組</a></li><br>
                <li><a href="http://www.sdp.or.jp/">社会民主党</a></li><br>
                <li><a href="http://www.nhkkara.jp/">NHKと裁判してる党弁護士72条違反で</a></li><br>
            </ul>
        </li>
        @auth
        <li class="main-header-item"><a href="{{ route('mypage.index') }}">マイページ</a></li>
        @endauth
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">新規登録</a>
                </li>
            @endif
        @else
            <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                ログアウト
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        @endguest
        <li class="main-header-item"><a href="{{ route('support') }}">お問い合わせ</a></li>
    </div>
</header>

@endsection