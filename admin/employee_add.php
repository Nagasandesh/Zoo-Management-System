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
                <div class="panel-heading">Employee List</div>
                    <div class="panel-body">
                        <form action="" method="POST">

                            <div class="form-group">
                                <input type="text" class="form-control input-sm"  name="e_fname" placeholder=" First Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="e_lname" placeholder="Last Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="designation" placeholder="DESIGNATION" required>
                            </div>
                            <div class="form-group">
                                <select  name="sex"  class="form-control input-sm" placeholder="SEX">
                                <option value="M">MALE</option>    
                                <option value="F">FEMALE</option>
                                <option value="OTHERS">OTHERS</option>
                                </select>
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
                                <input type="text" class="form-control input-sm" name="phone" placeholder="PHONE" required>
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
                // $e_id = $_POST['e_id'];
                $e_fname = $_POST['e_fname'];
                $e_lname = $_POST['e_lname'];
                $designation = $_POST['designation'];
                $sex = $_POST['sex'];
                $block_no = $_POST['block_no'];
                $cage_no = $_POST['cage_no'];
                $phone= $_POST['phone'];

                $sql = "INSERT INTO employee (E_FNAME, E_LNAME,DESIGNATION, SEX, BLOCK_NO, CAGE_NO, PHONE) VALUES ('$e_fname', '$e_lname', '$designation', '$sex', '$block_no', '$cage_no', '$phone')";

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