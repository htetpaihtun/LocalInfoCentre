<!DOCTYPE html>

  <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <body>

      <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo "<h1> Aung Ko Ko Zaw Page </h1>" ?>

      <?php dd($hotel); ?>;

      <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>

</html>
<?php /**PATH /home/htetpainghtun/Downloads/LocalInformationCentre/resources/views/pages/hotel.blade.php ENDPATH**/ ?>