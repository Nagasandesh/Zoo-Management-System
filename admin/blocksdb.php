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
         
            $sql = "SELECT * FROM blocks";
            $result = mysqli_query($conn, $sql);
        ?>
        <div class="col-lg-11 col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">BLOCKS</div>
                <table border= 2px class="table table-bordered">
                    <tr>    
                        <td>BLOCK_NO</td>
                        <td>TOTAL_CAGES</td>
                        <td>TOTAL_AREA in sqft</td>
                        <td>A_TYPE</td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                
            </div>
        </div>
            <?php
                if(mysqli_num_rows($result) > 0){

                    while($blocks = mysqli_fetch_assoc($result)){
            ?>
                    <tr>
                        
                        <td><?php echo $blocks['BLOCK_NO']; ?></td>
                        <td><?php echo $blocks['TOTAL_CAGES']; ?></td>
                        <td><?php echo $blocks['TotalArea']; ?></td>
                        <td><?php echo $blocks['A_TYPE']; ?></td>
                        <td><a href="blocks_update.php?BLOCK_NO=<?php echo $blocks['BLOCK_NO']; ?>" class="btn btn-block btn-xs btn-warning" >Edit</a></td>
                        <td ><a href="blocks_delete.php?BLOCK_NO=<?php echo $blocks['BLOCK_NO']; ?>" class="btn btn-block btn-xs btn-danger">Delete</a></td>
                    </tr>
            <?php
                    }
                }else {
                    echo '0 results'; 
                       }
            ?>

        </table>
        <a href="blocks_add.php" style="text-decoration:none">ADD</a>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>