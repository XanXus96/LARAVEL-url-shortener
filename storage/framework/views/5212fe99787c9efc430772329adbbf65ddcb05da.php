<?php $__env->startSection('body'); ?>
<div class="container col-lg-12 text-center" style="padding-bottom: 180px;padding-top: 250px">
	<a href="<?php echo e(config('app.url')); ?>/<?php echo e($shortned); ?>" style="color: white;font-size: 60px ; text-align: center;text-decoration: none"> <?php echo e(config('app.url')); ?>/<?php echo e($shortned); ?> </a>
	<br><br>
	<a class="text-center btn btn-lg btn-info" href="welcome.blade.php">shorten another url</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>