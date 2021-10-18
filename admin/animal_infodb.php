<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="login.css">
        <!-- <title>Welcome</title> -->
    </head>
    <body>
        <?php 
         
            $sql = "SELECT * FROM animals";
            $result = mysqli_query($conn, $sql);
        ?>
        <div class="col-lg-11 col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">Animals List</div>
                <table border= 2px class="table table-bordered">
                    <tr>
                        <td>A_ID</td>
                        <td>A_NAME</td>
                        <td>SCIENTIFIC_NAME</td>
                        <td>A_TYPE</td>
                        <td>BLOCK_NO</td>
                        <td>CAGE_NO</td>
                        <td>GENDER</td>
                        <td>DESCRIPTION</td>
                        <td>DOJ</td>
                        <td>FEED_TIME</td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                
            </div>
        </div>
            <?php
                if(mysqli_num_rows($result) > 0){

                    while($animal = mysqli_fetch_assoc($result)){
            ?>
                    <tr>
                         <td><?php echo $animal['A_ID']; ?></td>
                        <td><?php echo $animal['A_NAME']; ?></td>
                        <td><?php echo $animal['SCIENTIFIC_NAME']; ?></td>
                        <td><?php echo $animal['A_TYPE']; ?></td>
                        <td><?php echo $animal['BLOCK_NO']; ?></td>
                        <td><?php echo $animal['CAGE_NO']; ?></td>
                        <td><?php echo $animal['GENDER']; ?></td>
                        <td><?php echo $animal['DESCRIPTION']; ?></td>
                        <td><?php echo $animal['DOJ']; ?></td>
                        <td><?php echo $animal['FEED_TIME']; ?></td>
                        <td><a href="animal_info_update.php?A_ID=<?php echo $animal['A_ID']; ?>" class="btn btn-block btn-xs btn-warning" >Edit</a></td>
                        <td ><a href="animal_info_delete.php?A_ID=<?php echo $animal['A_ID']; ?>" class="btn btn-block btn-xs btn-danger">Delete</a></td>
                    </tr>
            <?php
                    }
                }else {
                    echo '0 results'; 
                       }
            ?>

        </table>
    
        <a href="animal_info_add.php" style="text-decoration:none">ADD</a>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>