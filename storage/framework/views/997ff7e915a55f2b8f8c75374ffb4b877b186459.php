<?php if(Session('success')): ?>
<div class="alert alert-success">
	<p><?php echo e(Session('success')); ?></p>
</div>
<?php endif; ?>
<?php if(Session('danger')): ?>
<div class="alert alert-danger">
	<p><?php echo e(Session('danger')); ?></p>
</div>
<?php endif; ?>

<?php if(Session::has('flash_message')): ?>
    <script>
        swal("Great Job","<?php echo e(Session::get('flash_message')); ?>", "success");
    </script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\dashboard\Lara8\resources\views/adminLayouts/messages.blade.php ENDPATH**/ ?>