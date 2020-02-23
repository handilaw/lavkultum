<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kultum Santri Tahfidz Enterpreuneur</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
  <link href='<?php echo e(asset('font/Lora:400,700,400italic,700italic')); ?>' rel='stylesheet' type='text/css'>
  <link href='<?php echo e(asset('font/OpenSans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800')); ?>' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo e(asset('css/clean-blog.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/bootstrap-grid.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">


</head>


<body>
<!-- Navigation -->
  <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Section -->
    <?php echo $__env->yieldContent('main'); ?>
  <!-- End Section -->
  <!-- Footer -->
  <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo e(asset('js/clean-blog.min.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\lavkultum\resources\views/layouts/index.blade.php ENDPATH**/ ?>