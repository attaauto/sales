<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Loundry Online</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-navbar">
  <a class="navbar-brand" href="#">
    <img class="logo" src="<?= base_url()?>assets/images/aas.png" height="40">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url()?>home">RUMAH<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url()?>home">INVENTARIS<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url()?>home">FAQ<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url()?>home">MENGAPA KAMI<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url()?>cek_laundry">KONTAK</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url()?>home">JUAL MOBIL<span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>

<!-- akhir navbar -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">

    <?php
       foreach ($slider as $key => $value) {
          if ($key == 0) {?>
             <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key;?>" class="active"></li>
          <?php }else{?>
             <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key;?>"></li>
          <?php }
       }
    ?>
    
  </ol>

  <div class="carousel-inner">

     <?php
       foreach ($slider as $key => $value) {
          if ($key == 0) {?>
           <div class="carousel-item active">
          <img class="d-block w-100 image-slider" src="<?= base_url()?>assets/images/slider/<?= $value->gambar_slider;?>" alt="First slide">
          <div class="carousel-caption d-none d-md-block bg-caption">
           <h5><?= $value->judul_slider;?></h5>
           <p><?= $value->deskripsi_slider;?></p>
      </div>
    </div>
          <?php }else{?>
            <div class="carousel-item">
          <img class="d-block w-100 image-slider" src="<?= base_url()?>assets/images/slider/<?= $value->gambar_slider;?>" alt="First slide">
          <div class="carousel-caption d-none d-md-block bg-caption">
           <h5 class="bg-dark">LIHAT SEMUA MOBIL</h5>
           <p><?= $value->deskripsi_slider;?></p>
      </div>
    </div>
          <?php }
       }
    ?>

   
  </div>
  <a class="carousel-control-prev btn-slider" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next btn-slider" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">AOS.init({
      easing: 'ease-in-out-sine'
    });
    </script>
  </body>
</html>