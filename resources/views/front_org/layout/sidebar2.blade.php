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

      <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Artikel Lainnya</button>
        </li>
      </ul>

      <div class="tab-content" id="pills-tabContent">

        <!-- Latest -->
        <div class="tab-pane fade show active" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
          @foreach ($otherArticles as $other)  
            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">{{ $other->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $other->created_at->format('Y F d') }}</span></div>
              <h2 class="mb-2"><a href={{ url('p/'.$other->slug) }}>{{ $other->title }}</a></h2>
              {{-- <span class="author mb-3 d-block">Jenny Wilson</span> --}}
            </div>
          @endforeach

        </div> <!-- End Latest -->

      </div>
    </div>


    <div class="aside-block">
      <h3 class="aside-title">Kategori</h3>
      <ul class="aside-links list-unstyled">
        @foreach ($categories as $category)
          <li><a href={{ url('kategori/'.$category->slug) }}><i class="bi bi-chevron-right"></i>{{ $category->name }}</a></li>
        @endforeach
      </ul>
    </div><!-- End Categories -->

  </div>