

<?php $__env->startSection('title', 'マイページ'); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('contents'); ?>
<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/mypage.css')); ?>">
</head>

<body>

<?php if(empty($mypage)): ?>
    <?php if($id == $user_id): ?>
        <div class="new">あなたはまだマイページを作成していません。<br>下記のボタンから入力してください。</div>
        <button type="button" class="btn btn-new1 mb-3 d-block w-100" onclick="location.href='<?php echo e(route('mypage.create')); ?>'">
            新規作成
        </button>
    <?php else: ?>
        <div class="new">マイページが作成されていません</div>
    <?php endif; ?>

<?php else: ?>

    <?php if($id == $user_id): ?>
        <button type="button" class="btn btn-editing1 ml-3" onclick="location.href='<?php echo e(route('mypage.edit', $mypage->id)); ?>'">
        編集
        </button>
    <?php endif; ?>

    <div class="overall">
        <H1><?php echo e($users->name); ?></H1>
        <div class="images">
            <img src="<?php echo e(url($mypage->image)); ?>"></img>
            
            <video src="<?php echo e(url($mypage->movie)); ?>" controls></video>
        </div>

        <table>
            <tr>
                <td>政党名</td>
                <td><?php echo e($mypage->party); ?></td>
            </tr>
            <tr>
                <td>生年月日</td>
                <td><?php echo e($mypage->birth); ?></td>
            </tr>
            <tr>
                <td>性別</td>
                <td><?php echo e($mypage->gender); ?></td>
            </tr>
            <tr>
                <td>経歴</td>
                <td><div class="mypage-career"><?php echo nl2br(e($mypage->career)); ?></div></td>
            </tr>
        </table>

        <div class="sentence">
            <div class="introduction">
                <div class="title1">自己紹介&公約<br></div>
                <div class="mypage-introductions"><?php echo nl2br(e($mypage->introduction)); ?></div>
            </div>

            <div class="histories">
                <div class="title2">出馬履歴<br></div>
                <div class="mypage-histories"><?php echo nl2br(e($mypage->history)); ?></div>
            </div>
        </div>

        <?php if($id == $user_id): ?>
            <button type="button" class="btn btn-editing2 ml-3" onclick="location.href='<?php echo e(route('mypage.edit', $mypage->id)); ?>'">
            編集
            </button>
        <?php endif; ?>
    </div>
<?php endif; ?>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homelayouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ict\Desktop\fapp\resources\views/mypage.blade.php ENDPATH**/ ?>