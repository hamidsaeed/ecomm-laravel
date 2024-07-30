<table id="cart" class="table table-hover table-striped">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:25">Quantity</th>
            <th style="width:15%">Subtotal</th>
            <?php if(!request()->routeIs('clientCheckout')): ?>
                <th style="width:5%">Action</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
    <?php $total = 0 ?>
    <?php if(session('cart')): ?>
        <?php $__currentLoopData = (array) session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $total += $details['price'] * $details['quantity'] ?>
            <tr class="item-cart">
                <td>
                    <?php echo str_replace('-', ' ', ucwords($details['title'])); ?> 
                </td>
                <td>
                    $<?php echo e($details['price']); ?>

                </td>
                <td>
                    <?php if(request()->routeIs('clientCheckout')): ?>
                       x<?php echo e($details['quantity']); ?>

                    <?php else: ?>
                        <div id="input_div">
                            <input type="button" value="-" onclick="minus($(this))" class="btn btn-outline-primary">
                            <input type="text" value="<?php echo e($details['quantity']); ?>" id="count" data-id="<?php echo e($id); ?>" data-price="<?php echo e($details['price']); ?>" class="count btn btn-outline-primary font-secondary" disabled>
                            <input type="button" value="+" onclick="plus($(this))" data-stock="<?php echo e($details['product_stock']); ?>" data-quantity="<?php echo e($details['quantity']); ?>" class="btn btn-outline-primary">
                        </div>
                    <?php endif; ?>
                </td>
                <td>$<span class="product-subtotal" data-subtotal="<?php echo e($details['price'] * $details['quantity']); ?>"><?php echo e($details['price'] * $details['quantity']); ?></span></td>
                <?php if(!request()->routeIs('clientCheckout')): ?>
                    <td class="actions">
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="<?php echo e($id); ?>" onclick="deleteItem(<?php echo e($id); ?>, $(this), 'desktop')"><i class="bi bi-trash"></i></button>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    </tbody>
    <tfoot>
        <tr>
            <td>
            <?php if(!request()->routeIs('clientCheckout')): ?>
                <a href="<?php echo e(url('/')); ?>" class="btn btn-outline-secondary">
                    <span class="d-flex align-items-center gap-1">
                        <i class="bi bi-arrow-left"></i> Continue Shopping
                    </span>
                </a>
            <?php endif; ?>
            </td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs">
                <strong>Total : $<span class="cart-total"><?php echo e($total); ?></span></strong>
            </td>
            <?php if(!request()->routeIs('clientCheckout')): ?>
                <td>
                    <a href="/checkout" class="btn btn-primary">CheckOut</a>
                </td>
            <?php endif; ?>
        </tr>
    </tfoot>
</table><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/molecules/carts/desktop.blade.php ENDPATH**/ ?>