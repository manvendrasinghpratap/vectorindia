<footer class="app-footer">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="app-footer-wrapper">
              <div class="app-social-links-wrapper"><a class="app-social-link" href="skype:<?php echo e(@$settings['skype']); ?>?call"><i class="fab fa-skype"></i></a><a class="app-social-link" href="<?php echo e(@$settings['skype']); ?>"><i class="fab fa-facebook-f"></i></a><a class="app-social-link" href="<?php echo e(@$settings['skype']); ?>"><i class="fab fa-google-plus-g"></i></a><a class="app-social-link" href="<?php echo e(@$settings['googleplus']); ?>"><i class="fab fa-twitter"></i></a><a class="app-social-link" href="<?php echo e(@$settings['twitter']); ?>"><i class="fab fa-vimeo-v"></i></a><a class="app-social-link" href="<?php echo e(@$settings['vimeo']); ?>"><i class="fab fa-youtube"></i></a>
              </div>
              <div class="app-footer-content"><span class="app-footer-text">Copyright © <?php echo e(date('Y')); ?> All right reserved. Powered by</span><a class="app-footer-text" href="#"><?php echo e(@$settings['companyname']); ?></a></div>
              <div class="app-footer-content"><span class="app-footer-text">Have any questions? </span><a class="app-footer-text" href="tel:<?php echo e(@$settings['contactno']); ?>">+91 <?php echo e(@$settings['contactno']); ?></a><a class="app-footer-text" href="mailto:<?php echo e(@$settings['email']); ?>"><?php echo e(@$settings['email']); ?></a></div>
            </div>
          </div>
        </div>
     </div>
</footer>
<div style="display:none;"> <?php echo '<pre>'; print_r(@$settings); echo '</pre>'; ?> </div>
<?php /**PATH C:\manvendra\Ampps\www\vectorindia\resources\views/common/footer.blade.php ENDPATH**/ ?>