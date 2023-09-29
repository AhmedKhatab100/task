<?php $__env->startSection('content'); ?>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sales Table</h4>
                  <hr>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Date Of Added</th>
                            <th>Name Of Customer</th>
                            <th>Quantity Of Sale</th>
                            <th>Description</th>
                            <th>Unit Price</th>
                            <th>Subtotal</th>
                            <th>Discount</th>
                            <th>Grand Total Code</th>
                            <th>Notes</th>
                            <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td><?php echo e($sale->id); ?></td>
                            <td><?php echo e($sale->created_at); ?></td>
                            <td><?php echo e($sale->customer_id->name); ?></td>
                            <td><?php echo e($sale->quantity); ?></td>
                            <td><?php echo e($sale->description); ?></td>
                            <td><?php echo e($sale->unit_price); ?></td>
                            <td><?php echo e($sale->subtotal); ?></td>
                            <td><?php echo e($sale->discount); ?></td>
                            <td><?php echo e($sale->grand_total); ?></td>
                            <td><?php echo e($sale->notes); ?></td>
                            <td>
                                <a  class="btn btn-primary btn-icon-text" href="<?php echo e(route('customer.edit',$customer->id)); ?>">
                                <i class="typcn typcn-document btn-icon-append"></i>
                                Edit 
                                </a>
                                <a  class="btn btn-danger btn-icon-text" data-toggle="modal" href="#delete<?php echo e($customer->id); ?>">
                                <i class="typcn typcn-upload btn-icon-prepend"></i>
                                Delete
                                </a>

                            </td>

                        </tr>
						<?php echo $__env->make('dashboard.customer.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pro\resources\views/dashboard/sale/index.blade.php ENDPATH**/ ?>