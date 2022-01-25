<head>
    <title>新規登録画面</title>
    <link rel = "stylesheet" href = "<?php echo e(asset('css/register.css')); ?>">
</head>

<body>
    <div class="regist-title">
        <h2>新規登録</h2>
    </div>

    <script>
        function confirmFunction1() {
            ret=confirm("この内容で送信しますか？");
        }
    </script>
    
    <form method="POST" action="<?php echo e(route('register')); ?>">
        <table class="register-table" border="1">
            <?php echo csrf_field(); ?>
            <tr>
                <th>お名前</th>
                <td><input type="text" name="name" size="50" placeholder="お名前" style="width: 350px; height: 50px;">
                </td>
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td><input type="email" name="email" size="50" placeholder="メールアドレス" style="width: 350px; height: 50px;">
                </td>
            </tr> 
  
            <tr>
                <th>出馬する選挙</th>
                <td><select name="selection">
                    <?php $__currentLoopData = config('selection'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($selection); ?>"><?php echo e($selection); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                </td>
            </tr>

            <tr>
                <th>パスワード</th>
                <td>
                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password" placeholder="8~16文字で入力してください" style="width: 350px; height: 50px; margin: 0px auto 10px;"><br>

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            パスワード入力に誤りがあります。<br>再入力してください。
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </td>
            </div>

            <tr>
                <th>パスワード(再入力)</th>
                <td>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="パスワード（確認）" style="width: 350px; height: 50px;">
                </td>
            </tr>
        </table>
  
        <div class="button-placement">
            <button class ="inside-button" onclick="confirmFunction1()" type="submit">登録
            </button>
        </div>
    </form>
</body><?php /**PATH C:\Users\ict\Desktop\fapp\resources\views/auth/register.blade.php ENDPATH**/ ?>