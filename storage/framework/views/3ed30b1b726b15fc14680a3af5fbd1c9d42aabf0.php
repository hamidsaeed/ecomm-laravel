<div class="row">
    <div class="col-md-6 col-12">
        <?php if (isset($component)) { $__componentOriginal6a314164908b4be225a4447bdc5c3a2d7250d543 = $component; } ?>
<?php $component = App\View\Components\Molecules\ProductDetail\ProductImages::resolve(['dataProductimages' => $dataProduct->productImage] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.product-detail.product-images'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Molecules\ProductDetail\ProductImages::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6a314164908b4be225a4447bdc5c3a2d7250d543)): ?>
<?php $component = $__componentOriginal6a314164908b4be225a4447bdc5c3a2d7250d543; ?>
<?php unset($__componentOriginal6a314164908b4be225a4447bdc5c3a2d7250d543); ?>
<?php endif; ?>
    </div>
    <div class="col-md-6 col-12">
        <?php if (isset($component)) { $__componentOriginal07ec4158b1172eb8d30301c2e1e15de78dad1122 = $component; } ?>
<?php $component = App\View\Components\Molecules\ProductDetail\ProductContent::resolve(['dataProductContent' => $dataProduct] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.product-detail.product-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Molecules\ProductDetail\ProductContent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal07ec4158b1172eb8d30301c2e1e15de78dad1122)): ?>
<?php $component = $__componentOriginal07ec4158b1172eb8d30301c2e1e15de78dad1122; ?>
<?php unset($__componentOriginal07ec4158b1172eb8d30301c2e1e15de78dad1122); ?>
<?php endif; ?>
    </div>
</div><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/organisms/product-detail.blade.php ENDPATH**/ ?>