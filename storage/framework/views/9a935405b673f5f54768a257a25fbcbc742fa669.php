<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create shop</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/upload.css')); ?>" />
  </head>

  <body>
    <div class="container">
      <div class="card mt-5">
        <div class="card-header">
          <h4 class="card-title">Create your shop</h4>
        </div>
        <div class="card-body">
          <form action="<?php echo e(route('shopCreate')); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
            <div class="row">
              <div class="col-md-6 col-12">
                <div id="file-upload-form" class="uploader <?php $__errorArgs = ['path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                  <input id="file-upload" type="file" name="path" accept="image/*" />
                  <label for="file-upload" id="file-drag">
                    <img id="file-image" src="#" alt="Preview" class="hidden">
                    <div id="start">
                    <i class="fa fa-download" aria-hidden="true"></i>
                    <div>Upload logo shop</div>
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
              </div>
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="name_shop">Shop name</label>
                  <input type="text" name="name_shop" id="name_shop" class="form-control  <?php $__errorArgs = ['name_shop'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Fashionista" value="<?php echo e(old('name_shop')); ?>" required autofocus>
                  <?php $__errorArgs = ['name_shop'];
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
                  <label for="phone">Phone</label>
                  <input type="number" name="phone" id="phone" class="form-control  <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="0812xxx" value="<?php echo e(old('phone')); ?>" required >
                  <?php $__errorArgs = ['phone'];
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
                  <label for="address">Address</label>
                  <input type="text" name="address" id="address" class="form-control  <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="3425 Stone Street" value="<?php echo e(old('address')); ?>" required >
                  <?php $__errorArgs = ['address'];
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
                    <textarea name="desc" id="desc" cols="30" class="form-control <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="We are selling  . . ."><?php echo e(old('desc')); ?></textarea>
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
                <button type="submit" class="btn btn-primary float-end">Create</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="<?php echo e(asset('assets/js/upload.js')); ?>"></script>
    <script>
      document.getElementById('desc').addEventListener('keyup', function() {
          this.style.overflow = 'hidden';
          this.style.height = 0;
          this.style.height = this.scrollHeight + 'px';
      }, false);
    </script>
  </body>
</html>
<?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/admin/shop/create.blade.php ENDPATH**/ ?>