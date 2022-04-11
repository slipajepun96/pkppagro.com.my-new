<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PKPP Agro</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<!-- FB Messenger Plugin  -->
<!-- Messenger Chat plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "1730093173938797");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v13.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<!-- END of FB Messenger Plugin -->
 <?php include('header.php'); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">

  <!-- carousel -->
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">

        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Selamat Datang Ke PKPP Agro</h2>
          <p class="animate__animated fanimate__adeInUp">Istiqomah Pemangkin Kecemerlangan</p>
        </div>
      </div>

     
      <!-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>-->
    </div>
    <!-- Carousel wrapper -->

<!-- Carousel wrapper -->

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main>
<br>
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-sm-12">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/activity/sawit.jpg" class="d-block w-100" alt="..."><br>
          </div>
          <div class="carousel-item">
            <img src="assets/img/activity/kelapa.jpg" class="d-block w-100" alt="..."><br>
          </div>
          <div class="carousel-item">
            <img src="assets/img/activity/nanas-2.jpg" class="d-block w-100" alt="..."><br>
          </div>
        
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-sm-12">
      <div class="content" data-aos="fade-up">         
        <div class="section-title" data-aos="zoom-out">
          <!-- <h2>TENTANG KAMI</h2> -->
          <p>Sejarah Kami</p>
        </div>
        <p>PKPP Agro Sdn. Bhd. (PKPP Agro), dahulunya dikenali sebagai LKPP Padi Sdn. Bhd. merupakan anak syarikat Perbadanan Kemajuan Pertanian Negeri Pahang (PKPP), ditubuhkan pada 8 Disember 1994 dengan pegangan ekuiti penuh (100%) oleh PKPP.</p>
        <br>
        <p>Pada awal penubuhannya, PKPP Agro hanya terlibat didalam bidang tanaman padi sahaja di dalam daerah Rompin. Dalam mempelbagaikan aktivitinya, PKPP Agro mula mengorak langkah menceburi tanaman kelapa sawit, kelapa, <i>agrotourism</i> dan nanas.</p>   
      </div>  
    </div>  
  </div>
  <!-- <div class="row">
    <div class="col-lg-6" style=" background-color: #E5E5E5;">
    <br>
      <div class="section-title" data-aos="zoom-out">
          <h2>KOMODITI</h2>
          <p>HARGA HARIAN MINYAK SAWIT MENTAH</p>
        </div>
      <iframe class="wrapper" height="400px" width="100%" src="https://bepi.mpob.gov.my/admin2/chart_cpomsia_mini.php"> </iframe>
    </div>
  </div> -->
</div>
<br>
      

      <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <!-- <img src="assets/img/sustainable.png" class="d-none d-md-block w-100" alt="..."> -->
              <img src="assets/img/s.png" class="w-100 " alt="...">
              <div class="carousel-caption d-md-block">
                <h3>Komitmen Kelestarian Kumpulan PKPP</h3>
                <p id="carousel-p" class="d-none d-lg-block">PKPP Agro sebagai anak syarikat Perbadanan Kemajuan Pertanian Negeri Pahang (PKPP) komited untuk melaksanakan pembangunan lestari yang akan memberi impak positif kepada pemegang taruh, syarikat, masyarakat dan alam sekitar.</p>
                <br><a href="https://ndpe.pkpp.gov.my/"><button class="rounded-pill btn btn-primary mb-1">Lihat Dasar NDPE Kumpulan PKPP <i class="bi bi-box-arrow-up-right"></i></button></a>
              </div>
          </div>
        </div>
      </div>
    </div></section>


  </main><!-- End #main -->

  <?php include('footer.php'); ?>
</body>

</html>