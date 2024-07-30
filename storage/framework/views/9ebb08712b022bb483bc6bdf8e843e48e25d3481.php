
<?php $__env->startPush('css'); ?>
  <style>
    .autosize:focus{
      box-shadow:none !important;
    }

    @media screen and (max-width: 767px){
      #input_div{
        display:flex;
        justify-content:space-between;
        gap:10px;
      }

      .add-to-cart, #count{
        width:100% !important;  
      }
    }

    #count{
      width:100px;
    }
  </style>
<?php $__env->stopPush(); ?>

<div>
    <h3 class="mt-md-0 mt-4"><?php echo str_replace('-', ' ', ucwords($dataProductContent->title)); ?></h3>
    <hr/>
    <h5>$<?php echo e($dataProductContent->price); ?></h5>
    <p>Category : <a href="<?php echo e(route('clientCategoryProducts', $dataProductContent->category->name)); ?>"><?php echo str_replace('-', ' ', ucwords($dataProductContent->category->name)); ?></a></p>
    <p><b>Description</b></p>
    <div class="form-group">
        <textarea class="form-control autosize" readonly><?php echo e($dataProductContent->desc); ?></textarea>
    </div>
    <p><b>Stock : <?php echo e($dataProductContent->stock); ?></b></p>
    <?php if($dataProductContent->stock !== 0): ?>
    <div id="input_div">
        <input type="button" value="-" id="moins" onclick="minus()" class="btn btn-outline-primary">
        <input type="text" value="1" id="count" class="btn btn-outline-primary font-secondary" disabled>
        <input type="button" value="+" id="plus" data-stok="<?php echo e($dataProductContent->stock); ?>" onclick="plus()" class="btn btn-outline-primary">
    </div>
    <button class="btn btn-primary btn-small font-secondary mt-4 add-to-cart" data-id-product="<?php echo e($dataProductContent->id); ?>" data-quantity="1">Add to cart</button>
    <?php endif; ?>
</div>
<?php $__env->startPush('js'); ?>
    <script>
      autosize();
      function autosize(){
          var text = $('.autosize');

          text.each(function(){
              $(this).attr('rows',1);
              resize($(this));
              this.style.overflow = 'hidden';
              this.style.backgroundColor = 'transparent';
              this.style.padding = '0';
              this.style.border = 'none';
              this.style.resize = 'none';
          });

          text.on('input', function(){
              resize($(this));
          });
          
          function resize ($text) {
              $text.css('height', 'auto');
              $text.css('height', $text[0].scrollHeight+'px');
          }
      }

      var count = 1;
      var countEl = document.getElementById("count");

      function plus(){
        let stok = $('#plus').attr('data-stok');
        if(stok == 0){
          count++;
          countEl.value = count;
          $('.add-to-cart').attr('data-quantity', count);
        }else{
          if(count < stok){
            count++;
            countEl.value = count;
            $('.add-to-cart').attr('data-quantity', count);
          }
        }
      }

      function minus(){
        if (count > 1) {
          count--;
          countEl.value = count;
          $('.add-to-cart').attr('data-quantity', count);
        }  
      }

      $(".add-to-cart").click(function (e) {
        let product_id =  $(this).attr("data-id-product");
        let quantity = $(this).attr("data-quantity");

        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
          type: "POST",
          dataType: "json",
          data: {"_token": "<?php echo e(csrf_token()); ?>", product_id: product_id, quantity : quantity},
          url : '<?php echo e(route("clientAddToCart")); ?>',
          success: function(data){
            $('#cartCount').text(data.cartCount);
            countEl.value = 1;
            count = 1;
          },
          statusCode: {
            200: () => {
              Toastify({
                text: "Success Add To Cart",
                duration: 3000,
                close:true,
                gravity:"top",
                position: "right",
                backgroundColor: "#4fbe87",
              }).showToast();
            },
            201: () => {
              Toastify({
                text: "Success Updated Quantity To Cart",
                duration: 3000,
                close:true,
                gravity:"top",
                position: "right",
                backgroundColor: "#4fbe87",
              }).showToast();
            },
            202: () => {
              Toastify({
                text: "This Product Max Quantity To Cart",
                duration: 3000,
                close:true,
                gravity:"top",
                position: "right",
                backgroundColor: "#f3616d",
              }).showToast();
            }
          }
        })
      });
    </script>
<?php $__env->stopPush(); ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/molecules/product-detail/product-content.blade.php ENDPATH**/ ?>