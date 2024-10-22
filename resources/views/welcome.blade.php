@extends('layouts.app')

@section('title')

@section('content')
{{-- Navbar  --}}
<nav class="navbar navbar-expand-lg fixed-top py-5 " style="backdrop-filter: blur(1rem); background-color: transparent;">
    <div class="container-fluid ">
        <img class="logo" src="{{ asset('images/layer-1.png') }}" alt="Logo">
        <div id="navhome" class="collapse navbar-collapse justify-content-center">
            <ul id="fontnav" class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/explore') }}">
                        Explore
                        <img src="{{ asset('images/dropdown.png') }}" alt="Dropdown" width="10" height="10">
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('portfolio') }}">Portfolio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('tentangkami') }}">Tentang Kami</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center m-0">
            <div class="contact-button">
                <a href="{{ route('kontak') }}" class="contact-link">Kontak</a>
            </div>
        </div>
    </div>
</nav>
{{--  Akhir Navbar  --}}
    <div class="container-fluid " style="padding-top: 5rem">
        <div class="row"
            style="background: #2C50CB; max-width: 100dvw; object-fit: contain; height: fit-content; margin-top: -15dvh; padding-top:80px;">
            <div class="col-12 d-flex justify-content-center">
                <img class="img-fluid " src="{{ asset('images/welcome-img.png') }}"
                style="z-index: 10" />
            </div>
            {{--  <img class="img-fluid" src="{{ asset('images/welcome-line1.png') }}"
                style="position: absolute; right: 0; top: 0; z-index: 5;"
            />
            <img class="img-fluid" src="{{ asset('images/welcome-line2.png') }}"
                style="position: absolute;  top: 0; z-index: 5;"
            />  --}}
            <img class="img-fluid" src="{{ asset('images/welcome-lines.png') }}"
                style="position:absolute; margin-top: -5rem; margin-left: -20rem"
            />
        </div>
        <div class="row">
            <div class="col-6 border" style="padding: 2rem">
                <h1 class="display-4 text-wrap" style="width: 700px; font-size:50px;">
                    Wujudkan website sesuai dengan ekspektasi Anda, tepat waktu tanpa kompromi.
                </h1>
            </div>
           <div class="col-6 border" style="padding: 2rem">
    <div class="row">
        <div class="col-12">
            <p class="text-secondary fs-3 text-wrap" style="width: 750px">
                Lihat bagaimana kami mewujudkan ekspektasi jadi kenyataan.
                Dari konsep hingga live, inilah proyek-proyek kami di dunia digital.
            </p>
        </div>
        <div class="col-12 d-flex justify-content-start"> <!-- Pastikan justify-content-start untuk sejajar kiri -->
            <div class="portfolio-btn d-inline-flex align-items-center gap-2" style="width: auto;">
                <div class="portfolio-text">Lihat Portfolio</div>
                <div class="arrow-icon">
                    <img src="{{ asset('images/arrow-right.png') }}" alt="Arrow Right">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid scrollable-container py-5" style="height: 500px">
    <div class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach($blogs as $blog)
                <li class="splide__slide">
                    <div class="image-placeholder">
                        <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid" alt="">
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
        .splide_pagination_page {
            background-color: #ccc;
        }

        /* Active pagination dot color (blue) */
        .splide__pagination__page.is-active {
            background-color: #0000ff;
        }

        /* Position the pagination dots to the bottom-right corner */
        .splide__pagination {
            margin-top: 50px;
            right: 10px;
            /* Adjust to fine-tune the horizontal position */
            display: flex;
            justify-content: flex-end;
            /* Ensure dots align to the right */
            z-index: 1000;
            /* Ensure dots stay on top of other elements */
        }
    </style>
