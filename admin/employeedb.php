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
         
            $sql = "SELECT * FROM employee";
            $result = mysqli_query($conn, $sql);
        ?>
        <div class="col-lg-11 col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">Employee List</div>
                <table border= 2px class="table table-bordered">
                    <tr>
                        <td>E_ID</td>
                        <td>E_FNAME</td>
                        <td>E_LNAME</td>
                        <td>DESIGNATION</td>
                        <td>SEX</td>
                        <td>BLOCK_NO</td>
                        <td>CAGE_NO</td>
                        <td>PHONE</td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                
            </div>
        </div>
            <?php
                if(mysqli_num_rows($result) > 0){

                    while($employee = mysqli_fetch_assoc($result)){
            ?>
                    <tr>
                         <td><?php echo $employee['E_ID']; ?></td>
                        <td><?php echo $employee['E_FNAME']; ?></td>
                        <td><?php echo $employee['E_LNAME']; ?></td>
                        <td><?php echo $employee['DESIGNATION']; ?></td>
                        <td><?php echo $employee['SEX']; ?></td>
                        <td><?php echo $employee['BLOCK_NO']; ?></td>
                        <td><?php echo $employee['CAGE_NO']; ?></td>
                        <td><?php echo $employee['PHONE']; ?></td>
                        <td><a href="employee_update.php?E_ID=<?php echo $employee['E_ID']; ?>" class="btn btn-block btn-xs btn-warning" >Edit</a></td>
                        <td ><a href="employee_delete.php?E_ID=<?php echo $employee['E_ID']; ?>" class="btn btn-block btn-xs btn-danger">Delete</a></td>
                    </tr>
            <?php
                    }
                }else {
                    echo '0 results'; 
                       }
            ?>

        </table>
        <a href="employee_add.php">ADD</a>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>