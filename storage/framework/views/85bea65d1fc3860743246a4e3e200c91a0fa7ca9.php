<?php $total = 0 ?>
<?php if(session('cart')): ?>
    <?php $__currentLoopData = (array) session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $total += $details['price'] * $details['quantity'] ?>
    <div class="card item-cart mt-2">
    <?php if(!request()->routeIs('clientCheckout')): ?>
        <button class="btn btn-danger btn-sm" data-id="<?php echo e($id); ?>" onclick="deleteItem(<?php echo e($id); ?>, $(this), 'mobile')" style="position:absolute;z-index:9;right:0;"><i class="bi bi-trash"></i></button>
    <?php endif; ?>
        <div class="card-body">
            <h6 class="font-bold"><?php echo str_replace('-', ' ', ucwords($details['title'])); ?></h6>
            <div class="row">
                <div class="col-6">
                    <label for="price">Price</label>
                    <p id="price" class="font-bold">$<?php echo e($details['price']); ?></p>
                </div>
                <div class="col-6">
                    <label for="subtotal">Sub Total</label>
                    <p class="font-bold">$<span class="product-subtotal"><?php echo e($details['price'] * $details['quantity']); ?></span></p>
                </div>
                <div class="col-12">
                    <label for="quantity">Quantity : <?php echo e(request()->routeIs('clientCheckout') ? 'x'.$details['quantity'] : ''); ?></label>
                    <?php if(!request()->routeIs('clientCheckout')): ?>
                        <div id="input_div" class="mt-2">
                            <input type="button" value="-" onclick="minus($(this))" class="btn btn-outline-primary">
                            <input type="text" value="<?php echo e($details['quantity']); ?>" id="count" data-id="<?php echo e($id); ?>" data-price="<?php echo e($details['price']); ?>" class="count btn btn-outline-primary font-secondary" disabled>
                            <input type="button" value="+" onclick="plus($(this))" data-stock="<?php echo e($details['product_stock']); ?>" data-quantity="<?php echo e($details['quantity']); ?>" class="btn btn-outline-primary">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<div class="card mt-3 mb-4">
    <div class="card-body">
        <h5 class="font-secondary"><strong>Total : $<span class="cart-total"><?php echo e($total); ?></span></strong></h5>
        <?php if(!request()->routeIs('clientCheckout')): ?>
            <div class="d-flex justify-content-between mt-3 font-secondary">
                <a href="<?php echo e(url('/')); ?>" class="btn btn-sm btn-outline-secondary">
                    <span class="d-flex align-items-center gap-1">
                        <i class="bi bi-arrow-left"></i> Continue Shopping
                    </span>
                </a>
                <a href="/checkout" class="btn btn-sm btn-primary">CheckOut</a>
            </div>
        <?php endif; ?>
    </div>
</div><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/molecules/carts/mobile.blade.php ENDPATH**/ ?>