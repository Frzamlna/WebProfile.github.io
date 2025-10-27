<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PT Maju Jaya Mandiri</title>
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
          <li><a href="{{ url('/') }}" class="active">Home</a></li>
          <li><a href="{{ url('/tentang') }}">About</a></li>
          <li><a href="{{ url('/kontak') }}">Contact us</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h2>PT Maju Jaya Mandiri</h2>
      <h3>Melayani dengan Kualitas, Maju Bersama Teknologi</h3>
      <p>
        Perusahaan manufaktur dan perdagangan terpercaya yang menghadirkan
        solusi berkualitas tinggi dengan dukungan teknologi modern untuk
        kebutuhan industri Anda.
      </p>

      <div class="hero-buttons">
        <a href="{{ url('/kontak') }}" class="btn btn-outline">Hubungi Kami</a>
      </div>
    </div>
  </section>


  <!-- Hero About -->
  <section class="hero-about">
    <div class="hero-about-content">
      <h1>Tentang Kami</h1>
    </div>
    <div>
      <p>
      PT Maju Jaya Mandiri adalah perusahaan manufaktur dan perdagangan yang telah 
      berpengalaman melayani berbagai industri dengan produk berkualitas tinggi.
      </p>
    </div>
  </section>

  <!-- Features card -->
  <section class="features">
    <div class="feature-card">
      <div class="icon">
        <img src="{{ asset('images/factory-icon.svg') }}" alt="Manufaktur">
      </div>
      <h3>Manufaktur Berkualitas</h3>
      <p>Proses produksi dengan standar internasional dan kontrol kualitas ketat</p>
    </div>

    <div class="feature-card">
      <div class="icon">
        <img src="{{ asset('images/gear-icon.svg') }}" alt="Teknologi">
      </div>
      <h3>Teknologi Modern</h3>
      <p>Menggunakan peralatan dan sistem produksi terkini untuk efisiensi maksimal</p>
    </div>

    <div class="feature-card">
      <div class="icon">
        <img src="{{ asset('images/target-icon.svg') }}" alt="Solusi">
      </div>
      <h3>Solusi Terpadu</h3>
      <p>Menyediakan berbagai produk dan layanan untuk kebutuhan industri Anda</p>
    </div>

    <div class="feature-card">
      <div class="icon">
        <img src="{{ asset('images/team-icon.svg') }}" alt="Tim">
      </div>
      <h3>Tim Profesional</h3>
      <p>Didukung oleh tenaga ahli berpengalaman dalam bidangnya</p>
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
</footer>
</body>
</html>
