<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href=
    "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="login.css">
        <title>Register Page</title>
    </head>
    <body>
        <form method="post" action="">
            <div class="register-box">
                <h1>Register</h1>

                <div class=
                "textbox">
                    <input class="form" type="text" name="Fname" required placeholder="FirstName" value="">
                </div>
                <div class=
                "textbox">
                    <input class="form" type="text" name="Lname" required placeholder="LastName" value="">
                </div>
                <div class=
                "textbox">
                    <input class="form" type="text" name="email" required placeholder="Enter your Email" value="">
                </div>
                <div class=
                "textbox">
                    <input class="form" type="text" name="password" required placeholder="Enter your Password" value="">      
                </div>
                <div class=
                "textbox">
                    <input class="button" type="submit" name="reg" value="register"> 
                    <a href="" class="btn-btn">LOGIN</a>     
                </div>
            </div>
        </form>
    <?php
        if(isset($_POST['reg'])) {
            $u_Fname = $_POST['Fname'];
            $u_Lname = $_POST['Lname'];
            $u_email = $_POST['email'];
            $u_password = md5($_POST['password']);

            $sql = "INSERT INTO users(u_Fname, u_Lname, u_email, u_password) VALUES('$u_Fname', '$u_Lname', '$u_email', '$u_password')";

            if(mysqli_query($conn, $sql)) {
                echo "<script>alert('registered');</script>";
            } else {
                echo "Error:" . $sql . "<br>". mysqli_error($conn);
            }
        }
    ?>
    </body>
</html>