</div>
<div class="container-fluid py-5 custom-content">
    <div id="" class="row align-items-center" style="flex-direction: row;flex-wrap: nowrap;">
        <div class="col-12 col-md-7">
            <p id="fontslider" class="text-muted custom- text-wrap fs-4" style="width:900px">Terus berkembang
                bersama kami, melampaui ekspektasi dan mencapai tujuan.</p>
        </div>
        @if(isset($mitras) && count($mitras) > 0)
        <div class="col-12 col-md-9">
            <div class="slider-container">
                <div class="slider-content">
                    @foreach($mitras as $mitra)
                    <div class="slide-item">
                        <img id="imgsplider_{{ $loop->index }}" class="img-fluid slide-img pe-2" style="width: 200px"
                        src="{{ asset('storage/' . $mitra->image) }}"alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @else
        <p>No data available</p>
        @endif
    </div>
</div>
</div>
</div>

<div id="naonwe" class="row">
    <!-- Kolom Kiri -->
    <div class="col-md-6 d-flex flex-column justify-content-center" style="background: #EBEBEB">
        <div class="content-box p-3">
            <div class="text-box">
                <div class="text-muted fs-5">Bagaimana Kami Bekerja</div>
                <div class="text-dark fs-2 fw-semibold">Kami membantu Anda mewujudkan<br> sebuah ide menjadi realita
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <img src="{{ asset('images/Group 17.png') }}" alt="Image" class="img-fluid" style="margin-top: 50px;">

            </div>
        </div>
    </div>
    <!-- Kolom Kanan -->
    <div id="gigir" class="border border-top-0 col-md-6 d-flex flex-column justify-content-center bg-white">
        <div class="info-box bg-white border-bottom p-4">
            <div class="d-inline-flex gap-3">
                <div class="number fs-4 fw-semibold">01</div>
                <div class="title fs-4 fw-semibold">Discovery & Planning:</div>
            </div>
            <div class="description fs-5">Kami memulai dengan memahami kebutuhan bisnis Anda secara mendalam,
                mengumpulkan semua detail penting untuk merancang strategi yang tepat.</div>
        </div>
        <div class="info-box bg-white border-bottom p-4">
            <div class="d-inline-flex gap-3">
                <div class="number fs-4 fw-semibold">02</div>
                <div class="title fs-4 fw-semibold">Design & Prototyping:</div>
            </div>
            <div class="description fs-5">Kami membuat wireframe dan prototype untuk menggambarkan struktur website,
                diikuti oleh desain UI/UX yang menarik dan intuitif, sesuai dengan branding Anda.</div>
        </div>
        <div class="info-box bg-white border-bottom p-4">
            <div class="d-inline-flex gap-3">
                <div class="number fs-4 fw-semibold">03</div>
                <div class="title fs-4 fw-semibold">Development & Integration:</div>
            </div>
            <div class="description fs-5">Setelah desain disetujui, kami membangun website dengan teknologi terbaru,
                memastikan responsivitas, keamanan, dan integrasi dengan sistem yang dibutuhkan.</div>
        </div>
        <div class="info-box bg-white p-4">
            <div class="d-inline-flex gap-3">
                <div class="number fs-4 fw-semibold">04</div>
                <div class="title fs-4 fw-semibold">Testing & Launch:</div>
            </div>
            <div class="description fs-5">Website melalui uji coba ketat untuk memastikan semuanya berjalan sempurna.
                Setelah itu, kami meluncurkan website dan menyediakan dukungan pasca peluncuran untuk optimasi dan
                maintenance.</div>
        </div>
    </div>
</div>
<div class="custom-container border-bottom-2 pb-5">
    <div class="content-box">
        <div class="text-center">
            <div class="text-muted text-center service-title">Layanan Kami</div>
            <div class="text-dark text-center main-title">Ide Anda, Kami dan Teknologi</div>
        </div>
        <div class="image-section d-flex justify-content-center align-items-center">
            <img class="w-800 img-fluid custom-img" src="{{ asset('images/Group 20.png') }}" alt="Image">
        </div>
    </div>
</div>

