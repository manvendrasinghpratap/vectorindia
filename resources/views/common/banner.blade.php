<div class="main-hero-wrapper">
  @if($banner->count()>0)
  @foreach($banner as $row)
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
    <img src="{{url('public/storage/'.$imagename)}}" alt="vector India">
    </figure>
    <div class="main-hero-navigation prev"></div>
    <div class="main-hero-navigation next"></div>
    <div class="container main-hero-item-content-wrapper">
      <div class="row">
        <div class="col-12">
          <div class="main-hero-item-content"><span class="title--small">{{$row->sub_heading}}</span><span class="title--big">{{$row->heading}}</span><span class="title--medium">{{$row->sub_heading2}}</span>
            <div class="read-more-link-wrapper">
            <a tabindex="0" class="app-btn read-more-link" href="{{route('single',['type' => 'banner', 'id' => $row->id])}}">READ MORE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endif
</div>