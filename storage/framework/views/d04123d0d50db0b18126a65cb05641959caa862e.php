<?php $__env->startSection('content'); ?>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Customer Table</h4>
                  <hr>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Company</th>
                            <th>Contact Person</th>
                            <th>Email Address</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Postal Code</th>
                            <th>Country</th>
                            <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td><?php echo e($customer->id); ?></td>
                            <td><?php echo e($customer->company); ?></td>
                            <td><?php echo e($customer->contact); ?></td>
                            <td><?php echo e($customer->email); ?></td>
                            <td><?php echo e($customer->phone); ?></td>
                            <td><?php echo e($customer->address); ?></td>
                            <td><?php echo e($customer->city); ?></td>
                            <td><?php echo e($customer->state); ?></td>
                            <td><?php echo e($customer->postal); ?></td>
                            <td><?php echo e($customer->country); ?></td>
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
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pro\resources\views/dashboard/customer/index.blade.php ENDPATH**/ ?>