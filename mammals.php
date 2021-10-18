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
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/--mp---Multiple-items-slider-responsive.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-DataTables.css">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/MUSA_no-more-tables-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_no-more-tables.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Parallax-Scroll-Effect.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <?php
        $a_id = $_GET['A_ID'];
        $sql = "SELECT * FROM animals";
        $result = mysqli_query($conn, $sql);   
    ?>


<!---------- NavBar ---------->
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #f8f3d7;">
        <div class="container-fluid"><a class="navbar-brand" href="index.php"><strong>Zoological Garden</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="adoption.php">Adoption</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="adminLogin.php">Admin</a></li>
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="#gallery">Gallery</a></li> -->
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><em>Animals</em><br></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Mammals</a><a class="dropdown-item" role="presentation" href="birds.php">Birds</a><a class="dropdown-item" role="presentation" href="reptiles.php">Reptiles</a></div>
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
<!---------- NavBar ---------->


    <div>
        <div id="box-2" style="background-image: url(&quot;assets/img/a14.jpeg&quot;);">
        </div>
        <section class="BengalTiger">
            <div class="tiger-description1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-9" style="height: 367px;">
                            <div>
                                <h1 style="font-family: Acme, sans-serif;margin-left: 3px;padding-left: 300px;padding-bottom: 20px;padding-top: 2px;margin-bottom: 8px;color: rgb(208,91,91);">Bengal TIGER</h1>
                                <h5>Physical Characteristics</h5>
                            </div>
                            <div style="height: 233px;margin-bottom: 3px;padding-bottom: 41px;"><div class="description1" style="
    margin: 2em 0em 0em 0em;
    display:flex;
    font-family: roboto;
    flex-direction: column;
    max-height:500px">
    <?php
        $sql = "SELECT * FROM animals WHERE A_ID='1201'";
        $result1 = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
        while($animal = mysqli_fetch_assoc($result1)){
    ?>

    <p><?php echo $animal['DESCRIPTION']; ?>
    <?php
                    }
                }else {
                    echo '0 results'; 
                       }
            ?>
        <!-- The <strong>Tiger</strong> is the largest of all the big cat species. With its stripy orange coat and long, striped tail,tigers are very recognisable. An adult <strong>Bengal Tiger</strong> can be up to 3 metres long, tail included, and weigh more than 250 kilograms.
		     Adult tigers have white spots of fur on the back of each ear, so their young can easily follow them in low light. -->
    </p>
    <h5><strong>Habitat</strong></h5>
    <p>
        The Bengal Tiger is a highly adaptable animal and lives in a wide range of different habitats. These include forests,mangroves and wetlands. Tigers can cope with hot or cold temperature areas.
    </p>
</div></div>
                        </div>
                        <div class="col-md-6 col-lg-2" style="height: 353px;"><img src="assets/img/z12.jpg" style="width: 248px;height: 330px;margin-left: -25px;margin-top: 12px;padding-top: 40px;padding-right: 4px;padding-bottom: 2px;"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6"><div style="
    margin: 2em 0em 0em 0em;
    display:flex;
    font-family: roboto;
    flex-direction: column;">
    <h5 style="padding-left:21%"><strong>Behaviour</strong></h5>
    <p style="padding-left:1%">
        All tigers, including the Bengal Tiger, are carnivorous. The Bengal Tiger catches prey using the ‘stalk and ambush’ method,quietly tracking prey and then attacking it, usually from behind, rather than chasing it down.		Tigers are solitary: the exception is a mother with cubs.  Tigers can become man-eaters. A method that has been used in the past to prevent Bengal Tiger attacks on humans is for people at risk to wear a mask on the back of the head. By doing this it looks as if the human is watching from behind.
    </p>
</div></div>
                    <div class="col-md-6"><div style="
    margin: 2em 0em 0em 0em;
    display:flex;
    font-family: roboto;
    flex-direction: column;
    max-height:500px">
    <h5 style="padding-left:21%"><strong>Threats And Conservation</strong></h5>
    <p>
        Bengal Tigers face extreme threats in the wild. Conservation efforts focus on stopping poaching as well as protecting areas and wildlife corridors that tigers use. In a densely populated country like India, human-wildlife conflict is a big problem. Although people are often willing to move away from tiger habitat to safer areas, moving large numbers of people is difficult and time consuming.
				A census of tigers in India published in 2014 suggesting that tiger numbers are now increasing is encouraging. However,most sources agree that all sub-species of tiger now live in just 7 per cent of their original historical range. There are fewer than 2,000 Bengal Tigers left in the wild.Bengal Tigers are hunted for trophies or for body parts or skins. They are also hunted if they prey on domestic livestock, and because of this have even been declared ‘pests’ in some areas.
    </p>
