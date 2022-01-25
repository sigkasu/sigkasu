<?php $__env->startSection('header'); ?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo e(asset('css/mainheader.css')); ?>">

    <title>サンプルのサイト</title>
    <script>
        document.getElementById("submit").click();
    </script>
</head>

<header>
    <div class="tophead">
        <div class="logo">
            <a href="<?php echo e(route('toppage')); ?>"><img src="<?php echo e(asset('E-pick1.png')); ?>"></a>
        </div>

        <div class="headline">
            <?php if(isset($selection) && $selection != '指定なし'): ?>
                <a><?php echo e($selection); ?></a>
            <?php endif; ?>
        </div>

        <div class="search">
            <form action="<?php echo e(route('home')); ?>" method="get">
                <input type="text" name="name" size="20" placeholder="検索">
                <button class="search-button" type="submit"><img src="<?php echo e(asset('search.png')); ?>"></div>
            </form>
        </div>
    </div>

    <div class="main-header">
        <li class="main-header-item"><a href="<?php echo e(route('home')); ?>">HOME</a></li>

        <li class="main-header-itemA">
            <div class="form-group">
            <?php echo Form::open(['route' => 'home', 'method' => 'get']); ?>

                <?php echo Form::select('selection', Config::get('selection')); ?>

            <?php echo Form::submit('検索'); ?>

            <?php echo Form::close(); ?>

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
        <?php if(auth()->guard()->check()): ?>
        <li class="main-header-item"><a href="<?php echo e(route('mypage.index')); ?>">マイページ</a></li>
        <?php endif; ?>
        <?php if(auth()->guard()->guest()): ?>
            <?php if(Route::has('login')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>">ログイン</a>
                </li>
            <?php endif; ?>

            <?php if(Route::has('register')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('register')); ?>">新規登録</a>
                </li>
            <?php endif; ?>
        <?php else: ?>
            <li class="nav-item">
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                ログアウト
                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </li>
        <?php endif; ?>
        <li class="main-header-item"><a href="<?php echo e(route('support')); ?>">お問い合わせ</a></li>
    </div>
</header>

<?php $__env->stopSection(); ?><?php /**PATH C:\Users\ict\Desktop\fapp\resources\views/layouts/header.blade.php ENDPATH**/ ?>