<?php $__env->startSection('css'); ?>
  <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/select-live/dselect.scss')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/dropzone/dropzone.min.css')); ?>">
  <style>
  .product-image-item{
    display: inline-block;
    height: 100px;
    width: 100px;
    text-align: center;
    position: relative;
    overflow: hidden;
    border-radius:8px;
  }

  .product-image-item img{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
  }

  .form-select{
    text-align:left !important;
  }

  .dropdown-menu{
    border: 1px solid #dce7f1;
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="card-body row">
      <div class="col-md-6 col-12">
        <form action="<?php echo e(route('productEditSave', ['product' => $product->title, 'id' => $product->id])); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control  <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Chicken nugget spicy" value="<?php echo e(old('title') ? old('title') : $product->title); ?>" required>
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
              <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-select <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
              <option selected disabled>Select Category</option>
              <?php $__currentLoopData = Auth::user()->shop->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>" <?php echo e($product->category->id   == $item->id ? 'selected' : ''); ?>><?php echo e($item->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
              <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control  <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="1000" value="<?php echo e($product->price); ?>" >
            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
              <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control  <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="10" value="<?php echo e($product->stock); ?>" >
            <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
              <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div class="form-group">
              <label for="desc">Description</label>
              <textarea name="desc" id="desc" cols="30" class="form-control autosize <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Homade spicy chicken nuggets with healty chicken  . . ." required><?php echo e($product->desc); ?></textarea>
              <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($message); ?></strong>
                  </span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <button type="submit" class="btn btn-primary float-end">Save</button>
        </form>
      </div>
      <div class="col-md-6 col-12">
        <form method="post" action="<?php echo e(route('productAddImagesSave')); ?>" enctype="multipart/form-data" class="dropzone mt-4" id="dropzone" style="border-radius:12px;">
          <input type="hidden" name="id_product" value="<?php echo e($product->id); ?>">
          <div class="dz-message" data-dz-message>
            <span>Upload Product Gallery</span><br>
            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.75 12.25H19.25V19.25H12.25V22.75H19.25V29.75H22.75V22.75H29.75V19.25H22.75V12.25ZM21 3.5C11.34 3.5 3.5 11.34 3.5 21C3.5 30.66 11.34 38.5 21 38.5C30.66 38.5 38.5 30.66 38.5 21C38.5 11.34 30.66 3.5 21 3.5ZM21 35C13.2825 35 7 28.7175 7 21C7 13.2825 13.2825 7 21 7C28.7175 7 35 13.2825 35 21C35 28.7175 28.7175 35 21 35Z" fill="black" fill-opacity="0.3"/></svg>
          </div>
          <?php echo csrf_field(); ?>
        </form>
        <div class="row mt-3 product-images">
          
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <a href="javascript:void(0)" onClick="deleteProduct('<?php echo e(route('productDelete', $product->id)); ?>')" class="btn btn-danger float-end">Delete</a>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('assets/vendors/select-live/dselect.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendors/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendors/dropzone/dropzone.js')); ?>"></script>
<script>

