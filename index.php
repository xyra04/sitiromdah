<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GFood Siap Melayani Anda</title>
    <!-- Siti Romdah -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css" />

    <!-- Font Google -->
    <link rel="stylesheet" href="assets/Google-Font/stylesheet.css" />

    <!-- Font Awsome -->
    <link rel="stylesheet" href="assets/Font-Awesome-6.x/css/all.min.css" />
  </head>
  
  <body>
    <!-- navbar -->
    <section id="navbar">
      <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">GFood</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#jumbotron">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#aboutus">About US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#promo">Promo</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-primary" href="#contact">Contact us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

<!-- My Style -->
    <link rel="stylesheet" href="assets/style.css" />
  
    <!-- jumbotron -->
    <section id="jumbotron">
    <div class="jumbotron mb-4 bg-body-tertiary rounded-3">
      <div class="container py-5">
        <h1 class="display-5">
          Rasakan kelezatan daging <span>premium</span><br />dalam bentuk yang
          <span>berbeda</span>
        </h1>
        <button class="btn button" type="button">
          <i class="fas fa-cart-shopping"></i>
          Order Now
        </button>
      </div>
    </div>
  </section>


    <!-- about us -->
    <section id="aboutus">
      <div class="container-fluid bg-light p-5">
        <div class="row text-center">
          <div class="col-12 p-5">
            <h2 class="display-4">Mengapa memilih kami?</h2>
          </div>

          <div class="col-12 col-sm-6 col-lg-3">
            <span class="fa-stack fa-2x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fas fa-plate-wheat fa-stack-1x fa-inverse"></i>
            </span>
            <h3 class="mt-4">Bahan Premium</h3>
            <p>Kami telah menyediakan bahan yang berkualitas tinggi,yakni gandum pengganti terigu dan daging sapi pilihan yg di 
              olah secara khusus untuk menghasilkan rasa yang terbaik</p>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <span class="fa-stack fa-2x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fas fa-utensils fa-stack-1x fa-inverse"></i>
            </span>
            <h3 class="mt-4">Chef profesional</h3>
            <p>Kami telah mempunyai chef yg handal dalam memasak restaurant kami, jadi anda tidak perlu khawatir untuk rasa yg tidak sesuai</p>
          </div>

          <div class="col-12 col-sm-6 col-lg-3">
            <span class="fa-stack fa-2x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fas fa-dollar-sign fa-stack-1x fa-inverse"></i>
            </span>
            <h3 class="mt-4">harga terjangkau</h3>
            <p>bakso waroeng kita memang sejak dulu harga yg sangat terjangkau membuat para konsumen kita terus dan terus menikmati 
              bakso dan makanan lainnya di restarant kami ,dan tidak lupa dengan adanya discount 50% di setiap harinya</p>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <span class="fa-stack fa-2x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fas fa-tree-city fa-stack-1x fa-inverse"></i>
            </span>
            <h3 class="mt-4">ramah lingkungan</h3>
            <p>kami sudah tidak menyediakan kantong plastik lagi, yg kami sediakan hanyalah sebuah tas ramah lingkungan, alat makan yg kami
              sediakan untuk take away pun menggunakan kertas ramah lingkungan yg telah di modifikasi</p>
        </div>
      </div>
    </section>

    <!-- menu -->
    <section id="menu">
      <div class="container-fluid p-5">
        <div class="row text-center">
          <div class="col-12 p-5">
            <h2 class="display-4">Menu kami</h2>
          </div>

          <div class="col-12 col-lg-4 mb-4">
            <div class="card">
              <img src="assets/img/menu/bakso.webp" class="card-img-top" alt="bakso">
              <div class="card-body">
                <h5 class="card-title">bakso Tahu</h5>
                <p class="card-text">campuran tahu bakso dan bihun putih yg menggoda di setiap mangkuknya</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn button"><i class="fas fa-cart-shopping"></i> buy now</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mb-4">
            <div class="card">
              <img src="assets/img/menu/tahu.webp" class="card-img-top" alt="bakso">
              <div class="card-body">
                <h5 class="card-title">tahu jeletot</h5>
                <p class="card-text">paduan tahu bakso dengan isian cabai mercon yg begitu pedas nikmat bikin lidah goyang</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn button"><i class="fas fa-cart-shopping"></i> buy now</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mb-4">
            <div class="card">
              <img src="assets/img/menu/coffee.webp" class="card-img-top" alt="bakso">
              <div class="card-body">
                <h5 class="card-title">milk coffee</h5>
                <p class="card-text">kopi susu yg creamy di padu dengan ice yg menyegarkan</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn button"><i class="fas fa-cart-shopping"></i> buy now</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mb-4">
            <div class="card">
              <img src="assets/img/menu/somay.webp" class="card-img-top" alt="bakso">
              <div class="card-body">
                <h5 class="card-title">siomay ikan</h5>
                <p class="card-text">daging ikan yang begitu lezat berasa di setiap gigitan</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn button"><i class="fas fa-cart-shopping"></i> buy now</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mb-4">
            <div class="card">
              <img src="assets/img/menu/jus.webp" class="card-img-top" alt="bakso">
              <div class="card-body">
                <h5 class="card-title">jus segar</h5>
                <p class="card-text">mau menu sehat dan diet yuk jus buah juga tersedia di outlet kami </p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn button"><i class="fas fa-cart-shopping"></i> buy now</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mb-4">
            <div class="card">
              <img src="assets/img/menu/tea.webp" class="card-img-top" alt="bakso">
              <div class="card-body">
                <h5 class="card-title">lemon tea</h5>
                <p class="card-text">panas-panas gini enaknya minum teh di campur lemon yakk lemon tea</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn button"><i class="fas fa-cart-shopping"></i> buy now</a>
              </div>
            </div>
          </div>

        </div>
      </div>
