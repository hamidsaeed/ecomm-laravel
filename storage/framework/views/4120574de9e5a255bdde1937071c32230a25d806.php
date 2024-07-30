<div class="col-md-3 col-6">
    <a href="<?php echo e(route('clientProductDetail', $title)); ?>">
        <div class="card mb-0">
            <div class="card-content">
                <?php $__currentLoopData = $image->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e(asset('shop/products/'. $item->path)); ?>" alt="" class="card-img-top img-fluid">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="card-body p-md-3 p-2">
                    <p class="mb-0"><small><?php echo str_replace('-', ' ', ucwords($category)); ?></small></p>
                    <p class="fw-bolder product-title mb-1"><?php echo str_replace('-', ' ', ucwords($title)); ?></p>
                    <p>$ <?php echo e($price); ?></p>
                </div>
            </div>
        </div>
    </a>
</div><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/molecules/product-card.blade.php ENDPATH**/ ?>