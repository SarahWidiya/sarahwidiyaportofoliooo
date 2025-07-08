<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <title>V&M - Sarah Widiya</title>
  <style>
    body {
      background-color: #191919;
      color: white;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }

    .vm-container {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 8rem 5%;
      gap: 5rem;
      flex-wrap: wrap;
    }

    .vm-container img {
      width: 350px;
      height: 350px;
      object-fit: cover;
      border-radius: 1.5rem;
      box-shadow: 0 0 25px #e3651d;
    }

    .vm-text {
      max-width: 600px;
    }

    .vm-text h1 {
      font-size: 4rem;
      color: #e3651d;
      margin-bottom: 2rem;
    }

    .vm-text h2 {
      font-size: 2.4rem;
      color: #e3651d;
      margin-top: 2rem;
      margin-bottom: 1rem;
    }

    .vm-text ul {
      list-style: none;
      padding-left: 1rem;
    }

    .vm-text ul li {
      font-size: 1.6rem;
      margin-bottom: 1.2rem;
      position: relative;
      padding-left: 2.5rem;
      color: #ddd;
    }

    .vm-text ul li::before {
      content: "•";
      color: #e3651d;
      position: absolute;
      left: 0;
      top: 0;
      font-size: 2rem;
      line-height: 1.4;
    }

    @media (max-width: 768px) {
      .vm-container {
        flex-direction: column;
        text-align: center;
      }

      .vm-text ul li {
        padding-left: 1.5rem;
      }

      .vm-text ul li::before {
        left: 0.5rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <a href="#" class="logo">Sarah Widiya</a>
    <nav>
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/introduction') }}">Introduction</a>
      <a href="{{ url('/skills') }}">Skills</a>
      <a href="{{ url('/v&m') }}" class="active">V&M</a>
      <a href="{{ url('/myproject') }}">My Project</a>
      <a href="{{ url('/contact') }}">Contact</a>
    </nav>
  </header>

  <section class="vm-container">
    <img src="{{ asset('image/sarah1.jpg') }}" alt="Foto Sarah" />

    <div class="vm-text">
      <h1>Vision & Mission</h1>

      <h2>My Vision</h2>
      <ul>
        <li>Menciptakan desain antarmuka yang intuitif dan mudah digunakan untuk meningkatkan pengalaman pengguna.</li>
        <li>Melakukan riset pengguna secara mendalam untuk menghasilkan solusi desain yang sesuai dengan kebutuhan nyata.</li>
        <li>Berkolaborasi dengan tim pengembang, stakeholder, dan klien untuk menghasilkan produk digital yang fungsional dan estetik.</li>
        <li>Terus mengembangkan skill dan mengikuti tren desain terkini agar mampu memberikan inovasi dalam setiap proyek.</li>
      </ul>

      <h2>My Mission</h2>
      <ul>
        <li>Menjadi desainer sistem informasi yang tidak hanya mengutamakan fungsionalitas, tetapi juga estetika dan kenyamanan pengguna.</li>
        <li>Menciptakan karya digital yang berdampak positif, bermanfaat bagi masyarakat, dan relevan dengan perkembangan teknologi.</li>
      </ul>
    </div>
  </section>
</body>
</html>
