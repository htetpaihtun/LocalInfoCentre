<!DOCTYPE html>

  <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <body>

      <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div id="main">
        <div class="container my-3 py-3">

         <?php echo $__env->yieldContent('title'); ?>

         <div class="my-4 mx-2 list-group">

           <?php echo $__env->yieldContent('cards'); ?>

        </div>
      </div>

      <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>

</html>
<?php /**PATH /home/htet_paing_htun/UniProject/LocalInformationCentre/resources/views/layouts/listing.blade.php ENDPATH**/ ?>