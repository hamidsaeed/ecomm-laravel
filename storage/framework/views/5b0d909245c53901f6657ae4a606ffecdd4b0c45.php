<?php $__env->startPush('css'); ?>
    <style>
        #input_div{
            display:flex;
            justify-content:space-between;
            gap:10px;
        }

        .add-to-cart, #count{
            width:100px !important;  
        }

        @media screen and (max-width: 767px){
            #input_div{
                gap:10px;
            }

            .add-to-cart, #count{
                width:100% !important;  
            }
        }
    </style>
<?php $__env->stopPush(); ?>
<div class="container py-2">
    <div class="d-lg-block d-sm-block d-none">
        <?php if (isset($component)) { $__componentOriginal3f3159731ad3c65557476cdc387c17fa3e5f935a = $component; } ?>
<?php $component = App\View\Components\Molecules\Carts\Desktop::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.carts.desktop'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Molecules\Carts\Desktop::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f3159731ad3c65557476cdc387c17fa3e5f935a)): ?>
<?php $component = $__componentOriginal3f3159731ad3c65557476cdc387c17fa3e5f935a; ?>
<?php unset($__componentOriginal3f3159731ad3c65557476cdc387c17fa3e5f935a); ?>
<?php endif; ?>
    </div>

    <div class="d-lg-none d-sm-none d-block">
        <?php if (isset($component)) { $__componentOriginalb4b1b7eaf8060f10845a67c07f6d45548c0b795f = $component; } ?>
<?php $component = App\View\Components\Molecules\Carts\Mobile::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.carts.mobile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Molecules\Carts\Mobile::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4b1b7eaf8060f10845a67c07f6d45548c0b795f)): ?>
<?php $component = $__componentOriginalb4b1b7eaf8060f10845a67c07f6d45548c0b795f; ?>
<?php unset($__componentOriginalb4b1b7eaf8060f10845a67c07f6d45548c0b795f); ?>
<?php endif; ?>      
    </div>
</div>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/vendors/jquery/jquery.min.js')); ?>"></script>
    <script>
        function update(product_id, quantity){
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
                type: "POST",
                dataType: "json",
                data: {"_token": "<?php echo e(csrf_token()); ?>", product_id: product_id, quantity : quantity},
                url : '<?php echo e(route("clientUpdateCart")); ?>',
                success: function(data){
                    $(".cart-total").text(data.total);
                }
            })
        }

        function plus(selector){
            let stock = selector.data('stock');
            let quantity = selector.data('quantity');
            let valueStock = selector.parent( "#input_div" ).find("#count");
            const subTotal = selector.parent().parent().parent().find(".product-subtotal");
            let countStock = valueStock.val();
            const id = valueStock.data('id');

            if(countStock < stock){
                countStock++;
                valueStock.val(countStock);
                total = valueStock.data('price') * countStock;
                update(id, countStock);
                subTotal.text(total);
            }
        }

        function minus(selector){
            let valueStock = selector.parent( "#input_div" ).find("#count");
            let countStock = valueStock.val();
            const subTotal = selector.parent().parent().parent().find(".product-subtotal");
            const id = valueStock.data('id');
            if (valueStock.val() > 1) {
                countStock--;
                valueStock.val(countStock);
                total = valueStock.data('price') * countStock;
                update(id, countStock);
                subTotal.text(total);
            }  
        }

        function deleteItem(id, selector, type){
            let removeItem;
            if(type == 'desktop'){
                removeItem = selector.parent().parent();
            }else{
                removeItem = selector.parent();
            }
            
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
                type: "POST",
                dataType: "json",
                data: {"_token": "<?php echo e(csrf_token()); ?>", id: id},
                url : '<?php echo e(route("clientDeleteCart")); ?>',
                success: function(data){
                    $(".cart-total").text(data.total);
                    removeItem.remove();
                    $('#cartCount').text(data.cartCount);
                    Toastify({
                        text: "Success Deleted Item From Cart",
                        duration: 3000,
                        close:true,
                        gravity:"top",
                        position: "right",
                        backgroundColor: "#4fbe87",
                    }).showToast();
                }
            })
        }
    </script>
<?php $__env->stopPush(); ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/organisms/carts.blade.php ENDPATH**/ ?>