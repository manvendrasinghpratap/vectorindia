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
                    @foreach($testimonials as $testimonial)

                      @if($testimonial->imagename =='')
                      @php @$imagename = 'default.jpg'; @endphp
                      @elseif(file_exists('public/storage/'.$testimonial->imagename))
                      @php @$imagename= $testimonial->imagename; @endphp
                      @else
                      @php @$imagename = 'default.jpg'; @endphp
                      @endif
                      <div class="col-12 col-xl-12">
                          <div class="testimonial-item">
                              <div class="customer-image"><img alt="exleon" src="{{url('public/storage/'.@$imagename)}}" /></div>
                              <div class="testimonail-content">
                                  <div class="testimonail-description"><p><?php echo  str_limit(nl2br(e($testimonial->description)), 450,'....'); ?>.</p></div>
                                  <div class="testimonail-customer">
                                    <span class="testimonail-customer-name">{{@$testimonial->written_by}}</span> 
                                    <span class="testimonail-customer-brand">{{@$testimonial->sub_heading}}</span>

                                  </div>
                                   <a class="app-btn" href="{{route('single',['type' => 'testimonial', 'id' => $testimonial->id])}}">READ MORE</a>
                              </div>
                          </div>
                        </div>
                        @endforeach
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- Testimonial Section -->