@extends('layouts.newdetail')
@section('section')

  <section class="page-hero">
    <div class="page-hero-cover"><img src="{{asset('public/assets/img/page-cover.jpg')}}" alt="exleon"/></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="page-hero-wrapper"><span style="display:none;" class="subtitle">EXLEON BUSINESS</span>
            <h2 class="title">{{$newsDetails->heading}}</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <article>
    @if($newsDetails->imagename =='')
      @php @$imagename = 'default.jpg'; @endphp
    @elseif(file_exists('public/storage/'.$newsDetails->imagename))
      @php @$imagename= $newsDetails->imagename; @endphp
    @else
      @php @$imagename = 'default.jpg'; @endphp
    @endif

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="article-wrapper article--blog">
            <figure class="article-figure"><img src="{{url('public/storage/'.@$imagename)}}" alt="exleon">
              <div class="article-figure-icon"><i class="fas fa-lightbulb"></i></div>
            </figure>
            <div class="article-content-wrapper">
              <div class="article-content-main">
                <h2 class="title">{{$newsDetails->heading}}</h2>
                <div class="article-content-details"><span>{{$newsDetails->sub_heading}}</span> <span>Post On : {{$newsDetails->created_at->format('Y-m-d')}}</span></div>
                <p>{{$newsDetails->description}}</p>
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
@endsection
