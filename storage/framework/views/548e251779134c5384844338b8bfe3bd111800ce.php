<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PolluxUI Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo e(url('/')); ?>/assets/images/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

</head>
<body>
<?php echo $__env->make('dashboard.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('dashboard.include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

        
        <?php echo $__env->make( 'dashboard.include.footer' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="<?php echo e(url('/')); ?>/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo e(url('/')); ?>/assets/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo e(url('/')); ?>/assets/js/off-canvas.js"></script>
  <script src="<?php echo e(url('/')); ?>/assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo e(url('/')); ?>/assets/js/template.js"></script>
  <script src="<?php echo e(url('/')); ?>/assets/js/settings.js"></script>
  <script src="<?php echo e(url('/')); ?>/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo e(url('/')); ?>/assets/js/dashboard.js"></script>
	<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


  <!-- End custom js for this page-->
  <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>

<?php /**PATH C:\xampp\htdocs\pro\resources\views/layouts/dashboard/app.blade.php ENDPATH**/ ?>