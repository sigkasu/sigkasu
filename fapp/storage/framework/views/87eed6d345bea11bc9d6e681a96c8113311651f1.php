

<?php $__env->startSection('title', 'マイページ'); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('contents'); ?>

    <head>
        <link rel="stylesheet" href="<?php echo e(asset('css/mypage.css')); ?>">
    </head>

    <body>
        <div class="overall">
            <div class="create_overall1">
                <form action="<?php echo e(route('mypage.store')); ?>" method="POST">
            </div>
                <?php echo csrf_field(); ?>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <H1><?php echo e($users->name); ?></H1>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="create_images">
                    <div class="image_text">画像<br>
                        <label>
                            <input id="image" type="file" class="image" name="image" value="<?php echo e(old('image')); ?>">ファイルを選択
                        </label>
                    </div>

                    <div class="image_movie">動画<br>
                        <label>
                            <input id="movie" type="file" class="movie" name="movie" value="<?php echo e(old('movie')); ?>">ファイルを選択
                        </label>
                    </div>
                </div>

                <div class="table_group">
                    <table>
                        <tr>
                            <td>政党名</td>
                            <td><input id="party" type="text" class="create-party" name="party"style="width: 350px; height: 25px" value="<?php echo e(old('party')); ?>"></td>
                        </tr>
                        <tr>
                            <td>生年月日</td>
                            <td><input id="birth" type="date" class="create-birth" name="birth" style="width: 350px;" value="<?php echo e(old('birth' )); ?>"></td>
                        </tr>
                        <tr>
                            <td>性別</td>
                            <td>
                                <input id="gender" type="radio" class="man" name="gender" value="男" checked="checked">男
                                <input id="gender" type="radio" class="woman" name="gender" value="女">女
                            </td>
                        </tr>
                        <tr>
                            <td>経歴</td>
                            <td><textarea id="career" type="text" class="create-career" name="career" value="<?php echo e(old('career')); ?>"></textarea></td>
                        </tr>
                    </table>

                    <div class="sentence">
                        <div class="introduction">
                            <div class="title1">自己紹介＆公約<br></div>
                            <textarea id="introduction" type="text" class="create-introductions" name="introduction" value="<?php echo e(old('introduction')); ?>"></textarea>
                        </div>

                        <div class="histories">
                            <div class="title2">出馬履歴<br></div>
                            <textarea id="history" type="text" class="create-histories" name="history" value="<?php echo e(old('history')); ?>"></textarea>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-create ml-3" name='action' value='add'>作成</button>
        </form>
                    <button type="button" class="btn btn-return" onClick="history.back()">戻る</button>
                </div>
            </div>
        
    </body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homelayouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ict\Desktop\fapp\resources\views/create.blade.php ENDPATH**/ ?>