{{-- Website Development  --}}
<div class="container-fluid bg-white border-top border-secondary-subtle">
    <div class="row">
        <!-- Website Development Card -->
        <div class="col-md-4 p-5 d-flex flex-column">
            <div class="text-secondary fs-5 font-weight-normal">Website Development</div>
            <div class="text-dark fs-4 fw-medium mb-3">Website Responsif dengan Performa dan Keamanan Terbaik</div>
            <div class="text-secondary fs-5 font-weight-normal mb-4">Kami menghadirkan website yang fungsional,
                responsif, dan sesuai dengan branding Anda. Dari landing page hingga e-commerce, kami pastikan setiap
                detail memenuhi ekspektasi dan memberikan pengalaman pengguna yang optimal.</div>
            <div class="d-flex align-items-center p-3 rounded-3">
                <img src="{{ asset('images/arrow-elbow-down-left copy.png') }}" alt="" srcset="">
                <a href="{{ route('webdev') }}" class="project-title text-primary fs-5 text-decoration-none">Pelajari
                    Lebih Lanjut</a>
            </div>
        </div>
        <!-- Mobile App Development Card -->
        <div class="col-md-4 p-5 d-flex flex-column border-start border-end border-secondary-subtle">
            <div class="text-secondary fs-5 font-weight-normal">Mobile App Android/iOS Development</div>
            <div class="text-dark fs-4 fw-medium mb-3">Aplikasi Mobile yang Integrasi Mulus dengan Semua Platform</div>
            <div class="text-secondary fs-5 font-weight-normal mb-4">Kami merancang dan mengembangkan aplikasi mobile
                yang inovatif dan user-friendly untuk platform Android dan iOS. Setiap aplikasi dibuat dengan performa
                tinggi, memastikan kemudahan akses dan engagement yang maksimal.</div>
            <div class="d-flex align-items-center p-3 rounded-3">
                <img src="{{ asset('images/arrow-elbow-down-left copy.png') }}" alt="" srcset="">
                <a href="{{ route('appmob') }}" class="project-title text-primary fs-5 text-decoration-none">Pelajari
                    Lebih Lanjut</a>
            </div>
        </div>
        <!-- Tech Consultation Card -->
        <div class="col-md-4 p-5 d-flex flex-column">
            <div class="text-secondary fs-5 font-weight-normal">Konsultan Teknologi</div>
            <div class="text-dark fs-4 fw-medium mb-3">Konsultan Teknologi Dengan Tim Ahli untuk Solusi Bisnis Anda
            </div>
            <div class="text-secondary fs-5 font-weight-normal mb-4">Temukan solusi teknologi terbaik bersama tim ahli
                kami. Dari strategi hingga implementasi, kami menghadirkan teknologi terkini yang dirancang untuk
                mendukung pertumbuhan dan kesuksesan bisnis Anda, sesuai dengan visi dan tujuan Anda.</div>
            <div class="d-flex align-items-center p-3 rounded-3">
                <img src="{{ asset('images/arrow-elbow-down-left copy.png') }}" alt="" srcset="">
                <a href="{{ route('konsul') }}" class="project-title text-primary fs-5 text-decoration-none">Pelajari
                    Lebih Lanjut</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid d-flex flex-column justify-content-start align-items-start bg-dark text-white p-5">
    <div class="d-flex flex-column gap-3">
        <div class="h6">Team Subscription</div>
        <div class="display-3 font-weight-bolder text-wrap" style="width: 700px">Membangun Tim Teknologi yang Tepat,
            Sesuai Kebutuhan Anda</div>
        <div id="fontnya" class="  text-wrap" style="width: 900px">
            Kami menyediakan tenaga ahli di bidang teknologi yang dapat Anda sewa secara bulanan. Dengan fleksibilitas
            tinggi dan keahlian yang teruji, kami membantu Anda memperkuat tim untuk mengatasi tantangan digital tanpa
            batas.
        </div>
    </div>
</div>

