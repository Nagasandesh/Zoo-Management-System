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
        <div class="col-lg-9 col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">BLOCKS LIST</div>
                    <div class="panel-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="block_no">BLOCK_NO</label>
                                <input type="number" class="form input-sm" name="block_no" id="block_no" min="1" max="5" placeholder="BLOCK_NO" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="total_cages"
                                placeholder="TOTAL_CAGES" required>
                            </div>
                           
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="total_area"
                                placeholder="TOTAL_AREA in sqft" required>
                            </div>
                             <div class="form-group">
                                <input type="text" class="form-control input-sm" name="a_type" placeholder="A_TYPE" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-sm btn-success"
                                value= "Add" name="add" required>
                            </div>
                        </form>
                    </div>    
            </div>
        </div>

        <?php
            if(isset($_POST['add'])) {
                
                $block_no = $_POST['block_no'];
                $total_cages = $_POST['total_cages'];
                $total_area = $_POST['total_area'];
                $a_type = $_POST['a_type'];


                $sql = "INSERT INTO blocks (BLOCK_NO, TOTAL_CAGES, TotalArea, A_TYPE) VALUES ( '$block_no', '$total_cages', '$total_area', '$a_type')";

                if(mysqli_query($conn, $sql)) {
                    echo "<script>alert('New record added'); </script>" ;
                }else {
                    echo "Error:" . $sql . "</br>" . mysqli_error($conn);
                }
            }
        ?>

        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>