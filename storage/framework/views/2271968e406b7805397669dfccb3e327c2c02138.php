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
            <!-- Banner begin -->
            <?php echo $__env->make('common.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Banner end -->
            <!-- Partner start -->
            <?php echo $__env->make('common.partner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- partner end -->
            <!-- Appreciations begin -->
            <?php echo $__env->make('common.appreciation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Appreciations begin -->
            <!-- About us begin -->
            <!--<?php echo $__env->make('common.aboutus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
            <!-- About Us begin -->
            <!-- Corporate Business begin -->
            <!--<?php echo $__env->make('common.corporateBusiness', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
            <!-- Corporate Business begin -->
            <!-- Counter begin -->
            <!--<?php echo $__env->make('common.counter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
            <!-- Counter begin -->
            <!-- Featured Services begin -->
            <?php echo $__env->make('common.featured_service', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Featured Services begin -->
            <!-- main our Services begin -->
            <?php echo $__env->make('common.main_our_services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Team Member begin -->
            <!-- Testimonial begin -->
            <?php echo $__env->make('common.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Testimonial End -->
            <!-- <?php echo $__env->make('common.team_members', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
            <!-- App Offer box begin -->
            <?php echo $__env->make('common.app_offer_box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Latest News begin -->
            <?php echo $__env->yieldContent('latest_new_section'); ?>
            <!-- App Brands begin -->
            <?php echo $__env->make('common.app_brands', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Main map wrapper begin -->
            <?php echo $__env->make('common.main_map_wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Main map bottom bar begin -->
            <?php echo $__env->make('common.main_map_bottom_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Main map bottom bar end -->

            <!--  Footer Begin -->
            <?php echo $__env->make('common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--  Footer Ends -->
            <?php echo $__env->make('common.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('scripts'); ?>
        </body>
</html>
<?php /**PATH C:\xampp\htdocs\vectorindia\resources\views/layouts/index.blade.php ENDPATH**/ ?>