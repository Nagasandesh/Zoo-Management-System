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
                <div class="panel-heading">Animals List</div>
                    <div class="panel-body">
                        <form action="" method="POST">

                            <div class="form-group">
                                <input type="text" class="form-control input-sm"  name="a_name" placeholder=" Animal Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="scientific_name" placeholder="SCIENTIFIC Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="a_type" placeholder="A_TYPE" required>
                            </div>
                            <div class="form-group">
                                <label for="block_no">BLOCK_NO</label>
                                <input type="number" class="form input-sm" name="block_no" id="block_no" min="1" max="5" placeholder="BLOCK_NO" required>
                            </div>
                            <div class="form-group">
                                <label for="cage_no">CAGE_NO</label>
                                <input type="number" class="form input-sm" id="cage_no" name="cage_no" min="1" max="25" placeholder="CAGE_NO" required>
                            </div>
                            <div class="form-group">
                                <select  name="gender"  class="form-control input-sm" placeholder="GENDER">
                                <option value="M">MALE</option>    
                                <option value="F">FEMALE</option>
                                <option value="OTHERS">OTHERS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="description" class="form-control input-sm" id="bio" cols="30" rows="10" placeholder="DESCRIPTION" required></textarea>
                                <!-- <input type="text" class="form-control input-sm" name="description" placeholder="DESCRIPTION" required> -->
                            </div>
                            <div class="form-group">
                                <label for="doj">DATE OF JOINING:</label>
                                <input type="date" class="form input-sm" name="doj" id="doj" required>
                            </div>
                            <div class="form-group">
                                <label for="feed_time">FEED TIME:</label>
                                <input type="time" class="form input-sm" id="feed_time" name="feed_time" required>
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
                // $a_id = $_POST['a_id'];
                $a_name = $_POST['a_name'];
                $scientific_name = $_POST['scientific_name'];
                $a_type = $_POST['a_type'];
                $block_no = $_POST['block_no'];
                $cage_no = $_POST['cage_no'];
                $gender = $_POST['gender'];
                $description= $_POST['description'];
                $doj= $_POST['doj'];
                $feed_time = $_POST['feed_time'];

                $sql = "INSERT INTO animals (A_NAME, SCIENTIFIC_NAME, A_TYPE, BLOCK_NO, CAGE_NO, GENDER, DESCRIPTION, DOJ, FEED_TIME) VALUES ('$a_name', '$scientific_name', '$a_type', '$block_no', '$cage_no', '$gender', '$description', '$doj', '$feed_time')";

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