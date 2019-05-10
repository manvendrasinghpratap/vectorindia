<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e(config('app.name')); ?></title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo e(asset('public/assets/img/logo.png')); ?>" type="image/gif" sizes="16x16">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
        <!-- All css file -->
        <?php echo $__env->make('common.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- All css file -->
        <?php echo $__env->yieldContent('style'); ?>
    </head>
        <body class="body--home">
            <!-- Menu -->
            <?php echo $__env->make('common.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Menu -->
            <?php echo $__env->yieldContent('section'); ?>
            <!--  Footer Begin -->
            <?php echo $__env->make('common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--  Footer Ends -->
            <?php echo $__env->make('common.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('scripts'); ?>
        </body>
</html>
<?php /**PATH C:\manvendra\Ampps\www\vectorindia\resources\views/layouts/newdetail.blade.php ENDPATH**/ ?>