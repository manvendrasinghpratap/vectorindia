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
              @if($mainNews->imagename =='')
                @php @$imagename = 'default.jpg'; @endphp
              @elseif(file_exists('public/storage/'.$mainNews->imagename))
                @php @$imagename= $mainNews->imagename; @endphp
              @else
                @php @$imagename = 'default.jpg'; @endphp
              @endif
            <div class="col-12 col-lg-7"><div class="latest-news-box">
                <a href="{{route('single',[$mainNews->id])}}"><figure><img src="{{url('public/storage/'.@$imagename)}}" alt="exleon"></figure></a>
                <div class="latest-news-box-content"><a href="{{route('single',[$mainNews->id])}}"><span class="title">{{$mainNews->heading}}</span></a>
                  <p class="description">{{$mainNews->description}}</p>
                  <div class="latest-news-box-info"><span class="info-text">{{$mainNews->created_at->format('Y-m-d')}}</span><span class="info-text">WRITTEN BY {{$mainNews->written_by}}</span><span class="info-text"><a href="{{route('single',[$mainNews->id])}}">READ MORE</a></span></div>
                </div>
              </div>
            </div>
          @endif

            <div class="col-12 col-lg-5">
              <!-- small news section -->
              @if(count($smallNews)>0)
                @foreach($smallNews as $news)

                @if($news->imagename =='')
                  @php @$imagename = 'default.jpg'; @endphp
                @elseif(file_exists('public/storage/'.$news->imagename))
                  @php @$imagename= $news->imagename; @endphp
                @else
                  @php @$imagename = 'default.jpg'; @endphp
                @endif

                <div class="latest-news-box latest-news-box--small">
                    <a href="{{route('single',[$news->id])}}"><figure><img src="{{url('public/storage/'.@$imagename)}}" alt="exleon"></figure></a>
                    <div class="latest-news-box-content">
                        <a href="{{route('single',[$news->id])}}"><span class="title">{{$news->heading}} </span></a>
                        <p class="description">{{$news->description}}.</p>
                        <div class="latest-news-box-info"><span class="info-text">{{$news->created_at->format('Y-m-d')}}</span><span class="info-text">WRITTEN BY {{$news->written_by}}</span></div>
                    </div>
                </div>
              @endforeach
              @endif
              <!-- small news section -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
