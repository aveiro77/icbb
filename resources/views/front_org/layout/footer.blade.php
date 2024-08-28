<footer id="footer" class="footer">
    <div class="footer-content">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-4">
            <h3 class="footer-heading">Tentang BligoSoft</h3>
            <p>Bligosoft merupakan vendor teknologi yang berfokus pada pembuatan software kustom sesuai dengan kebutuhan spesifik setiap klien. Kami berdedikasi untuk memberikan solusi teknologi inovatif dan berkualitas tinggi yang dapat diandalkan untuk meningkatkan efisiensi dan produktivitas bisnis Anda.</p>
           
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Navigasi</h3>
            <ul class="footer-links list-unstyled">
              <li>
                <a href={{ url('/') }} ><i class="bi bi-chevron-right"></i> Blog</a>
              </li>
              <li>
                <a href={{ url('/portfolio') }}><i class="bi bi-chevron-right"></i> Portfolio</a>
              </li>
              <li>
                <a href={{ url('/tentang-kami') }}><i class="bi bi-chevron-right"></i> Tentang Kami</a>
              </li>
              <li>
                <a href={{ url('/kontak') }}><i class="bi bi-chevron-right"></i> Kontak</a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Kategori</h3>
            <ul class="footer-links list-unstyled">
              @foreach ($categories as $category)
                <li><a href={{ url('kategori/'.$category->slug) }}><i class="bi bi-chevron-right"></i> {{ $category->name }}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-4">
            <h3 class="footer-heading">Tulisan Terbaru</h3>

            <ul class="footer-links footer-blog-entry list-unstyled">
              @foreach ( $latest_posts as $latest )
                <li>
                  <a href={{ url('p/'.$latest->slug) }} class="d-flex align-items-center">
                    <img src={{ asset('storage/back/'.$latest->img) }} alt="" class="img-fluid me-3"/>
                    <div>
                      <div class="post-meta d-block">
                        <span class="date">{{ $latest->category->name }}</span>
                        <span class="mx-1">&bullet;</span>
                        <span>{{ $latest->created_at->format('Y F d') }}</span>
                      </div>
                      <span>{{ $latest->title }}</span>
                    </div>
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>BligoSoft</span></strong>. All Rights Reserved
            </div>
          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"
                ><i class="bi bi-instagram"></i
              ></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a
    href="#"
    class="scroll-top d-flex align-items-center justify-content-center"
    ><i class="bi bi-arrow-up-short"></i
  ></a>

  <!-- Vendor JS Files -->
  <script src={{ asset("front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
  <script src={{ asset("front/assets/vendor/swiper/swiper-bundle.min.js") }}></script>
  <script src={{ asset("front/assets/vendor/glightbox/js/glightbox.min.js") }}></script>
  <script src={{ asset("front/assets/vendor/aos/aos.js") }}></script>
  <script src={{ asset("front/assets/vendor/php-email-form/validate.js") }}></script>

  <!-- Template Main JS File -->
  <script src={{asset("front/assets/js/main.js")}}></script>
  @stack('js')
</body>
</html>