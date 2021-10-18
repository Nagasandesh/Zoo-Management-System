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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="mammals.php"><em>Animals</em><br></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="mammals.php">Mammals</a><a class="dropdown-item" role="presentation" href="birds.php">Birds</a><a class="dropdown-item" role="presentation" href="reptiles.php">Reptiles</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="inventory.php"><em>Conservations</em><br></a>
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
        <div id="box-2" style="background-image: url(&quot;assets/img/a4.jpeg&quot;);">
           
        </div>
        <section class="BengalTiger">
            <div class="tiger-description1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-9" style="height: 367px;">
                            <div>
                                <h1 style="font-family: Acme, sans-serif;margin-left: 3px;padding-left: 300px;padding-bottom: 12px;padding-top: 2px;margin-bottom: -2px;color: rgb(208,91,91);">Yellow Anaconda</h1>
                                <h5>Physical Characteristics</h5>
                            </div>
                            <div style="height: 233px;margin-bottom: 3px;padding-bottom: 41px;"><div class="description1" style="
    margin: 2em 0em 0em 0em;
    display:flex;
    font-family: roboto;
    flex-direction: column;
    max-height:500px">

<?php
        $sql = "SELECT * FROM animals WHERE A_ID='1210'";
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
   
       <!-- <strong>Yellow Anacondas</strong> are very large snakes, approximately 3m long. They are close relatives of the Green Anaconda (Eunectes murinus), which is the largest snake in the world. Yellow Anacondas are yellow-green in colour with pairs of overlapping oval black spots: in fact, the pattern of yellow and black scales on the underside of the lower tail is unique to each snake. -->
    </p>
    <h5><strong>Habitat</strong></h5>
    <p>
       Yellow Anacondas live in swamps and rivers, and because they spend most of their life in or around water they are sometimes known as “Water Boas”. The name Eunectes is derived from the Greek word Eυνήκτης, which means “good swimmer”. They tend to float atop the water, with their snouts barely poking out above the surface.
    </p>
</div></div>
                        </div>
                        <div class="col-md-6 col-lg-2" style="height: 353px;"><img src="assets/img/a7.jpeg" style="width: 248px;height: 330px;margin-left: -25px;margin-top: 12px;padding-top: 40px;padding-right: 4px;padding-bottom: 2px;"></div>
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
        Anacondas snatch prey using their powerful jaws. They coil their body around the prey, constricting it by  squeezing their coils until it suffocates. Yellow Anacondas prefer to attack prey from the water and their victims often drown rather than suffocating.<br>
		These snakes will eat any vertebrate they can catch and swallow; this includes fish, amphibians, capybara and even other snakes. They swallow their prey whole and, as they can unhinge their jaws, are able to eat prey much larger than the size of their mouths would suggest. Large prey takes a long time to digest, so anacondas may not eat for weeks or months after a kill.Courtship,which occurs between April and May, and usually takes place in water.
    </p>
</div></div>
                    <div class="col-md-6"><div style="
    margin: 2em 0em 0em 0em;
    display:flex;
    font-family: roboto;
    flex-direction: column;
    max-height:500px">
    <h5 style="padding-left:21%"><strong>Threats And Conservation</strong></h5>
    <p>In most South American countries, trade in anacondas is banned. However, some countries have quotas for the number of snakes that they can export to zoos, for research or for the pet trade each year.<br>
	There is some trade for their skins, but anacondas do not suffer to the extent of other species. Humans who are afraid of the snakes routinely kill them but although there are myths of anacondas being man-eaters, there is no evidence of this. Habitat destruction is another cause for concern for anaconda populations.
    </p>
</div></div>
                </div>
            </div>
        </section>
        <div id="box-3" style="background-image: url(&quot;assets/img/a16.jpeg&quot;);">
            
        </div>
        <section class="Gaur">
            <div class="tiger-description1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3" style="height: 353px;"><img src="assets/img/a5.jpeg" style="width: 248px;height: 330px;margin-left: -25px;margin-top: 12px;padding-top: 40px;padding-right: 4px;padding-bottom: 2px;"></div>
                        <div class="col-md-6 col-lg-9" style="height: 367px;">
                            <div>
                                <h1 style="font-family: Acme, sans-serif;margin-left: 3px;padding-left: 300px;padding-bottom: 6px;padding-top: 2px;margin-bottom: 5px;color: #d05b5b;">Morelet Crocodiles</h1>
                                <h5>Physical Characteristics</h5>
                            </div>
                            <div style="height: 233px;margin-bottom: 3px;padding-bottom: 41px;"><div class="description1" style="
    margin: 2em 0em 0em 0em;
    display:flex;
    font-family: roboto;
    flex-direction: column;
    max-height:500px">