</section>
    

    <!-- promo -->
    <section id="promo">
      <div class="container-fluid p-5">
        <div class="row text-center">
          <div class="col-12 p-5">
            <h2 class="display-4">Promo Terbaru</h2>
          </div>
          
          <div class="col-12 col-lg-3 mb-4">
          <div class="card">
            <img src="assets/img/promo/1.webp" class="card-img-top" alt="promo 1">
            </div>
          </div> 
          <div class="col-12 col-lg-3 mb-4">
          <div class="card">
            <img src="assets/img/promo/2.webp" class="card-img-top" alt="promo 2">
            </div>
          </div>
          <div class="col-12 col-lg-3 mb-4">
          <div class="card">
            <img src="assets/img/promo/3.webp" class="card-img-top" alt="promo 3">
            </div>
          </div>
          <div class="col-12 col-lg-3 mb-4">
          <div class="card">
            <img src="assets/img/promo/4.webp" class="card-img-top" alt="promo 4">
            </div>
          </div>
    </section>

    <!-- contact -->
    <section id="contact us">
      <section id="contact">
        <div class="container p-5">
          <div class="row justify-content-center">
            <div class="col-12 p-5 text-center">
              <h2 class="display-4">Contact us</h2>
            </div>

        <div class="col-10 col-md-6">
             <form action="kirim.php" method="post">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">nama lengkap</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="masukkan nama">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">catatan</label>
                <textarea class="form-control" name="saran" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button class="btn - button" type="submit"><i class="fas fa-envelope"></i>kirim saran</button>
           </form>

          </div>
          <div class="col-10 col-md-4">
            <h2 class="mb-3">Alamat</h2>
            <p><i class="fas fa-map-pin"></i> Kp pisangan Cacere, Sepatan,Tangerang, Banten</p>
            <h2 class="my-3">contact</h2>
            <p><i class="fas fa-user"></i> Siti Romdah</p>
            <p><i class="fas fa-brands fa-whatsapp"></i> 083895023868</p>
            <p><i class="fas fa-envelope"></i> sitiromdah359@mail.com</p>
            
        </div>
      </div>   
    </section>

    <!---footers-->
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a class="footer-brand" href="#">GFood</a>
          <a href="/" class="mb-3 mb-md-0 text-body-secondary">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
          </a>
          <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2024 Company, Inc</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fa-brands fa-twitter"></i></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fa-brands fa-youtube"></i></a></li>
        </ul>
      </footer>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>