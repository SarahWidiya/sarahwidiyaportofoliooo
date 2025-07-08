<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <title>My Project - Sarah Widiya</title>
  <style>
    .projects {
      padding: 8rem 9%;
      background-color: #191919;
    }

    .project-box {
      display: flex;
      flex-direction: row;
      align-items: flex-start;
      margin-bottom: 5rem;
      gap: 4rem;
    }

    .project-box img {
      width: 400px;
      border-radius: 2rem;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    }

    .project-text {
      flex: 1;
      font-size: 1.6rem;
    }

    .project-text h2 {
      font-size: 2.4rem;
      color: #e3651d;
      margin-bottom: 1rem;
    }

    .project-text p {
      margin-bottom: 1.5rem;
      color: #ddd;
    }

    .project-text ul {
      margin-left: 1.5rem;
      margin-bottom: 1.5rem;
      color: #ccc;
    }

    .project-text a.btn-link {
      display: inline-block;
      padding: 0.8rem 1.6rem;
      background-color: #e3651d;
      color: white;
      text-decoration: none;
      border-radius: 0.5rem;
      margin-top: 1rem;
      transition: 0.3s ease;
    }

    .project-text a.btn-link:hover {
      background-color: #ff7700;
    }

    @media screen and (max-width: 768px) {
      .project-box {
        flex-direction: column;
        align-items: center;
      }

      .project-box img {
        width: 100%;
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
      <a href="{{ url('/v&m') }}">V&M</a>
      <a href="{{ url('/myproject') }}" class="active">My Project</a>
      <a href="{{ url('/contact') }}">Contact</a>
    </nav>
  </header>

  <section class="projects">
    <!-- Project 1 -->
    <div class="project-box">
      <img src="{{ asset('image/login.jpg') }}" alt="Prototype Persediaan Bawang">
      <div class="project-text">
        <h2>1. Prototype Design Persediaan Bawang Kupas</h2>
        <p>Project ini merupakan prototype sistem persediaan berbasis website untuk mengelola stok bawang merah kupas pada agen bawang di Jatisari. Tujuannya adalah untuk mempermudah pencatatan stok, meminimalisir kesalahan pencatatan manual, serta membuat proses manajemen persediaan menjadi lebih terstruktur dan efisien.</p>
        
        <p><strong>Tools Used:</strong> Figma</p>
        <p><strong>My Role:</strong> User Research, UI Designer, Wireframing, Prototyping</p>

        <p><strong>Process:</strong></p>
        <ul>
          <li>Melakukan observasi dan wawancara singkat untuk memahami kebutuhan user</li>
          <li>Membuat wireframe low-fidelity sebagai rancangan awal tampilan dan fitur utama</li>
          <li>Mengembangkan prototype high-fidelity menggunakan Figma</li>
          <li>Mengumpulkan feedback dari pengguna potensial dan melakukan perbaikan desain</li>
        </ul>

        <a href="https://www.figma.com/design/kVxNwPJoj0wnI6kKcDtU0F/Untitled?node-id=0-1&t=JJ0FGHWMacQg6Fp9-1" target="_blank" class="btn-link">Lihat Design Prototype Persediaan Bawang di Figma</a>
      </div>
    </div>

    <!-- Project 2 -->
    <div class="project-box">
      <img src="{{ asset('image/beranda 1.jpg') }}" alt="Prototype Pendaftaran Santri">
      <div class="project-text">
        <h2>2. Prototype Design Pendaftaran Santriwan/Santriwati</h2>
        <p>Desain ini bertujuan untuk mempermudah proses pendaftaran santri pada Pondok Pesantren Miftahul Jannah Karawang dengan sistem berbasis digital, mulai dari pengisian data diri hingga verifikasi.</p>
        <p><strong>Tools Used:</strong> Figma</p>
        <p><strong>My Role:</strong> UI/UX Designer</p>

        <p><strong>Process:</strong></p>
        <ul>
          <li>Melakukan riset sederhana untuk mengetahui kebutuhan target pengguna</li>
          <li>Membuat wireframe sebagai dasar tampilan dan struktur aplikasi.</li>
          <li>Mengembangkan prototype interaktif menggunakan Figma.</li>
          <li>Melakukan evaluasi dan revisi berdasarkan masukan pengguna.</li>
        </ul>

        <a href="https://www.figma.com/design/ZWRd5LuIXUYR2aWbcw4lwU/Untitled?node-id=641-2&t=mFrEnuSH4dz9PpnO-1" target="_blank" class="btn-link">Lihat Design Pendaftaran Santri di Figma</a>
      </div>
    </div>

    <!-- Tambah Project 3, 4, dan Wireframing di bawah ini dengan format yang sama -->
    <!-- Project 3 -->
    <div class="project-box">
      <img src="{{ asset('image/tampilan utama.jpg') }}" alt="Prototype Pendaftaran Santri">
      <div class="project-text">
        <h2>3. Prototype Design Desain Aplikasi Lovegram – Media Sosial Berbasis Foto dan Video</h2>
        <p>Lovegram adalah prototype aplikasi media sosial berbasis foto dan video yang dirancang untuk membagikan momen spesial bersama pasangan,keluarga atau orang terdekat. Aplikasi ini menghadirkan nuansa romantis dan personal melalui fitur unggah foto, komentar, dan galeri bersama, seperti halnya Instagram.</p>
        <p><strong>Tools Used:</strong> Figma</p>
        <p><strong>My Role:</strong> User Research, UI Designer, Wireframing, Prototyping.</p>

        <p><strong>Process:</strong></p>
        <ul>
          <li>Melakukan riset user untuk memahami kebutuhan pendaftar.</li>
          <li>Membuat wireframe sebagai sketsa awal tampilan aplikasi.</li>
          <li>Mengembangkan prototype interaktif menggunakan Figma..</li>
          <li>Melakukan testing dan revisi berdasarkan feedback.</li>
        </ul>

        <a href="https://www.figma.com/design/MELw6i6CXpS19mlxzVED4X/Untitled?node-id=0-1&t=9RRRFUYf8Q7ybMAh-1" target="_blank" class="btn-link">Lihat Design Lovegram di Figma</a>
      </div>
    </div>

    <!-- Project 4 -->
    <div class="project-box">
      <img src="{{ asset('image/1 tampilan login pemilik dan admin.jpg') }}" alt="Prototype Pendaftaran Santri">
      <div class="project-text">
        <h2>4. Prototype Design Sistem Informasi Pendataan Santri (SIPENSI)</h2>
        <p>Project ini merupakan desain prototype website SIPENSI untuk Pondok Pesantren Miftahul Jannah Jatisari Karawang. Sistem ini bertujuan untuk mempermudah proses pendataan santri secara digital, menggantikan pencatatan manual yang kurang efisien. Terdapat dua pengguna admin dapat mengelola data santri (CRUD) dan pemilik hanya dapat melihat dan mencetak laporan</p>
        <p><strong>Tools Used:</strong> Figma</p>
        <p><strong>My Role:</strong> User Research, UI Designer, Wireframing, Prototyping.</p>

        <p><strong>Process:</strong></p>
        <ul>
          <li>Melakukan observasi dan diskusi dengan pengelola pesantren untuk memahami alur pendataan</li>
          <li>Mendesain wireframe sebagai rancangan struktur sistem.</li>
          <li>Mengembangkan prototype high-fidelity menggunakan Figma.</li>
          <li>Melakukan evaluasi terhadap prototype dan revisi berdasarkan masukan pengguna.</li>
        </ul>

        <a href="https://www.figma.com/design/ZWRd5LuIXUYR2aWbcw4lwU/Untitled?node-id=0-1&t=mFrEnuSH4dz9PpnO-1" target="_blank" class="btn-link">Lihat Design Pendataan Santri di Figma</a>
      </div>
    </div>

    <!-- Project 5 -->
    <div class="project-box">
      <img src="{{ asset('image/coffe.jpg') }}" alt="Prototype Pendaftaran Santri">
      <div class="project-text">
        <h2>5. Prototype Desain Website Menu Interaktif untuk Cafe Enamdua Coffemeals – Coffee Shop Lokal Purwakarta</h2>
        <p>Project ini merupakan desain prototype website untuk Cafe Enamdua Coffemeals, sebuah coffee shop lokal yang berlokasi di Purwakarta. Website ini dirancang khusus untuk menampilkan menu secara interaktif, informatif, dan menarik secara visual.

Tujuan dari proyek ini adalah memberikan pengalaman pengguna yang menyenangkan dalam menjelajahi daftar menu tanpa perlu datang langsung ke cafe atau mengunduh aplikasi. Desain ini terinspirasi dari tampilan website J.CO, yang menonjolkan visual menu dengan layout yang bersih dan profesional, namun tetap disesuaikan dengan identitas brand lokal.</p>
        <p><strong>Tools Used:</strong> Figma</p>
        <p><strong>My Role:</strong> UI Designer, Visual Content Creator, User Research (Observasi)</p>

        <p><strong>Process:</strong></p>
        <ul>
          <li>Observasi langsung ke Cafe Enamdua Coffemeals untuk memahami gaya dan alur menu yang ditawarkan.</li>
          <li>Mendesain layout website yang fokus pada visual menu, dengan kategori seperti Signature Coffee, Non-Coffee, Light Meals, dan Dessert..</li>
          <li>Membuat wireframe dan prototipe interaktif menggunakan Figma.</li>
          <li>Menambahkan elemen visual khas seperti warna branding, font, dan ikon.</li>
          <li>Hasil akhir berupa website menu online yang dapat diakses oleh pelanggan untuk melihat menu terbaru kapan saja.</li>
        </ul>

        <a href="https://www.figma.com/design/7VhMjgSx8HyO4tXsHfotSk/Untitled?node-id=0-1&t=mNSB3DH4O6qVqguv-1" target="_blank" class="btn-link">Lihat Design Pendaftaran Santri di Figma</a>
      </div>
    </div>

    <div class="project-box">
      <img src="{{ asset('image/wireframe lovegram.jpg') }}" alt="Prototype Pendaftaran Santri">
      <div class="project-text">
        <h2>6. Wireframe Lovegram</h2>
        

  </section>
</body>
</html>
