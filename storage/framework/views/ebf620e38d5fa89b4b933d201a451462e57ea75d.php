<?php $__env->startPush('css'); ?>
    <style>
        .order-info > tbody > tr{
          height:35px !important;
        }
    </style>
<?php $__env->stopPush(); ?>
<div class="container py-3">
    <div class="card bg-transparent border">
        <div class="card-body">
            <div class="row g-4">
                <div class="col-md-3 col-12">
                    <table class="order-info">
                        <tr>
                            <td><b>Status</b></td>
                            <td>&nbsp; : &nbsp;</td>
                            <td>
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
                            </td>
                        </tr>
                        <tr>
                            <td><b>Order Code</b></td>
                            <td>&nbsp; : &nbsp;</td>
                            <td><b><u>$<?php echo e($order->order_code); ?></u></b></td>
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
                <div class="col-md-9 col-12">
                    <h4>Order Detail</h4>
                    <div class="table-responsive d-md-block d-sm-blovk d-none">
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
                    <div class="d-lg-none d-sm-none d-block">
                        <?php $__currentLoopData = $orderDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card mt-2 bg-transparent" style="width: 100%;box-shadow: rgb(0 0 0 / 10%) 0px 10px 15px -3px, rgb(0 0 0 / 5%) 0px 4px 6px -2px;">
                                <div class="card-body" style="padding: .8rem;">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="font-bold font-primary"><?php echo str_replace('-', ' ', ucwords($row->title)); ?></h6>
                                        </div>
                                        <div class="col-6">
                                            <label for="">Price</label>
                                            <p class="font-bold">$<?php echo e($row->price); ?></p>
                                        </div>
                                        <div class="col-6">
                                            <label for="">Sub Total</label>
                                            <p class="font-bold">$<?php echo $row->price * $row->quantity; ?></p>
                                        </div>
                                        <div class="col-12">
                                            <label for="">Quantity</label>
                                            <p class="font-bold">X <?php echo e($row->quantity); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-transparent mt-3 border">
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <a href="<?php echo e(url('/')); ?>" class="btn btn-sm btn-outline-secondary font-secondary"><span class="d-flex align-items-center gap-2"><i class="bi bi-arrow-left"></i> Home </span></a>
          </div>
          <div class="col-8">
            <a href="/" class="btn btn-sm float-end btn-primary font-secondary"><span class="d-flex align-items-center gap-2"><i class="bi bi-telephone"></i> &nbsp;Confirm Order</span></a>
          </div>
        </div>
      </div>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/molecules/check-order/data.blade.php ENDPATH**/ ?>