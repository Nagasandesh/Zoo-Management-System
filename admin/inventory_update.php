<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>
    <body>
        <?php 
            $aname = $_GET['A_NAME'];
            $sql = "SELECT * FROM inventory WHERE A_NAME = '$aname'";
            $result = mysqli_query($conn, $sql);
        ?>
        <table border= "2px">
        <tr>
            <td>A_ID</td>
            <td>A_NAME</td>
            <td>STATUS</td>
            <td>BIRTHS</td>
            <td>ACQUISITIONS</td>
            <td>DEATHS</td>
            <td>DISPOSALS</td>
            <td>TOTAL_COUNT</td>
            <td>UPDATE</td> 
        </tr>
        
            <?php
                if(mysqli_num_rows($result) > 0){

                    while($inventory = mysqli_fetch_assoc($result)){
            ?>
                <form action="" method="POST">
                    <tr>
                        <td>
                        <input class="form" type="text" name="a_id" value="<?php echo $inventory['A_ID']; ?>" required placeholder="A_ID">
                        </td>
                        <td>
                        <input class="form" type="text" name="aname" value="<?php echo $inventory['A_NAME']; ?>" required placeholder="NAME">
                        </td>
                        <td>
                        <input class="form" type="text" name="status" style="height:auto" value="<?php echo $inventory['STATUS']; ?>" required placeholder="Status" >
                        </td>
                        <td>
                        <input class="form" type="text" name="births" value="<?php echo $inventory['BIRTH']; ?>" required placeholder="BIRTHS">
                        </td>
                        <td>
                        <input class="form" type="text" name="acquisitions" value="<?php echo $inventory['ACQUISITIONS']; ?>" required placeholder="ACQUISITIONS">
                        </td>
                        <td>
                        <input class="form" type="text" name="deaths" value="<?php echo $inventory['DEATH']; ?>" required placeholder="DEATHS">
                        </td>
                        <td>
                        <input class="form" type="text" name="disposals" value="<?php echo $inventory['DISPOSALS']; ?>" required placeholder="DISPOSALS">
                        </td>
                        <td>
                        <input class="form" type="text" name="total_count" value="<?php echo $inventory['TOTAL_COUNT']; ?>" required placeholder="TOTAL_COUNT">
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
                $aname = $_POST['aname'];
                $status = $_POST['status'];
                $births = $_POST['births'];
                $acquisitions = $_POST['acquisitions'];
                $deaths = $_POST['deaths'];
                $disposals= $_POST['disposals'];
                $total_count = $_POST['total_count'];
            
                $sql = "UPDATE inventory SET A_ID = '$a_id',  STATUS = '$status', BIRTH= '$births', ACQUISITIONS= '$acquisitions', DEATH= '$deaths', DISPOSALS= '$disposals', TOTAL_COUNT= '$total_count' WHERE A_NAME = '$aname'" ;

                if(mysqli_query($conn, $sql)) {
                   header('Location: inventorydb.php');
                }else {
                    echo "Error updating record" . mysqli_error($conn);
                }
            }
        ?>
    </body>
</html>