</div></div>
                </div>
            </div>
        </section>
        <div id="box-3" style="background-image: url(&quot;assets/img/z9.jpg&quot;);">
            
        </div>
        <section class="Gaur">
            <div class="tiger-description1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3" style="height: 353px;"><img src="assets/img/a12.jpeg" style="width: 248px;height: 330px;margin-left: -25px;margin-top: 12px;padding-top: 40px;padding-right: 4px;padding-bottom: 2px;"></div>
                        <div class="col-md-6 col-lg-9" style="height: 367px;">
                            <div>
                                <h1 style="font-family: Acme, sans-serif;margin-left: 3px;padding-left: 300px;padding-bottom: 20px;padding-top: 2px;margin-bottom: 8px;color: #d05b5b;">Gaur</h1>
                                <h5>Physical Characteristics</h5>
                            </div>
                            <div style="height: 233px;margin-bottom: 3px;padding-bottom: 41px;"><div class="description1" style="
    margin: 2em 0em 0em 0em;
    display:flex;
    font-family: roboto;
    flex-direction: column;
    max-height:500px">
    <p>


    <?php
        $sql = "SELECT * FROM animals WHERE A_ID='1204'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
        while($animal = mysqli_fetch_assoc($result)){
    ?>
    <p><?php echo $animal['DESCRIPTION']; ?>
    <?php
                    }
                }else {
                    echo '0 results'; 
                       }
            ?>
        <!-- The <span style="font-style:Bold">Gaur</span> or Indian Bison, are a close wild relative of domestic cattle. This powerful animal inspired the Krating Daeng (Thai for Gaur) energy drink, with its logo of two charging bulls in front of a setting sun. This in turn was the origin for the branding of the world’s bestselling energy drink, Red Bull. Gaur are strong and mightily built, with a high grey ridge on their forehead between their horns, which curve upwards rom the sides of the head. Both sexes have horns. -->
    
    
    
    </p>
    <h5><strong>Habitat</strong></h5>
    <p>
        Gaur prefer to live in areas with glades and quite open terrain. The best habitat is in low-lying regions, with undisturbed tracts of forest, water sources and abundant forage in the form of coarse grasses, shrubs and trees.
    </p>
</div></div>
    </div>
        </div>
            </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6"><div style="
    margin: 2em 0em 0em 0em;
    display:flex;
    font-family: roboto;
    flex-direction: column;">
    <h5 style="padding-left:21%"><strong>Behaviour</strong></h5>
    <p style="padding-left:1%">
        Gaur herds vary in size throughout the year because of the breeding cycle. At the start of the year they live in small groups of 8-11 females with one bull, but then, as the year progresses, more bulls may join the herd for mating, with certain males moving from herd to herd. During the mating season, the bellow of males can be heard over 1.6 kilometres away. In May and June these males move away from the breeding herds to wander alone or form bachelor groups. Females give birth to a single calf, usually between December and June.<br>				 Asian Leopards and packs of Dhole will occasionally attack unattended calves or unhealthy individuals, but their main predators are the Bengal Tiger and Saltwater Crocodiles, which are able to bring down adults. However, as females usually live in herds and the solitary males are of such formidable size, Gaur have few natural enemies besides humans.
    </p>
</div></div>
                    <div class="col-md-6"><div style="
    margin: 2em 0em 0em 0em;
    display:flex;
    font-family: roboto;
    flex-direction: column;
    max-height:500px">
    <h5 style="padding-left:21%"><strong>Threats And Conservation</strong></h5>
    <p>
        Gaur are hunted for food, medicinal products and for their horns. The IUCN Red List has classed them threatened since 1986, as their population has declined over 70 per cent in some parts of their range. They are legally protected in all range states, and in addition, samples of their genetic material are now cryogenically preserved.
    </p>
