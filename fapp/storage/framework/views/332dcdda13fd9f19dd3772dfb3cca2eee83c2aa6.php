<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <title>トップページ</title>
</head>

<body>
    <div class="sub">
        <div class="Admin">
            <h2>
                <a href="#">管理者の方はコチラ</a>
            </h2>
        </div>

        <div class="inquiry">
            <h2>
                <a href="/support1">お問い合わせ</a>
            </h2>
        </div>
    </div>

    <div class="main">
        <h1>E-pick</h1>

        <div class="boxA">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                document.getElementById('logout-form').submit(); alert('ログアウトしました')">
                <h2>・有権者用のページを見る</h2></a><br>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>

                <label for="btn">
                    <h2>・候補者の方はコチラ</h2>
                </label>
                <input type="checkbox" id="btn">       
                        <p><a href="/register">新規登録</a>／<a href="/login">ログイン</a></p>
            <?php else: ?>
                <h2><a href="/home">・有権者の方はコチラ</a></h2><br>
                    <label for="btn">
                        <h2>・候補者の方はコチラ</h2>
                    </label>
                    <input type="checkbox" id="btn">       
                    <p><a href="/register">新規登録</a>／<a href="/login">ログイン</a></p>
            <?php endif; ?>
        </div>
    </div>

    <div class="info">
        <h2>選挙に関する情報</h2>
            <h3>・〇月〇日〇曜日　第〇回〇〇選挙開催</h3>
            <h3>・〇月〇日〇曜日　第〇回〇〇選挙閉幕</h3>
            <h3>・〇月〇日〇曜日　第〇回〇〇選挙開催</h3>
            <h3>・あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</h3>
            <h3>・〇月〇日〇曜日　第〇回〇〇選挙閉幕</h3>
            <h3>・〇月〇日〇曜日　第〇回〇〇選挙開催</h3>
            <h3>・〇月〇日〇曜日　第〇回〇〇選挙閉幕</h3>
            <h3>・〇月〇日〇曜日　第〇回〇〇選挙開催</h3>
        </div>
</body> <?php /**PATH C:\Users\ict\Desktop\fapp\resources\views/toppage.blade.php ENDPATH**/ ?>