<?php include 'header.php';
session_start();?>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ml-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Tips</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="profile.php">Profile</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <header class="masthead">
    <div class="container">
      <div class="masthead-subheading">Welcome To BeYOUty!</div>
      <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
      <?php if(!($_SESSION )){

       ?>
       <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="login.php">Login</a>
     <?php }?>             
   </div>
 </header>
 <!-- Services-->
 <section class="page-section" id="Top 3 ">
  <div class="jumbotron bg-ku">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Top 3 Best Skincare</h2>
        <h3 class="section-subheading text-muted">Sociolla Award Winners </h3>
      </div>
      <div class="row text-center">
        <div class="col-md-4 mx-auto">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <img src="assets/img/about/top1.jpg" class="card-img-top">
              <hr>
              <h5 class="card-title">Cetaphil</h5>
              <h6 class="card-subtitle mb-2 text-muted"><a href  ="https://www.sociolla.com/skincare/7914-gentle-skin-cleanser "style="color: grey;" >  Gentle Skin Cleanser</h6></a>
              <p class="card-text text-danger font-weight-bold">Rp 59.000 - Rp 419.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mx-auto">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <img src="assets/img/about/top2.jpg" class="card-img-top">
              <hr>
              <h5 class="card-title">Mediheal</h5>
              <h6 class="card-subtitle mb-2 text-muted"><a href  ="https://www.sociolla.com/sheet-mask/9039-teatree-care-solution-essential-mask-ex"style="color: grey;" >Teatree Care Solution Essential Mask EX</h6></a>
              <p class="card-text text-danger font-weight-bold">Rp 29.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mx-auto">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <img src="assets/img/about/top3.jpg" class="card-img-top">
              <hr>
              <h5 class="card-title" style="color: black;">COSRX</h5>
              <h6 class="card-subtitle mb-2 text-muted"><a href  ="https://www.sociolla.com/toner/9207-aha-bha-clarifying-treatment-toner"style="color: grey;" >AHA/BHA Clarifying Treatment Toner</h6></a>
              <p class="card-text text-danger font-weight-bold">Rp 200.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Pilihan untuk kamu</h2>
      <h3 class="section-subheading text-muted">"Healthy skin is a reflection of overall wellness."</h3>
    </div>
    <div class="row">
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/01-thumbnail.jpg" alt="" />
          </a>
          <div class="portfolio-caption">
            <div class="portfolio-caption-heading">Body</div>
            <div class="portfolio-caption-subheading text-muted">Tubuh</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/02-thumbnail.jpg" alt="" />
          </a>
          <div class="portfolio-caption">
            <div class="portfolio-caption-heading">Nails</div>
            <div class="portfolio-caption-subheading text-muted">Kuku</div>                            
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/03-thumbnail.jpg" alt="" />
          </a>
          <div class="portfolio-caption">
            <div class="portfolio-caption-heading">Hair</div>
            <div class="portfolio-caption-subheading text-muted">Rambut</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/04-thumbnail.jpg" alt="" />
          </a>
          <div class="portfolio-caption">
            <div class="portfolio-caption-heading">Make Up</div>
            <div class="portfolio-caption-subheading text-muted">Dandan</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/05-thumbnail.jpg" alt="" />
          </a>
          <div class="portfolio-caption">
            <div class="portfolio-caption-heading">Skincare</div>
            <div class="portfolio-caption-subheading text-muted">Perawatan Kulit</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/06-thumbnail.jpg" alt="" />
          </a>
          <div class="portfolio-caption">
            <div class="portfolio-caption-heading">Healthy Food</div>
            <div class="portfolio-caption-subheading text-muted">Makanan Sehat</div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About-->

<!-- Contact-->
<section class="page-section" id="contact">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase"style="color: #fed136;">Contact Us</h2>
      <h3 class="section-subheading text-muted">Learn more about us</h3>
    </div>
    <form id="contactForm" name="sentMessage" novalidate="novalidate">
      <div class="row align-items-stretch mb-5">
        <div class="col-md-6">
          <div class="form-group">
            <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group mb-md-0">
            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group form-group-textarea mb-md-0">
            <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
      </div>
      <div class="text-center">
        <div id="success"></div>
        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
      </div>
    </form>
  </div>
</section>
<?php

include 'footer.php';

