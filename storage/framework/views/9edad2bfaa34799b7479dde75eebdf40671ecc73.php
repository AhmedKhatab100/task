<?php $__env->startSection('content'); ?>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Products Table</h4>
                  <hr>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Detalis Person</th>
                            <th>Price Address</th>
                            <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->id); ?></td>
                            <td><?php echo e($product->name); ?></td>
                            <td><?php echo e($product->details); ?></td>
                            <td><?php echo e($product->price); ?></td>
                            <td>
                                <a  class="btn btn-primary btn-icon-text" href="<?php echo e(route('products.edit',$product->id)); ?>">
                                <i class="typcn typcn-document btn-icon-append"></i>
                                Edit 
                                </a>
                                <a  class="btn btn-danger btn-icon-text" data-toggle="modal" href="#delete<?php echo e($product->id); ?>">
                                <i class="typcn typcn-upload btn-icon-prepend"></i>
                                Delete
                                </a>

                            </td>

                        </tr>
						<?php echo $__env->make('dashboard.product.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pro\resources\views/dashboard/product/index.blade.php ENDPATH**/ ?>