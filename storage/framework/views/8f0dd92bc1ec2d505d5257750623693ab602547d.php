<?php $__env->startSection('body'); ?>
<div class="container col-lg-12" style="padding-bottom: 180px;padding-top: 180px">
	<h1 class="text-center " style="color: white;font-size: 130px ">The BEST url shotner in the universe !</h1>
	<form method="post">
    	<input class="center-block input-lg form-group" type="text" value="<?php echo e(old('url')); ?>" name="url" placeholder="Enter your URL"> <?php echo csrf_field(); ?>

    	<?php echo $errors->first('url','<p style="color: white;text-align: center;">:message</p>'); ?><br>
    	<input class="center-block btn btn-lg btn-info" type="submit" value="Shorten URL">
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>