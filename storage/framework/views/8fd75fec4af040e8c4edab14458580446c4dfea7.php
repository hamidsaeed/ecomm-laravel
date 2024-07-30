<div class="container py-5">
    <h1 class="text-center py-4">Category</h1>
    <div class="row mb-4 g-md-4 g-3">
        <?php $__currentLoopData = $dataCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6 col-6">
                <?php if (isset($component)) { $__componentOriginalfc350bd0e5df4f8c2899c686d5dfaa31eef32a50 = $component; } ?>
<?php $component = App\View\Components\Molecules\CategoryCard::resolve(['path' => $item->path,'name' => $item->name] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php echo e($slot); ?>

</div><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/organisms/category.blade.php ENDPATH**/ ?>