<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>
    <body>
        <?php 
            $adopter_id = $_GET['ADOPTER_ID'];
            $sql = "SELECT * FROM adoption WHERE ADOPTER_ID ='$adopter_id'";
            $result = mysqli_query($conn, $sql);
        ?>
        <table border= "2px">
        <tr>
            <td>ADOPTER_ID</td>
            <td>F_NAME</td>
            <td>L_NAME</td>
            <td>A_NAME</td>
            <td>TERM</td>
            <td>TIME_PERIOD</td>
            <td>AMOUNT</td>
            <td>UPDATE</td> 
        </tr>
        
            <?php
                if(mysqli_num_rows($result) > 0){

                    while($adoption = mysqli_fetch_assoc($result)){
            ?>
                <form action="" method="POST">
                    <tr>
                        <td>
                            <?php echo $adoption['ADOPTER_ID']; ?>
                            <!-- <input class="form" type="text" name="e_id" value="<?php echo $inventory['E_ID']; ?>" required placeholder="E_ID"> -->
                        </td>
                        <td>
                            <input class="form" type="text" name="f_name" value="<?php echo $adoption['F_NAME']; ?>" required placeholder="First Name">
                        </td>
                        <td>
                            <input class="form" type="text" name="l_name" value="<?php echo $adoption['L_NAME']; ?>" required placeholder="Last Name">
                        </td>
                        <td>
                            <input class="form" type="text" name="a_name" value="<?php echo $adoption['A_NAME']; ?>" required placeholder="Animal Name">
                        </td>
                        <td>
                            <input class="form" type="text" name="term" value="<?php echo $adoption['TERM']; ?>" required placeholder="TERM">
                        </td>
                        <td>
                            <input class="form" type="text" name="time_period" value="<?php echo $adoption['TIME_PERIOD']; ?>" required placeholder="TIME_PERIOD">
                        </td>
                        <td>
                            <input class="form" type="text" name="amount" value="<?php echo $adoption['AMOUNT']; ?>" required placeholder="AMOUNT">
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
                $adopter_id = $_POST['adopter_id'];
                $f_name = $_POST['f_name'];
                $l_name = $_POST['l_name'];
                $a_name = $_POST['a_name'];
                $term = $_POST['term'];
                $time_period = $_POST['time_period'];
                $amount = $_POST['amount'];
                

                $sql = "UPDATE adoption SET F_NAME = '$f_name', L_NAME= '$l_name', A_NAME= '$a_name', TERM= '$term', TIME_PERIOD= '$time_period', AMOUNT= '$amount' WHERE ADOPTER_ID='$adopter_id'" ;

                if(mysqli_query($conn, $sql)) {
                   header('Location: adoptiondb.php');
                }else {
                    echo "Error updating record" . mysqli_error($conn);
                }
            }
        ?>
    </body>
</html>