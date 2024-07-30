<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/owl-carousel/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/owl-carousel/owl.theme.default.min.css')); ?>">
<?php $__env->stopPush(); ?>

<div class="categories owl-carousel mt-3">
    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalfc350bd0e5df4f8c2899c686d5dfaa31eef32a50 = $component; } ?>
<?php $component = App\View\Components\Molecules\CategoryCard::resolve(['path' => $item->path,'name' => $item->name,'width' => '300px'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.category-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Molecules\CategoryCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc350bd0e5df4f8c2899c686d5dfaa31eef32a50)): ?>
<?php $component = $__componentOriginalfc350bd0e5df4f8c2899c686d5dfaa31eef32a50; ?>
<?php unset($__componentOriginalfc350bd0e5df4f8c2899c686d5dfaa31eef32a50); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/vendors/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/owl-carousel/owl.carousel.min.js')); ?>"></script>
    <script>
      $(".categories").owlCarousel({
        autoplay:true,
        loop:true,
        margin:10,
        autoHeight:true,
        autoWidth:true,
        center: true,
        singleItem: true,
        responsive:{
            0:{
                items:2,
                center: true,
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
      });
    </script>
<?php $__env->stopPush(); ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/organisms/carousel-category.blade.php ENDPATH**/ ?>