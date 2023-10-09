<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Situs Top-Up Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/fav-icon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
    <a class="logo" href="">
    <img class="logos" src="images/logo.png" alt=""> 
        Well Gaming
    </a>
    <div id="menu-icon" class="menu-icon">
    <div class="tombol-hp">
    <a href="/login" class="lbtn"><i>Login</i></a>
    <a href="/register" class="rbtn"><i>daftar</i></a>
    </div>
    <i class="ph ph-list"></i>
    </div>
        <ul id="menu-list" class="hidden">
            <li><a href="/">Beranda</a></li>
            <li><a href="#">tabel</a></li>
            <li><a href="gallery">gallery</a></li>
            <li><a href="blog">blog</a></li>
        </ul>
    <div class="tombol">
    @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="lbtn">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="rbtn">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>
    </nav>
    <div id="carouselExampleInterval" class="carousel slide m-auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <img src="images/slide no.1.jpg" class="d-block w-100" alt="slide1">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="images/slide no.2.jpg" class="d-block w-100" cals alt="slide2">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="images/slide no.3.jpg" class="d-block w-100" alt="slide3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

<section class="all-product">
    <div>
    <h2>🔥 Lagi Populer</h2>
            <div class="product-container">
                <article class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php"> 
                    <h5>Mobile Legends</h5>
                </a>
                </article>
            
            <article class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </article>
    
            <article class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </article>

            <article class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </article>
            <article class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </article>

            <article class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </article>

            <article class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </article>

            <div class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </div>
            <div class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </div>
            <div class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </div>
        </div>
    </div>
    <div>
    <h2>🔥 Lagi Populer</h2>
            <div class="product-container">
                <article class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php"> 
                    <h5>Mobile Legends</h5>
                </a>
                </article>
            
            <article class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </article>
    
            <article class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </article>

            <article class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </article>
            <article class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </article>

            <article class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </article>

            <article class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </article>

            <div class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </div>
            <div class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </div>
            <div class="product">
                <div class="image-container">
                    <img src="images/game1.jpg" alt="Nama Game 1">
                </div>
                <a href="beli1.php">
                    <h5>Mobile Legends</h5>
                </a>
            </div>
        </div>
    </div>
</section>


<footer class="footer">
        <div class="footer-left">
        <div class="footer-box">
                <strong>explore</strong>
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="#">tabel</a></li>
                    <li><a href="gallery">gallery</a></li>
                    <li><a href="blog">blog</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-center">
            <div>
                <a href="https://maps.app.goo.gl/nQDWZ3vc8H2zV6DZ6" target="_blank" rel="norefferer"><i class="fa fa-map-marker"></i>
                <p><span>Indonesia</span> Riau, Pekanbaru</p></a>
            </div>
            <div>
            <a href="https://wa.me/6282384864642" target="_blank" rel="norefferer"><i class="fa fa-phone"></i>
                <p>+62 823 8484 4642</p></a>
            </div>
            <div>
            <a href="mailto:luthfiandria10@gmail.com" target="_blank" rel="norefferer"><i class="fa fa-envelope"></i></a>
                <p><a href="#">Support@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-about">
                <strong>about</strong>
                <span>Well Gaming adalah Penyedia Layanan Top Up Game Online dan Produk Digital di Indonesia yang sudah dipercaya oleh jutaan gamers di Indonesia. </span>
            </p>
            <div class="footer-media">
                <a href="https://www.youtube.com/@APLIKATV" target="_blank" rel="norefferer"><i class="ph ph-youtube-logo"> </i></a>
                <a href="https://www.facebook.com/SistemInformasiUMRI/" target="_blank" rel="norefferer"><i class="fa fa-facebook"> </i></a>
                <a href="https://twitter.com/FlyNN_vlr" target="_blank" rel="norefferer"><i class="fa fa-twitter"> </i></a>
                <a href="https://www.instagram.com/sisteminformasi_umri/" target="_blank" rel="norefferer"><i class="fa fa-instagram"> </i></a>
                <a href="https://www.tiktok.com/@sisteminformasiumri?is_from_webapp=1&sender_device=pc" target="_blank" rel="norefferer"><i class="ph ph-tiktok-logo"> </i></a>
            </div>
        </div>
        <div class="footer-bottom">
        <div class="logo-footer">
                <img class="logo-footer" src="images/logo.png" alt="">
                Well Gaming
            </div>
            <p class="footer-copyright">© 2023 All Copyrights are reserved by Well Gaming</p>
        </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/pro.js"></script>
</body>
</html>
