@extends('front.layout.template')

@section('title', $article->title.' - Bligosoft')

@section('main')
    <main id="main">
        <section class="single-post-content">
            <div class="container">
              <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">
      
                  <!-- ======= Single Post Content ======= -->
                  <div class="single-post">
                    <div class="post-meta">
                      <span class="date">{{ $article->category->name }}</span>
                      <span class="mx-1">&bullet;</span> <span>{{  $article->created_at->format('Y F d') }}</span>
                      <span class="mx-1">&bullet;</span> <span class="date">{{ $article->views }}x Views</span>
                    </div>
                    <h1 class="mb-5">{{ $article->title }}</h1>
                    {{-- <p><span class="firstcharacter">L</span>orem ipsum dolor sit, amet consectetur adipisicing elit. Ratione officia sed, suscipit distinctio, numquam omnis quo fuga ipsam quis inventore voluptatum recusandae culpa, unde doloribus saepe labore alias voluptate expedita? Dicta delectus beatae explicabo odio voluptatibus quas, saepe qui aperiam autem obcaecati, illo et! Incidunt voluptas culpa neque repellat sint, accusamus beatae, cumque autem tempore quisquam quam eligendi harum debitis.</p> --}}
      
                    <figure class="my-4">
                      <img src="{{ asset('storage/back/' . $article->img) }}" alt="" width="800px" class="img-fluid">
                      <figcaption>{{ $article->img_caption }}</figcaption>
                    </figure>
                    <p>{!! $article->desc !!}</p>
                    
                  </div><!-- End Single Post Content -->
                </div>
                {{-- sidebar --}}
                 @include('front.layout.sidebar2')  
              </div>
            </div>
          </section>
    </main>
@endsection

