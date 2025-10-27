<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | My Website</title>
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
          <li><a href="{{ url('/tentang') }}" class="active">About</a></li>
          <li><a href="{{ url('/kontak') }}">Contact us</a></li>
        </ul>
      </nav>
    </div>
  </header>

<!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h2>Tentang Kami</h2>
      <p>Kami adalah tim yang berkomitmen menghadirkan solusi digital terbaik untuk Anda.</p>
    </div>
  </section>

<!-- OUR STORY -->
  <section class="our-story">
    <div class="story-container">
      <div class="story-image">
        <img src="/images/team.jpg" alt="Our Team">
      </div>
      <div class="story-text">
        <h2>Cerita Kami</h2>
        <p>
          Kami bermula dari sekelompok individu yang memiliki visi yang sama  
          menciptakan solusi digital yang berdampak. Seiring waktu, kami tumbuh menjadi 
          tim yang solid dan berkomitmen untuk membantu klien mencapai potensi terbaik mereka.
        </p>
      </div>
    </div>
  </section>

<!-- VISION & MISSION -->
  <section class="vision-mission">
    <h2>Visi & Misi</h2>
    <div class="vm-container">
      <div class="card">
        <h3>Visi</h3>
        <p>Mewujudkan inovasi digital yang memberikan manfaat nyata bagi masyarakat luas.</p>
      </div>
      <div class="card">
        <h3>Misi</h3>
        <ul>
          <li>Menghadirkan solusi digital yang efisien dan mudah digunakan.</li>
          <li>Mendorong kreativitas dan kolaborasi dalam setiap proyek.</li>
          <li>Memberikan layanan terbaik dengan berorientasi pada kepuasan klien.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- OUR TEAM -->
  <section class="our-team">
    <h2>Tim Kami</h2>
    <div class="team-container">
      <div class="team-card">
        <img src="/images/member1.jpg" alt="Member 1">
        <h4>Bu Angel</h4>
        <p>UI/UX Designer</p>
      </div>
      <div class="team-card">
        <img src="/images/member2.jpg" alt="Member 2">
        <h4>Pak Joko</h4>
        <p>Web Developer</p>
      </div>
      <div class="team-card">
        <img src="/images/member3.jpg" alt="Member 3">
        <h4>Pak Slamet</h4>
        <p>Project Manager</p>
      </div>
    </div>
  </section>

   <!-- CTA -->
  <section class="cta">
    <div class="cta-content">
      <h2>Tertarik Bekerja Sama?</h2>
      <p>Kami siap membantu Anda membangun solusi digital terbaik untuk bisnis Anda.</p>
      <a href="/contact" class="cta-button">Hubungi Kami</a>
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
