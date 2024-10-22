@extends('layouts.app2') <!-- extends layout utama -->

@section('content')
    <!-- mulai section konten utama -->
    <div id="contact-container">
        {{--  <div id="first-dotted-line" class="dotted-line"></div>
        <div id="second-dotted-line" class="dotted-line"></div>  --}}
        <div id="contact-form" style="padding-top: 80px">
            <div id="contact-header">
                <h1 id="contact-title">Hubungi Kami</h1>
                <p id="contact-subtitle">Tim kami siap membantu Anda. Mulai percakapan sekarang dan kami akan memastikan Anda
                    mendapatkan solusi yang tepat hanya dalam hitungan menit.</p>
            </div>
            <div id="social-media">
                <div class="social-media-option">
                    <img src="Images/instagram-logobluer.png" style="padding-bottom:15px">
                    <p>Kirim pesan melalui Instagram</p>
                </div>
                <div class="social-media-option" style="padding-bottom:15px">
                    <img src="images/whatsapp-logo.png" style="padding-bottom:15px">
                    <p>Kirim pesan melalui WhatsApp</p>
                </div>
            </div>
            <form action="{{ route('send.email2') }}" method="POST">
    @csrf

            <div id="name-fields" class="py-3">
            <div class="form-group" id="first-name">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name"  placeholder="Nama Depan" required style="border: 1px solid #000;">
            </div>
            <div class="form-group" id="last-name">
                <label for="nameTerakhir">Nama belakang:</label>
                <input type="text" class="form-control" id="nameTerakhir" name="nameTerakhir" placeholder="Nama Belakang" required belakangired style="border: 1px solid #000;">
            </div>
        </div>
        <div class="form-group py-3" id="email-field">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email"  placeholder="Alamat email Anda" required style="border: 1px solid #000;">
        </div>
        <div class="form-group py-3" id="phone-field">
            <label for="phone">Nomor Telepon/WhatsApp</label>
            <input type="text" class="form-control" id="phone" name="phone" required style="border: 1px solid #000;">
        </div>
        <!-- <div id="first-name">
            <label for="first-name-input">Nama Depan</label>
            <input type="text" id="first-name-input" placeholder="Nama Depan">
        </div>

        <div id="last-name">
            <label for="last-name-input">Nama Belakang</label>
            <input type="text" id="last-name-input" placeholder="Nama Belakang">
        </div> -->
            <!-- <div id="email-field">
                <label for="email-input">Email</label>
                <input type="email" id="email-input" placeholder="Alamat email Anda">
            </div> -->

    <!-- <div class="form-group" id="first-name">
        <label for="name">Nama:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group" id="last-name">
        <label for="name">Nama:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div> -->

    <!-- <div class="form-group" id="email-field">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required style="border: 1px solid #000;">
    </div> -->
    <!-- <div class="form-group">
        <label for="message">Pesan:</label>
        <textarea class="form-control" id="message" name="message" rows="5" required style="border: 1px solid #000;"></textarea>
    </div> -->

<div class="mb-4">
    <label class="form-label">Layanan</label>
    <div class="row">
        <div id="column" class="col-md-2">
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" id="website">
                <label class="form-check-label" for="website">Website</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="mobileApp">
                <label class="form-check-label" for="mobileApp">Aplikasi Mobile iOS/Android</label>
            </div>
        </div>
        <div id="column" class="col-md-6">
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" id="techSupport">
                <label class="form-check-label" for="techSupport">Dukungan Teknologi</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="team">
                <label class="form-check-label" for="team">Tim</label>
            </div>
        </div>
    </div>
</div>
<div id="column" class="submit-button">
    <!-- <button type="submit" class="btn btn-primary">Kirim</button> -->
    <button type="submit" class="btn btn-dark w-100">Kirim Pesan</button>
</div>
</form>
</div>
        <section class="">
            <div class="container">
                <div class="text-center">
                    <div id="naon" class="row justify-content-center">
                        <img src="Images/WhatsApp Image 2024-09-09 at 4.55.43 AM.jpeg" alt="Map" id="naon"
                            class="img-fluid">
                    </div>
                </div>
        </section>
    </div>
@endsection
