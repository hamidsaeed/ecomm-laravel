<div class="bg-primary py-5 text-center container mt-5" style="border-radius:1.5rem;background: linear-gradient(180deg, rgba(37, 57, 111, 0.5) 0%, rgba(37, 57, 111, 0.5) 92.57%);">
    <h1 class="text-white">Join Our Community</h1>
    <p class="text-white fs-5">Meet the company team, collector, announcements, special offers and more . . .</p>
    <?php if (isset($component)) { $__componentOriginaldd0ce856c3ea49f74e71c4aff4cde182914fa869 = $component; } ?>
<?php $component = App\View\Components\Molecules\Button::resolve(['text' => 'Launch Discord','align' => 'center','type' => 'light'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
</div><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/organisms/join-community.blade.php ENDPATH**/ ?>