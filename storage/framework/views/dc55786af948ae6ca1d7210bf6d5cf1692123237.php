<!DOCTYPE html>

  <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <body>

      <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <br><br>

      <div class="container">
        <form method="POST" action="/bookings">
          <?php echo csrf_field(); ?>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">User Name </label>
              <input type="text" class="form-control" id="name" placeholder="Name" name="name">
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email" name="mail">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="phone"> Phone </label>
              <input type="phone" class="form-control" id="phone" placeholder="Phone number" name="ph_no">
            </div>
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" rows="5" id="description" placeholder="Add more information about your booking" name="description"></textarea>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="seats">City</label>
              <input type="text" class="form-control" id="seats" name="seats">
            </div>

            <div class="form-group col-md-3">
              <label for="date">Zip</label>
              <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group col-md-3">
              <label for="time">Zip</label>
              <input type="time" class="form-control" id="time" name="time">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Book Now</button>
        </form>

      </div>

      <br><br>

      <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>

</html>
<?php /**PATH /home/htetpainghtun/Downloads/LocalInformationCentre/resources/views/pages/bookingform.blade.php ENDPATH**/ ?>