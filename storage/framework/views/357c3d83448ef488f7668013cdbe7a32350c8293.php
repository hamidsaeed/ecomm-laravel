<?php $__env->startSection('css'); ?>
  <style>
    .order-info > tbody > tr{
      height:35px !important;
    }
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-4 col-12">
          <table class="order-info">
            <tr>
              <td><b>Status</b></td>
              <td>&nbsp; : &nbsp;</td>
              <td>
                <button type="button" data-bs-toggle="modal" data-bs-target="#modalUpdateStatus" style="background-color:transparent;border:none;">
                  <?php if($order->status == 0): ?>
                    <span class="badge bg-warning" >Unprocessed</span>
                  <?php elseif($order->status == 1): ?>
                    <span class="badge bg-info">Confirmed</span>
                  <?php elseif($order->status == 2): ?>
                    <span class="badge bg-primary">Processed</span>
                  <?php elseif($order->status == 3): ?>
                    <span class="badge bg-danger">Pending</span>
                  <?php elseif($order->status == 4): ?>
                    <span class="badge bg-secondary">Shipping</span>
                  <?php elseif($order->status == 5): ?>
                    <span class="badge bg-success">Completed</span>
                  <?php endif; ?>
                </button>
              </td>
            </tr>
            <tr>
              <td><b>Total</b></td>
              <td>&nbsp; : &nbsp;</td>
              <td><b><u>$<?php echo e($order->total); ?></u></b></td>
            </tr>
            <tr>
              <td><b>Name</b></td>
              <td>&nbsp; : &nbsp;</td>
              <td><?php echo e($order->name); ?></td>
            </tr>
            <tr>
              <td><b>Phone</b></td>
              <td>&nbsp; : &nbsp;</td>
              <td><?php echo e($order->phone); ?></td>
            </tr>
            <tr>
              <td><b>Address</b></td>
              <td>&nbsp; : &nbsp;</td>
              <td><?php echo e($order->address); ?></td>
            </tr>
            <tr>
              <td><b>Note</b></td>
              <td>&nbsp; : &nbsp;</td>
              <td><?php echo e($order->note); ?></td>
            </tr>
          </table>
        </div>
        <div class="col-md-8 col-12 ">
          <h4>Order Detail</h4>
          <div class="table-responsive">
            <table class="table table table-striped table-bordered">
              <thead>
                <tr>
                  <td>No</td>
                  <td>Title</td>
                  <td>Price</td>
                  <td>Quantity</td>
                  <td>Sub Total</td>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $orderDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo str_replace('-', ' ', ucwords($item->title)); ?></td>
                    <td>$<?php echo e($item->price); ?></td>
                    <td><?php echo e($item->quantity); ?></td>
                    <td>$<?php echo $item->price * $item->quantity; ?></td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <a href="javascript:void(0)" onclick="alertconfirm('<?php echo e(route('orderDelete', $order->order_code)); ?>')" class="btn btn-danger float-end">Delete Order</a>
    </div>
  </div>

  <!-- Modal Update Status -->
  <div class="modal fade" id="modalUpdateStatus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalUpdateStatusLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalUpdateStatusLabel">Update Status Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo e(route('orderUpdateStatus', $order->order_code)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="input-group">
              <select class="form-select" id="inputGroupSelect01" name="status">
                <option value="0" <?php echo e($order->status == 0 ? 'selected' : ''); ?>>Unprocessed</option>
                <option value="1" <?php echo e($order->status == 1 ? 'selected' : ''); ?>>Confirmed</option>
                <option value="2" <?php echo e($order->status == 2 ? 'selected' : ''); ?>>Processed</option>
                <option value="3" <?php echo e($order->status == 3 ? 'selected' : ''); ?>>Pending</option>
                <option value="4" <?php echo e($order->status == 4 ? 'selected' : ''); ?>>Shipping</option>
                <option value="5" <?php echo e($order->status == 5 ? 'selected' : ''); ?>>Completed</option>
              </select>
              <button type="submit" class="input-group-text btn btn-primary" for="inputGroupSelect01">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
  <script>
    const alertconfirm = (url) => {
    Swal.fire({
        title: 'Sure to delete this order?',
        text: "This order will delete permanently",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace(url);
        }
    })
  }
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/admin/order/detail.blade.php ENDPATH**/ ?>