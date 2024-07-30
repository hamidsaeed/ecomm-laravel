<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-6 col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body px-3 py-4-5">
              <div class="row">
                  <div class="col-md-4">
                      <div class="stats-icon purple">
                          <i class="iconly-boldWallet"></i>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <h6 class="text-muted font-semibold">Sales</h6>
                      <h6 class="font-extrabold mb-0">$
                        <?php echo e($sales); ?>

                      </h6>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-6 col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body px-3 py-4-5">
              <div class="row">
                  <div class="col-md-4">
                      <div class="stats-icon blue">
                          <i class="iconly-boldBuy"></i>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <h6 class="text-muted font-semibold">Completed</h6>
                      <h6 class="font-extrabold mb-0"><?php echo e($order); ?></h6>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-6 col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body px-3 py-4-5">
              <div class="row">
                  <div class="col-md-4">
                      <div class="stats-icon green">
                          <i class="iconly-boldBag-2"></i>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <h6 class="text-muted font-semibold">Products</h6>
                      <h6 class="font-extrabold mb-0"><?php echo e($product); ?></h6>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-6 col-lg-3 col-md-6">
    <a href="">
      <div class="card">
          <div class="card-body px-3 py-4-5">
              <div class="row">
                  <div class="col-md-4">
                      <div class="stats-icon red">
                          <i class="iconly-boldCategory"></i>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <h6 class="text-muted font-semibold">Category</h6>
                      <h6 class="font-extrabold mb-0"><?php echo e($category); ?></h6>
                  </div>
              </div>
          </div>
      </div>
    </a>
  </div>
</div>

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
                <?php $__currentLoopData = $newOrder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/admin/index.blade.php ENDPATH**/ ?>