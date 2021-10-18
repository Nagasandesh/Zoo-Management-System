<?php 
ob_start();
require 'conn.php'; ?>
<!DOCTYPE html>
<html>
    <body>
        <?php 
            $e_id = $_GET['E_ID'];
            $sql = "SELECT * FROM employee WHERE E_ID ='$e_id'";
            $result = mysqli_query($conn, $sql);
        ?>
        <table border= "2px">
        <tr>
            <td>E_ID</td>
            <td>E_FNAME</td>
            <td>E_LNAME</td>
            <td>DESIGNATION</td>
            <td>SEX</td>
            <td>BLOCK_NO</td>
            <td>CAGE_NO</td>
            <td>PHONE</td>
            <td>UPDATE</td> 
        </tr>
        
            <?php
                if(mysqli_num_rows($result) > 0){

                    while($employee = mysqli_fetch_assoc($result)){
            ?>
                <form action="" method="POST">
                    <tr>
                        <td>
                            <?php echo $employee['E_ID']; ?>
                            <!-- <input class="form" type="text" name="e_id" value="<?php echo $employee['E_ID']; ?>" required placeholder="E_ID"> -->
                        </td>
                        <td>
                            <input class="form" type="text" name="e_fname" value="<?php echo $employee['E_FNAME']; ?>" required placeholder="FIRST NAME">
                        </td>
                        <td>
                            <input class="form" type="text" name="e_lname" value="<?php echo $employee['E_LNAME']; ?>" required placeholder="LAST NAME">
                        </td>
                        <td>
                            <input class="form" type="text" name="designation"  value="<?php echo $employee['DESIGNATION']; ?>" required placeholder="DESIGNATION" >
                        </td>
                        <td>
                            <input class="form" type="text" name="sex" value="<?php echo $employee['SEX']; ?>" required placeholder="SEX">
                        </td>
                        <td>
                            <input class="form" type="text" name="block_no" value="<?php echo $employee['BLOCK_NO']; ?>" required placeholder="BLOCK_NO">
                        </td>
                        <td>
                            <input class="form" type="text" name="cage_no" value="<?php echo $employee['CAGE_NO']; ?>" required placeholder="CAGE_NO">
                        </td>
                        <td>
                            <input class="form" type="tel" pattern="[0-9]{10}" name="phone" value="<?php echo $employee['PHONE']; ?>" required placeholder="PHONE">
                        </td>
                        <td><input class="button" type="submit" name="update" value="Update"></td>
                    </tr>
                </form>
            <?php
                    }
                }else {
                    echo '0 results'; 
                       }
            ?>
            
        </table>
        <?php 
            if(isset($_POST['update'])){
                $e_id = $_POST['e_id'];
                $e_fname = $_POST['e_fname'];
                $e_lname = $_POST['e_lname'];
                $designation = $_POST['designation'];
                $sex = $_POST['sex'];
                $block_no = $_POST['block_no'];
                $cage_no = $_POST['cage_no'];
                $phone= $_POST['phone'];


                $sql = "UPDATE employee SET E_FNAME = '$e_fname', E_LNAME= '$e_lname', DESIGNATION= '$designation',SEX= '$sex', BLOCK_NO= '$block_no', CAGE_NO= '$cage_no', PHONE='$phone' WHERE E_ID = '$e_id'" ;

                if(mysqli_query($conn, $sql)) {
                   header('Location: employeedb.php');
                }else {
                    echo "Error updating record" . mysqli_error($conn);
                }
            }
        ob_end_flush();
        ?>
    </body>
</html>