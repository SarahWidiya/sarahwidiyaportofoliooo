<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <title>Contact - Sarah Widiya</title>
</head>
<body>
  <header>
    <a href="#" class="logo">Sarah Widiya</a>
    <nav>
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/introduction') }}">Introduction</a>
      <a href="{{ url('/skills') }}">Skills</a>
      <a href="{{ url('/v&m') }}">V&M</a>
      <a href="{{ url('/myproject') }}">My Project</a>
      <a href="{{ url('/contact') }}" class="active">Contact</a>
    </nav>
  </header>

  <section class="home">
    <div class="home-img">
     <img src="{{ asset('image/sarah3.jpg') }}" alt="Sarah Widiya" style="width: 24vw; border-radius: 50%;">
    </div>

    <div class="home-content">
      <h1>My Contact</h1>
      <p style="font-size: 1.6rem; margin-bottom: 2rem;">
        Terima kasih telah melihat portofolio saya. Jika ada hal yang ingin ditanyakan lebih lanjut,
        saya terbuka untuk berdiskusi.<br>
        Detail kontak bisa dilihat di bawah ini:
      </p>

      <p style="font-size: 1.6rem; margin-bottom: 1rem;">
        <strong><i class="fas fa-envelope"></i> Email:</strong> sarahwidiya@gmail.com<br>
        <strong><i class="fab fa-whatsapp"></i> WhatsApp:</strong> +62 831-1335-6073
      </p>

      <div class="social-icons">
        <a href="mailto:sarahwidiya6@gmail.com" target="_blank" title="Email">
          <i class="fas fa-envelope"></i>
        </a>
        <a href="https://wa.me/6283113356073" target="_blank" title="WhatsApp">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://www.linkedin.com/in/sarah-widiya-1a81862b8/" target="_blank" title="LinkedIn">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="https://github.com/SarahWidiya" target="_blank" title="GitHub">
          <i class="fab fa-github"></i>
        </a>
        <a href="https://x.com/SarahWidiya4" target="_blank" title="X (Twitter)">
          <i class="fab fa-x-twitter"></i>
        </a>
        <a href="https://www.instagram.com/sarahromanoff_?igsh=MWo3Mnd1aTlmMXFsZA%3D%3D" target="_blank" title="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </div>
  </section>
</body>
</html>
