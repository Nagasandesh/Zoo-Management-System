<?php 
 ob_start();
require 'conn.php'; ?>
<!DOCTYPE html>
<html>
    <body>
        <?php 
            $a_id = $_GET['A_ID'];
            $sql = "SELECT * FROM animals WHERE A_ID ='$a_id'";
            $result = mysqli_query($conn, $sql);
        ?>
        <table border= "2px">
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
            <td>UPDATE</td> 
        </tr>
        
            <?php
                if(mysqli_num_rows($result) > 0){

                    while($animal = mysqli_fetch_assoc($result)){
            ?>
                <form action="" method="POST">
                    <tr>
                        <td>
                            <?php echo $animal['A_ID']; ?>
                            <!-- <input class="form" type="text" name="e_id" value="<?php echo $animal['E_ID']; ?>" required placeholder="E_ID"> -->
                        </td>
                        <td>
                            <input class="form" type="text" name="a_name" value="<?php echo $animal['A_NAME']; ?>" required placeholder="Animal Name">
                        </td>
                        <td>
                            <input class="form" type="text" name="scientific_name" value="<?php echo $animal['SCIENTIFIC_NAME']; ?>" required placeholder="SCIENTIFIC Name">
                        </td>
                        <td>
                            <input class="form" type="text" name="a_type" value="<?php echo $animal['A_TYPE']; ?>" required placeholder="A_TYPE">
                        </td>
                        <td>
                            <input class="form" type="text" name="block_no" value="<?php echo $animal['BLOCK_NO']; ?>" required placeholder="BLOCK_NO">
                        </td>
                        <td>
                            <input class="form" type="text" name="cage_no" value="<?php echo $animal['CAGE_NO']; ?>" required placeholder="CAGE_NO">
                        </td>
                        <td>
                            <input class="form" type="text" name="gender" value="<?php echo $animal['GENDER']; ?>" required placeholder="GENDER">
                        </td>
                        <td>
                            <!-- <textarea name="description" class="form-control input-sm" id="bio" cols="30" rows="10" placeholder="DESCRIPTION" value="<?php echo $animal['DESCRIPTION']; ?>" required></textarea> -->
                            <input class="form" type="text" name="description"  style="height:500px" value="<?php echo $animal['DESCRIPTION']; ?>" required placeholder="DESCRIPTION" >
                        </td>
                        <td>
                            <label for="doj">DATE OF JOINING:</label>
                            <input type="date" class="form input-sm" name="doj" id="doj" value="<?php echo $animal['DOJ']; ?>" required>
                        <!-- <input class="form" type="text" name="doj" value="<?php echo $animal['DOJ']; ?>" required placeholder="DOJ"> -->
                        </td>
                        <td>
                            <label for="feed_time">FEED TIME:</label>
                            <input type="time" class="form input-sm" id="feed_time" name="feed_time" value="<?php echo $animal['FEED_TIME']; ?>" required>
                        <!-- <input class="form" type="text" name="feed_time" value="<?php echo $animal['FEED_TIME']; ?>" required placeholder="FEED_TIME"> -->
                        </td>
                        <td><input class="button" type="submit" name="animal_update" value="Update"></td>
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
            if(isset($_POST['animal_update'])){
                 $a_id = $_POST['a_id'];
                $a_name = $_POST['a_name'];
                $scientific_name = $_POST['scientific_name'];
                $a_type = $_POST['a_type'];
                $block_no = $_POST['block_no'];
                $cage_no = $_POST['cage_no'];
                $gender = $_POST['gender'];
                $description= $_POST['description'];
                $doj= $_POST['doj'];
                $feed_time = $_POST['feed_time'];
                

                $sql = "UPDATE animals SET A_NAME= '$a_name', SCIENTIFIC_NAME= '$scientific_name', A_TYPE= '$a_type', BLOCK_NO= '$block_no', CAGE_NO= '$cage_no', GENDER= '$gender', DESCRIPTION= '$description', DOJ='$doj', FEED_TIME= '$feed_time'  WHERE A_ID= '$a_id'" ;

                if(mysqli_query($conn, $sql)) {
                   header('Location: animal_infodb.php');
                }else {
                    echo "Error updating record" . mysqli_error($conn);
                }
            }
         ob_end_flush();
        ?>
    </body>
</html>