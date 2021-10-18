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
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="mammals.php">Mammals</a><a class="dropdown-item" role="presentation" href="#">Birds</a><a class="dropdown-item" role="presentation" href="reptiles.php">Reptiles</a></div>
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
        <div id="box-2" style="background-image: url(&quot;assets/img/a10.jpeg&quot;);">
        </div>
        <section class="Military Macaw">
            <div class="tiger-description1" style="height: 408px;">
                <div class="container" style="height: 408px;">
                    <div class="row" style="height: 408px;">
                        <div class="col-md-6 col-lg-9" style="height: 408px;">
                            <div>
                                <h1 style="font-family: Acme, sans-serif;margin-left: 3px;padding-left: 300px;padding-bottom: 20px;padding-top: 2px;margin-bottom: 8px;color: rgb(208,91,91);">Military Macaw</h1>
                                <h5>Physical Characteristics</h5>
                            </div>
                            <div style="height: 233px;margin-bottom: 3px;padding-bottom: 41px;"><div class="description1" style=" margin: 2em 0em 0em 0em;display:flex;font-family: roboto;
    flex-direction: column; max-height:500px">

<?php
        $sql = "SELECT * FROM animals WHERE A_ID='1209'";
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
        <!-- The <strong> The Military Macaw</strong> is a large macaw with a black beak, about 70cm in length. Its plumage is largely brilliant green, with a red patch at the front of the head, more red and blue on the tail, and blue flight feathers, giving it an impressively colourful appearance.<br>
				 	There are several named races; A.m. militaris, A.m. mexicana, which is a little larger, and A.m. boliviana, which has a red-brown throat and darker blue tips on the tail and wing feathers. These birds are also very similar in appearance to the Great Green Macaw. -->
    </p>
    <h5><strong>Habitat</strong></h5>
    <p>
        The Military Macaw occurs from Mexico as far south as Argentina, but its range is very fragmented and in South America consists of a series of 
		scattered populations along the length of the Andes. There are former range areas in western Mexico where it is now extinct.
    </p>
</div></div>
                        </div>
                        <div class="col-md-6 col-lg-2" style="height: 353px;"><img src="assets/img/a9.jpeg" style="width: 248px;height: 330px;margin-left: -25px;margin-top: 12px;padding-top: 40px;padding-right: 4px;padding-bottom: 2px;"></div>
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
        Military Macaws have large communal roosts, very often on cliff faces. They are noisy birds, giving loud creaking calls and shrieking cries.<br>
		They forage in pairs or groups of up to 10 individuals, and feed largely on fruit and nuts. Nests are built in cliff cavities or in tree holes,		     with the preference varying across different parts of the macaw’s range.  They lay two or three eggs, and in Mexico, the breeding season falls in June.
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
        The IUCN judges that the Military Macaw is Vulnerable, and there is some lack of clarity on the likely overall population size of this species, with estimates made in 2016 ranging from as low as 1,000 breeding pairs to as high as 10,000 individual birds.<br>
		There are two main threats to the species, as it is trapped at high levels for the pet trade as well as being affected by habitat loss. Where the macaws nest in tree cavities, these nests are very vulnerable to poaching. It was estimated in 2002 that 23 per cent of suitable habitat in Mexico had been lost, and only a small proportion of the species’ range in Mexico. 
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