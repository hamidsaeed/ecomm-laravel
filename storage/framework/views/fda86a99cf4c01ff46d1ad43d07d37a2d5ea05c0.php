<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/images-product-slider/swiper.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/images-product-slider/easyzoom.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('client/components/molecules/product-detail/product-images/style.css')); ?>">
<?php $__env->stopPush(); ?>

<div>
    <div class="product__carousel">
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <?php $__currentLoopData = $dataProductimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="swiper-slide easyzoom easyzoom--overlay">
                <a href="<?php echo e(asset('shop/products/'.$row->path)); ?>">
                  <img src="<?php echo e(asset('shop/products/'.$row->path)); ?>">
                </a>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>

          <div class="swiper-button-next swiper-button-white"></div>
          <div class="swiper-button-prev swiper-button-white"></div>
        </div>

        <div class="swiper-container gallery-thumbs">
          <div class="swiper-wrapper">
            <?php $__currentLoopData = $dataProductimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="swiper-slide">
                <img src="<?php echo e(asset('shop/products/'.$row->path)); ?>">
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
</div>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/vendors/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/images-product-slider/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/images-product-slider/easyzoom.js')); ?>"></script>
    <script src="<?php echo e(asset('client/components/molecules/product-detail/product-images/main.js')); ?>"></script>
<?php $__env->stopPush(); ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/molecules/product-detail/product-images.blade.php ENDPATH**/ ?>