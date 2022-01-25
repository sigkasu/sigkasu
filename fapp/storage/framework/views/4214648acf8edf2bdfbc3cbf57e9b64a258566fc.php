<head>
    <title>ログイン画面</title>
    <link rel = "stylesheet" href = "<?php echo e(asset('css/register.css')); ?>">
</head>


<body>
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="flash_message3">入力に誤りがあります</div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="flash_message3">入力に誤りがあります</div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <div class="login-title">
        <h2>ログイン画面</h2>
    </div>

    <form action="<?php echo e(route('login')); ?>" method='post'>
        <table class="login1-table" border="1">
        <?php echo csrf_field(); ?>
            <tr>
                <th>メールアドレス</th>
                <td><input id ="email" type="email" name="email" size="50" placeholder="メールアドレス" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus style="width: 20em; height: 50px;">
                </td>
            </tr>

            <tr>
                <th>パスワード</th>
                <td><input id ="password" type="password" name="password" size="50" placeholder="8～16文字で入力してください" required autocomplete="current-password" style="width: 20em; height: 50px;" pattern="^[a-zA-Z0-9]+$" minlength="8" maxlength="16">
                </td>
            </tr>
        </table>

        <div class="button-placement">
            <button class="inside-button" type="submit">ログイン</button>
        </div>
    
        <div class="lost-item">
            <h3>※パスワードを忘れた方は<a href="<?php echo e(route('password.request')); ?>">コチラ</a></h3>
        </div>
    </form>                 
</body><?php /**PATH C:\Users\ict\Desktop\fapp\resources\views/auth/login.blade.php ENDPATH**/ ?>