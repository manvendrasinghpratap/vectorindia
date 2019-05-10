<?php $__env->startSection('section'); ?>

  <section class="page-hero">
    <div class="page-hero-cover"><img src="<?php echo e(asset('public/assets/img/page-cover.jpg')); ?>" alt="exleon"/></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="page-hero-wrapper"><span style="display:none;" class="subtitle">EXLEON BUSINESS</span>
            <h2 class="title"><?php echo e($singlePostDetails->heading); ?></h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <article>
    <?php if($singlePostDetails->imagename ==''): ?>
      <?php @$imagename = 'default.jpg'; ?>
    <?php elseif(file_exists('public/storage/'.$singlePostDetails->imagename)): ?>
      <?php @$imagename= $singlePostDetails->imagename; ?>
    <?php else: ?>
      <?php @$imagename = 'default.jpg'; ?>
    <?php endif; ?>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="article-wrapper article--blog">
            <?php if($posttype!='testimonial'): ?>
            <figure class="article-figure"><img src="<?php echo e(url('public/storage/'.@$imagename)); ?>" alt="Vector India">
              <div class="article-figure-icon"><i class="fas fa-lightbulb"></i></div>
            </figure>
            <?php endif; ?>
            <div class="article-content-wrapper">
              <div class="article-content-main">
                <h2 class="title"><?php echo e($singlePostDetails->heading); ?></h2>
                <div class="article-content-details"><span><?php echo e($singlePostDetails->sub_heading); ?></span> <span>Post On : <?php echo e($singlePostDetails->created_at->format('Y-m-d')); ?></span></div>
                <p><?php echo e($singlePostDetails->description); ?></p>
              </div>
            </div>
          </div>
          <div class="row" >
            <div class="col-12">
              <div class="app-author-box" >
                <figure style="display:none;"><img src="assets/img/author_avatar.jpg" alt="exleon"></figure>
                <div class="app-author-box-content" style="display:none;">
                  <div class="author-head-info"><span class="name">CAROLINE PERRY</span><span class="role">AUTHOR</span></div>
                  <p class="description">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                  <div class="author-social-links"><a class="app-social-link" href="#"><i class="fab fa-skype"></i></a><a class="app-social-link" href="#"><i class="fab fa-facebook-f"></i></a><a class="app-social-link" href="#"><i class="fab fa-google-plus-g"></i></a><a class="app-social-link" href="#"><i class="fab fa-twitter"></i></a><a class="app-social-link" href="#"><i class="fab fa-vimeo-v"></i></a><a class="app-social-link" href="#"><i class="fab fa-youtube"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </article>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdetail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\manvendra\Ampps\www\vectorindia\resources\views/frontend/newdetail.blade.php ENDPATH**/ ?>