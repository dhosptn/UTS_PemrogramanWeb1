<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Dinamis Modern</title>

  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- AOS Animation Library -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
  /* Custom CSS */
  :root {
    --primary-color: #2563eb;
    --secondary-color: #1e40af;
  }

  /* Smooth Scroll */
  html {
    scroll-behavior: smooth;
  }

  /* Modern Navigation */
  .navbar {
    backdrop-filter: blur(10px);
    background-color: rgba(255, 255, 255, 0.8);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .navbar-brand {
    font-weight: 700;
    color: var(--primary-color);
  }

  .hero {
    position: relative;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: white;
    padding: 160px 0 100px;
    /* Increased top padding to accommodate fixed navbar */
    margin-top: 0;
    /* Removed negative margin */
  }

  /* Add decorative elements */
  .hero::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100px;
    background: linear-gradient(to right bottom, transparent 49%, white 50%);
  }

  .hero-content {
    position: relative;
    z-index: 2;
  }

  .hero-title {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    line-height: 1.2;
  }

  .hero-subtitle {
    font-size: 1.25rem;
    opacity: 0.9;
    margin-bottom: 2rem;
    max-width: 600px;
  }

  .hero-btn {
    padding: 0.8rem 2rem;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 50px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    background: white;
    color: var(--primary-color);
    border: 2px solid white;
  }

  .hero-btn:hover {
    background: transparent;
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  }

  .hero-image {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
  }

  .hero-image:hover {
    transform: translateY(-10px);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
  }


  /* Cards */
  .card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .card:hover {
    transform: translateY(-5px);
  }

  /* Footer */
  footer {
    background: linear-gradient(135deg, #1e293b, #0f172a);
  }

  .social-icon {
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    transition: all 0.3s ease;
  }

  .social-icon:hover {
    background: var(--primary-color);
    transform: scale(1.1);
  }

  /* Loading Animation */
  .loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }

  /* Back to Top Button */
  .back-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: none;
    background: var(--primary-color);
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
    z-index: 999;
  }
  </style>
</head>

<body>
  <!-- Loading Animation -->
  <div class="loader" id="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <!-- Header with Navbar -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="?page=home">
          <i class="bi bi-code-slash"></i> WebDev
        </a>
        <?php include "includes/navbar.php"; ?>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6" data-aos="fade-right">
          <h1 class="display-4 fw-bold">Website Dinamis Ahmad Ridho</h1>
          <p class="lead">Buat website Anda lebih menarik dengan teknologi terkini</p>
          <a href="#pageContent" class="btn btn-light btn-lg">Mulai Sekarang</a>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <img src="assets/img/img_2.png" alt="Hero Image" class="img-fluid rounded-circle">
        </div>
      </div>
    </div>
  </section>

  <!-- Main Container -->
  <?php include "content.php"; ?>

  <!-- Footer -->
  <footer class="text-white py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up">
          <h5 class="mb-4">Kontak Kami</h5>
          <p><i class="bi bi-envelope me-2"></i> info@example.com</p>
          <p><i class="bi bi-telephone me-2"></i> (123) 456-7890</p>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <h5 class="mb-4">Ikuti Kami</h5>
          <div class="d-flex gap-3">
            <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
            <a href="https://www.instagram.com/ridhosptnn_/" class="social-icon"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <h5 class="mb-4">Lokasi</h5>
          <p><i class="bi bi-geo-alt me-2"></i> Jl. Contoh No.123, Kota Contoh</p>
          <p>Indonesia</p>
        </div>
      </div>
      <hr class="my-4">
      <div class="text-center">
        <small>&copy; 2024 Pemrograman Web 1. All rights reserved.</small>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <div class="back-to-top" id="backToTop">
    <i class="bi bi-arrow-up"></i>
  </div>

  <!-- JavaScript -->
  <script src="assets/jquery-3.7.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/datatables/dataTables.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
  // Initialize AOS
  AOS.init({
    duration: 1000,
    once: true
  });

  // Loading Animation
  window.addEventListener('load', function() {
    document.getElementById('loader').style.display = 'none';
  });

  // Back to Top Button
  window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById('backToTop').style.display = 'block';
    } else {
      document.getElementById('backToTop').style.display = 'none';
    }
  };

  document.getElementById('backToTop').addEventListener('click', function() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  // Initialize DataTable
  document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector("#example")) {
      new DataTable("#example", {
        responsive: true,
        pageLength: 10,
        language: {
          search: "Pencarian:",
          lengthMenu: "Tampilkan _MENU_ data per halaman",
          zeroRecords: "Data tidak ditemukan",
          info: "Menampilkan halaman _PAGE_ dari _PAGES_",
          infoEmpty: "Tidak ada data yang tersedia",
          infoFiltered: "(difilter dari _MAX_ total data)",
          paginate: {
            first: "Pertama",
            last: "Terakhir",
            next: "Selanjutnya",
            previous: "Sebelumnya"
          }
        }
      });
    }
  });
  </script>
</body>

</html>