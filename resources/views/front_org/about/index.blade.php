@extends('front.layout.template')

@section('title', 'Tentang Kami - Bligosoft')

@section('main')
    <main id="main">
        <section>
        <div class="container" data-aos="fade-up">
            <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h1 class="page-title">Tentang Kami</h1>
            </div>
            </div>

            <div class="row mb-5">

            <div class="d-md-flex post-entry-2 half">
                <a href="#" class="me-4 thumbnail">
                <img src={{ asset('storage/back/static/Bligosoft.png') }} alt="" class="img-fluid">
                </a>
                <div class="ps-md-5 mt-4 mt-md-0">
                <div class="post-meta mt-4">Tentang Kami</div>
                <h2 class="mb-4 display-4">Mengapa Bligosoft?</h2>

                <p>Bligosoft merupakan vendor teknologi yang berfokus pada pembuatan software kustom sesuai dengan kebutuhan spesifik setiap klien. Kami berdedikasi untuk memberikan solusi teknologi inovatif dan berkualitas tinggi yang dapat diandalkan untuk meningkatkan efisiensi dan produktivitas bisnis Anda.</p>
                <p>Kami siap membantu Anda mewujudkan visi digital Anda melalui pendekatan yang personal dan kolaboratif. Di Bligosoft, kami percaya bahwa setiap bisnis memiliki cerita dan kebutuhan yang berbeda, dan kami di sini untuk membantu Anda menciptakan solusi yang tepat dan efektif.</p>
                </div>
            </div>

            

            </div>

        </div>
        </section>
    </main>

@endsection