</div></div>
                </div>
            </div>
        </section>
        <div id="box-1" style="background-image: url(&quot;assets/img/z10.jpg&quot;);">
        </div>
        <section class="Great Hornbill">
            <div class="tiger-description1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-8 offset-lg-1" style="height: 436px;margin-left: 1px;">
                            <div>
                                <h1 style="font-family: Acme, sans-serif;margin-left: 8px;padding-left: 175px;padding-bottom: 20px;padding-top: 2px;margin-bottom: 8px;color: #d05b5b;">Great Hornbill<br></h1>
                                <h5>Physical Characteristics</h5>
                            </div>
                            <div style="height: 233px;margin-bottom: 3px;padding-bottom: 41px;"><div class="description1" style="
    margin: 2em 0em 0em 0em;
    display:flex;
    font-family: roboto;
    flex-direction: column;
    max-height:500px">
    <p>



    <?php
        $sql = "SELECT * FROM animals WHERE A_ID='1208'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
        while($animal = mysqli_fetch_assoc($result)){
    ?>
    <p><?php echo $animal['DESCRIPTION']; ?>
    <?php
                    }
                }else {
                    echo '0 results'; 
                       }
            ?>
        <!-- The Great Hornbill, also known as the Concave-casqued Hornbill, Great Indian Hornbill or Great Pied Hornbill, is one of the largest members of the hornbill family. It is found in the Indian subcontinent and south-east Asia. Its impressive size and colour have made it an important    talisman in many tribal cultures and rituals. Great Hornbills have lived for up to 50 years in captivity. Predominantly frugivorous.<br> -->



    </p>
    <h5><strong>Habitat</strong></h5>
    <p>
        Great Hornbills are arboreal and depend on tall, dense old growth (unlogged) forests in hilly regions. Trees that extend beyond the height of the canopy are preferred for nesting and the tree must have a natural cavity large enough to hold the female and her chicks. The same nesting site is used year after year if possible. 
    </p>
</div></div>
                        </div>
                        <div class="col-md-6 col-lg-3" style="height: 353px;padding-left: 24px;"><img src="assets/img/a11.jpeg" style="width: 300px;height: 330px;margin-left: -25px;margin-top: 12px;padding-top: 40px;padding-right: 4px;padding-bottom: 2px;"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6"><div style="
    margin: 2em 0em 0em 0em;
    display:flex;
    font-family: roboto;
    flex-direction: column;">
    <h5 style="padding-left:21%"><strong>Behaviour</strong></h5>
    <p style="padding-left:1%">
        Hornbills are fairly social birds but do not live in large flocks, instead forming small family groups or flocks of up to 40 individuals. <br>
			   However, they will gather at night in large communal roosts of hundreds of birds, making a lot of ‘cackling’ and ‘roaring’ noises. During the mating season males may engage in aerial head-to-head “casque-butting” to win a mate, which they usually choose for life (monogamous).<br>
				They nest in the cavity of a large tree between January April, the female laying one or two eggs. They then exhibit unique behaviour: with the male on the outside of the tree, and the female on the nest, they will work together to seal up the female and her eggs inside. They make the seal with dung and food leaving just a small gap, through which the male feeds the female and subsequently the chick.
    </p>
</div></div>
                    <div class="col-md-6"><div style="
    margin: 2em 0em 0em 0em;
    display:flex;
    font-family: roboto;
    flex-direction: column;
    max-height:500px">
    <h5 style="padding-left:21%"><strong>Threats And Conservation</strong></h5>
    <p>
       While the Great Hornbill occurs in several protected areas, it is generally declining in numbers. The biggest threat is habitat destruction and particularly the removal of the old growth trees that they require for nesting. Their large size makes them easy targets for hunters who value them for their meat, feathers and casque, which is used for ornamental purposes in tribal cultures.
    </p>
</div></div>
                </div>
            </div>
        </section>
    </div>

    <!-------- Footer ---------->
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
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/Bootstrap-DataTables.js"></script>
    <script src="assets/js/--mp---Multiple-items-slider-responsive-1.js"></script>
    <script src="assets/js/--mp---Multiple-items-slider-responsive.js"></script>
</body>

</html>