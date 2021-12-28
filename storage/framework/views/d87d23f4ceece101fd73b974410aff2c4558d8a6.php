<?php $__env->startSection('title'); ?>
    Test yajra
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php echo e(\App\Models\Name::count()); ?>

    <div class="card">
        <div class="card-body">
            <?php echo $dataTable->table(); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>
    <?php echo $dataTable->scripts(); ?>

    <script type="text/javascript">
        $("#delete").on("click", function () {
           var id = $(this).data('pid');
               alert(id);
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            var CSRF_TOKEN ='<?php echo e(csrf_token()); ?>';
                            $.ajax({
                                url: '<?php echo e(route("delete")); ?>',
                                type: "post",
                                data: {'id': id, _token: CSRF_TOKEN},
                                dataType: "JSON",
                                success: function (data) {
                                    if (data.message == "Success") {
                                        //success response ..
                                        //to remove selected row
                                        $(this).parents("tr").remove();
                                        swal("your selected supervisors has been deleted successfully!", {
                                            icon: "success",
                                        });
                                        // location.reload();
                                    } else {
                                        swal("something wrong!");
                                    }
                                },
                                fail: function (xhrerrorThrown) {
                                    swal("something wrong!");
                                }
                            });
                        } else {
                            swal("something wrong!");
                        }
                    });

        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminLayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboard\Lara8\resources\views/admin/name/index.blade.php ENDPATH**/ ?>