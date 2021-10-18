<?php require 'admin/conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>mini-project Template</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    
    <link href="https://googlefontapis.com/css?family=Girassol|Raleway|Lobster|Special Elite">
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
    <link rel="stylesheet" href="assets/css/survey.css">
</head>
<!-- navbar -->
<nav class="navbar navbar-light navbar-expand-md" style="background-color: #f8f3d7;">
        <div class="container-fluid"><a class="navbar-brand" href="index.php"><strong>Zoological Garden</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="adoption.php">Adoption</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="adminLogin.php">Admin</a></li>
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="#gallery">Gallery</a></li> -->
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="mammals.php"><em>Animals</em><br></a>
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
<!-- navbar -->
<body>
        <div id="outside">
            <form id="survey-form" action="" method="POST">
                <h1 id="title">Application Form</h1>
                <!-- <p id="description"><b>NOTE:</b> Form to be filled within 10 days prior to date</p> -->
                <fieldset>
                    <legend>Adopter Details</legend>
                    <div>
                        <label for="name">F_NAME:</label><br>
                        <input type="text" id="name" name="f_name" placeholder="First name" required>
                    </div><br>
                    <div>
                        <label for="name">L_NAME:</label><br>
                        <input type="text" id="name" name="l_name" placeholder="Last name" required>
                    </div><br>
                    <div>
                        <label for="name">Animal NAME:</label><br>
                        <input type="text" id="name" name="a_name" placeholder="Enter Animal you want to adopt" required>
                    </div><br>
                    <div>
                        <p style="text-decoration: underline;">Term:</p>
                        <input type="text" name="term" name="term" required placeholder="TERM">
                    </div>
                    <div>
                        <p style="text-decoration: underline;">Time Period:</p>
                        <input  type="text" name="time_period" name="time_period" required placeholder="TIME_PERIOD">
                    </div>
                    <div>
                        <p style="text-decoration: underline;">Amount:</p>
                            <input class="form" type="text" name="amount" required placeholder="AMOUNT">
                    </div>
                    <div>
                        <label for="name">EMAIL:</label><br>
                        <input type="text" id="email" name="email" placeholder="Enter Email" required>
                    </div><br>
                    <!-- <div>
                    <p style="text-decoration: underline;">GENDER:</p>
                    <input type="radio" name="gender" value="male">MALE<br>
                    <input type="radio" name="gender" value="female">FEMALE<br>
                    <input type="radio" name="gender" value="others">PREFER NOT TO SAY<br>
                    </div>
                    <div>
                        <br></br>
                        <label for="birthday">DATE OF BIRTH</label><br>
                        <input type="date" name="doj" id="birthday">
                    </div><br> -->
                    <div>
                        <label for="address">ADDRESS:</label><br>
                        <textarea name="address" id="address" name="address" cols="30" rows="10" placeholder="Enter address" required></textarea>
                    </div><br>
                </fieldset>
                <!-- <fieldset>
                    <label class="check" for="Gender">Check all fields:</label><br></br>
                    <input type="checkbox" name="tattoo">Lorem ipsum dolor sit,amet consectetur <br>
                    <input type="checkbox" name="tattoo">adipisicing elit. Est dolorum beatae<br>
                    <input type="checkbox" name="tattoo">ullam! Quod nisi dolor distinctio<br>
                    <input type="checkbox" name="tattoo">aspernatur fugiat culpa quam, dolores vitae laudantium<br>
                    <input type="checkbox" name="tattoo">provident totam accusantium eveniet saepe iste. Deleniti.<br>
            </fieldset> -->
                <!-- <fieldset>
                    <label for="bio">EXPLAIN ABOUT YOURSELF:</label><br>
                    <textarea name="bio" id="bio" cols="30" rows="10" placeholder="Describe in about 300 words..." required></textarea>
                    <br></br>
                        <div class="attachfiles">
                            <p>Upload bank statement, SSLC marks card, puc marks card, Degree certificate</p><br>
                            <label for="files">Files to be attached here:</label>
                            <button id="files">Attach Files</button>
                        </div>
                </fieldset> -->
                <div class="submitform">
                    <input type="submit" name="submit" value="submit form">
                </div>
            </form>
        </div>
        <?php
            if(isset($_POST['submit'])) {
                // $a_id = $_POST['a_id'];
                $f_name = $_POST['f_name'];
                $l_name = $_POST['l_name'];
                $a_name = $_POST['a_name'];
                $term= $_POST['term'];
                $time_period = $_POST['time_period'];
                $amount = $_POST['amount'];
                $email = $_POST['email'];
                $address = $_POST['address'];


                $sql = "INSERT INTO adoption (F_NAME, L_NAME, A_NAME, TERM, TIME_PERIOD, AMOUNT, Email, Address) VALUES ('$f_name', '$l_name', '$a_name', '$term', '$time_period', '$amount', '$email', '$address')";

                if(mysqli_query($conn, $sql)) {
                    echo "<script>alert('New record added'); </script>" ;
                }else {
                    echo "Error:" . $sql . "</br>" . mysqli_error($conn);
                }
            }
        ?>
        
  <!------ footer------->
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
    <!------ footer------->
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