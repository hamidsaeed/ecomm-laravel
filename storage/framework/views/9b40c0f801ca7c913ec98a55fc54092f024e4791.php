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
  <?php if (isset($component)) { $__componentOriginalbf8940884840783e8d2e5cfb5ad3994004efc142 = $component; } ?>
<?php $component = App\View\Components\Organisms\Hero::resolve(['dataProduct' => $product] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Organisms\Hero::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbf8940884840783e8d2e5cfb5ad3994004efc142)): ?>
<?php $component = $__componentOriginalbf8940884840783e8d2e5cfb5ad3994004efc142; ?>
<?php unset($__componentOriginalbf8940884840783e8d2e5cfb5ad3994004efc142); ?>
<?php endif; ?>
  <?php if (isset($component)) { $__componentOriginal77ef35d6602b8ce11f31545a167362cb8fa4e1fb = $component; } ?>
<?php $component = App\View\Components\Organisms\ChoosenUs::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.choosen-us'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Organisms\ChoosenUs::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal77ef35d6602b8ce11f31545a167362cb8fa4e1fb)): ?>
<?php $component = $__componentOriginal77ef35d6602b8ce11f31545a167362cb8fa4e1fb; ?>
<?php unset($__componentOriginal77ef35d6602b8ce11f31545a167362cb8fa4e1fb); ?>
<?php endif; ?>
  <?php if (isset($component)) { $__componentOriginaled2e79b02b634e8a7bb3e347c47091708f5e0de8 = $component; } ?>
<?php $component = App\View\Components\Organisms\Discounts::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.discounts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Organisms\Discounts::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2e79b02b634e8a7bb3e347c47091708f5e0de8)): ?>
<?php $component = $__componentOriginaled2e79b02b634e8a7bb3e347c47091708f5e0de8; ?>
<?php unset($__componentOriginaled2e79b02b634e8a7bb3e347c47091708f5e0de8); ?>
<?php endif; ?>
  <?php if (isset($component)) { $__componentOriginalb27936a4db09093989f1a502b88dea90970ed6a3 = $component; } ?>
<?php $component = App\View\Components\Organisms\Products::resolve(['dataProduct' => $product] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.products'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Organisms\Products::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <h1 class="text-center pb-5">Recent Popular Product</h1>
     <?php $__env->slot('productCTA', null, []); ?> 
      <div class="pt-5">
        <?php if (isset($component)) { $__componentOriginaldd0ce856c3ea49f74e71c4aff4cde182914fa869 = $component; } ?>
<?php $component = App\View\Components\Molecules\Button::resolve(['text' => 'More products','align' => 'center','icon' => 'bi-arrow-right','arrow' => 'true','link' => ''.e(route('clientProducts')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
     <?php $__env->endSlot(); ?>
   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb27936a4db09093989f1a502b88dea90970ed6a3)): ?>
<?php $component = $__componentOriginalb27936a4db09093989f1a502b88dea90970ed6a3; ?>
<?php unset($__componentOriginalb27936a4db09093989f1a502b88dea90970ed6a3); ?>
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
    <?php if (isset($component)) { $__componentOriginaldd0ce856c3ea49f74e71c4aff4cde182914fa869 = $component; } ?>
<?php $component = App\View\Components\Molecules\Button::resolve(['text' => 'More Category','arrow' => 'true','icon' => 'bi-arrow-right','align' => 'center','link' => ''.e(route('clientCategory')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59307e6ae75e5e528b148750e34aa7ecc1035857)): ?>
<?php $component = $__componentOriginal59307e6ae75e5e528b148750e34aa7ecc1035857; ?>
<?php unset($__componentOriginal59307e6ae75e5e528b148750e34aa7ecc1035857); ?>
<?php endif; ?>
  <?php if (isset($component)) { $__componentOriginal60efc87842c38431501674704cfb5747c5902e94 = $component; } ?>
<?php $component = App\View\Components\Organisms\JoinCommunity::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.join-community'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Organisms\JoinCommunity::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal60efc87842c38431501674704cfb5747c5902e94)): ?>
<?php $component = $__componentOriginal60efc87842c38431501674704cfb5747c5902e94; ?>
<?php unset($__componentOriginal60efc87842c38431501674704cfb5747c5902e94); ?>
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
<?php endif; ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/index.blade.php ENDPATH**/ ?>