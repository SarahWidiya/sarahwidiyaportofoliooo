<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <title>Introduction - Sarah Widiya</title>
  <style>
    .introduction {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 5rem;
      padding: 10rem 9%;
      background-color: #191919;
      color: white;
    }

    .intro-text {
      flex: 1;
    }

    .intro-text h1 {
      font-size: 4rem;
      color: #e3651d;
      margin-bottom: 2rem;
    }

    .intro-text h2 {
      font-size: 2.8rem;
      margin: 2rem 0 1rem;
    }

    .intro-text p {
      font-size: 1.6rem;
      line-height: 1.7;
      margin-bottom: 1rem;
      color: #ccc;
    }

    .intro-image {
      flex: 1;
      text-align: center;
    }

    .intro-image img {
      width: 100%;
      max-width: 450px;
      border-radius: 2rem;
      box-shadow: 0 0 30px rgba(227, 101, 29, 0.5);
    }

    @media (max-width: 768px) {
      .introduction {
        flex-direction: column-reverse;
        padding: 6rem 5%;
      }

      .intro-text h1 {
        font-size: 3rem;
      }

      .intro-text h2 {
        font-size: 2.2rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <a href="#" class="logo">Sarah Widiya</a>
    <nav>
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/introduction') }}" class="active">Introduction</a>
      <a href="{{ url('/skills') }}">Skills</a>
      <a href="{{ url('/v&m') }}">V&M</a>
      <a href="{{ url('/myproject') }}">My Project</a>
      <a href="{{ url('/contact') }}">Contact</a>
    </nav>
  </header>

  <section class="introduction">
    <div class="intro-text">
      <h1>Introduction</h1>
      <p>Halo! Saya Sarah Widiya, mahasiswa Sistem Informasi di Universitas Bina Sarana Informatika, saat ini sedang menempuh semester 4. Saya memiliki minat yang besar dalam bidang UI/UX Design, khususnya dalam menciptakan antarmuka yang tidak hanya menarik secara visual, tapi juga mudah digunakan. Portofolio ini merupakan kumpulan karya dan proses belajar saya sejauh ini, sebagai langkah awal untuk terjun ke dunia profesional melalui program magang. Saya percaya bahwa desain bukan hanya tentang estetika, tetapi juga tentang bagaimana pengguna merasa saat menggunakan produk digital.</p>
      
      <h2>About Me</h2>
      <p>Portofolio ini merupakan kumpulan karya desain UI/UX yang pernah saya buat, sebagai langkah awal untuk terjun ke dunia profesional melalui program magang. Di dalamnya terdapat proses belajar dan eksplorasi saya mulai dari penelitian pengguna, pembuatan wireframe, hingga prototipe akhir.</p>
      
      <h2>About Portfolio</h2>
      <p>Setiap proyek mencerminkan pendekatan yang saya gunakan dalam memahami kebutuhan pengguna dan menerapkannya ke dalam desain yang fungsional, efisien, dan menarik secara visual.</p>
    </div>

    <div class="intro-image">
      <img src="{{ asset('image/sarah4.jpg') }}" alt="Foto Sarah Widiya" />
    </div>
  </section>
</body>
</html>
