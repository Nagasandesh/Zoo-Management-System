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

<body style="background-color: #f7f3e8;color: #454040;opacity: 1;">
<!------ Navbar ------->
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
   <!------ Navbar ------->
<div id="table-header" style="padding-bottom: 8px;margin-bottom: 3px;">
                <h4 style="margin-left: 22px;padding-left: 56px;display: inline-block;font-family: Nunito, sans-serif;"><strong>Zoo Timings :</strong><br></h4>
</div>
<div class="container" style="margin:10px auto 10px 114px; padding:10px auto 30px 300px">
    <div class="row">
        <div id="no-more-tables">
            <table class="col-md-22 table-bordered table-striped table-condensed cf" style="text-align:center;background-color:#f5d564;color:#212529">
        		<thead class="cf">
        			<tr>
        				<th style="width:200px; height:50px;text-align:center">Weekday</th>
        				<th class="numeric" style="width:200px; height:50px;text-align:center">Zoo Visiting Hours</th>
        			</tr>
        		</thead>
        		<tbody>
                    <tr>
        				<td data-title="Sl No." class="text">Monday</td>
        				<td data-title="Amount" class="numeric">8:30 AM - 5:30 PM</td>
        			</tr>
                    <tr>
        				<td data-title="Sl No." class="text">Tuesday</td>
        				<td data-title="Amount" class="numeric">8:30 AM - 5:30 PM</td>
        			</tr>
                    <tr>
        				<td data-title="Sl No." class="text">Wednesday</td>
        				<td data-title="Amount" class="numeric">8:30 AM - 5:30 PM</td>
        			</tr>
                    <tr>
        				<td data-title="Sl No." class="text">Thursday</td>
        				<td data-title="Amount" class="numeric">8:30 AM - 5:30 PM</td>
        			</tr>
                    <tr>
        				<td data-title="Sl No." class="text">Friday</td>
        				<td data-title="Amount" class="numeric">8:30 AM - 5:30 PM</td>
        			</tr>
                    <tr>
        				<td data-title="Sl No." class="text">Saturday</td>
        				<td data-title="Amount" class="numeric">8:30 AM - 5:30 PM</td>
        			</tr>
        		</tbody>
        	</table>
        </div>
    </div>
</div>

<div style="margin-bottom: 2px;padding-bottom: 5px;">
    <h5 style="margin-left: 22px;margin-top: 21px;padding-left: 40px;display: inline-block;"> <strong style="padding-right: 12px;"> Best Time to Visit Zoo </strong> ?</h5>
        <p style="padding-left: 56px;margin-left: 22px;font-size: 17px;font-family: Acme, sans-serif;">
	The Birds are active in morning hours, Mammals will be active after 3.00 p.m. visitors who visit the Zoo from 11.00 a.m. to 3.00 p.m. often complain not spotting many animals in the Zoo. Due to severe hot conditions most of the animals are not active between 11.30 a.m. to 3.00 p.m. They prefer to take rest/sleep.So visitors are advised to visit the zoo before 11.00 a.m. or after 3.00 p.m. to see most of the animals.</p>
</div>

<h5 style="margin-left: 22px;padding-left: 56px;display: inline-block;font-family: Nunito, sans-serif;margin-top: 4px;margin-bottom: 10px;padding-top: 41px;padding-bottom: 15px;"><strong>Tariff On Zoo:</strong><br></h5>
<div class="container" >
    <div class="row" style="margin-bottom:12px; padding-bottom: 50px;" >
        <div id="no-more-tables">
            <table class="col-md-12 table-bordered table-striped table-condensed cf" style="font-family:'Roboto',sans-serif;background-color:#f5d564;color:#212529">
        		<tbody>
                    <tr style="text-align:center; padding-left:2px">
                        <th style="width:400px;height:50px;font-family:'Roboto Slab',sans-serif">Particulars</th>
                        <th style="width:250px;height:50px;font-family:'Roboto Slab',sans-serif">Normal Rates</th>
                        <th colspan="2" style="width:287px;height:50px;font-family:'Roboto Slab',sans-serif">Saturday/ Sunday/ Govt Holidays</th>
                    </tr>
                    <tr>
                        <td style="text-align:left; width:30px; height:29px padding-bottom:4px">
                        <strong>Entrance Fee:</strong>
                        <br>
                        Adult
                        <br>
                        Child(5-12 Years of age)
                        <br>
                        Child(Below 5 Years)
                        </td>

                        <td style="text-align:center; width:250px;height:29px">
                        <br>
                        Rs.80/-Per Head
                        <br>
						Rs.40/-Per Head
                        <br>
                        Free Entrance
                        </td>

                        <td style="text-align:center; width:287px;height:29px">
                        <br>
                        Rs.100/-Per Head
                        <br>
						Rs.50/-Per Head
                        <br>
                        Free Entrance
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:left;width:287px; height:29px padding-bottom:4px">
                        <strong>Students Concession (in groups):</strong>
                        <br>
                        L.K.G. / U.K.G.
                        <br>
                        1
                        <sup>st</sup>
                        Std to 7
                        <sup>th</sup>
                        Std, Students(Up to 12 years)
                        <br>
                        8
                        <sup>th</sup>
                        Std to 10
                        <sup>th</sup>
                        Std, Students
                        <br>
                        Teacher(Teachers accompanying a group of 50 students)
                        </td>

                        <td style="text-align:center; width:250px;height:29px">
                        
                        Free Entry 
                        <br>
						Rs.20/-
                        <br>
						Rs.30/-
                        <br>
                        Rs.30/-
                        </td>

                        <td style="text-align:center; width:287px;height:29px">
                        Free Entry 
                        <br>
						Rs.30/-
                        <br>
                        Rs.40/-
                        <br>
                        Rs.40/-
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:left; width:30px; height:29px padding-bottom:4px">
                        <strong>Camera</strong>
                        <br>
                        Video Camera
                        <br>
                        Still Camera
                        </td>

                        <td style="text-align:center; width:250px;height:29px">
                        <br>
                        Rs.200/-Each
                        <br>
						Rs.100/-Each
                        </td>

                        <td style="text-align:center; width:287px;height:29px">
                        <br>
                        Rs.200/-Each
                        <br>
						Rs.100/-Each
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:left; width:30px; height:40px">
                        <strong>Luggage Tariff</strong>
                        </td>

                        <td style="text-align:center; ;height:29px">
                        Rs.10/-Each
                        </td>

                        <td style="text-align:center; ;height:29px">
						Rs.10/-Each
                        </td>
                    </tr>
        		</tbody>
        	</table>
        </div>
    </div>
</div>
  <!--------- Footer ----------->
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