<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="login.css">
        <title>ADOPTION DETAILS</title> 
    </head>
    <body>
        <?php 
         
            $sql = "SELECT * FROM adoption";
            $result = mysqli_query($conn, $sql);
        ?>
        <div class="col-lg-9 col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">ADOPTION DETAILS</div>
                <table border= 2px class="table table-bordered">
                    <tr>
                        <td>ADOPTER_ID</td>
                        <td>F_NAME</td>
                        <td>L_NAME</td>
                        <td>A_NAME</td>
                        <td>TERM</td>
                        <td>TIME_PERIOD</td>
                        <td>AMOUNT</td>
                        <td>EMAIL</td>
                        <td>ADDRESS</td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                
            </div>
        </div>
            <?php
                if(mysqli_num_rows($result) > 0){

                    while($adoption = mysqli_fetch_assoc($result)){
            ?>
                    <tr>
                         <td><?php echo $adoption['ADOPTER_ID']; ?></td>
                        <td><?php echo $adoption['F_NAME']; ?></td>
                        <td><?php echo $adoption['L_NAME']; ?></td>
                        <td><?php echo $adoption['A_NAME']; ?></td>
                        <td><?php echo $adoption['TERM']; ?></td>
                        <td><?php echo $adoption['TIME_PERIOD']; ?></td>
                        <td><?php echo $adoption['AMOUNT']; ?></td>
                        <td><?php echo $adoption['Email']; ?></td>
                        <td><?php echo $adoption['Address']; ?></td>
                        <td><a href="adoption_update.php?ADOPTER_ID=<?php echo $adoption['ADOPTER_ID']; ?>" class="btn btn-block btn-xs btn-warning" >Edit</a></td>
                        <td ><a href="adoption_delete.php?ADOPTER_ID=<?php echo $adoption['ADOPTER_ID']; ?>" class="btn btn-block btn-xs btn-danger">Delete</a></td>
                    </tr>
            <?php
                    }
                }else {
                    echo '0 results'; 
                       }
            ?>

        </table>
        <!-- <a href="animal_info_add.php" style="text-decoration:none">ADD</a> -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>