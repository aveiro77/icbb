@extends('front.layout.template')

@section('title', 'ICBB 28 Majalengka')

@section('main')
    <main id="main">
      <!-- Start retroy layout blog posts -->
      <section class="section bg-light">
        <div class="container">
          <div class="row align-items-stretch retro-layout">
            <div class="col-md-4">
              @foreach($latest_posts as $latest)
                @if ($loop->index < 2) 
                <a href="single.html" class="h-entry {{ $loop->index === 1 ? '' : 'mb-30' }} v-height gradient">
                  <div class="featured-img" style="background-image: url('{{ asset('storage/back/' . $latest->img) }}')"></div>
                  <div class="text">
                    <span class="date">{{ \Carbon\Carbon::parse($latest->date)->translatedFormat('d M Y') }}</span>
                    <h2>{{ $latest->title }}</h2>
                  </div>
                </a>
                @endif
              @endforeach
            </div>
            <div class="col-md-4">
              @foreach($latest_posts as $latest)
                @if ($loop->index === 2) 
                  <a href="single.html" class="h-entry img-5 h-100 gradient">
                    <div class="featured-img" style="background-image: url('{{ asset('storage/back/' . $latest->img) }}')"></div>
                    <div class="text">
                      <span class="date">{{ \Carbon\Carbon::parse($latest->date)->translatedFormat('d M Y') }}</span>
                      <h2>{{ $latest->title }}</h2>
                    </div>
                  </a>
                @endif
              @endforeach
            </div>
            <div class="col-md-4">
              @foreach($latest_posts as $latest)
                @if ($loop->index > 2) 
                  <a href="single.html" class="h-entry {{ $loop->index === 4 ? '' : 'mb-30' }} v-height gradient">
                    <div class="featured-img" style="background-image: url('{{ asset('storage/back/' . $latest->img) }}')"></div>
                    <div class="text">
                      <span class="date">{{ \Carbon\Carbon::parse($latest->date)->translatedFormat('d M Y') }}</span>
                      <h2>{{ $latest->title }}</h2>
                    </div>
                  </a>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </section>
      <!-- End retroy layout blog posts -->
  
      <!-- Start posts-entry -->
      <section class="section posts-entry">
        <div class="container">
          <div class="row mb-4">
            <div class="col-sm-6">
              @foreach($categories as $category)
                @if ($category->slug == 'berita-kegiatan')
                  <h2 class="posts-entry-title">
                    {{ $category->name }}
                  </h2>
                @endif
              @endforeach
            </div>
            <div class="col-sm-6 text-sm-end">
              <a href="category.html" class="read-more">View All</a>
            </div>
          </div>
          <div class="row g-3">
            <div class="col-md-9">
              <div class="row g-3">
                @foreach ($news as $n)
                  @if ($loop->index < 2)
                    <div class="col-md-6">
                      <div class="blog-entry">
                        <a href="single.html" class="img-link">
                          <img src={{ asset('storage/back/' . $n->img) }} alt="Image" class="img-fluid"/>
                        </a>
                        <span class="date">{{ \Carbon\Carbon::parse($n->date)->translatedFormat('d M Y') }}</span>
                        <h2>
                          <a href="single.html">{{ $n->title }}</a>
                        </h2>
                          <p>
                            {!! Str::limit($n->desc, 230, '...') !!}
                          </p>
                          <p>
                            <a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a>
                          </p>
                      </div>
                    </div>
                  @endif                
                @endforeach
              </div>
            </div>
            <div class="col-md-3">
              <ul class="list-unstyled blog-entry-sm">
                @foreach ($news as $n)
                  @if ($loop->index >= 2)
                    <li>
                      <span class="date">{{ \Carbon\Carbon::parse($n->date)->translatedFormat('d M Y') }}</span>
                      <h3>
                        <a href="single.html">{{ $n->title }}</a>
                      </h3>
                      <p>
                        {!! Str::limit($n->desc, 50, '...') !!}
                      </p>
                      <p><a href="#" class="read-more">Continue Reading</a></p>
                    </li>
                  @endif
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End posts-entry -->
  
      <section class="section bg-light">
        <div class="container">
          <div class="row mb-4">
            <div class="col-sm-6">
              @foreach($categories as $category)
                @if ($category->slug == 'artikel')
                  <h2 class="posts-entry-title">
                    {{ $category->name }}
                  </h2>
                @endif
              @endforeach
            </div>
            <div class="col-sm-6 text-sm-end">
              <a href="category.html" class="read-more">View All</a>
            </div>
          </div>
  
          <div class="row">
            @foreach($articles as $article)
              <div class="col-lg-4 mb-4">
                <div class="post-entry-alt">
                  <a href="single.html" class="img-link">
                    <img src={{ asset('storage/back/' . $article->img) }} alt="Image" class="img-fluid"/>
                  </a>
                  <div class="excerpt">
                    <h2>
                      <a href="single.html">{{ $article->title }}</a>
                    </h2>
                    <div class="post-meta align-items-center text-left clearfix">
                      {{-- <figure class="author-figure mb-0 me-3 float-start">
                        <img src={{ asset("front/assets/images/person_1.jpg") }} alt="Image" class="img-fluid"/>
                      </figure>
                      <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span> --}}
                      <span> {{ \Carbon\Carbon::parse($article->date)->translatedFormat('d M Y') }}</span>
                    </div>
                    <p>
                      {!! Str::limit($n->desc, 200, '...') !!}
                    </p>
                    <p><a href="#" class="read-more">Continue Reading</a></p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
    </main>
@endsection