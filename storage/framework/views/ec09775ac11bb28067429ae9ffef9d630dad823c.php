  <?php $__env->startSection('title'); ?>
    <p class="my-2 text-center h5">hotels in yangon</p>
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('cards'); ?>

  <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


  <a href=/restaurants/<?php echo e($restaurant->id); ?> class="list-group-item">
    <img src = "img/novotel.jpg" class="img-fluid float-left">
    <div class="mt-3 text-center" id="textgroup">
      <p class="h5"> <?php echo e($restaurant->id); ?> </p>
      <p class="h5"> <?php echo e($restaurant->name); ?> </p>
      <p class="h5"><?php echo e($restaurant-> mail); ?></p>
      <p class="h5"><?php echo e($restaurant-> owner_id); ?> </p>
    </div>
  </a>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.listing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/htetpainghtun/Downloads/LocalInformationCentre/resources/views/pages/restaurants.blade.php ENDPATH**/ ?>