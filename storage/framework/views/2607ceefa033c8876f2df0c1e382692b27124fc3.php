<?php if($errors->any()): ?>
	<div class="alert alert-danger">
	    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    	<p><?php echo e($value); ?></p>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\dashboard\Lara8\resources\views/adminLayouts/errors.blade.php ENDPATH**/ ?>