<div class="col-md-3">
  <div class="aside-block">
      
    {{-- <div class="aside-block">
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
  </div> --}}


   <div class="aside-block">
      <h3 class="aside-title">Kategori</h3>
      <ul class="aside-links list-unstyled">
        @foreach ($categories as $category)
          <li><a href={{ url('kategori/'.$category->slug) }}><i class="bi bi-chevron-right"></i>{{ $category->name }}</a></li>
        @endforeach
      </ul>
    </div><!-- End Categories -->
  </div>