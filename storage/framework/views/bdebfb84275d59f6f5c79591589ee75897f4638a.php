<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/vendors/simple-datatables/style.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Order Code</th>
                    <th>Name</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th width="20%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($row->order_code); ?></td>
                    <td><?php echo e($row->name); ?></td>
                    <td>$<?php echo e($row->total); ?></td>
                    <td>
                      <?php if($row->status == 0): ?>
                        <span class="badge bg-warning">Unprocessed</span>
                      <?php elseif($row->status == 1): ?>
                        <span class="badge bg-info">Confirmed</span>
                      <?php elseif($row->status == 2): ?>
                        <span class="badge bg-primary">Processed</span>
                      <?php elseif($row->status == 3): ?>
                        <span class="badge bg-danger">Pending</span>
                      <?php elseif($row->status == 4): ?>
                        <span class="badge bg-secondary">Shipping</span>
                      <?php elseif($row->status == 5): ?>
                        <span class="badge bg-success">Completed</span>
                      <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(route('orderDetail', $row->order_code)); ?>"><span class="btn btn-sm btn-outline-primary">Detail</span></a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tbody>
        </table>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('assets/vendors/simple-datatables/simple-datatables.js')); ?>"></script>
<script>
  let table1 = document.querySelector('#table1');
  let dataTable = new simpleDatatables.DataTable(table1);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/admin/order/index.blade.php ENDPATH**/ ?>