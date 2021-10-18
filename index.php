<?php 
require 'admin\conn.php'; 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>mini-project Template</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee+Inline">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee+Outline">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee+Shade">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Vollkorn">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/--mp---Multiple-items-slider-responsive.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color: #f7f3e8;color: #454040;opacity: 1;">
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="index.php"><strong>Zoological Garden</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="adoption.php">Adoption</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="adminLogin.php">Admin</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="mammals.php"><em>Animals</em><br></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="mammals.php">Mammals</a><a class="dropdown-item" role="presentation" href="birds.php">Birds</a><a class="dropdown-item" role="presentation" href="reptiles.php">Reptiles</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><em>Conservations</em><br></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="inventory.php">Animal Inventory</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Plan For Visit</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="zoo_details.php">Tariff On Zoo</a><a class="dropdown-item" role="presentation" href="zoo_details.php">Zoo Timings</a></div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
    <div id="center-img-home" style="min-height: 450px;">
        <div class="jumbotron" style="top:50px; margin-top: 70px;">
            <h1 style="font-family: Raleway, sans-serif;color: rgb(88,79,79); padding-left:1px">Mysore Zoological Gardens</h1>
            <p>See The Animals Before They Become Extint.</p>
            <!-- <p><a class="btn btn-primary" role="button" href="#about">Learn more</a></p> -->
        </div>
    </div>
    <section id="about" style="height: 300px;">
        <div id="about-img" ><img class="about-image"></div>
        <div id="about-content" style="opacity: 1;">
            <p id="stars" style="padding: 0px;padding-left: 18px;margin-bottom: 7px;font-size: 32px;">Zoo Animals</p>
            <p style="color: rgb(0,0,0); font-size:1rem;">A <strong style="padding-right: 12px;"> zoo </strong> [short for  <strong style="padding-right: 12px;"> zoological garden </strong>; also called an  animal park or <strong style="padding-right: 12px;"> menagerie</strong> ] is a facility in which animals are housed within enclosures, cared for, displayed to the public,
                and in some cases bred.<br><br>The term "zoological garden" refers to <strong style="padding-right: 12px;">zoology</strong>, the study of animals. The term is derived from the <strong style="padding-right: 12px;">Greek</strong> word 'zoon', "animal," and the suffix -λογία, '-logia', "study of". The
                abbreviation "zoo" was first used of the London Zoological Garden , which was opened for scientific study in 1828 and to the public in 1847.<br><br>National Zoological Park is home to a large number of species of birds, reptiles and mammals
                which live in an environment that in many ways resemble their natural habitat. The zoo not only provides a home for endangered species, but also helps them to breed well in captivity.<br><br></p>
        </div>
    </section>
    <div id="gallery" style="margin-top: 3px;margin-bottom: 4px;padding-bottom: 64px;">
        <p id="stars" style="margin: 16px;padding: 0px;padding-left: 18px;margin-bottom: 7px;font-size: 32px;">Stars Of Our Zoo</p>
        <section style="margin-top: 20px;">
            <div class="d-flex flex-row multiple-item-slider">
                <div class="justify-content-center spacer-slider">
                    <figure class="figure"><img class="img-fluid figure-img" src="assets/img/z5.jpg" alt="alt text here">
                        <!-- <figcaption class="figure-caption">Caption</figcaption> -->
                    </figure>
                </div>
                <div class="justify-content-center spacer-slider">
                    <figure class="figure"><img class="img-fluid figure-img mx-auto d-block" src="assets/img/a11.jpeg" style="height:330.483px" alt="alt text here">
                        <!-- <figcaption class="figure-caption">Caption</figcaption> -->
                    </figure>
                </div>
                <div class="justify-content-center spacer-slider">
                    <figure class="figure"><img class="img-fluid figure-img" src="assets/img/a4.jpeg" style="height:330.483px" alt="alt text here">
                        <!-- <figcaption class="figure-caption">Caption</figcaption> -->
                    </figure>
                </div>
                <div class="justify-content-center spacer-slider">
                    <figure class="figure"><img class="img-fluid figure-img" style="height:330.483px" src="assets/img/z13.jpg" alt="alt text here">
                        <!-- <figcaption class="figure-caption">Caption</figcaption> -->
                    </figure>
                </div>
                <div class="justify-content-center spacer-slider">
                    <figure class="figure"><img class="img-fluid figure-img" src="assets/img/z15.jpg"  style="height:330.483px" alt="alt text here">
                        <!-- <figcaption class="figure-caption">Caption</figcaption> -->
                    </figure>
                </div>
                <div class="justify-content-center spacer-slider">
                    <figure class="figure"><img class="img-fluid figure-img" src="assets/img/z14.jpg" style="height:330.483px" alt="alt text here">
                        <!-- <figcaption class="figure-caption">Caption</figcaption> -->
                    </figure>
                </div>
                <div class="justify-content-center spacer-slider">
                    <figure class="figure"><img class="img-fluid figure-img" src="assets/img/a7.jpeg" style="height:330.483px" alt="alt text here">
                        <!-- <figcaption class="figure-caption">Caption</figcaption> -->
                    </figure>
                </div>
                <div class="justify-content-center spacer-slider">
                    <figure class="figure"><img class="img-fluid figure-img d-flex" style="height:330.483px" src="assets/img/a13.jpeg" alt="alt text here">
                        <!-- <figcaption class="figure-caption">Caption</figcaption> -->
                    </figure>
                </div>
            </div>
        </section>
    </div>
    <div class="footer-dark" style="background-color: #fbeabb;color: rgb(240,249,255);">
        <footer style="background-color: #fbeabb;color: #585740;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About Us</h3>
                        <ul>
                            <li><a href="#about">About our Zoo</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Adoption</h3>
                        <ul>
                            <li><a href="adoption.php">Adoption Details</a></li>
                            <li><a href="adoption-form.php">Adopt Here</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Animals</h3>
                        <ul>
                            <li><a href="mammals.php">Mammals</a></li>
                            <li><a href="birds.php">Birds</a></li>
                            <li><a href="reptiles.php">Reptiles</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Plan For Visit</h3>
                        <ul>
                            <li><a href="zoo_details.php">Tariff On Zoo</a></li>
                            <li><a href="zoo_details.php">Zoo Timings</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Conservation</h3>
                        <ul>
                            <li><a href="inventory.php">Animal Inventory</a></li>
                        </ul>
                    </div>
                </div>
                    <div class="col item social" style="margin-top:50px; padding-top:50px;">
                        <a href="#" style="color: rgb(6,3,3);background-color: #ffffff;"><i class="icon ion-social-facebook"></i></a>
                        <a href="#" style="color: rgb(6,3,3);background-color: #fbf5f5;"><i class="icon ion-social-twitter" style="background-color: #fffdfd;"></i></a>
                        <a href="#" style="color: rgb(6,3,3);background-color: #fbf5f5;"><i class="icon ion-social-snapchat"></i></a>
                        <a href="#" style="color: rgb(6,3,3);background-color: #fbf5f5;"><i class="icon ion-social-instagram"></i></a>
                    </div>
                <p class="copyright" style="color: #585740;font-size: 16px;">Zoological Gardens Mysuru © 2021</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/--mp---Multiple-items-slider-responsive-1.js"></script>
    <script src="assets/js/--mp---Multiple-items-slider-responsive.js"></script>
</body>

</html>