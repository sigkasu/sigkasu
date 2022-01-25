
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ画面</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/register.css')); ?>">
    <script>
        function confirmFunction1() {
            ret=confirm("この内容で送信しますか？");
        }
    </script>
</head>
<body>

<?php $__env->startSection('contents'); ?>

    <?php if(session('flash_message')): ?>
        <div class="flash_message1">
            <?php echo e(session('flash_message')); ?>

        </div>
    <?php endif; ?>
    
    <div class="support-title2">
        <h2>お問い合わせ</h2>
    </div>

    <form action="<?php echo e(url('support1')); ?>" method='post'>
        <table class="reset_support-table "border="1">
            <?php echo csrf_field(); ?>
            <tr>
                <th>お名前</th>
                <td><input type="text" name="name" class="name-mail" size="70" text-size="10" placeholder="お名前" style="height:50px;" value="<?php echo e(old('name')); ?>">
                    <?php if($errors->has('name')): ?>
                        <?php echo e($errors->first('name')); ?>

                    <?php endif; ?>
                </td>
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td><input type="email" name="email" class="name-mail" size="70" placeholder="メールアドレス" style="height:50px;" value="<?php echo e(old('email')); ?>">
                    <?php if($errors->has('email')): ?>
                        <?php echo e($errors->first('email')); ?>

                    <?php endif; ?>
                </td>
            </tr> 
  
            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    <textarea class="inquiry" type="text" name="message" size="400" placeholder="内容を400字以内で入力してください" value="<?php echo e(old('message')); ?>"></textarea>
                        <?php if($errors->has('message')): ?>
                            <?php echo e($errors->first('message')); ?>

                        <?php endif; ?>
                </td>
            </tr>
        </table>
        <div class="button-placement">
            <button class ="inside-button" onclick="confirmFunction1()" type="submit">送信</button>
        </div>
    </form>
    <?php $__env->stopSection(); ?>
</body>
<?php echo $__env->make('layouts.homelayouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ict\Desktop\fapp\resources\views/support1.blade.php ENDPATH**/ ?>