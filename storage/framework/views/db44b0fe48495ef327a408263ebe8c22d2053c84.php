    <!--- Testimonial Section -->
    <section class="main-our-services pb-0 testimonials-type-full" >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-wrapper light-bg"><span class="subtitle">OUR</span>
              <h2 class="section-title">TESTIMONAILS</h2>
            </div>
            <div class="section-content">
                  <div class="row no-gutters timeline-list-row">
                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <?php if($testimonial->imagename ==''): ?>
                      <?php @$imagename = 'default.jpg'; ?>
                      <?php elseif(file_exists('public/storage/'.$testimonial->imagename)): ?>
                      <?php @$imagename= $testimonial->imagename; ?>
                      <?php else: ?>
                      <?php @$imagename = 'default.jpg'; ?>
                      <?php endif; ?>
                      <div class="col-12 col-xl-12">
                          <div class="testimonial-item">
                              <div class="customer-image"><img alt="exleon" src="<?php echo e(url('public/storage/'.@$imagename)); ?>" /></div>
                              <div class="testimonail-content">
                                  <div class="testimonail-description"><p><?php echo  str_limit(nl2br(e($testimonial->description)), 450,'....'); ?>.</p></div>
                                  <div class="testimonail-customer">
                                    <span class="testimonail-customer-name"><?php echo e(@$testimonial->written_by); ?></span> 
                                    <span class="testimonail-customer-brand"><?php echo e(@$testimonial->sub_heading); ?></span>

                                  </div>
                                   <a class="app-btn" href="<?php echo e(route('single',['type' => 'testimonial', 'id' => $testimonial->id])); ?>">READ MORE</a>
                              </div>
                          </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- Testimonial Section --><?php /**PATH C:\manvendra\Ampps\www\vectorindia\resources\views/common/testimonial.blade.php ENDPATH**/ ?>