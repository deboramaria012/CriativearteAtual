<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CriativeArte</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-bg">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <div class="topbar-item d-flex align-items-center">
        <i class="bi bi-phone"></i><span>+1 5589 55488 55</span>
      </div>
      <div class="topbar-item ms-4 d-none d-lg-flex align-items-center">
        <i class="bi bi-clock"></i><span>Seg-Sex: 11:00 - 23:00</span>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html">CriativeArte</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/sobre') }}">Sobre</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/servico') }}">Serviço</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/produtos') }}">Produtos</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/galeria') }}">Galeria</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/contato') }}">Contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="{{ url('/login') }}" class="book-a-table-btn scrollto">Login</a>

    </div>
  </header>

  <main>
    @yield('conteudo')
  </main>

  <style>

    /* Estilos do Footer */
.footer {
  background-color: #1a1a1a;
  color: #fff;
  padding: 60px 0;
}

.footer-title {
  font-size: 24px;
  font-weight: bold;
  color: #ffc107;
  margin-bottom: 20px;
}

.footer-text {
  line-height: 1.8;
  margin-bottom: 20px;
}

.footer-list {
  list-style: none;
  padding: 0;
  margin-bottom: 20px;
}

.footer-list li {
  padding: 5px 0;
}

.footer-list li a {
  color: #fff;
  transition: color 0.3s;
}

.footer-list li a:hover {
  color: #ffc107;
}

.footer-contact p {
  margin-bottom: 10px;
}

  .social-links a {
  font-size: 24px;
  display: inline-block;
  margin-right: 10px;
  color: #fff;
  transition: color 0.3s;
}

.social-links a:hover {
  color: #ffc107;
}

.credits {
  margin-top: 20px;
  color: #ccc;
  font-size: 14px;
}

  </style>


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 footer-info">
          <h3 class="footer-title">CriativeArte</h3>
          <p class="footer-text">Explorando a arte da criatividade para momentos únicos.</p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4 class="footer-title">Links Úteis</h4>
          <ul class="footer-list">
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
        </div>

        <div class="col-lg-5 col-md-6 footer-contact">
          <h4 class="footer-title">Entre em Contato</h4>
          <p><i class="bx bx-map"></i> Rua Exemplo, 123, Cidade, Estado, 12345</p>
          <p><i class="bx bx-phone"></i> +55 1234 56789</p>
          <p><i class="bx bx-envelope"></i> info@criativearte.com</p>
          <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-google"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container text-center">
      <div class="credits">
        &copy; <strong>CriativeArte</strong>. Todos os Direitos Reservados
      </div>
    </div>
  </footer>

  <!-- Vendor JS Files -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/glightbox.min.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
