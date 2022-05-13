<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangay Pitogo</title>
    <link rel="logo" href="imgs/seal.ico" type="image/x-icon">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('/js/services.js')); ?>"></script>
    
  </head>

  <body>
    <nav class="nav">
        <ul class="nav__list">
          <li class="nav__listlogo">
            <a href="<?php echo e(route('welcome')); ?>"><img src="<?php echo e(asset('assets/images/pitogo.png')); ?>" alt="logo"></a>
          </li>
          <a href="<?php echo e(route('welcome')); ?>"><li class="nav__listitem">Home</li></a>
          <li class="nav__listitem">The Barangay
            <ul class="nav__listitemdrop">
              <a href="<?php echo e(route('thebarangay')); ?>"><li>The Barangay</li></a>
              <a href="<?php echo e(route('brgy_officials')); ?>"><li>Barangay & SK Officials</li></a>
              <a href="<?php echo e(route('mission_vision')); ?>"><li>Vision & Mission</li></a>
              <a href="<?php echo e(route('hotline')); ?>"><li>Hotlines</li></a>
            </ul>
          </li>
          <li class="nav__listitem">Services
            <ul class="nav__listitemdrop">
              <a href="<?php echo e(route('brgy_clearance')); ?>"><li>Barangay Clearance</li></a>
              <a href="<?php echo e(route('brgy_cert')); ?>"><li>Barangay Certificate</li></a>
              <a href="<?php echo e(route('indigency')); ?>"><li>Certificate of Indigency</li></a>
              <a href="<?php echo e(route('permit')); ?>"><li>Permit for Telecommunication</li></a>
              <a href="<?php echo e(route('spc')); ?>"><li>Solo Parent Certification</li></a>
            </ul>
          </li>
          <a href="http://localhost:3000"><li class="nav__listitem">Sign In</li></a>
        </ul>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>
    
  </body>
  
</html><?php /**PATH C:\xampp\htdocs\rtu-management-sys-api\resources\views/layouts/app.blade.php ENDPATH**/ ?>