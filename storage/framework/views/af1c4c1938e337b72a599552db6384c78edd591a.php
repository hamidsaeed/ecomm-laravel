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
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala1c6e42c635eda76419a0e121230523106522369)): ?>
<?php $component = $__componentOriginala1c6e42c635eda76419a0e121230523106522369; ?>
<?php unset($__componentOriginala1c6e42c635eda76419a0e121230523106522369); ?>
<?php endif; ?>
  <?php if (isset($component)) { $__componentOriginal581085533ef44ee0dd2a0419ec93301d5f64d549 = $component; } ?>
<?php $component = App\View\Components\Molecules\CheckOrder\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.check-order.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Molecules\CheckOrder\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal581085533ef44ee0dd2a0419ec93301d5f64d549)): ?>
<?php $component = $__componentOriginal581085533ef44ee0dd2a0419ec93301d5f64d549; ?>
<?php unset($__componentOriginal581085533ef44ee0dd2a0419ec93301d5f64d549); ?>
<?php endif; ?>
  <?php if(!empty($order)): ?>
    <?php if (isset($component)) { $__componentOriginal961fed5bb1b3c1cd0977b30681490a45599e6949 = $component; } ?>
<?php $component = App\View\Components\Molecules\CheckOrder\Data::resolve(['order' => $order,'orderDetail' => $orderDetail] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.check-order.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Molecules\CheckOrder\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal961fed5bb1b3c1cd0977b30681490a45599e6949)): ?>
<?php $component = $__componentOriginal961fed5bb1b3c1cd0977b30681490a45599e6949; ?>
<?php unset($__componentOriginal961fed5bb1b3c1cd0977b30681490a45599e6949); ?>
<?php endif; ?>
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
<?php endif; ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/check-order.blade.php ENDPATH**/ ?>