<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Boxicons-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!--Footer boxicons-->

    <!--1. BOOSTRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--Font Awesome 5 footer-->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>Nyári tábor</title>
    <!--Favicon-->
    <link rel="icon" type="img/home.png" href="img/home.png">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="fooldal.php"><img src="img/home.png" class="kep1" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="fooldal.php"><strong>Főoldal</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rolunk.php"><strong>Rólunk</strong></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <strong>Sport</strong>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="foci.php">Foci</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="uszas.php">Uszás</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="futas.php">Atlétika</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="kosar.php">Kosár</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="tenisz.php">Tenisz</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="kizila.php">kézilabda</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="galeria.php"><strong>Galéria</strong></a>
              </li>
            </ul>
            
            <a href="login.php">
              <button class="btn1 btn-outline-succes" type="submit">Bejelentkezés</button>
            </a>

            <a href="register.php">
              <button  onclick="togglePopup()" class="btn2 btn-outline-succes" type="submit"> Regisztráció</button>  
            </a>
          </div>
        </div>
      </nav>
    <!-- Slider -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
    </div>

    
    <main class="main1">
        <!-- nyitvatartás -->
        <br>
      <section class="section1">
        <div class="row">
          <div class="col-sm-8">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Nyitvatartás</h5>
                <hr class="hr1">
                <!--<a href=""><img src="img/phone-call-regular-36.png"></a>-->
                <p class="card-text">
                  Hétfő 8:00-18:00 <br>
                  kedd 8:00-18:00<br>
                  Szerda 8:00-18:00<br>
                  Csütörtök 8:00-18:00<br>
                  Péntek 8:00-18:00<br>
                </p>
                
              </div>
            </div>
          </div>

          <div class="col-sm-4">
              <div class="card-body1">
                <a href="login.php">
                  <button  class="btn btn-outline-primary">
                    Bejelentkezés
                  </button>
                </a>
              </div>
            <br>
              <div class="card-body1">
                <a href="register.php">
                  <button onclick="togglePopup()" class="btn btn-outline-success">Regisztráció</button>
                </a>
              </div>
          </div>
        </div>
      </section>
  
      <!--Sportolási lehetőségek-->
    <div class="accordion">
      <div class="accordion-item">
        <div class="accordion-item-header">
          Sportolási lehetőségek
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td colspan="2">Foci</td>
                  <td><a target="_blank" href="img/football.jpg">
                    <img class="kep15" src="img/football.jpg">
                  </a></td>
                  <td><a href="foci.php"><button class="btn19">Megnézem</button></a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td colspan="2">Kosár</td>
                  <td><a target="_blank" href="img/kpálya.jpg">
                    <img src="img/kpálya.jpg" alt="" class="kep15">
                  </a></td>
                  <td><a href="kosar.php"><button class="btn19">Megnézem</button></a></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Kézilabda</td>
                  <td><a target="_blank" href="img/kepalya.jpg">
                    <img src="img/kepalya.jpg" alt="" class="kep15">
                  </a></td>
                  <td><a href="kizila.php"><button class="btn19">Megnézem</button></a></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td colspan="2">Atlétika</td>
                  <td><a target="_blank" href="img/fupalya.jpg">
                    <img src="img/fupalya.jpg" alt="" class="kep15">
                  </a></td>
                  <td><a href="futas.php"><button class="btn19">Megnézem</button></a></td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td colspan="2">Tenisz</td>
                  
                  <td><a target="_blank" href="">
                    <img src="img/tpalya.jpg" alt="" class="kep15">
                  </a></td>
                  <td><a href="tenisz.php"><button class="btn19">Megnézem</button></a></td>
                  
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td colspan="2">Uszás</td>
                  
                  <td><a target="_blank" href="">
                    <img src="img/qq.jpg" alt="" class="kep15">
                  </a></td>
                  <td><a href="uszas.php"><button class="btn19">Megnézem</button></a></td>
                  
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-item-header">
          időpontok
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nap</th>
                  <th scope="col">Helyszín</th>
                  <th scope="col">Nyitvatartás</th>
                  <th scope="col">Jelentkezés</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><i>Hétfő</i></th>
                  <td><strong>Visegrád Akácfa utca 7</strong></td>
                  <td>8:00-18:00</td>
                  <td><a href="login.php">
                    <button class="button5">
                      Jelentkezés
                    </button>
                  </a></td>
                </tr>
                <tr>
                  <th scope="row"><i>Kedd</i></th>
                  <td><strong>Visegrád Akácfa utca 7</strong></td>
                  <td>8:00-18:00</td>
                  <td><a href="login.php">
                    <button class="button5">
                      Jelentkezés
                    </button>
                  </a></td>
                </tr>
                <tr>
                  <th scope="row"><i>Szerda</i></th>
                  <td><strong>Budapest Akácfa utca 7</strong></td>
                  <td>8:00-18:00</td>
                  <td><a href="login.php">
                    <button class="button5">
                      Jelentkezés
                    </button>
                  </a></td>
                </tr>
                <tr>
                  <th scope="row"><i>Csütörtök</i></th>
                  <td><strong>Visegrád Akácfa utca 7</strong></td>
                  <td>8:00-18:00</td>
                  <td><a href="login.php">
                    <button  class="button5">
                      Jelentkezés
                    </button>
                  </a></td>
                </tr>
                <tr>
                  <th scope="row"><i>Péntek</i></th>
                  <td><strong>Visegrád Akácfa utca 7</strong></td>
                  <td>8:00-18:00</td>
                  <td><a href="login.php">
                    <button  class="button5">
                      Jelentkezés
                    </button>
                  </a></td>
                </tr>
           
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-item-header">
          Ügyfélszolgálat 8:00-19:30ig
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <center>
              <a class="click-mobile" href="tel:+36205555558">
                <button type="button" class="btn btn-outline-danger">
                  <img  src="img/phone-regular-36.png" alt="">
                </button>
              </a>
  
            </center>
          </div>

        </div>
      </div>
      </div>
    </div>

    <script src="js/script.js"></script> 
            <!-- Galéria -->
            <section class="section2">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Galéria</h5>
                  <hr class="hr2">
                  <br>
                  <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="img/2.jpg" alt=""></div>
                      <div class="swiper-slide"><img src="img/1.jpg" alt=""></div>
                      <div class="swiper-slide"><img src="img/w (1).jpg" alt=""></div>
                      <div class="swiper-slide"><img src="img/atletika.1..jpg" alt=""></div>
                      <div class="swiper-slide"><img src="img/w (2).jpg" alt=""></div>
                      <div class="swiper-slide"><img src="img/w (3).jpg" alt=""></div>
                      <div class="swiper-slide"><img src="img/3 (5).jpg" alt=""></div>
                      <div class="swiper-slide"><img src="img/00204307.jpeg" alt=""></div>
                      <div class="swiper-slide"><img src="img/cace7308-08e0-4df7-be6b-3b823c3124d4.jpg" alt=""></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    
                  </div>
                </div>
              </div>
            </section>
    
             <!-- Swiper JS -->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
            <!-- Initialize Swiper -->
            <script src="js/swpierjs.js"></script>
    
        




        <br>

        <!--Kapcsolat-->
        <section class="section2">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Központi elérhetőségeink</h5>
                  <p class="card-text">
                    <button type="button" class="btn8 btn-outline-danger">
                      <i class='bx bx-mobile-alt' ></i>
                    </button>
                    <button type="button" class="btn8 btn-outline-danger">
                      <i class='bx bxl-gmail' ></i>
                    </button>
                    <button type="button" class="btn8 btn-outline-danger">
                      <i class='bx bxs-phone' ></i>
                    </button>
                    <button type="button" class="btn8 btn-outline-danger">
                      <i class='bx bxl-messenger' ></i>
                    </button>
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Sajtókapcsolat</h5>
                  <p class="card-text5">
                    <button type="button" class="btn8 btn-outline-danger">
                      <i class='bx bxl-facebook-circle' ></i></i>
                    </button>
                    <button type="button" class="btn8 btn-outline-danger">
                      <i class='bx bxl-instagram'></i>
                    </button>
                    <button type="button" class="btn8 btn-outline-danger">
                      <i class='bx bxl-twitter' ></i>
                    </button>
                    <button type="button" class="btn8 btn-outline-danger">
                      <i class='bx bx-phone' ></i>
                    </button>
                  </p>

                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Vállalati adománygyüjtés</h5>
                  <p class="card-text">
                    <button type="button" class="btn9 btn-outline-danger">
                      <i class='bx bxs-donate-heart' ></i>
                    </button>
                  </p>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <br>
    </main>


    <div class="footer-clean">
      <footer>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-sm-4 col-md-3 item">
                      <h3>Leírás</h3>
                      <p>Számunkra a legfontosabb hogy a gyereke érezze jól magát.</p>
                  </div>
                  <div class="col-sm-4 col-md-3 item">
                      <h3>Sportolási lehetőségek</h3>
                      <ul>
                        <li><a href="foci.php">Foci</a></li>
                        <li><a href="uszas.php">Uszás</a></li>
                        <li><a href="futas.php">Atlétika</a></li>
                        <li><a href="kosar.php">Kosár</a></li>
                        <li><a href="tenisz.php">Tenisz</a></li>
                        <li><a href="kizila.php">Kézilabda</a></li>
                      </ul>
                  </div>
                  <div class="col-sm-4 col-md-3 item">
                      <h3>Menük</h3>
                      <ul>
                        <li><a href="kapcsolat.php">Kapcsolat</a></li>
                        <li><a href="aszf.php">ÁSZF</a></li>
                        <li><a href="galeria.php">Galéria</a></li>
                        <li><a href="rolunk.php">Rólunk</a></li>
                        <li><a href="fooldal.php">Főoldal</a></li>
                        <li><a href="register.php">Regisztráció</a></li>
                        <li><a href="login.php">belépés</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-3 item social">
                    <a href="facebook.com"><i class='bx bxl-facebook-circle'></i></i></a>
                    <a href="www.instagram.com"><i class='bx bxl-instagram-alt' ></i></a>
                    <a href="www.twitter.com"><i class='bx bxl-twitter' ></i></a>
                    <a href="www.tiktok.com"><i class='bx bxl-tiktok' ></i></a>
                      <p class="copyright">Árvaház © 2022</p>
                  </div>
              </div>
          </div>
      </footer>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

  


</body>
</html>