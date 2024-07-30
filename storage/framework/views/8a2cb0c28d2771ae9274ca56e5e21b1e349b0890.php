<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/iconly/bold.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/sweetalert2/sweetalert2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/toastify/toastify.css')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/favicon.svg')); ?>">

    <?php echo $__env->yieldPushContent('css'); ?>

    <style>
        body::-webkit-scrollbar {
            display: none;
        }
        .bi{
            display:flex;
            align-items:center;
            justify-content:center;
        }
    </style>

</head>
<body>
  
<?php echo e($slot); ?>




<script src="<?php echo e(asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/mazer.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendors/sweetalert2/sweetalert2.all.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendors/toastify/toastify.js')); ?>"></script>
<?php if(session('success')): ?>
    <script>
        Toastify({
            text: "<?php echo e(session('success')); ?>",
            duration: 3000,
            close:true,
            gravity:"top",
            position: "right",
            backgroundColor: "#4fbe87",
        }).showToast();
    </script>
<?php endif; ?>

<?php echo $__env->yieldPushContent('js'); ?>
</body>
</html><?php /**PATH D:\xampp\htdocs\ecomm-laravel\resources\views/client/components/template/layout.blade.php ENDPATH**/ ?>