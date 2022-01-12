<!DOCTYPE html>
<html lang="en">

<?php
$p_id=$_GET['p_id'];	
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PKPP Agro - Polisi MSPO</title>
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

<?php include('header-inner.php'); ?>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Dasar MSPO</h2>
          <ol>
            <li><a href="index.html">Utama</a></li>
            <li><a href="sustainability.php">Kelestarian & Integriti</a></li>            
            <li><a href="mspo.php">Dasar MSPO & NDPE</a></li>
            <li>Dasar MSPO</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
  
<!-- image banner -->
  <img src="assets/img/page-header.jpg" width="100%">
<div class="container">
<?php if($p_id=="1")
             {
                $name="Polisi Minyak Sawit Mampan Malaysia";
                $pic="mspo-1.png";
             }
             else if($p_id=="2")
             {
                $name="Polisi Kelestarian";
                $pic="mspo-2.png";
             }
             else if($p_id=="3")
             {
                $name="Polisi Sosial Dan Hak Asasi Manusia";
                $pic="mspo-3.png";
             }
             else if($p_id=="4")
             {
                $name="Polisi Keselamatan Dan Kesihatan";
                $pic="mspo-4.png";
             }
             else if($p_id=="5")
             {
                $name="Dasar Alam Sekitar";
                $pic="mspo-5.png";
             }
             else if($p_id=="6")
             {
                $name="Dasar Tiada Pembakaran Terbuka";
                $pic="mspo-6.png";
             }
             else if($p_id=="7")
             {
                $name="Dasar Pengurusan Tanah Curam, Pengurusan Tanah Gambut <br> Dan Zon Penampan (Riparian Buffer Zone)";
                $pic="mspo-7.png";
             }
             else if($p_id=="8")
             {
                $name="Polisi Gangguan Seksual, Keganasan Dan Hak-Hak Pekerja";
                $pic="mspo-8.png";
             }			?>
 <div class="col-12">
    <a href="mspo.php" class="btn btn-warning active" role="button"aria-pressed="true" > <span class="glyphicon glyphicon-align-left"></span>Kembali</a><h5 align="center"><?php echo $name;?><h5><br>		
		<img src="/image/<?php echo $pic?>" style="border:5px solid black" width="100%">
  </div>


  

</div>   
</main><!-- End #main -->

<?php include('footer.php') ?>

</body>

</html>