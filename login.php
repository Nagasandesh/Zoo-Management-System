<?php 
require 'conn.php'; 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="login.css">
        <title>LogIn</title>
    </head>
    <body>
    <form method="post" action="">
        <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                <input class="form" type="text" name="Fname" required placeholder="FirstName" value="">
            </div>
            <div class="textbox">
                <input class="form" type="text" name="Lname" required placeholder="LastName" value="">
            </div>
            <div class="textbox">
                <input class="form" type="text" name="password" required placeholder="Enter your Password" value="">      
            </div>
            <div class="textbox">
                <input class="button" type="submit" name="login" value="Login"> 
                <a href="register.php" class="btn-btn">REGISTER</a>     
            </div>
        </div>
        </form>

        <?php
            if(isset($_POST['login'])) {
                $Fname = $_POST['Fname'];
                $Lname = $_POST['Lname'];
                $password = md5($_POST['password']);
                $sql = "SELECT * from users WHERE u_Fname = '$Fname' AND u_Lname= '$Lname'";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($user= mysqli_fetch_assoc($result)){
                      if($Fname == $user['u_Fname'] && $Lname == $user['u_Lname'] && $password == $user['u_password']){
                          $_SESSION['u_Fname'] = $Fname;
                            header('Location: adoption_details.php');
                      } else{
                          echo "<script>alert('Incorrect Password');</script>";
                      }
                    }
                }else {
                    echo "0 results";
                }
            }
        ?>
    </body>
</html>