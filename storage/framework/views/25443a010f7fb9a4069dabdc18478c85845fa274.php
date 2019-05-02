<section class="latest-news">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title-wrapper light-bg"><span class="subtitle">EXLEON BLOG</span>
          <h2 class="section-title">LATEST NEWS</h2>
        </div>
        <div class="section-content">
          <div class="row">
            <?php if($mainNews->count()>0): ?>
              <?php if($mainNews->imagename ==''): ?>
                <?php @$imagename = 'default.jpg'; ?>
              <?php elseif(file_exists('public/storage/'.$mainNews->imagename)): ?>
                <?php @$imagename= $mainNews->imagename; ?>
              <?php else: ?>
                <?php @$imagename = 'default.jpg'; ?>
              <?php endif; ?>
            <div class="col-12 col-lg-7"><div class="latest-news-box">
                <a href="<?php echo e(route('single',[$mainNews->id])); ?>"><figure><img src="<?php echo e(url('public/storage/'.@$imagename)); ?>" alt="exleon"></figure></a>
                <div class="latest-news-box-content"><a href="<?php echo e(route('single',[$mainNews->id])); ?>"><span class="title"><?php echo e($mainNews->heading); ?></span></a>
                  <p class="description"><?php echo e($mainNews->description); ?></p>
                  <div class="latest-news-box-info"><span class="info-text"><?php echo e($mainNews->created_at->format('Y-m-d')); ?></span><span class="info-text">WRITTEN BY <?php echo e($mainNews->written_by); ?></span><span class="info-text"><a href="<?php echo e(route('single',[$mainNews->id])); ?>">READ MORE</a></span></div>
                </div>
              </div>
            </div>
          <?php endif; ?>

            <div class="col-12 col-lg-5">
              <!-- small news section -->
              <?php if(count($smallNews)>0): ?>
                <?php $__currentLoopData = $smallNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($news->imagename ==''): ?>
                  <?php @$imagename = 'default.jpg'; ?>
                <?php elseif(file_exists('public/storage/'.$news->imagename)): ?>
                  <?php @$imagename= $news->imagename; ?>
                <?php else: ?>
                  <?php @$imagename = 'default.jpg'; ?>
                <?php endif; ?>

                <div class="latest-news-box latest-news-box--small">
                    <a href="<?php echo e(route('single',[$news->id])); ?>"><figure><img src="<?php echo e(url('public/storage/'.@$imagename)); ?>" alt="exleon"></figure></a>
                    <div class="latest-news-box-content">
                        <a href="<?php echo e(route('single',[$news->id])); ?>"><span class="title"><?php echo e($news->heading); ?> </span></a>
                        <p class="description"><?php echo e($news->description); ?>.</p>
                        <div class="latest-news-box-info"><span class="info-text"><?php echo e($news->created_at->format('Y-m-d')); ?></span><span class="info-text">WRITTEN BY <?php echo e($news->written_by); ?></span></div>
                    </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
              <!-- small news section -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php /**PATH C:\xampp\htdocs\vectorindia\resources\views/common/latest_news.blade.php ENDPATH**/ ?>