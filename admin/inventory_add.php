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
                <div class="panel-heading">ANIMALS LIST</div>
                    <div class="panel-body">
                        <form action="" method="POST">
                            <!-- <div class="form-group">
                                <input type="text" class="form-control input-sm"  name="a_id" placeholder="Animal ID" required>
                            </div> -->
                            <div class="form-group">
                                <input type="text" class="form-control input-sm"  name="aname" placeholder="Animal Name" required>
                            </div>
                            <div class="form-group">
                                <textarea name="status" class="form-control input-sm" id="bio" cols="30" rows="5" placeholder="Animal STATUS" required></textarea>
                                <!-- <br><br> -->
                                <!-- <input type="text" class="form-control input-sm" name="status" placeholder="Animal STATUS" required> -->
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="births" placeholder="BIRTHS" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="acquisitions" placeholder="ACQUISITIONS" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="death" placeholder="DEATHS" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="disposals" placeholder="DISPOSALS" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="total_count" placeholder="TOTAL_COUNT" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-sm btn-success"
                                value= "Add " name="add" required>
                            </div>
                        </form>
                    </div>    
            </div>
        </div>

        <?php
            if(isset($_POST['add'])) {
                // $a_id = $_POST['a_id'];
                $aname = $_POST['aname'];
                $status = $_POST['status'];
                $births = $_POST['births'];
                $acquisitions = $_POST['acquisitions'];
                $deaths = $_POST['death'];
                $disposals= $_POST['disposals'];
                $total_count = $_POST['total_count'];

                $sql = "INSERT INTO inventory (A_NAME, STATUS, BIRTHS, ACQUISITIONS, DEATH, DISPOSALS, TOTAL_COUNT) VALUES ('$a_id', '$aname', '$status', '$births', '$acquisitions', '$deaths', '$disposals', '$total_count')";

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