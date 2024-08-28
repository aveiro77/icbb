@extends('front.layout.template')

@section('title', 'Blog - Bligosoft')

@section('main')
    <main id="main">
      <!-- ======= Hero Slider Section ======= -->
      <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
          <div class="row">
            <div class="col-12">
              <div class="swiper sliderFeaturedPosts">
                <div class="swiper-wrapper">

                  @foreach($latest_posts as $latest)  
                    <div class="swiper-slide">
                      <a href="{{ url('p/'.$latest->slug) }}" class="img-bg d-flex align-items-end" style="background-image: url('{{ asset('storage/back/' . $latest->img) }}')">
                        <div class="img-bg-inner">
                          <h2>
                            {{ $latest->title }}
                          </h2>
                          <p>
                            {!! Str::limit($latest->desc, 230, '...') !!}
                          </p>
                        </div>
                      </a>
                    </div>
                  @endforeach

                  
                </div>
                <div class="custom-swiper-button-next">
                  <span class="bi-chevron-right"></span>
                </div>
                <div class="custom-swiper-button-prev">
                  <span class="bi-chevron-left"></span>
                </div>

                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Hero Slider Section -->

      <!-- ======= Culture Category Section ======= -->
      <section class="category-section">
        <div class="container" data-aos="fade-up">
          <div
            class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2>Blog</h2>
          </div>

          <div class="row">
            <div class="col-md-9">        

              <div class="row">
                <div class="col-lg-4">
                  @foreach ($side_list_posts as $list_post)  
                  <div class="post-entry-1">
                    <div class="post-meta">
                      <span class="date">{{ $list_post->category->name }}</span>
                      <span class="mx-1">&bullet;</span>
                      <span>{{ $list_post->created_at->format('Y F d') }}</span>
                    </div>
                    <h2 class="mb-2">
                      <a href="{{ url('p/'.$list_post->slug) }}">{{ $list_post->title }}</a>
                    </h2>
                    {{-- <span class="author mb-3 d-block">Jenny Wilson</span> --}}
                    <p class="mb-4 d-block">{!! Str::limit($latest->desc, 150, '...') !!}</p>
                  </div>
                  @endforeach

                </div>

                <div class="col-lg-8">

                
                  @foreach ($next_posts as $next_post)  
                    <div class="post-entry-1">
                      <a href="{{ url('p/'.$next_post->slug) }}"><img src="{{ asset('storage/back/' . $next_post->img) }}" alt="" class="img-fluid"/></a>
                      <div class="post-meta">
                        <span class="date">{{ $next_post->category->name }}</span>
                        <span class="mx-1">&bullet;</span>
                        <span>{{ $next_post->created_at->format('Y F d') }}</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="{{ url('p/'.$next_post->slug) }}">{{ $next_post->title }}</a>
                      </h2>
                      {{-- <span class="author mb-3 d-block">Jenny Wilson</span> --}}
                      <p class="mb-4 d-block">
                        {!! Str::limit($next_post->desc, 230, '...') !!}
                      </p>
                    </div>
                  @endforeach

                </div>

              </div>
              
            </div>

            {{-- sidebar --}}
            @include('front.layout.sidebar')            
          </div>
        </div>
      </section>
      <!-- End Culture Category Section -->
    </main>
@endsection