<?php
        $sql = "SELECT * FROM animals WHERE A_ID='1212'";
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

        <!-- The <span style="font-style:Bold">Morelet Crocodiles</span> is also known as an Alligator, an Agarei, Brown Crocodile or Swamp Crocodile, and is relatively small, usually less than 3m in length. They have a broad snout, and are greyish brown in colour with dark bands and spots on their bodies and tails. -->
    </p>
    <h5><strong>Habitat</strong></h5>
    <p>
        This species is a freshwater crocodile, living in swamps, marshes, ponds, lagoons and forested areas, although sometimes it can be found in brackish water around coastal areas. Morelet’s crocodiles occur across a relatively small part of Central America which reaches from Mexico, down through Belize, and into Guatemala.
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
        Morelet’s Crocodiles are generally shy and timid, although the larger ones can be dangerous to humans. They eat a variety of prey, 
		including aquatic invertebrates, fish, small reptiles and mammals and birds.<br>
		The females lay 20-45 eggs in a mound nest before the onset of the rainy season (April – June) choosing a site near the water or on floating vegetation. These crocodiles are the only New World crocodiles that always create nest mounds.<br> 
            Females guard the nest while the eggs develop, which takes around 80 days, and open up the mounds at the end of this time when they hear the calls of the hatchlings.
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
       In the 1940’s and 1950s the Morelet’s Crocodile almost became extinct because of widespread hunting for its valuable hide. It is now illegal to hunt these animals and the species has steadily recovered. Wild populations have now reached an estimate of almost 20,000 adults and the IUCN Red List of Threatened Species has reclassified it as Least Concern.<br>
		This crocodile is a conservation success story, but still faces threats from habitat loss and illegal poaching, so its populations will need monitoring.
    </p>
</div></div>
                </div>
            </div>
        </section>
        <div id="box-1" style="background-image: url(&quot;assets/img/a13.jpeg&quot;);">
            
        </div>
        <section class="Great Hornbill">
            <div class="tiger-description1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-8 offset-lg-1" style="height: 436px;margin-left: 1px;">
                            <div>
                                <h1 style="font-family: Acme, sans-serif;margin-left: 8px;padding-left: 175px;padding-bottom: 7px;padding-top: 2px;margin-bottom: 8px;color: #d05b5b;">Keeled Box Turtle<br></h1>
                                <h5>Physical Characteristics</h5>
                            </div>
                            <div style="height: 233px;margin-bottom: 3px;padding-bottom: 41px;"><div class="description1" style="
    margin: 2em 0em 0em 0em;
    display:flex;
    font-family: roboto;
    flex-direction: column;
    max-height:500px">

<?php
        $sql = "SELECT * FROM animals WHERE A_ID='1211'";
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
        <!-- The Keeled Box Turtle has three pronounced ridges on its upper shell, which give it its name. At the rear the shell, which is usually a rich brown in colour, has a serrated or scalloped edging. Like all box turtles, it has the ability to shut the front of the lower shell upwards like a box when it withdraws its head, giving extra protection from predators. It lives largely on land and its toes are only partly webbed.<br>
		The males and females are best told apart by the colour of the iris, which is usually brown or black in the male buta bright red or orange in females.These turtles are quite small, reaching up to 18cm long. -->
    </p>
    <h5><strong>Habitat</strong></h5>
    <p>
         Rather than living in water, the keeled box turtle is one of a group of turtle species that live in the deep leaf litter of tropical Asian forests. It occurs in China, North-East India, Vietnam, Lao PDR, Myanmar and Thailand, often in mountain areas. 
    </p>
</div></div>
                        </div>
                        <div class="col-md-6 col-lg-3" style="height: 353px;padding-left: 24px;"><img src="assets/img/a6.jpeg" style="width: 300px;height: 330px;margin-left: -25px;margin-top: 12px;padding-top: 40px;padding-right: 4px;padding-bottom: 2px;"></div>
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
       Keeled box turtles live on land. and have a largely plant based diet, though they do also eat worms and snails.<br>
		They breed twice a year, and lay one to five eggs each time. Males can be very aggressive when courting and will often even chase and bite the female. When the young hatch, they are left to fend for themselves, which is usual in turtles.Much of this behaviour has only been observed in captivity and may not exactly reflect what takes place in the wild.
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
        Like all the forest turtle species of this part of Asia, the most severe threat facing the Keeled Box Turtle is collection for food and for the pet trade, and the IUCN lists it as Endangered. CITES (Convention on International Trade in Endangered Species) added it in 2003 to its list of species in Appendix 2, meaning trade in it is severely restricted and monitored.<br>
		However, despite legal protection over most of their range, the turtles remain financially valuable to local communities and collection continues on a scale that is stripping out entire populations. They are also very vulnerable to habitat destruction across large parts of their range.Bristol Zoo successfully hatched two Keeled Box Turtle eggs in September 2017. This was the first time that they have bred in captivity in the UK, and offers extra potential viability for the species while long term solutions are found for wild populations.
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