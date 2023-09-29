<!-- Modal -->
<div class="modal fade" id="delete<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('products.destroy', 'test')); ?>" method="post">
                <?php echo e(method_field('delete')); ?>

                <?php echo e(csrf_field()); ?>

            <div class="modal-body">
                <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                <h5>Warning</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\pro\resources\views/dashboard/product/delete.blade.php ENDPATH**/ ?>