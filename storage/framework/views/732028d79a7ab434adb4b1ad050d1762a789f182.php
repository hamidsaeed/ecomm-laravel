<?php $__env->startPrepend('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('client/components/organisms/navbar/style.css')); ?>">
<?php $__env->stopPrepend(); ?>
<header class="header" id="header">
  <nav class="nav container">
    <div class="nav-button">
      <div class="nav-toggle" id="nav-toggle">
        <i class="bi bi-list"></i>
      </div>
    </div>
    <a href="/" class="nav-logo" id="logo">
      <img src="<?php echo e(asset('shop/'.$path)); ?>" alt="">
    </a>
    <div class="nav-menu" id="nav-menu">
     <?php if (isset($component)) { $__componentOriginal7c2effbf854850037ef08c86d079d16f35a4b504 = $component; } ?>
<?php $component = App\View\Components\Molecules\Navbar\Menu::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.navbar.menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Molecules\Navbar\Menu::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c2effbf854850037ef08c86d079d16f35a4b504)): ?>
<?php $component = $__componentOriginal7c2effbf854850037ef08c86d079d16f35a4b504; ?>
<?php unset($__componentOriginal7c2effbf854850037ef08c86d079d16f35a4b504); ?>
<?php endif; ?>
      <div class="nav-close" id="nav-close">
        <i class="bi bi-x"></i>
      </div>
    </div>
    <div class="icon-left">
      <?php if (isset($component)) { $__componentOriginal45e4375bec323d97417f0f3ab04256bc5b56f5a9 = $component; } ?>
<?php $component = App\View\Components\Molecules\Navbar\SearchBar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.navbar.search-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Molecules\Navbar\SearchBar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45e4375bec323d97417f0f3ab04256bc5b56f5a9)): ?>
<?php $component = $__componentOriginal45e4375bec323d97417f0f3ab04256bc5b56f5a9; ?>
<?php unset($__componentOriginal45e4375bec323d97417f0f3ab04256bc5b56f5a9); ?>
<?php endif; ?>
    </div>
  </nav>
</header>
<?php $__env->startPrepend('js'); ?>
  <script>
    const navMenu = document.getElementById("nav-menu"),
    navToggle = document.getElementById("nav-toggle"),
    navClose = document.getElementById("nav-close"),
    logo = document.getElementById("logo");

    if (navToggle) {
        navToggle.addEventListener("click", () => {
            navMenu.classList.add("show-menu");
        });
    }

    if (navClose) {
        navClose.addEventListener("click", () => {
            navMenu.classList.remove("show-menu");
        });
    }

    function Onfocus() {
        if (window.matchMedia("(min-width:767px)").matches) {
            navMenu.classList.add("d-none");
        } else {
            logo.classList.add("d-none");
        }
    }

    function Onblur() {
        if (window.matchMedia("(min-width:767px)").matches) {
            navMenu.classList.remove("d-none");
        } else {
            logo.classList.remove("d-none");
        }
    }
  </script>
<?php $__env->stopPrepend(); ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/organisms/navbar.blade.php ENDPATH**/ ?>