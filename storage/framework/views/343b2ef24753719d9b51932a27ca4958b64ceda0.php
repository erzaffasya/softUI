<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="g-sidenav-show  bg-gray-100">

  <!-- sidebar -->
  <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- end sidebar -->

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

  <!-- Navbar -->
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- End Navbar -->

  <!-- container -->
    <div class="container-fluid py-4">      
      
       <!-- isi konten -->
        <?php echo e($slot); ?>

       <!-- end isi konten -->

      <!-- footer -->
        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end isi footer -->

    </div>
  <!-- end container -->


  </main>

  <div class="fixed-plugin">
    <?php echo $__env->make('partials.plugin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  

  <?php echo $__env->make('partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH D:\xampp\htdocs\Web-Admin\resources\views/layouts/app.blade.php ENDPATH**/ ?>