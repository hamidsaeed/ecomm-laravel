<?php $__currentLoopData = $dataImage->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="hero-product" style="background-image: url(<?php echo e(asset('shop/products/'. $image->path )); ?>)">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="d-flex flex-column justify-content-between">
    <p class="text-white fw-bolder"><?php echo str_replace('-', ' ', ucwords($title)); ?> </p>
    <?php if (isset($component)) { $__componentOriginaldd0ce856c3ea49f74e71c4aff4cde182914fa869 = $component; } ?>
<?php $component = App\View\Components\Molecules\Button::resolve(['arrow' => 'true','type' => 'light','icon' => 'bi-arrow-right','align' => 'end','link' => ''.e(route('clientProductDetail', $title)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Molecules\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd0ce856c3ea49f74e71c4aff4cde182914fa869)): ?>
<?php $component = $__componentOriginaldd0ce856c3ea49f74e71c4aff4cde182914fa869; ?>
<?php unset($__componentOriginaldd0ce856c3ea49f74e71c4aff4cde182914fa869); ?>
<?php endif; ?>
</div>
</div><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/molecules/hero/card-product.blade.php ENDPATH**/ ?>