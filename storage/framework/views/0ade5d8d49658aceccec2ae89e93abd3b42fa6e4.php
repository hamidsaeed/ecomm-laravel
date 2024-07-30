<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/upload.css')); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="card-body row">
      <div class="col-md-6 col-12">
        <form action="<?php echo e(route('categorySave')); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div id="file-upload-form" class="uploader <?php $__errorArgs = ['path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <input id="file-upload" type="file" name="path" accept="image/*" required/>
            <label for="file-upload" id="file-drag">
              <img id="file-image" src="#" alt="Preview" class="hidden">
              <div id="start">
              <i class="fa fa-download" aria-hidden="true"></i>
              <div>Upload image category</div>
              <?php $__errorArgs = ['path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span><br>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              <div id="notimage" class="hidden">Please select an image            
              </div>
              <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
              </div><br>
              <?php if(session('errorUpload')): ?>
                <span class="text-danger">You must use button</span><br>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              <div id="response" class="hidden">
              <span class="text-danger" id="max-file"></span>
              <div id="messages">
              
              </div>
              <progress class="progress" id="file-progress" value="0">
                <span>0</span>%
              </progress>
              </div>
            </label>
          </div>

          <div class="form-group">
            <label for="name">Category name</label>
            <input type="text" name="name" id="name" class="form-control  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Chicken" value="<?php echo e(old('name')); ?>" required autofocus>
            <?php $__errorArgs = ['name'];
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

          <button type="submit" class="btn btn-primary float-end">Create</button>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('assets/js/upload.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendors/jquery/jquery.min.js')); ?>"></script>
<script>
  const name = document.getElementById("name");
  name.addEventListener('keyup', function(e){
      let result = name.value.replace(/\s+/g, "-");
      let capital = name.value.replace(/[A-Z]/g, "$&");
      name.value = result.toLowerCase()
  });

  $('#name').keyup(function(){
    let name = this.value

    setTimeout(() => {
      $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
        type: 'POST',
        dataType: 'json',
        data: {"_token" : "<?php echo e(csrf_token()); ?>", name: name},
        url: '<?php echo e(route("categoryCheck")); ?>',
        success: function(data){

        },
        statusCode: {
          200: () => {
            $('#name').addClass('is-invalid');
            $('#name').removeClass('is-valid');
          },
          201: () => {
            $('#name').removeClass('is-invalid');
            $('#name').addClass('is-valid');
          }
        }
      })
    }, 100);

  })

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/admin/category/create.blade.php ENDPATH**/ ?>