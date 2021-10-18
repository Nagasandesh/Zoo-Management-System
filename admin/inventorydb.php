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
         
            $sql = "SELECT * FROM inventory";
            $result = mysqli_query($conn, $sql);
        ?>
        <div class="col-lg-11 col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">ANIMALS LIST</div>
                <table border= 2px class="table table-bordered">
                    <tr>
                        <td>A_ID</td>
                        <td>A_NAME</td>
                        <td>STATUS</td>
                        <td>BIRTHS</td>
                        <td>ACQUISITIONS</td>
                        <td>DEATHS</td>
                        <td>DISPOSALS</td>
                        <td>TOTAL_COUNT</td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                
            </div>
        </div>
            <?php
                if(mysqli_num_rows($result) > 0){

                    while($inventory = mysqli_fetch_assoc($result)){
            ?>
                    <tr>
                         <td><?php echo $inventory['A_ID']; ?></td>
                        <td><?php echo $inventory['A_NAME']; ?></td>
                        <td><?php echo $inventory['STATUS']; ?></td>
                        <td><?php echo $inventory['BIRTH']; ?></td>
                        <td><?php echo $inventory['ACQUISITIONS']; ?></td>
                        <td><?php echo $inventory['DEATH']; ?></td>
                        <td><?php echo $inventory['DISPOSALS']; ?></td>
                        <td><?php echo $inventory['TOTAL_COUNT']; ?></td>
                        <td><a href="inventory_update.php?A_NAME=<?php echo $inventory['A_NAME']; ?>" class="btn btn-block btn-xs btn-warning" >Edit</a></td>
                        <td ><a href="inventory_delete.php?A_NAME=<?php echo $inventory['A_NAME']; ?>" class="btn btn-block btn-xs btn-danger">Delete</a></td>
                    </tr>
            <?php
                    }
                }else {
                    echo '0 results'; 
                       }
            ?>

        </table>
        <a href="inventory_add.php">ADD</a>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>