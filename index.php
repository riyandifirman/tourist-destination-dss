<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- UNICONS -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
  <title>HirwiGo App</title>
  <link rel="icon" href="https://www.pinclipart.com/picdir/big/7-75302_clip-art-transparent-library-world-png-jokingart-com.png">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="assets/style_item.css">
  <!---<title> Responsive Our Team Section | CodingLab </title>---->
  <link rel="stylesheet" href="Card_Profile/style.css" />
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container navbar">
      <a class="navbar-brand text-decoration-none mb-0 brandd text-primary" href="index.php">
        <i class="uil uil-bus-school fs-5" width="30px"></i>
        <strong>HirwiGo</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-decoration-none active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none" href="#destination">Destinasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none" href="#topic">Topik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none" href="#method">Metode</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none" href="#parameter">Parameter & Algorithma</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="fuzzy-database-php-mysql.php" class="btn text-decoration-none rounded-pill btn-primary mx-lg-2">
              Cari Wisata
            </a>
          </li>
          <li class="nav-item">
            <a class="btn text-decoration-none rounded-pill btn-outline-primary" href="login.php">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME -->
  <section>
    <div class="flex-container container mt-5">
      <div class="flex-item-left">
        <label>Tim Petualang</label>
        <h1 class="display-3"><strong><strong>HirwiGo</strong></strong></h1>
        <label class="home_subtitle mt-1 text-muted">HirwiGo merupakan sistem pendukung keputusan destinasi wisata di kawasan bandung raya. Yuk Cari destinasi wisata mu disini berdasarkan kriteria kamu inginkan!</label> <br>
        <a href="fuzzy-database-php-mysql.php" class="btn text-decoration-none rounded btn-primary mt-3 py-3">
          Cari Wisata &nbsp;<i class="uil uil-location-arrow button_icon"></i>
        </a>
      </div>
      <div class="flex-item-right">
        <img src="assets/hiking.png" class="img-fluid rounded-3" alt="">
      </div>
    </div>
    <div class="container home_scroll-button mt-2">
      <a href="#destination">
        <label class="ms-4 text-muted"><i class="uil uil-mouse-alt h3"></i>scroll down</label>
      </a>
    </div>
  </section>

  <!-- ITEM Video -->
  <section class="container my-5" id="destination">
    <span class="text-primary d-flex justify-content-center"><small>Destinasi</small></span>
    <h3 class="text-center mb-4">Terpopuler</h3>
    <div class="body_item">
      <div class="wrapperr">
        <div class="card_destination">
          <img src="https://awsimages.detik.net.id/content/2015/08/13/1382/tsm.jpg" />
          <div class="infoo">
            <h5>Trans Studio Mall</h5>
            <p><small><small>
                  Tempat di mana Anda dapat menikmati belanja dan hiburan
                </small></small></p>
            <a target="_blank" href="https://bandung.transstudiomall.com/"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/rsfit19201280gsm/events/2021/02/04/f12b8d46-03f2-42ad-a620-5e7ad748aec8-1612403518383-adf8c9df733bf89681751d3427f993d7.jpg" />
          <div class="infoo">
            <h5>Tangkuban Perahu</h5>
            <p><small><small>
                  Gunung Tangkuban Parahu memiliki ketinggian 2.084 meter.
                </small></small></p>
            <a target="_blank" href="https://www.google.com/maps/place/Tangkuban+Perahu/@-6.7596375,107.6010259,15z/data=!3m1!4b1!4m5!3m4!1s0x2e68e1ddc59713db:0xa01c96b73428fedc!8m2!3d-6.7596377!4d107.6097807"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://www.mongabay.co.id/wp-content/uploads/2018/03/Udjo2.jpg" />
          <div class="infoo">
            <h5>Saung Angklung Udjo</h5>
            <p><small><small>
                  Tempat pertunjukan instrumen musik dari bambu.
                </small></small></p>
            <a target="_blank" href="https://www.google.com/maps/place/Saung+Angklung+Udjo/@-6.8980513,107.6527723,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e81f4a8a3f33:0x4bc9bc4101ccb79e!8m2!3d-6.8980513!4d107.654961"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://www.bandung-zoo.com/sites/default/files/styles/xl/public/harimau.jpg?itok=gJ_1pxQc&timestamp=1613964002" />
          <div class="infoo">
            <h5>Bandung Zoo</h5>
            <p><small><small>
                  Salah satu objek wisata alam flora dan fauna di Kota Bandung
                </small></small></p>
            <a target="_blank" href="https://www.bandung-zoo.com/"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://1.bp.blogspot.com/-6mmZMYTiZLk/XLnNi2WprDI/AAAAAAAAong/oE52uHbEXbEqyZYgZ9vWpasBp7vD3nwsACLcBGAs/s1600/Ranca%2BUpas%2B-%2BRiyardiarisman%2B%252834%2529.jpeg" />
          <div class="infoo">
            <h5>Ranca Upas</h5>
            <p><small><small>
                  Salah satu bumi perkemahan di Ciwidey, Bandung
                </small></small></p>
            <a target="_blank" href="https://www.google.com/maps/place/Ranca+Upas/@-7.1381404,107.3898715,17z/data=!3m1!4b1!4m8!3m7!1s0x2e688c86bccee619:0x265ecba7bd5df948!5m2!4m1!1i2!8m2!3d-7.1381404!4d107.3920602"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://cdn1-production-images-kly.akamaized.net/BszjYRL73IoF4lOlJaaaAvo3Rdw=/640x480/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3012222/original/041717400_1578049491-49933744_245295043050518_8381858458860418738_n.jpg" />
          <div class="infoo">
            <h5>Stone Garden</h5>
            <p><small><small>
                  Destinasi indah yang menawarkan pemandangan pegunungan hijau
                </small></small></p>
            <a target="_blank" href="https://www.google.com/maps/place/Stone+Garden+Citatah/@-6.8281528,107.4328292,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68fc59a3dab8ed:0x720ec8a7685d9ca3!8m2!3d-6.8281528!4d107.4350179"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VIDEO -->
  <section>
      <div class="container">
        <span class="text-primary d-flex justify-content-center"><small>Kawah Putih</small></span>
        <h3 class="text-center mb-2">Rekomendasi Wisata</h3>
      <div class="flex-container mt-2">
      <div class="flex-item-left">
          <h5 class="video_title">Inside the Sulfur Lakes of a Volcano in Bandung (Kawah Putih)</h5>
          <label class="text-muted"><small><small>178,008 views - Premiered Apr 1, 2021</small></small></label>
          <p class="video_p">"This white crater lake is composed of sulfur giving it a unique color and ominous feel like something out of a movie. This is a must see if you are visiting Bandung Indonesia!"</p>
          <a href="https://www.google.com/maps?q=kawah+putih+bandung&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjPn9ni4s70AhXJS2wGHXaqA4UQ_AUoAnoECAIQBA" target="_blank" class="btn text-decoration-none rounded-pill btn-primary mt-2 py-3">
            Visited &nbsp;<i class="uil uil-map-pin-alt button_icon"></i>
          </a>
      </div>
      <div class="flex-item-right">
        <a href="https://youtu.be/OoSinKtNLVc" target="_blank">
            <img class="img-fluid rounded-3" src="https://i.ytimg.com/vi/OoSinKtNLVc/maxresdefault.jpg" alt=""/>
        </a>
      </div>
    </div>
      <div class="container">
      <div class="video_row">
        <div class="video_item">
          <h5>Fasilitas</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Lengkap <br> <label class="text-muted"><small><small>Memperoleh Nilai 84</small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Spot Foto</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Keren <br> <label class="text-muted"><small><small>Memperoleh Nilai 82</small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Lahan Parkir</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Luas <br> <label class="text-muted"><small><small>Memperoleh Nilai 80</small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Harga</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Mahal <br> <label class="text-muted"><small><small>Rp. 45.000</small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Jarak dari Alun - alun</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Jauh <br> <label class="text-muted"><small><small>45 KM</small></small></label>
            </label>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>

  <!-- TOPIC -->
  <section class="container my-5" id="topic">
    <div class="row justify-content-md-center">
      <div class="col-lg-1 topic_1"></div>
      <div class="col-lg-5 topic_3">
        <img src="assets/sea - Copy.jpg" class="img-fluid rounded-3 mb-3" alt="">
      </div>
      <div class="col-lg-5 fuzzy_component topic_2">
        <span class="text-primary"><small>Topik Tim Petualang</small></span>
        <h3>Studi Kasus Yang Diangkat</h3>
        <p class="topic_p mt-3 text-dark">
          Luasnya wilayah Bandung Raya dan banyaknya objek wisata yang ada belum dapat dimaksimalkan
          karena <strong>terbatasnya informasi objek wisata</strong> yang ada di Kawasan Bandung Raya. </p>
        </p>
        <div class="mt-4">
          <a href="" class="text-decoration-none">
            <i class="uil uil-image-search fs-3"></i>
            <label class="h6 button--flex button--small button--link services_button">
              Lihat Destinasi
              <i class="uil uil-arrow-right button_icon"></i>
            </label>
          </a>
        </div>
      </div>
      <div class="col-lg-1 topic_4"></div>
    </div>
    </div>
  </section>

  <!--  Problem Solving -->
  <section class="container my-5" id="solusi">
    <div class="row justify-content-md-center">
      <div class="col-lg-1 topic_1"></div>
      <div class="col-lg-5 fuzzy_component topic_2">
        <span class="text-primary"><small>Ide Tim Petualang</small></span>
        <h3>Problem Solving</h3>
        <p class="topic_p mt-3 text-dark">
          Membuat Website untuk Sistem Pendukung Keputusan Destinasi Wisata di Kawasan Bandung Raya.
          Dengan menggunakan <strong>metode Fuzzy Logic</strong>
        <div class="mt-4">
          <a href="" class="text-decoration-none">
            <i class="uil uil-image-search fs-3"></i>
            <label class="h6 button--flex button--small button--link services_button">
              Lihat Destinasi
              <i class="uil uil-arrow-right button_icon"></i>
            </label>
          </a>
        </div>
      </div>
      <div class="col-lg-5 topic_3">
        <img src="assets/solvee.png" class="img-fluid rounded-3 solve_img" alt="">
      </div>
      <div class="col-lg-1 topic_4"></div>
    </div>
    </div>
  </section>

  <!-- FUZZY -->
  <div class="container my-5" id="method">
    <div class="row justify-content-md-center">
      <div class="col-lg-1"></div>
      <div class="col-lg-5">
        <img src="assets/question.jpg" class="img-fluid rounded-3 mb-3" alt="">
      </div>
      <div class="col-lg-5 fuzzy_component">
        <span class="text-primary"><small>Metode Tim Petualang</small></span>
        <h4>Kenapa Memilih Metode Fuzzy Logic ?</h4>
        <span class="text-muted"><small>Logika Fuzzy adalah suatu cara yang tepat untuk memetakan suatu ruang input ke dalam ruang output.
          </small></span>
        <div class="row p-2 shadow-sm bg-body rounded ms-1 mt-4">
          <div class="col-2 fuzzy_component">
            <a href="#">
              <i class="uil uil-star fs-1 warning"></i>
            </a>
          </div>
          <div class="col">
            <label><strong>Mudah</strong></label><br>
            <span class="text-muted"><small>Konsep logika Fuzzy mudah dimengerti</small></span>
          </div>
        </div>
        <div class="row p-2 shadow-sm bg-body rounded ms-1 mt-3">
          <div class="col-2 fuzzy_component">
            <a href="#">
              <i class="uil uil-check-circle fs-1 warning"></i>
            </a>
          </div>
          <div class="col">
            <label><strong>Fleksibel</strong></label><br>
            <span class="text-muted"><small>Implementasi Fuzzy tak terbatas</small></span>
          </div>
        </div>
        <div class="row p-2 shadow-sm bg-body rounded ms-1 mt-3">
          <div class="col-2 fuzzy_component">
            <a href="#">
              <i class="uil uil-border-alt fs-1 warning"></i>
            </a>
          </div>
          <div class="col">
            <label><strong>Toleransi</strong></label><br>
            <span class="text-muted"><small>Toleransi terhadap data yang tidak akurat</small></span>
          </div>
        </div>
      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>

  <!-- PARAMETERS -->
  <center>
    <div class="container" id="parameter">
      <div class="parameter_img">
        <div>
          <span><small>Parameter Kelompok 5</small></span>
          <h4>Parameter Yang Digunakan</h4>
        </div>
        <div class="parameter_text">
          <h5 class="parameter1"><i class="uil uil-map-pin-alt"> </i> Jarak</h5>
          <h5 class="parameter2"><i class="uil uil-bill"> </i> Harga</h5>
          <h5 class="parameter4"><i class="uil uil-star"> </i> Fasilitas</h5>
          <h5 class="parameter5"><i class="uil uil-sign-alt"> </i> Parkiran</h5>
          <h5 class="parameter3"><i class="uil uil-camera-plus"> </i> Spot Foto</h5>
        </div>
      </div>
    </div>
  </center>

  <!-- Alghoritma -->
  <div class="container my-5">
    <span class="text-primary d-flex justify-content-center"><small>Perhitungan</small></span>
    <h3 class="text-center mb-4">Alghoritma Parameter</h3>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Parameter Jarak
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/RumusKeanggotaan/Fungsi Keanggotaan Jarak.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/RumusKeanggotaan/Rumus Fungsi Keanggotaan Jarak.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Parameter Harga
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/RumusKeanggotaan/Fungsi Keanggotaan Harga.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/RumusKeanggotaan/Rumus Fungsi Keanggotaan Harga.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Parameter Fasilitas
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/RumusKeanggotaan/Fungsi Keanggotaan Fasilitas.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/RumusKeanggotaan/Rumus Fungsi Keanggotaan Fasilitas.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Parameter Luas Parkir
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/RumusKeanggotaan/Fungsi Keanggotaan Parkiran.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/RumusKeanggotaan/Rumus Fungsi Keanggotaan Parkiran.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Parameter Spot Foto
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/RumusKeanggotaan/Fungsi Keanggotaan Spot Foto.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/RumusKeanggotaan/Rumus Fungsi Keanggotaan Spot Foto.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bodyy">
    <div class="containerrr">
      <div class="text-white mb-5 text-center">
        <span><small>Anggota Kelompok 5</small></span>
        <h3>Tim Petualang</h3>
      </div>
      <input type="radio" name="dot" id="one" />
      <input type="radio" name="dot" id="two" />
      <div class="main-card">
        <div class="cardsss">
          <div class="carddd">
            <div class="contenttt">
              <div class="img">
                <img src="Card_Profile/iki.jpg" alt="">
              </div>
              <div class="details">
                <div class="name">M Rizki Wahyudie</div>
                <div class="job">Front-end</div>
              </div>
              <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-twitter fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-instagram fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-youtube fs-6 mt-2"></i></a>
              </div>
            </div>
          </div>
          <div class="carddd">
            <div class="contenttt">
              <div class="img">
                <img src="Card_Profile/riyandi.png" alt="">
              </div>
              <div class="details">
                <div class="name">Riyandi Firman</div>
                <div class="job">Back-end</div>
              </div>
              <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-twitter fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-instagram fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-youtube fs-6 mt-2"></i></a>
              </div>
            </div>
          </div>
          <div class="carddd">
            <div class="contenttt">
              <div class="img">
                <img src="Card_Profile/alif.png" alt="">
              </div>
              <div class="details">
                <div class="name">Alif Ilman</div>
                <div class="job">Algorithm</div>
              </div>
              <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-twitter fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-instagram fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-youtube fs-6 mt-2"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="cardsss">
          <div class="carddd">
            <div class="contenttt">
              <div class="img">
                <img src="Card_Profile/ardian.png" alt="">
              </div>
              <div class="details">
                <div class="name">Ardian</div>
                <div class="job">Problem Solver</div>
              </div>
              <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-twitter fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-instagram fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-youtube fs-6 mt-2"></i></a>
              </div>
            </div>
          </div>
          <div class="carddd">
            <div class="contenttt">
              <div class="img">
                <img src="Card_Profile/suryani.png" alt="">
              </div>
              <div class="details">
                <div class="name">Suryani Lestari</div>
                <div class="job">Found Topic</div>
              </div>
              <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-twitter fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-instagram fs-6 mt-2"></i></a>
                <a href="#"><i class="fab fa-youtube fs-6 mt-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="button">
        <label for="one" class="active one"></label>
        <label for="two" class="two"></label>
      </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>