?>
<!-- Tips Modals-->
<!-- Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="modal-body">
              <!-- Project Details Go Here-->
              <h2 class="text-uppercase">BODY</h2>
              <p class="item-intro text-muted">"Take care of your body. It’s the only place you have to live."</p>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/bd8.jpg" style="height: 100%; background-size: contain;" class="card-img" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelbd1.php"><h5 class="card-title">Urutan Body Care Routine, Bikin Kulit Lembap dan Sehat</h5></a>
                      <p class="card-text"> 
                        Melakukan perawatan tubuh atau body care seringkali dianggap sepele. 
                      Padahal melakukan body care routine sangat penting dan berpengaruh juga pada..</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/bd22.jpg" style="height: 100%; background-size: contain;" class="card-img" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelbd2.php"><h5 class="card-title">Cara Memutihkan Kulit Tangan dan Kaki Belang dalam 1 Hari Secara Alami</h5></a>
                      <p class="card-text"> 
                      Memutihkan kulit tangan dan kaki saat ini menjadi perhatian banyak orang. 
                      Pasalnya, tidak hanya kulit wajah saja yang perlu dirawat. Tentu kamu.. </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/bd24.jpg" style="height: 100%; background-size: contain;" class="card-img" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelbd3.php"><h5 class="card-title">4 Cara menghilangkan bau badan yang mudah dilakukan</h5></a>
                      <p class="card-text"> 
                      Bau badan tidak sedap sering membuat seseorang menjadi kurang percaya diri. 
                      Apalagi saat ada egiatan bersama dengan orang lain. Cara.. </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fas fa-times mr-1"></i>
                Close 
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="modal-body">
              <!-- Project Details Go Here-->
              <h2 class="text-uppercase">NAILS</h2>
              <p class="item-intro text-muted">"Love of beauty is taste. The creation of beauty is art."</p>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/nl2.jpg" style="height: 100%; background-size: contain;" class="card-img" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelnl1.php"><h5 class="card-title">10 Cara Merawat Kuku Agar Tetap Sehat dan Cantik</h5></a>
                      <p class="card-text"> 
                        Kuku merupakan salah satu bagian tubuh yang sering menjadi perhatian karena mencerminkan kepribadian seseorang. 
                      Oleh karenanya penting bagi kamu untuk selalu..</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/nl14.jpg" style="height: 100%; background-size: contain;" class="card-img" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelnl2.php"><h5 class="card-title">7 Trik Memakai Kuteks yang Harus Diperhatikan agar Tahan Lama</h5></a>
                      <p class="card-text"> 
                        Apakah kamu melakukan gerakan-gerakan bodoh ketika memakai kuteks? Seperti tidak merentakan telapak lebar-lebar agar satu jari dan lainnya tidak saling menyentuh. 
                      Apalagi kalau..</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/nl23.jpg" style="height: 100%; background-size: contain;" class="card-img" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelnl3.php"><h5 class="card-title">4 Bahan Alami Ini Ampuh Atasi Kuku Kuning, Yuk Coba!</h5></a>
                      <p class="card-text"> 
                        Kuku kuning memang bisa mengganggu penampilan. 
                      Tapi tak perlu khawatir karena hal itu bisa dihilangkan menggunakan..</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fas fa-times mr-1"></i>
                Close 
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="modal-body">
              <!-- Project Details Go Here-->
              <h2 class="text-uppercase">HAIR</h2>
              <p class="item-intro text-muted">"Let nothing divert you from your duty to your hair."</p>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/hr8.jpg" style="height: 100%; background-size: contain;" class="card-img" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelhr1.php"><h5 class="card-title">Tak hanya keramas, step hair care ini harus kamu lakukan</h5></a>
                      <p class="card-text"> 
                        Mencuci rambut yang biasa kita lakukan pada 2-3 hari sekali merupakan kegiatan wajib untuk menjaga kebersihan dan kesehatan rambut. 
                      Faktanya.. </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/hr11.jpg" style="height: 100%; background-size: contain;" class="card-img" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelhr2.php"><h5 class="card-title">Yuk Buat Krim Creambath Sendiri Di Rumah</h5></a>
                      <p class="card-text"> 
                        Jika anda ingin melakukan creambath namun malas untuk pergi kesalon maka anda bisa membuat krim creambath sendiri lho di rumah. 
                      Lantas bahan.. </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/hr14.jpg" style="height: 100%; background-size: contain;" class="card-img" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelhr3.php"><h5 class="card-title">Hentikan Kebiasaan Keramas Tiap Hari, Ini Alasannya</h5></a>
                      <p class="card-text"> 
                        Aktivitas keramas memang menjadi salah satu kebutuhan setiap manusia. 
                      Namun, yang membedakan satu orang dengan lainnya adalah..</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fas fa-times mr-1"></i>
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal 4-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="modal-body">
              <!-- Project Details Go Here-->
              <h2 class="text-uppercase">MAKE UP</h2>
              <p class="item-intro text-muted">“Makeup is not a mask that covers up your beauty, 
              it’s a weapon that helps you express who you are from the inside.”</p>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/mu22.jpg" style="height: 100%; background-size: contain;" class="card-img" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelmu1.php"><h5 class="card-title">10 Urutan Make up yang benar</h5></a>
                      <p class="card-text"> 
                        Terkadang kita masih sering bingung dengan urutan makeup yang benar, 
                      terutama bagi para kaum remaja atau pemula yang baru belajar makeup. Agar..</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/mu23.jpg" style="height: 100%; background-size: contain;" class="card-img" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelmu2.php"><h5 class="card-title">Jenis-jenis lip products dan fungsinya</h5></a>
                      <p class="card-text"> 
                        Lip products atau produk bibir menjadi salah satu make up tool yang lagi happening saat ini.
                      Meski sama-sama diawali dengan kata ‘lip’, tapi.. </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/mu32.jpg" style="height: 100%; background-size: contain;" class="card-img" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelmu3.php"><h5 class="card-title">Cara memilih cushion compact</h5></a>
                      <p class="card-text"> 
                        Baik cushion berjenis drugstore makeup ataupun high-end makeup, sangat penting memilih produk berdasarkan kebutuhan.
                      Rentetan.. </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fas fa-times mr-1"></i>
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal 5-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="modal-body">
              <!-- Project Details Go Here-->
              <h2 class="text-uppercase">Skincare</h2>
              <p class="item-intro text-muted">"Love of beauty is taste. The creation of beauty is art."</p>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/sc18.jpg" style="height: 100%; background-size: contain;" class="card-img" >
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelsc1.php"><h5 class="card-title">Tahapan skincare routine yang tepat</h5></a>
                      <p class="card-text"> 
                        Ketika Anda sudah mengetahui tipe kulit wajah yang Anda miliki, 
                      langkah selanjutnya adalah menentukan tahapan skincare routine. Ada banyak..</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/sc16.jpg" style="height: 100%" class="card-img">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelsc2.php"><h5 class="card-title">Tips Pakai Sheet Mask Agar Manfaatnya Maksimal</h5></a>
                      <p class="card-text"> 
                        Pakai sheet mask adalah salah satu cara merawat kulit wajah yang bisa dilakukan di rumah. Namun sayang, 
                      beberapa orang belum tahu tips dan tirik ..</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/sc17.jpg" style="height: 100%" class="card-img">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelsc3.php"><h5 class="card-title">5 Cara Membuat Scrub Wajah dengan Bahan Alami</h5></a>
                      <p class="card-text"> 
                        Bagi sebagian orang membersihkan wajah dengan sabun sudah cukup. Padahal sebenarnya cara ini baru bagian dasarnya saja. 
                      Salah satu.. </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
            <button class="btn btn-primary" data-dismiss="modal" type="button">
              <i class="fas fa-times mr-1"></i>
              Close 
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Modal 6-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="modal-body">
              <!-- Project Details Go Here-->
              <h2 class="text-uppercase">Healthy Food</h2>
              <p class="item-intro text-muted">"Health start from ourselves."</p>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/ygt6.jpg" style="height: 100%" class="card-img">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelhf1.php"><h5 class="card-title">Manfaat Yogurt</h5></a>
                      <p class="card-text"> 
                        Manfaat yoghurt bagi kesehatan didapatkan dari probiotik, vitamin dan mineral, 
                      yang terkandung di dalamnya. Apa saja manfaat yang bisa diperoleh dari makanan ini?</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/ygt4.jpg" style="height: 100%" class="card-img">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelhf2.php"><h5 class="card-title">Tips untuk makan makanan sehat bagi orang yang sibuk</h5></a>
                      <p class="card-text">Dikejar deadline, padatnya jadwal meeting, lembur sampai malam, harus mengurus rumah, dan 
                      kesibukan lainnya terkadang bikin orang-orang yang sibuk susah mengontrol asupan makanan.Biasanya.. </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="assets/img/about/ygt5.jpg" style="height: 100%" class="card-img">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="artikelhf3.php"><h5 class="card-title">Tak Perlu Mahal, Ini 3 Resep Makanan Sehat dan Murah</h5></a>
                      <p class="card-text">Keuangan mulai menipis di tanggal tua? Ingin makan hemat tetapi tetap sehat? Jika begitu, 
                      beberapa kreasi resep makanan sehat dan murah ini cocok untuk Anda coba. Anda.. </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>

              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fas fa-times mr-1"></i>
                Close 
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>