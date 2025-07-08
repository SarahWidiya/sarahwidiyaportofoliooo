<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <title>Home - Sarah Widiya</title>
</head>
<body>
  <header>
    <a href="#" class="logo">Sarah Widiya</a>
    <nav>
      <a href="{{ url('/') }}" class="active">Home</a>
      <a href="{{ url('/introduction') }}">Introduction</a>
      <a href="{{ url('/skills') }}">Skills</a>
      <a href="{{ url('/v&m') }}">V&M</a>
      <a href="{{ url('/myproject') }}">My Project</a>
      <a href="{{ url('/contact') }}">Contact</a>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-container">
      <div class="hero-image">
        <img src="{{ asset('image/Screenshot 2025-06-15 173957.png') }}" alt="Sarah Widiya">
      </div>
      <div class="hero-content">
        <h1>Hallo, Saya <span>Sarah Widiya</span></h1>
        <p>Seorang Desainer UI/UX. Saya memiliki ketertarikan dalam menciptakan antarmuka pengguna yang intuitif dan menarik secara visual. Selamat datang di portofolio saya, tempat saya membagikan proses, pemikiran desain, dan hasil karya terbaik saya.</p>
        
        <div class="social-icons">
          <a href="https://www.linkedin.com/in/sarah-widiya-1a81862b8/"><i class="fab fa-linkedin"></i></a>
          <a href="https://github.com/SarahWidiya"><i class="fab fa-github"></i></a>
          <a href="https://x.com/SarahWidiya4"><i class="fab fa-x-twitter"></i></a>
          <a href="https://www.instagram.com/sarahromanoff_?igsh=MWo3Mnd1aTlmMXFsZA%3D%3D"><i class="fab fa-instagram"></i></a>
        </div>

       <a href="{{ url('/contact') }}" class="btn">Contact Me</a>

      </div>
    </div>
  </section>

  <style>
    body {
      background-color:rgb(25, 25, 25);
      color: white;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      padding: 1rem 9%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav {
      display: flex;
      gap: 2rem;
    }

    nav a {
      color: white;
      font-size: 1.8rem;
      text-decoration: none;
      border-bottom: 3px solid transparent;
      transition: 0.3s ease;
    }

    nav a.active {
      color: #e3651d;
      border-bottom: 3px solid #e3651d;
    }

    .hero {
      padding: 12rem 9% 6rem;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .hero-container {
      display: flex;
      align-items: center;
      gap: 5rem;
      flex-wrap: wrap;
      max-width: 1200px;
      width: 100%;
    }

    .hero-image img {
      width: 300px;
      height: 300px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solidrgb(101, 181, 203);
    }

    .hero-content {
      max-width: 600px;
    }

    .hero-content h1 {
      font-size: 4rem;
      margin-bottom: 1rem;
    }

    .hero-content h1 span {
      color: #e3651d;
    }

    .hero-content p {
      font-size: 1.6rem;
      color: #bbb;
      margin-bottom: 2rem;
    }

    .social-icons {
      margin-bottom: 2rem;
    }

    .social-icons a {
      color: #e3651d;
      font-size: 2.2rem;
      margin-right: 1.5rem;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #ff7700;
    }

    .btn {
      padding: 1rem 2rem;
      background-color: #e3651d;
      color: white;
      text-decoration: none;
      font-size: 1.6rem;
      border-radius: 0.5rem;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #ff7700;
    }

    @media (max-width: 768px) {
      .hero-container {
        flex-direction: column;
        text-align: center;
      }

      .hero-image img {
        margin-bottom: 2rem;
      }
    }
  </style>
</body>
</html>
