<!-- H1とかH2は適当なので変えちゃって大丈夫です -->


<?php $__env->startSection('title', 'ホーム画面'); ?>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<head>
<link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
</head>

<?php $__env->startSection('contents'); ?>
<div class="candidates">
        <h1>候補者一覧</h1>

    <div class="candidate_box">
        <?php $__currentLoopData = $people_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="candidate">
                <tr>
                    <a href="<?php echo e(route('mypage.show', $item->id)); ?>">
                        <td><img src="<?php echo e(url($item->image)); ?>"></td><br>
                        <div class="aaa"><td><?php echo e($item->name); ?></td></div>
                    </a>
                </tr>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<div class="politicals">
    <h1>政党一覧</h1>

    <div class="political_box">
        <?php $__currentLoopData = $party_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="political">
                <tr>
                    <td><a href="<?php echo e(url($item->url)); ?>"><img src="<?php echo e(url($item->image)); ?>"></a></td><br>
                    <div class="political_name"><td><a href="<?php echo e(url($item->url)); ?>"><?php echo e($item->party); ?></a></td></div>
                </tr>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homelayouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ict\Desktop\fapp\resources\views/home1.blade.php ENDPATH**/ ?>