<div id="custom-bg-dark" class="container-fluid d-flex justify-content-start align-items-start bg-dark text-white p-5">
    <div class="row w-100">
        <div class="col-md-4 d-flex flex-column gap-4 p-3">
            <div class="h6">Paket</div>
            <div class="h2 font-weight-bold">SupportEssential</div>
            <div id="fontlol" class="h6 text-wrap" style="width: 400px">
                Dapatkan 1 tenaga ahli IT yang berfokus pada tugas-tugas dasar seperti maintenance sistem,
                troubleshooting, dan update software rutin. Paket ini ideal untuk bisnis yang membutuhkan dukungan
                teknologi sederhana tanpa kompleksitas tinggi.
            </div>
            <div class="d-flex align-items-left">
                <img id="arrow-image" class="arrow-class pb-3" src="{{ asset('images/arrow-elbow-down-leftputih copy.png') }}" alt="arrow image" srcset="">
                <div class="h6">Pelajari lebih lanjut</div>
            </div>
        </div>
        <div class="col-md-4 d-flex flex-column gap-4 p-3">
            <div class="h6">Paket</div>
            <div class="h2 font-weight-bold">TeamGrowth</div>
            <div id="fontlol" class="h6 text-wrap" style="width: 420px">
                Dengan 3 tenaga ahli, Anda akan mendapatkan kombinasi dari seorang developer front-end, back-end, dan
                seorang QA (Quality Assurance). Cocok untuk bisnis yang sedang berkembang dan membutuhkan solusi
                teknologi yang lebih kompleks.
            </div>
            <div class="d-flex align-items-left">
                <img id="arrow-image" class="arrow-class pb-3" src="{{ asset('images/arrow-elbow-down-leftputih copy.png') }}" alt="arrow image" srcset="">
                <div class="h6">Pelajari lebih lanjut</div>
            </div>
        </div>
        <div class="col-md-4 d-flex flex-column gap-4 p-3">
            <div class="h6">Paket</div>
            <div class="h2 font-weight-bold">Full-ScaleSquad</div>
            <div id="fontlol" class="h6 text-wrap" style="width: 420px">
                Dapatkan 5 tenaga ahli profesional yang terdiri dari seorang project manager, developer full-stack,
                UI/UX designer, devops engineer, dan seorang data analyst. Ideal untuk startup atau perusahaan yang
                membutuhkan pengembangan produk atau sistem yang komprehensif.
            </div>
            <div class="d-flex align-items-left">
                <img id="arrow-image" class="arrow-class pb-3" src="{{ asset('images/arrow-elbow-down-leftputih copy.png') }}" alt="arrow image" srcset="">
                <div class="h6">Pelajari lebih lanjut</div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid d-flex justify-content-start align-items-start p-5">
    <div class="row w-100">
        <div class="col-md-5 d-flex flex-column gap-3 p-3 bg-white">
            <div class="text-secondary h6">Tertimonial</div>
            <div id="fontdash" class="text-dark h2  ">Apa Kata Mereka Tentang Kami</div>
        </div>
        <div class="col-md-6 d-flex flex-column gap-4 p-3 bg-white ms-5">
            <div id="fontdash" class="h5 text-dark  fs-2 text-wrap" style="width:55rem !important;">
                "Kami memerlukan pengembangan aplikasi yang kompleks dalam waktu singkat.
                <span class="text-primary">The Prime</span> tidak hanya memenuhi tenggat waktu, tetapi juga memberikan
                solusi yang inovatif dan fungsional."
            </div>
            <div class="h5 text-secondary font-weight-bold">Sari Lestari, CEO di Tech Innovate</div>
            <div class="d-flex align-items-center gap-2">
                <div class="arrow-icon">
                    <div class="icon-inner"></div>
                </div>
                <img src="{{ asset('images/arrow-elbow-down-left copy.png') }}" alt="" srcset="">
                <div class="text-primary h6 m-0">Pelajari Lebih Lanjut</div>
            </div>
        </div>
    </div>
