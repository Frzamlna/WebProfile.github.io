<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | My Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Header -->
  <header class="navbar">
    <div class="container">
      <div class="logo">
        <div class="logo-circle">MJ</div>
        <h1>PT Maju Jaya Mandiri</h1>
      </div>
      <nav>
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/tentang') }}" >About</a></li>
          <li><a href="{{ url('/kontak') }}" class="active">Contact us</a></li>
        </ul>
      </nav>
    </div>
  </header>

<!-- Hero Section -->
  <section class="hero-contact">
    <div class="hero-content">
      <h2>Contact Us</h2>
      <p>We are ready to help answer your questions and needs.</p>
    </div>
  </section>

<!-- Send Messages -->
  <section class="contact-section">
    <div class="contact-container">
      <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
        @csrf
        <!-- {{-- Kirim Pesan --}} -->
        <div class="contact-form-box">
            <h2>Kirim Pesan</h2>
            <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Lengkap *</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" placeholder="nama@email.com" required>
                </div>
                <div class="form-group">
                    <label for="message">Pesan *</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                </div>
                <button type="submit" class="btn-submit">Kirim Pesan</button>
            </form>
        </div>

      <!-- {{-- Informasi Kontak --}} -->
        <div class="contact-info-box">
            <h2>Informasi Kontak</h2>
            <div class="info-item">
                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                <div>
                    <h3>Alamat</h3>
                    <p>Paledang, Kec. Lengkong<br>Kota Bandung, Jawa Barat, Indonesia</p>
                </div>
            </div>
            <div class="info-item">
                <div class="icon"><i class="fas fa-phone"></i></div>
                <div>
                    <h3>Telepon</h3>
                    <p>+62 21 1234 5678<br>+62 812 3456 7890</p>
                </div>
            </div>
            <div class="info-item">
                <div class="icon"><i class="fas fa-envelope"></i></div>
                <div>
                    <h3>Email</h3>
                    <p>info@majujayamandiri.com<br>sales@majujayamandiri.com</p>
                </div>
            </div>
            <div class="info-item">
                <div class="icon"><i class="fas fa-clock"></i></div>
                <div>
                    <h3>Jam Operasional</h3>
                    <p>Senin - Jumat: 08:00 - 17:00<br>Sabtu: 08:00 - 12:00<br>Minggu: Tutup</p>
                </div>
            </div>
        </div>
    </div>
  </section>

<!-- Bagian Lokasi Kami -->
<section class="contact-location">
    <h2 class="contact-location-title">Lokasi Kami</h2>
    <div class="contact-map-wrapper">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.454744220289!2d107.616372!3d-6.923158000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e62c0ee0b8c9%3A0x1b170852cbfac139!2sSimpang%20Lima%20Asia%20Afrika!5e0!3m2!1sid!2sid!4v1761549556398!5m2!1sid!2sid%22%20width=%22600%22%20height=%22450%22%20style=%22border:0;%22%20allowfullscreen=%22%22%20loading=%22lazy%22%20referrerpolicy=%22no-referrer-when-downgrade"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

 <!-- Footer -->
<footer class="footer">
  <div class="footer-container">
    <div class="footer-section">
      <h3>PT Maju Jaya Mandiri</h3>
      <p>
        Perusahaan manufaktur dan dagang yang berkomitmen memberikan produk berkualitas tinggi
        dengan teknologi modern.
      </p>
    </div>

    <div class="footer-section">
      <h3>Tautan Cepat</h3>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/tentang') }}">About</a></li>
        <li><a href="{{ url('/kontak') }}">Contact us</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h3>Hubungi Kami</h3>
      <p>📍 Paledang, Kec. Lengkong, Kota Bandung, Jawa Barat</p>
      <p>📞 +62 21 1234 5678</p>
      <p>✉️ info@majujayamandiri.com</p>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© 2025 PT Maju Jaya Mandiri. All rights reserved.</p>
  </div>


</body>
</html>
