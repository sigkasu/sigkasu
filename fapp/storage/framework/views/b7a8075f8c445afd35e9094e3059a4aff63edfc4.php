<p>名前：<?php echo e($data['name']); ?>さん</p>
<p>メールアドレス：<?php echo e($data['email']); ?></p>
<p>---以下のお問い合わせが送信されました---</p>
<p><?php echo nl2br( $data['message'] ); ?></p><?php /**PATH C:\Users\ict\Desktop\fapp\resources\views/mailcontents.blade.php ENDPATH**/ ?>