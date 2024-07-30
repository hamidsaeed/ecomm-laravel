<div class="category-card" style="width:<?php echo e($width); ?>;background-image: url(<?php echo e(asset('shop/products/'. $path )); ?>)">
    <div class="py-5 ">
        <h2 class="text-center text-white"><?php echo str_replace('-', ' ', ucwords($name)); ?></h2>
        <?php if (isset($component)) { $__componentOriginaldd0ce856c3ea49f74e71c4aff4cde182914fa869 = $component; } ?>
<?php $component = App\View\Components\Molecules\Button::resolve(['text' => 'View Product','type' => 'light','align' => 'center','size' => 'sm','link' => ''.e(route('clientCategoryProducts', $name)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
</div><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/molecules/category-card.blade.php ENDPATH**/ ?>