<section class="latest-news">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title-wrapper light-bg"><span class="subtitle">EXLEON BLOG</span>
          <h2 class="section-title">LATEST NEWS</h2>
        </div>
        <div class="section-content">
          <div class="row">
            @if($mainNews->count()>0)
            <div class="col-12 col-lg-7"><div class="latest-news-box">
                <a href="#"><figure><img src="{{asset('public/assets/img/news_0.jpg')}}" alt="exleon"></figure></a>
                <div class="latest-news-box-content"><a href="#"><span class="title">{{$mainNews->heading}}</span></a>
                  <p class="description">{{$mainNews->description}}</p>
                  <div class="latest-news-box-info"><span class="info-text">{{$mainNews->created_at->format('Y-m-d')}}</span><span class="info-text">WRITTEN BY {{$mainNews->written_by}}</span><span class="info-text"><a href="{{route('single')}}">READ MORE</a></span></div>
                </div>
              </div>
            </div>
          @endif

            <div class="col-12 col-lg-5">
              <!-- small news section -->

                <div class="latest-news-box latest-news-box--small">
                    <a href="#"><figure><img src="{{asset('public/assets/img/news_1.jpg')}}" alt="exleon"></figure></a>
                    <div class="latest-news-box-content">
                        <a href="#"><span class="title">Five Tips To Improve Productivity </span></a>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore met, consectetur.</p>
                        <div class="latest-news-box-info"><span class="info-text">25.12.2019</span><span class="info-text">WRITTEN BY JOHN DOE</span></div>
                    </div>
                </div>
              <!-- small news section -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
