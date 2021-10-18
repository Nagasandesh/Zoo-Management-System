<?php 
ob_start();
require 'admin\conn.php'; 
session_start();
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
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<!-------------- Navbar Section ------------------------>
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="index.php"><strong>Zoological Garden</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="adoption.php">Adoption</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Admin</a></li>
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="#gallery">Gallery</a></li> -->
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="mammals.php"><em>Animals</em><br></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="mammals.php">Mammals</a><a class="dropdown-item" role="presentation" href="birds.php">Birds</a><a class="dropdown-item" role="presentation" href="reptiles.php">Reptiles</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><em>Conservations</em><br></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="inventory.php">Animal Inventory</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Plan For Visit</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Tariff On Zoo</a><a class="dropdown-item" role="presentation" href="#">Zoo Timings</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!--------------- Navbar Section ------------------->

<!----------------- Login Form --------------->
     <div class="login-dark" style="background-image: url(&quot;assets/img/z4.jpg&quot;);"> 
        <form method="post" action="" style="margin-top: 110px;">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" name="admin_id" type="text" placeholder="Admin ID"></div>
            <div class="form-group"><input class="form-control" name="admin_username" type="text" placeholder="Admin Name"></div>
            <div class="form-group"><input class="form-control" name="admin_password" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" name="login" type="submit" value="Login">Log In</button></div>
        </form>
            <!-- <a class="forgot" href="#">Forgot your email or password?</a> -->
    </div>
<!----------------- Login Form --------------->
    <?php 
            if(isset($_POST['login']) ){
                $admin_id = $_POST['admin_id'];
                $admin_username = $_POST['admin_username'];
                $admin_password = $_POST['admin_password'];
            
                $sql = "SELECT * from admin WHERE ADMIN_ID = '$admin_id'";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0) {
                    while($admin= mysqli_fetch_assoc($result)) {
                        if($admin_id == $admin['ADMIN_ID'] && $admin_username == $admin['USERNAME'] &&$admin_password == $admin['PASSWORD']) {
                            $_SESSION['USERNAME'] = $admin_username;
                            header('Location: admin.php');
                        }else {
                            echo "<script>alert('Incorrect Password');</script>";
                        }
                    }
                }else {
                    echo "0 results";
                }
            }
        ob_end_flush();
        ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/--mp---Multiple-items-slider-responsive-1.js"></script>
    <script src="assets/js/--mp---Multiple-items-slider-responsive.js"></script>
</body>

</html>