</div>
<div id="conta" class="container-fluid p-5 d-flex flex-column">
    <div class="row w-100 mb-4">
        <div class="col-md-6 d-flex flex-column p-3 bg-white">
            <div class="d-flex flex-column">
                <div class="text-secondary h6">Blog</div>
                <div class="text-dark display-4 font-exo">Temukan update terbaru</div>
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-end align-items-center p-3 bg-white">
            <div class="text-primary px-3 py-2">Pelajari Lebih Lanjut</div>
        </div>
    </div>
    @php $count = 0; @endphp
    <div class="d-flex">
        @foreach($blogs as $blog)
        @if($count < 3) <div class="col-md-4 d-flex flex-column p-3">
            <div id="content-update" class="bg-dark d-flex justify-content-center align-items-center" style="height: 380px;">
                <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid" alt="Placeholder Image">
            </div>

            <div class="mt-3 d-flex justify-content-end align-items-center">
                <div class="badge badge-outline-dark px-3 py-2">{{ $blog->date }}</div>
            </div>
            <div class="mt-3">
                <h4 class="text-dark font-exo fs-2">{{ $blog->title }}</h4>
                <p class="text-secondary truncated-text">{{ Str::limit(strip_tags($blog->content),304) }}</p> <!-- Tambahkan kelas truncated-text -->
            </div>
            <div class="text-primary d-flex align-items-center px-3 py-2 mt-3">
                <img src="{{ asset('images/arrow-elbow-down-left copy.png') }}" alt="Arrow" class="arrow-icon">
                <span class="ml-2">Pelajari Lebih Lanjut</span>
            </div>
    </div>
    @php $count++; @endphp
    @else
    @break
    @endif
    @endforeach
</div>

</div>
</div>
<div id="custom-section" class="container-fluid text-white py-4 w-200 border-top border-secondary d-flex justify-content-center align-items-center ps-5">
    <div class="d-flex flex-column justify-content-start align-items-start gap-4 p-4 flex-fill" style="padding-right:100px !important">
        <div class="font-weight-bold h5">The Prime Technology</div>
        <div class="h2 font-weight-normal text-wrap" style="width:800px">Siap untuk Mengubah Ide Anda Menjadi Realitas
            Digital?</div>
        <div class="h6 line-height-light text-wrap" style="width: 700px">Jangan tunggu lagi. Mari bicarakan bagaimana
            kami bisa membantu Anda mewujudkan website, aplikasi, atau solusi teknologi yang sesuai dengan kebutuhan
            Anda. Hubungi kami sekarang dan mulailah perjalanan digital Anda dengan langkah yang tepat.</div>
        <div class="d-flex justify-content-start align-items-center">
            <button class="btn btn-outline-light py-2 px-3">Buat janji meeting</button>
        </div>
    </div>
    <div id="dflex" class="d-flex flex-fill justify-content-center align-items-center">
        <img src="/path/to/image.png" alt="Gambar Placeholder" class="img-fluid bg-light" style="height: 350px; width:550px !important">
    </div>
