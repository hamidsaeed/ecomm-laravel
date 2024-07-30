<?php $__env->startPush('css'); ?>
    <style>
         .product-title{
            font-size:1.2rem;
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            height:3.5rem;
            transition: 0.2s cubic-bezier(0.57, 0, 0.06, 0.95);
        }

        .card:hover{
            transition: 0.2s cubic-bezier(0.57, 0, 0.06, 0.95);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        }
        
        @media screen and (max-width: 767px){
            .product-title{
                font-size:1rem;
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<div class="container py-5">
    <?php echo e($slot); ?>

    <div class="row g-3">
        <?php $__currentLoopData = $dataProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal1bf8c9ddb18d38a4b5e983588c343f4a9b4dc81b = $component; } ?>
<?php $component = App\View\Components\Molecules\ProductCard::resolve(['image' => $item->productImage,'category' => $item->category->name,'title' => $item->title,'price' => $item->price] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.product-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Molecules\ProductCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1bf8c9ddb18d38a4b5e983588c343f4a9b4dc81b)): ?>
<?php $component = $__componentOriginal1bf8c9ddb18d38a4b5e983588c343f4a9b4dc81b; ?>
<?php unset($__componentOriginal1bf8c9ddb18d38a4b5e983588c343f4a9b4dc81b); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php echo e($productCTA ?? ''); ?>

</div><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/organisms/products.blade.php ENDPATH**/ ?>