<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
        <link rel="stylesheet" href="css/rolunk.css">
        <!--BOOSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--Boxicons-->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <!--Footer boxicons-->
        <!--1. BOOSTRAP JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!--Font Awesome 5 footer-->
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
        <title>Rólunk</title>
        <!--Favicon-->
        <link rel="icon" type="img/home.png" href="img/home.png">
</head>
<body>
               <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="fooldal.php"><img src="home.png" class="kep1" alt=""></a>
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

            <main>
                    <center>
                        <h1><strong>Rólunk</strong></h1>
                        <hr class="hr1">
                    </center>
                    <section class="about" id="about">
                        <div class="row">
            
            
                            <div class="image">
                                <img src="img/e987315c-c7a5-48c4-b429-450e503c3a28.jpeg" alt="">
                            </div>
                        
                            <div class="content">
                              <h3>Kedves Látogatok</h3>
                              <p>Mindig nagy öröm számunkra, ha csillogó szemű, érdeklődő gyerekekkel találkozunk, akikkel a közös élmények és foglalkozások során Mi is visszatérhetünk egy kicsit a felhőtlen, új élményekre fogékony gyermekkorunkba. Az általunk 2019-ben megálmodott nyári tábor mára egy nagy nyári intézménnyé nőtte ki magát, ahol az oktatási és szabadidős tevékenységeknek nagyon széles kínálata található meg. Az igények sokat változtak az elmúlt 3 évben, ezért igyekszünk folyamatosan fejleszteni, megújítani az programjainkat is.</p>
                            </div>
                           
                          </div>
                  
                          
                        </div>
                    </section>
                    <div class="container">
                        <h1 class="heading">CSpatunk</h1>
                    
                        <div class="profiles">
                          <div class="profile">
                            <img src="img/images (2).jpg" class="profile-img">
                    
                            <h3 class="user-name">Márton</h3>
                            <h5>Uszó edző</h5>
            
                          </div>
                          <div class="profile">
                            <img src="img/images (3).jpg" class="profile-img">
                    
                            <h3 class="user-name">Katalin</h3>
                            <h5>Úszó edző</h5>
                          </div>
                          <div class="profile">
                            <img src="img/images (4).jpg" class="profile-img">
                    
                            <h3 class="user-name">Zoltán</h3>
                            <h5>Kézilabda edző</h5>
                        
                          </div>
                          <div class="profile">
                            <img src="img/images (5).jpg" class="profile-img">
                    
                            <h3 class="user-name">Ferenc</h3>
                            <h5>Kézilabda edző</h5>
                           
                          </div>
                        </div>
                    </div>

                    <div class="container">
                    
                        <div class="profiles">
                          <div class="profile">
                            <img src="img/images (6).jpg" class="profile-img">
                    
                            <h3 class="user-name">Károly</h3>
                            <h5>Foci edző </h5>
                          
                          </div>
                          <div class="profile">
                            <img src="img/images (7).jpg" class="profile-img">
                    
                            <h3 class="user-name">Sándor</h3>
                            <h5>Foci edző</h5>
                          </div>
                          <div class="profile">
                            <img src="img/images (8).jpg" class="profile-img">
                    
                            <h3 class="user-name">István</h3>
                            <h5>Tenisz edző</h5>
                          </div>
                          <div class="profile">
                            <img src="img/images (9).jpg" class="profile-img">
                    
                            <h3 class="user-name">Péter</h3>
                            <h5>Tenisz edző</h5>
                          </div>
                        </div>
                    </div>
                    <div class="container">
                    
                        <div class="profiles">
                          <div class="profile">
                            <img src="img/changing-the-face-of-pmdd-treatment-2.jpg" class="profile-img">
                    
                            <h3 class="user-name">Dominika</h3>
                            <h5>Atlétika edző</h5>
                          </div>
                          <div class="profile">
                            <img src="img/img2.jpg" class="profile-img">
                    
                            <h3 class="user-name">Dorina</h3>
                            <h5>Atlétika edző</h5>
                          </div>
                          <div class="profile">
                            <img src="img/img3.jpg" class="profile-img">
                    
                            <h3 class="user-name">Izabella</h3>
                            <h5>Kosárlabda edző</h5>

                          </div>
                          <div class="profile">
                            <img src="img/1140-woman-yellow-face-mask.jpg" class="profile-img">
                    
                            <h3 class="user-name">Kata</h3>
                            <h5>Kosárlabda edző</h5>
                           
                          </div>
                        </div>
                    </div>
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
                              <a href="#"><i class='bx bxl-facebook-circle'></i></i></a>
                              <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
                              <a href="#"><i class='bx bxl-twitter' ></i></a>
                              <a href="#"><i class='bx bxl-tiktok' ></i></a>
                                <p class="copyright">Company Name © 2018</p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        
</body>
</html>