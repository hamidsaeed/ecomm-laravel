<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/vendors/simple-datatables/style.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('button'); ?>
<a href="<?php echo e(route('productCreate')); ?>" class="btn btn-outline-primary">Add</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Stock</th>
                    <th width="20%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo str_replace('-', ' ', ucwords($row->title)); ?></td>
                    <td>
                        <?php echo str_replace('-', ' ', ucwords($row->category->name)); ?>

                    </td>
                    <td><?php echo e($row->stock); ?></td>
                    <td>
                        <a href="<?php echo e(route('productEdit', $row->title )); ?>"><span class="btn btn-sm btn-outline-primary">Detail</span></a>
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/admin/product/index.blade.php ENDPATH**/ ?>