</div>
<div class="row">
    <!-- Kolom Kiri -->
    <div class="col-md-6 d-flex flex-column justify-content-star" style="background: #EBEBEB">
        <div class="content-box p-3">
            <div class="text-box" style="padding-left: 20px">
                <div class="text-muted fs-5">Frequently asked questions</div>
                <div class="text-dark fs-1 fw-semibold text-wrap" style="width: 600px">Frequently asked questions and
                    answers</div>
            </div>
            <div class="d-flex justify-content-center mt-4">

            </div>
        </div>
    </div>
    <!-- Kolom Kanan -->
    <div class=" border-top-0 col-md-6 d-flex flex-column justify-content-center">
        <div class="info-box bg-white border-bottom p-4 ">
            <div class="d-inline-flex gap-3">
                <div class="title fs-4 fw-semibold text-wrap" style="width:700px">Find answers to common questions
                    about our cybersecurity solutions and how Dteckt can address your specific business needs.</div>
            </div>
        </div>
        <div class="info-box bg-white border-bottom p-4">
            <div class="d-inline-flex gap-3 ">
                <div class="title fs-6fw-semibold">Lorem Ipsum Dolor</div>
                <img id="tambahboy" src="{{ asset('images/plus.png') }}" alt="" srcset="">
            </div>
        </div>
        <div class="info-box bg-white border-bottom p-4">
            <div class="d-inline-flex gap-3">
                <div class="title fs-6fw-semibold">Lorem Ipsum Dolor</div>
                <img id="tambahboy" src="{{ asset('images/plus.png') }}" alt="" srcset="">
            </div>
        </div>
        <div class="info-box bg-white  border-bottom p-4">
            <div class="d-inline-flex gap-3">
                <div class="title fs-6fw-semibold">Lorem Ipsum Dolor</div>
                <img id="tambahboy" src="{{ asset('images/plus.png') }}" alt="" srcset="">
            </div>
        </div>
        <div class="info-box bg-white  border-bottom p-4">
            <div class="d-inline-flex gap-3">
                <div class="title fs-6fw-semibold">Lorem Ipsum Dolor</div>
                <img id="tambahboy" src="{{ asset('images/plus.png') }}" alt="" srcset="">
            </div>
        </div>
        <div class="info-box bg-white  border-bottom p-4">
            <div class="d-inline-flex gap-3">
                <div class="title fs-6fw-semibold">Lorem Ipsum Dolor</div>
                <img id="tambahboy" src="{{ asset('images/plus.png') }}" alt="" srcset="">
            </div>
        </div>
        <div class="info-box bg-white  border-bottom p-4">
            <div class="d-inline-flex gap-3">
                <div class="title fs-6fw-semibold">Lorem Ipsum Dolor</div>
                <img id="tambahboy" src="{{ asset('images/plus.png') }}" alt="" srcset="">
            </div>
        </div>
    </div>
</div>
<div class="newsletter-section container-fluid d-flex justify-content-center align-items-center bg-primary text-white border-top">
    <div class="newsletter-content d-flex flex-column flex-md-row align-items-center text-white" style="z-index: 1; height: 250px; max-width: 1500px; margin: 0 auto;">
        <div class="teks-kanan me-md-5 text-wrap" style="width: 4000px">
            <h5>Newsletter</h5>
            <h1>Berita dan penawaran spesial dari Kami</h1>
        </div>
        <div class="teks-kiri text-wrap" style="width: 4000px">
            <p>Dapatkan berita, tips eksklusif, dan penawaran spesial dari kami. Tetap terhubung dengan inovasi digital terkini.</p>
            <form action="{{ route('send.email') }}" method="POST">
                <div class="input-group">
                    @csrf
                    <input class="form-control rounded-3" type="email" name="email" placeholder="E-Mail Address" required>
                    <button type="submit" class="btn btn-light text-primary" style="font-family: 'Open Sans'">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>



@auth
@endauth
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var messageText = "<?= $_SESSION['status'] ?? '' ?>";
    if (messageText != '') {
        Swal.fire({
            title: "Thank You!",
            text: messageText,
            icon: "success"
        });
        <?php unset($_SESSION['status']); ?>
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var splide = new Splide('.splide', {
        perPage: 4,
        rewind: true,
        arrows: false, // Menonaktifkan panah
        pagination: true, // Menampilkan titik pagination
    });

    splide.mount();
</script>
<script>
    let currentIndex = 0;

function slideToNext() {
    const sliderContent = document.querySelector('.slider-content');
    const totalItems = document.querySelectorAll('.slide-item').length;
    currentIndex = (currentIndex + 1) % totalItems;
    const offset = -currentIndex * 10; // Asumsi setiap item lebarnya 100%
    sliderContent.style.transform = `translateX(${offset}%)`;
}

// Panggil slideToNext setiap 2 detik
setInterval(slideToNext, 2000);
</script>

@endsection
