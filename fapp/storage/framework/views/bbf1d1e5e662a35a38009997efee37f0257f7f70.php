<head>
    <link rel = "stylesheet" href = "<?php echo e(asset('css/register.css')); ?>">
</head>

<body>
    <div class="forgot-title"><h2>パスワードを忘れた方用</h2></div>

        <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                送信しました。メールを確認してください。
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('password.email')); ?>">
            <?php echo csrf_field(); ?>

            <table class="forgot-table" border="1">
                <tr>
                    <th>メールアドレス</th>
                    <td>
                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong>メールアドレスの入力が正しくありません。</strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </td>
                </tr>
            </table>

            <div class="button-placement">
                <button type="submit" class="inside-button" onclick="alert('リンクを送信します。')">
                    送信
                </button>
            </div>
        </form>
 
</body>
<?php /**PATH C:\Users\ict\Desktop\fapp\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>