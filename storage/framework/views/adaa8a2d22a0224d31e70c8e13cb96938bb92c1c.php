<div class="container py-3">
    <h3 class="mb-4 font-primary"><b><u>Check Order</u></b></h3>
    <form action="<?php echo e(route('clientCheckOrderStatus')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <div class="input-group mb-3">
        <input type="text" name="order_code" class="form-control bg-transparent" placeholder="Input your order code b5K-xxxxx" aria-label="Recipient's username" aria-describedby="button-addon2" required>
        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Check</button>
      </div>
    </form>
    <hr/>
</div><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/molecules/check-order/form.blade.php ENDPATH**/ ?>