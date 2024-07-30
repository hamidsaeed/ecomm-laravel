<?php if (isset($component)) { $__componentOriginal1466a957f11e9b118971dfe45f1c1271adbd51ef = $component; } ?>
<?php $component = App\View\Components\Template\Layout::resolve(['title' => ''.e($title).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('template.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Template\Layout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <?php if (isset($component)) { $__componentOriginala1c6e42c635eda76419a0e121230523106522369 = $component; } ?>
<?php $component = App\View\Components\Organisms\Navbar::resolve(['path' => $shop->path] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Organisms\Navbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['cartCount' => '10']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala1c6e42c635eda76419a0e121230523106522369)): ?>
<?php $component = $__componentOriginala1c6e42c635eda76419a0e121230523106522369; ?>
<?php unset($__componentOriginala1c6e42c635eda76419a0e121230523106522369); ?>
<?php endif; ?>
  <?php if (isset($component)) { $__componentOriginal59307e6ae75e5e528b148750e34aa7ecc1035857 = $component; } ?>
<?php $component = App\View\Components\Organisms\Category::resolve(['dataCategory' => $category] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.category'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Organisms\Category::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo e($category->links('vendor.pagination.bootstrap-5')); ?>

   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59307e6ae75e5e528b148750e34aa7ecc1035857)): ?>
<?php $component = $__componentOriginal59307e6ae75e5e528b148750e34aa7ecc1035857; ?>
<?php unset($__componentOriginal59307e6ae75e5e528b148750e34aa7ecc1035857); ?>
<?php endif; ?>
  <?php if (isset($component)) { $__componentOriginal6bfe9cdfa5badbb664ab59c77cb8f6f55f8fa068 = $component; } ?>
<?php $component = App\View\Components\Organisms\Footer::resolve(['shop' => $shop] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Organisms\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bfe9cdfa5badbb664ab59c77cb8f6f55f8fa068)): ?>
<?php $component = $__componentOriginal6bfe9cdfa5badbb664ab59c77cb8f6f55f8fa068; ?>
<?php unset($__componentOriginal6bfe9cdfa5badbb664ab59c77cb8f6f55f8fa068); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1466a957f11e9b118971dfe45f1c1271adbd51ef)): ?>
<?php $component = $__componentOriginal1466a957f11e9b118971dfe45f1c1271adbd51ef; ?>
<?php unset($__componentOriginal1466a957f11e9b118971dfe45f1c1271adbd51ef); ?>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/category.blade.php ENDPATH**/ ?>