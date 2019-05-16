<header>
      <div class="headbar">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="headbar-container">
                <div class="headbar-content"><span class="headbar-text">{{ @$settings['haveanyquestion']}}</span><a class="headbar-mail-link" href="mailto:{{ @$settings['email']}}">{{ @$settings['email']}}</a></div><span class="headbar-text">{{ @$settings['bestprofessionalsolutionsforyourcompany']}}</span>
                <div class="app-social-links-wrapper">
                  <a class="app-social-link" href="skype:{{@$settings['skype']}}?call"><i class="fab fa-skype"></i></a><a class="app-social-link" href="{{@$settings['facebook']}}"><i class="fab fa-facebook-f"></i></a>
                  <a class="app-social-link" href="{{@$settings['googleplus']}}"><i class="fab fa-google-plus-g"></i></a>
                  <a class="app-social-link" href="{{@$settings['twitter']}}"><i class="fab fa-twitter"></i></a>
                  <a class="app-social-link" href="{{@$settings['vimeo']}}"><i class="fab fa-vimeo-v"></i></a>
                  <a class="app-social-link" href="{{@$settings['youtube']}}"><i class="fab fa-youtube"></i></a>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <nav class="app-navbar app-navbar--sticky">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="app-navbar-container">
                <a class="app-navbar-logo" href="{{url('/')}}"><img src="{{asset('public/assets/img/logo.png')}}"  alt='exleon'></a>
                <ul class="app-navbar-ul">
                  <li class="app-navbar-ul-link active has-child has-mega-menu active"><a class="app-navbar-ul-link-a"
                      href="{{url('/')}}">HOME</a>
                    <div class="app-navbar-dropdown" style="display: none;">
                      <div class="row">
                        <div class="col-lg-3">
                          <a href="index-2.html">Default</a>
                          <a href="index-alternative.html">Index Alternative</a>
                          <a href="index-sticky-navbar.html">Sticky Navbar</a>
                          <a href="header-transparent.html">Transparent Header</a>
                        </div>
                        <div class="col-lg-3">
                          <a href="header-colorful-menu.html">Header Colorful Menu</a>
                          <a href="header-one.html">Header One</a>
                          <a href="header-two.html">Header Two</a>
                          <a href="header-three.html">Header Three</a>
                        </div>
                        <div class="col-lg-3">
                          <a href="header-four.html">Header Four</a>
                          <a href="header-five.html">Header Five</a>
                          <a href="header-six.html">Header Six</a>
                          <a href="header-seven.html">Header Seven</a>
                        </div>
                        <div class="col-lg-3">
                          <a href="header-eight.html">Header Eight</a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li style="display: none;" class="app-navbar-ul-link has-child"><a href="#" class="app-navbar-ul-link-a">ABOUT US</a>
                    <div class="app-navbar-dropdown"><a href="about-us.html">About Us</a><a href="about-us-two.html">About Us Two</a><a href="about-us-three.html">About Us Three</a><a href="about-us-four.html">About Us Four</a><a href="about-us-five.html">About Us Five</a><a href="about-us-six.html">About Us Six</a></div>
                  </li>
                  <li style="display: none;" class="app-navbar-ul-link has-child has-mega-menu"><a href="#" class="app-navbar-ul-link-a">SERVICES</a>
                    <div class="app-navbar-dropdown">
                      <div class="row">
                        <div class="col-lg-3">
                          <a href="services-details.html">Services Details</a>
                          <a href="services-details-left.html">Services Details Left Aside</a>
                          <a href="services-details-right.html">Services Details Right Aside</a>
                          <a href="services-list-four.html">Services List Four</a>
                        </div>
                        <div class="col-lg-3">
                          <a href="services-list-one.html">Services List One</a>
                          <a href="services-list-one-left.html">Services List One Left Aside</a>
                          <a href="services-list-one-right.html">Services List One Right Aside</a>
                          <a href="services-list-five.html">Services List Five</a>
                        </div>
                        <div class="col-lg-3">
                          <a href="services-list-two.html">Services List Two</a>
                          <a href="services-list-two-left.html">Services List Two Left Aside</a>
                          <a href="services-list-two-right.html">Services List Two Right Aside</a>
                        </div>
                        <div class="col-lg-3">
                          <a href="services-list-three.html">Services List Three</a>
                          <a href="services-list-three-left.html">Services List Three Left Aside</a>
                          <a href="services-list-three-right.html">Services List Three Right Aside</a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li style="display: none;" class="app-navbar-ul-link has-child"><a href="#" class="app-navbar-ul-link-a">TEAM</a>
                    <div class="app-navbar-dropdown"><a href="team-members.html">Team Members</a><a
                        href="team-members-left.html">Team Members Left Aside</a><a href="team-members-right.html">Team Members
                        Right Aside</a></div>
                  </li>
                  <li style="display: none;" class="app-navbar-ul-link has-child"><a href="#" class="app-navbar-ul-link-a">PRICING</a>
                    <div class="app-navbar-dropdown"><a href="pricing-table-one.html">Pricing Table One</a><a
                        href="pricing-table-one-left.html">Pricing Table One Left Aside</a><a href="pricing-table-one-right.html">Pricing
                        Table One Right Aside</a><a href="pricing-table-two.html">Pricing Table Two</a><a
                        href="pricing-table-two-left.html">Pricing Table Two Left Aside</a><a href="pricing-table-two-right.html">Pricing
                        Table Two Right Aside</a></div>
                  </li>
                  <li style="display: none;" class="app-navbar-ul-link has-child"><a href="#" class="app-navbar-ul-link-a">BLOG</a>
                    <div class="app-navbar-dropdown"><a href="blog-details.html">Blog Details Full</a><a
                        href="blog-details-left.html">Blog Details Left Aside</a><a href="blog-details-right.html">Blog Details
                        Right Aside</a><a href="blog-list-one.html">Blog List One Full</a><a href="blog-list-one-left.html">Blog
                        List One Left Aside</a><a href="blog-list-one-right.html">Blog List One Right Aside</a><a
                        href="blog-list-two.html">Blog List Two Full</a><a href="blog-list-two-left.html">Blog List Two Left
                        Aside</a><a href="blog-list-two-right.html">Blog List Two Right Aside</a></div>
                  </li>
                  <li style="display: none;" class="app-navbar-ul-link has-child"><a href="#" class="app-navbar-ul-link-a">PORTFOLIO</a>
                    <div class="app-navbar-dropdown"><a href="portfolio-details.html">Portfolio Details Full</a><a
                        href="portfolio-details-left.html">Portfolio Details Left Aside</a><a
                        href="portfolio-details-right.html">Portfolio Details Right Aside</a><a
                        href="portfolio-list-one.html">Portfolio List One</a><a href="portfolio-list-two.html">Portfolio List Two
                        </a><a href="portfolio-list-three.html">Portfolio List Three</a><a href="portfolio-list-lightbox.html">Portfolio List Lightbox</a></div>
                  </li>
                  <li style="display: none;" class="app-navbar-ul-link has-child"><a href="#" class="app-navbar-ul-link-a">OTHER</a>
                    <div class="app-navbar-dropdown"><a href="faq.html">FAQ Full</a><a href="faq-left.html">FAQ Left Aside</a><a
                        href="faq-right.html">FAQ Right Aside</a><a href="design-guide.html">Design Guide Full</a><a
                        href="design-guide-left.html">Design Guide Left Aside</a><a href="design-guide-right.html">Design Guide
                        Right Aside</a><a href="contact-us.html">Contact</a><a href="404.html">404 Page</a><a
                        href="elements.html">Elements</a></div>
                  </li>
                </ul>
                <button class="app-btn app-btn--primary app-btn--only-icon app-navbar-trigger"><i class="fas fa-bars"></i></button>
                <form class="app-navbar-search" action="https://themeflex.com/">
                  <div class="input-wrapper">
                    <input class="app-input" type="text" placeholder="Search ..">
                    <button class="app-btn app-btn--only-icon app-navbar-search-btn-close" type="button"><i class="far fa-times-circle"></i></button>
                  </div>
                  <button style="display:none;"class="app-btn app-btn--primary app-btn--only-icon app-navbar-search-btn" type="button"><i class="fas fa-search"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
