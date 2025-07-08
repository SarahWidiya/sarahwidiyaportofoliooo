<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
  />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <title>Skills - Sarah Widiya</title>
</head>
<body>
  <header>
    <a href="#" class="logo">Sarah Widiya</a>
    <nav>
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/introduction') }}">Introduction</a>
      <a href="{{ url('/skills') }}" class="active">Skills</a>
      <a href="{{ url('/v&m') }}">V&M</a>
      <a href="{{ url('/myproject') }}">My Project</a>
      <a href="{{ url('/contact') }}">Contact</a>
    </nav>
  </header>

  <section class="home">
    <div class="home-img">
      <img src="{{ asset('image/figma.png') }}" alt="Figma Logo" />
    </div>

    <div class="home-content">
      <h1>My Skills</h1>
      <hr style="margin: 1rem 0;" />
      <p><strong>Design Tool :</strong><br>Figma</p>
      <p>
        Tool utama yang saya gunakan dalam seluruh proses desain, mulai dari wireframe, UI design, hingga prototyping.
      </p>

      <h3 style="margin-top: 2rem;">Design Capabilities</h3>
      <ul style="margin-top: 1rem;">
        <li><strong>Wireframing</strong> — Membuat struktur dasar layout sebelum finalisasi desain.</li>
        <li><strong>UI Design</strong> — Mendesain tampilan antarmuka yang modern dan user-friendly.</li>
        <li><strong>Prototyping</strong> — Menyusun interaksi antar halaman sebagai simulasi user flow.</li>
        <li><strong>Component System</strong> — Membuat dan menggunakan komponen untuk efisiensi desain.</li>
        <li><strong>Responsive Layout</strong> — Mendesain tampilan untuk berbagai ukuran layar.</li>
      </ul>
    </div>
  </section>
</body>
</html>
