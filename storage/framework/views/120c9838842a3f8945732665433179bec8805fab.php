<div class="main-hero-wrapper">
  <?php if($banner->count()>0): ?>
  <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="main-hero-item">
    <figure>
    <?php if($row['imagename']==''){
      $imagename= 'hero_slide.jpg';
      }elseif(file_exists('public/storage/'.$row['imagename'])){
      $imagename= $row['imagename'];
      }else{
      $imagename= 'hero_slide.jpg';
      }
    ?>
    <img src="<?php echo e(url('public/storage/'.$imagename)); ?>" alt="vector India">
    </figure>
    <div class="main-hero-navigation prev"></div>
    <div class="main-hero-navigation next"></div>
    <div class="container main-hero-item-content-wrapper">
      <div class="row">
        <div class="col-12">
          <div class="main-hero-item-content"><span class="title--small"><?php echo e($row->sub_heading); ?></span><span class="title--big"><?php echo e($row->heading); ?></span><span class="title--medium"><?php echo e($row->sub_heading2); ?></span>
            <div class="read-more-link-wrapper">
            <a tabindex="0" class="app-btn read-more-link" href="<?php echo e(route('single',['type' => 'banner', 'id' => $row->id])); ?>">READ MORE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</div><?php /**PATH C:\manvendra\Ampps\www\vectorindia\resources\views/common/banner.blade.php ENDPATH**/ ?>