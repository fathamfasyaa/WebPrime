<nav class="navbar navbar-expand-lg fixed-top py-5" style="backdrop-filter: blur(1rem); background-color: transparent;">
    <div class="container-fluid d-inline-flex align-items-center justify-content-start gap-2">
        <div class="d-flex align-items-center gap-2 flex-grow-1">
            <div class="d-inline-flex flex-column align-items-start gap-2">
                <div style="display: flex; justify-content: center;">
                    <a href="{{ route('welcome') }}">
    <img src="{{ asset('images/layer-3.png') }}" alt="Logo">
    </a>

                </div>

            </div>
            <div id="navbar" class="d-flex align-items-center justify-content-center flex-grow-1 m-0">
                <div class="d-flex align-items-center">
                    <a href="{{ url('/explore') }}" class="menu-link">Explore</a>
                    <img src="{{ asset('images/caret-down.png') }}" alt="Dropdown" class="me-1">
                </div>
                <div class="d-flex align-items-center  menu-item m-0 p-0">
                    <a href="{{ route('portfolio') }}" class="menu-link">Portofolio</a>
                </div>
                <div class="d-flex align-items-center  menu-item m-0 p-0">
                    <a href="{{ route('blog') }}" class="menu-link">Blog</a>
                </div>
                <div class="d-flex align-items-center  menu-item m-0" style="padding-right: 100px">
                    <a href="{{ route('tentangkami') }}" class="menu-link">Tentang Kami</a>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center m-0">
            <div class="contact-button">
                <a href="{{ route('kontak') }}" class="contact-link">Kontak</a>
            </div>
        </div>
    </div>
</nav>
