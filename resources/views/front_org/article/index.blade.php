@extends('front.layout.template')

@section('title', 'Artikel - Bligosoft')

@section('main')
    <main id="main">
        <section class="single-post-content">
            <div class="container">
              <div class="row">
                  <div class="col-md-9 post-content" data-aos="fade-up">
                    @foreach ($articles as $article)
                        <div class="d-md-flex post-entry-2 small-img">
                            <a href={{ url('p/'.$article->slug) }} class="me-4 thumbnail">
                            <img src={{ asset('storage/back/' . $article->img) }} alt="" class="img-fluid">
                            </a>
                            <div>
                              <div class="post-meta"><span class="date">{{ $article->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $article->created_at->format('Y F d') }}</span></div>
                              <h3><a href={{ url('p/'.$article->slug) }}>{{ $article->title }}</p>
                            </div>
                        </div>
                    @endforeach
                  </div>
                  {{ $articles->links('front.layout.pagination') }}
                <div class="col-md-3">
                  <!-- ======= Sidebar ======= -->
                  <div class="aside-block">
      
                    <div class="aside-block">
                      <h3 class="aside-title">Tags</h3>
                      <ul class="aside-tags list-unstyled">
                        <li><a href="category.html">Business</a></li>
                        <li><a href="category.html">Culture</a></li>
                        <li><a href="category.html">Sport</a></li>
                        <li><a href="category.html">Food</a></li>
                        <li><a href="category.html">Politics</a></li>
                        <li><a href="category.html">Celebrity</a></li>
                        <li><a href="category.html">Startups</a></li>
                        <li><a href="category.html">Travel</a></li>
                      </ul>
                    </div><!-- End Tags -->
                  </div>
    
      
                  <div class="aside-block">
                    <h3 class="aside-title">Kategori</h3>
                    <ul class="aside-links list-unstyled">
                      @foreach ($categories as $category)
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i>{{ $category->name }}</a></li>
                      @endforeach
                    </ul>
                  </div><!-- End Categories -->
      
                </div>
              </div>
            </div>
          </section>
    </main>
@endsection

