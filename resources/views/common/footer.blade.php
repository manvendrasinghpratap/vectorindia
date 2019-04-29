<footer class="app-footer">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="app-footer-wrapper">
              <div class="app-social-links-wrapper"><a class="app-social-link" href="skype:{{@$settings['skype']}}?call"><i class="fab fa-skype"></i></a><a class="app-social-link" href="{{@$settings['skype']}}"><i class="fab fa-facebook-f"></i></a><a class="app-social-link" href="{{@$settings['skype']}}"><i class="fab fa-google-plus-g"></i></a><a class="app-social-link" href="{{@$settings['googleplus']}}"><i class="fab fa-twitter"></i></a><a class="app-social-link" href="{{@$settings['twitter']}}"><i class="fab fa-vimeo-v"></i></a><a class="app-social-link" href="{{@$settings['vimeo']}}"><i class="fab fa-youtube"></i></a>
              </div>
              <div class="app-footer-content"><span class="app-footer-text">Copyright © {{ date('Y')}} All right reserved. Powered by</span><a class="app-footer-text" href="#">{{@$settings['companyname']}}</a></div>
              <div class="app-footer-content"><span class="app-footer-text">Have any questions? </span><a class="app-footer-text" href="tel:{{@$settings['contactno']}}">+91 {{@$settings['contactno']}}</a><a class="app-footer-text" href="mailto:{{@$settings['email']}}">{{@$settings['email']}}</a></div>
            </div>
          </div>
        </div>
     </div>
</footer>
<div style="display:none;"> <?php echo '<pre>'; print_r(@$settings); echo '</pre>'; ?> </div>
