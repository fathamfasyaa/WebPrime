@extends('layouts.app2')

@section('title')

@section('content')

    <div lass="container-fluid p-0">
        <div id="" class="row" style="padding-top: 80px">

            {{--    --}}
            <div id="topweb" class="d-flex align-items-start px-5 pt-5 pb-5">
                <div class="text-secondary fs-5 fw-normal">Dashboard</div>
                <div class="text-secondary fs-5 fw-normal">/</div>
                <div class="text-primary fs-5 fw-normal">Mobile App Android/iOS Development</div>
                <div class="text-secondary fs-5 fw-normal">/</div>
            </div>
            {{--    --}}
            <div id="app-development-section" class="d-flex align-items-start justify-content-start p-4">
                <div id="app-description" class="col-md-5 p-4 bg-white">
                    <p class="text-muted fs-4 font-open-sans">Mobile App Android/iOS Development</p>
                    <h2 class="text-dark font-exo" style="font-size: 45px">Aplikasi Mobile yang Integrasi Mulus dengan Semua
                        Platform</h2>
                </div>
                <div id="app-details" class="col-md-5 bg-white" style="padding-left: 270px">
                    <p class="text-dark fs-3 font-exo text-wrap" style="width: 800px">Kami merancang dan mengembangkan
                        aplikasi mobile yang inovatif dan user-friendly untuk platform Android dan iOS. Setiap aplikasi
                        dibuat dengan performa tinggi, memastikan kemudahan akses dan engagement yang maksimal.</p>
                </div>
            </div>
            {{--    --}}
            <div id="xixixi" class="d-flex justify-content-start  bg-dark" style="height: 500px">
                <div id="service-description" class="col-md-5 d-flex flex-column gap-2" style="padding-bottom:80px ">
                    <p class="text-white fs-5 font-open-sans" style="padding-top:80px">Keunggulan Layanan Kami</p>
                    <h2 class="text-white fs-1 font-exo">Layanan Ekstra Untuk Bisnis Anda</h2>
                    <p class="text-white fs-5 font-open-sans">
                        Aplikasi mobile sangat penting bagi bisnis karena memungkinkan interaksi
                        langsung dengan pelanggan melalui perangkat yang mereka gunakan setiap
                        hari. Dengan aplikasi, bisnis dapat memberikan pengalaman yang lebih
                        personal dan responsif, meningkatkan loyalitas pelanggan melalui fitur-fitur
                        interaktif, serta mendapatkan data berharga untuk pengembangan strategi
                        bisnis di masa depan.
                    </p>
                </div>
                <div id="service-details" class="col-md-5 d-flex flex-column gap-3" style="padding-left: 100px !important">
                    <div class="service-feature gap-2">
                        <h3 class="text-white fs-4 font-exo" style="padding-top: 80px">Pengembangan Lintas Platform:</h3>
                        <p class="text-white fs-5 font-open-sans">
                            Kami menggunakan Flutter dan React Native untuk mengembangkan aplikasi yang
                            berjalan lancar di Android dan iOS.
                        </p>
                    </div>
                    <div class="service-feature">
                        <h3 class="text-white fs-4 font-exo">Desain UI/UX yang Memukau:</h3>
                        <p class="text-white fs-5 font-open-sans">
                            Desain yang fokus pada pengguna, memastikan aplikasi mudah digunakan dan
                            menarik.
                        </p>
                    </div>
                    <div class="service-feature">
                        <h3 class="text-white fs-4 font-exo">
                            Integrasi Mulus:</h3>
                        <p class="text-white fs-5 font-open-sans">
                            Aplikasi Anda akan terhubung dengan sistem backend dan API secara efisien.
                        </p>
                    </div>
                </div>
            </div>
            {{--    --}}
            <div id="how-we-work-section" class="d-flex flex-column align-items-start justify-content-start bg-white"
                style="padding-left: 70px; padding-top:50px;">
                <div id="work-title" class="text-muted fs-5 font-open-sans">Bagaimana Kami Bekerja</div>
                <div id="work-description" class="align-self-stretch text-dark fs-1 font-exo">Cara kami Mewujudkan
                    Ekspektasi Anda</div>
            </div>
            {{--    --}}
            <div id="process-section" class="d-flex flex-column align-items-start justify-content-start p-5">
                <div id="process-content" class="d-flex flex-column align-items-start justify-content-start"
                    style="height: 712px;">
                    <div class="d-flex align-items-center mb-4">
                        <div id="consultation" class="process-card">
                            <div class="img-fluid">
                                <img src="{{ asset('/images/dashboard-chats.png') }}" alt="" srcset="">
                            </div>
                            <div class="process-title">1.Konsultasi Awal:</div>
                            <div class="process-description text-wrap" style="width:600px">Kami mendiskusikan kebutuhan Anda
                                dan memahami visi bisnis Anda.</div>
                        </div>
                        <div id="design-development" class="process-card" style="padding-left: 300px">
                            <div class="img-fluid"style="padding-top: 20px">
                                <img src="{{ asset('/images/dashboard-sidebar.png') }}" alt="" srcset="">
                            </div>
                            <div class="process-title">2.Desain & Pengembangan:</div>
                            <div class="process-description text-wrap" style="width:700px">Tim kami merancang dan
                                mengembangkan website dengan fokus pada user experience dan fungsionalitas.</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div id="testing-launch" class="process-card">
                            <div class="img-fluid" style="padding-top: 10px">
                                <img src="{{ asset('/images/dashboard-rocket.png') }}" alt="" srcset="">
                            </div>
                            <div class="process-title">3.Uji Coba & Peluncuran:</div>
                            <div class="process-description text-wrap" style="width: 700px">Website diuji untuk memastikan
                                semuanya berjalan lancar sebelum peluncuran resmi.</div>
                        </div>
                        <div id="post-launch-support" class="process-card" style="padding-left:200px">
                            <div class="img-fluid">
                                <img src="{{ asset('/images/dashboard-gear-fine.png') }}" alt="" srcset="">
                            </div>
                            <div class="process-title">4.Dukungan Pasca Peluncuran:</div>
                            <div class="process-description text-wrap" style="width: 800px">Kami menyediakan dukungan dan
                                pemeliharaan untuk memastikan website Anda tetap optimal.</div>
                        </div>
                    </div>
                </div>
            </div>
            {{--    --}}
            <div id="portfolio-section" class="d-flex flex-column justify-content-start align-items-start bg-white">
                <div id="portfolio-title" class="text-muted fs-5 font-weight-light">Porfilo</div>
                <div id="portfolio-heading" class="align-self-stretch text-dark fs-2 font-weight-medium">Mobile App
                    Android/iOS Development</div>
            </div>
            {{--    --}}
            <div class="container-fluid scrollable-container py-5 ps-5" style="height: 500px">
    <div class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach($blogs as $blog)
                <li class="splide__slide">
                    <div class="image-placeholder">
                    <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid" alt="Placeholder Image">
                    </div>
                    <div class="custom-font">{{ $blog->title }}</div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

    </div>
    <div class="splide__pagination">
       <style>
        /* Pagination default (inactive) dots are gray */
        .splide__pagination__page {
            background-color: #ccc;
        }

        /* Active pagination dot color (blue) */
        .splide__pagination__page.is-active {
            background-color: #0000ff;
        }

        /* Position the pagination dots to the bottom-right corner */
        .splide__pagination {
           margin-top: 50px;
            right: 10px;  /* Adjust to fine-tune the horizontal position */
            display: flex;
            justify-content: flex-end; /* Ensure dots align to the right */
            z-index: 1000; /* Ensure dots stay on top of other elements */
        }
        </style>
    </div>
            {{--    --}}
            <div id="contact-section"
                class="d-flex justify-content-center align-items-center bg-dark text-white border-top"
                style="height: 500px">
                <div id="atur" class="container d-flex flex-column flex-lg-row justify-content-between gap-4"
                    style="margin-left: 250px">
                    <!-- Left Content -->
                    <div id="contact-left" class="flex" style="margin-left: -200px">
                        <h4 class="mb-4 font-weight-bold" style="padding-top: 50px">The Prime Technology</h4>
                        <h1 class="mb-4 font-weight-bold text-wrap" style="width: 900px">Siap untuk Mengubah Ide Anda
                            Menjadi Realitas Digital?</h1>
                        <p class="mb-4 text-wrap" style="width:600px">Jangan tunggu lagi. Mari bicarakan bagaimana kami
                            bisa membantu Anda
                            mewujudkan website, aplikasi, atau solusi teknologi yang sesuai dengan kebutuhan Anda.
                            Hubungi kami sekarang dan mulailah perjalanan digital Anda dengan langkah yang tepat.</p>
                        <div>
                            <a href="#" class="btn btn-outline-light px-4 py-2">Buat janji meeting</a>
                        </div>
                    </div>
                    <!-- Right Content -->
                    <div id="outer-container" class="d-inline-flex flex-column align-items-start justify-content-start">
                        <div id="inner-container"
                            class="d-inline-flex align-items-center justify-content-center p-2 bg-light">
                            <div id="image-wrapper" class="position-relative">
                                <img src="../asset/image.png" alt="">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
     <script>
    var splide = new Splide('.splide', {
        perPage: 4,
        rewind: true,
        arrows: false, // Menonaktifkan panah
        pagination: true, // Menampilkan titik pagination
    });

    splide.mount();
</script>
@endsection
