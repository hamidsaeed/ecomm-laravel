<?php $__env->startSection('button'); ?>
  <a href="<?php echo e(route('categoryCreate')); ?>" class="btn btn-outline-primary">Create</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-4 col-6">
            <div class="card shadow">
              <a href="javascript:void(0)" onclick="alertconfirm('<?php echo e(route('categoryDelete', ['id' => $item->id, 'path' => $item->path] )); ?>')"  class="btn btn-sm btn-danger" style="position:absolute;z-index:9;right:0;"><i class="bi bi-trash"></i></a>
              <div class="card-content">
                <img src='<?php echo e(asset("shop/products/$item->path")); ?>' alt="" class="card-img-top img-fluid" style="height:200px;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo str_replace('-', ' ', ucwords($item->name)); ?></h5>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
const alertconfirm = (url) => {
    Swal.fire({
        title: 'Sure to delete this category?',
        text: "This category will delete permanently",
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/admin/category/index.blade.php ENDPATH**/ ?>