autosize();
function autosize(){
    var text = $('.autosize');

    text.each(function(){
        $(this).attr('rows',1);
        resize($(this));
        this.style.overflow = 'hidden';
    });

    text.on('input', function(){
        resize($(this));
    });
    
    function resize ($text) {
        $text.css('height', 'auto');
        $text.css('height', $text[0].scrollHeight+'px');
    }
}

  var select_box_element = document.querySelector('#category')
  dselect(select_box_element, {
      search: true
  });

  document.getElementById('desc').addEventListener('keyup', function() {
      this.style.overflow = 'hidden';
      this.style.height = 0;
      this.style.height = this.scrollHeight + 'px';
  }, false);

  const title = document.getElementById("title");
  title.addEventListener('keyup', function(e){
      let result = title.value.replace(/\s+/g, "-");
      let capital = title.value.replace(/[A-Z]/g, "$&");
      title.value = result.toLowerCase()
  });

  $('#title').keyup(function(){
    let title = this.value

    setTimeout(() => {
      $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
        type: 'POST',
        dataType: 'json',
        data: {"_token" : "<?php echo e(csrf_token()); ?>", title: title},
        url: '<?php echo e(route("productCheck")); ?>',
        success: function(data){
          if(title == '<?php echo e($product->title); ?>'){
            $('#title').removeClass('is-invalid');
            $('#title').addClass('is-valid');
          }else if(data.code == 200){
            $('#title').addClass('is-invalid');
            $('#title').removeClass('is-valid');
          }else if(data.code == 201){
            $('#title').removeClass('is-invalid');
            $('#title').addClass('is-valid');
          }
        },
      })
    }, 100);

  })

  function allDataImages(){
    $.ajax({
      type: "POST",
      dataType: 'json',
      data: {"_token": "<?php echo e(csrf_token()); ?>", id_products:'<?php echo e($product->id); ?>'},
      url : '<?php echo e(route("productGetImages")); ?>',
      success: function(response){
       let data = "";
       $.each(response, function(key, value){
          data = data + '<div class="col-lg-3 col-md-3 col-12 ">'
          data = data + '<div class="product-image-item mb-4">'
          data = data + '<button class="btn btn-danger btn-sm delete-image-product" data-id="'+value.id+'" style="position:absolute;z-index:9;right:0;" onClick=alertconfirm("'+value.path+'")><i class="bi bi-trash"></i></button>'
          data = data + '<img src="<?php echo e(asset("shop/products/")); ?>/'+value.path+'">'
          data = data + '</div>'
          data = data + '</div>'
        })
        $('.product-images').html(data);

      }
    })
  }

  allDataImages();

  Dropzone.options.dropzone = {
      accept: function(file, done) {
            done();
          },
          init: function() {
          this.on("maxfilesexceeded", function(file){
              document.getElementById('alerts').classList.add('show');
              this.removeFile(file);
          });
      },
      renameFile: function(file) {
          function getFileExtension(filename){
          const extension = filename.split('.').pop();
          return extension;
          }
          const result1 = getFileExtension(file.name);
          var dt = new Date();
          var time = dt.getTime();
          return time + '.' + result1;
      },
      acceptedFiles: ".jpeg,.jpg,.png,.pdf,.doc,.docx",
      addRemoveLinks: true,
      timeout: 50000,
      removedfile: function(file)
      {
        var name = file.upload.filename;
          
          $.ajax({
              headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
              type: 'POST',
              url: '<?php echo e(route("productDeleteImages")); ?>',
              data: {"_token": "<?php echo e(csrf_token()); ?>", filename: name},
              success: function (data){
                allDataImages();
              },
              error: function(e) {
                  console.log(e);
              }
          });
          var fileRef;
          return (fileRef = file.previewElement) != null ?
          fileRef.parentNode.removeChild(file.previewElement) : void 0;
      },
      success: function(file, response)
      {
        allDataImages();
      },
      error: function(file, response)
      {
        return false;
      }
  };

  const alertconfirm = (path) => {
    Swal.fire({
        title: 'Sure to delete this image?',
        text: "This image will delete permanently",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
              headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
              type: 'POST',
              url: '<?php echo e(route("productDeleteImages")); ?>',
              data: {"_token": "<?php echo e(csrf_token()); ?>", filename: path},
              success: function (data){
                allDataImages();
                Toastify({
                  text: "Image deleted",
                  duration: 3000,
                  close:true,
                  gravity:"top",
                  position: "right",
                  backgroundColor: "#4fbe87",
                }).showToast();
              },
              error: function(e) {
                  console.log(e);
              }
          });
        }
    })
  }

  const deleteProduct = (url) => {
    Swal.fire({
        title: 'Sure to delete this product?',
        text: "This product will delete permanently",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace(url);
        }
    })
  }

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>