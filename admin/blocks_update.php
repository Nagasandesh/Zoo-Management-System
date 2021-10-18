<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>
    <body>
        <?php 
            $block_no = $_GET['BLOCK_NO'];
            $sql = "SELECT * FROM blocks WHERE BLOCK_NO ='$block_no'";
            $result = mysqli_query($conn, $sql);
        ?>
        <table border= "2px">
        <tr>
            <td>BLOCK_NO</td>
            <td>TOTAL_CAGES</td>
            <td>TOTAL_AREA in sqft</td>
            <td>A_TYPE</td>
            <td>UPDATE</td> 
        </tr>
        
            <?php
                if(mysqli_num_rows($result) > 0){
                    while($blocks = mysqli_fetch_assoc($result)){
            ?>
                <form action="" method="POST">
                    <tr>
                        
                        <td>
                            <input class="form" type="text" name="block_no" value="<?php echo $blocks['BLOCK_NO']; ?>" required placeholder="BLOCK_NO">
                        </td>
                        <td>
                            <input class="form" type="text" name="total_cages" value="<?php echo $blocks['TOTAL_CAGES']; ?>" required placeholder="TOTAL NO. OF CAGES">
                        </td>
                        <td>
                            <input class="form" type="text" name="total_area" value="<?php echo $blocks['TotalArea']; ?>" required placeholder="TOTAL_AREA in sqft">
                        </td>
                        <td>
                            <input class="form" type="text" name="a_type" value="<?php echo $blocks['A_TYPE']; ?>" required placeholder="A_TYPE">
                        </td>
                        <td><input class="button" type="submit" name="b_update" value="Update"></td>
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
            if(isset($_POST['b_update'])){
                $block_no = $_POST['block_no'];
                $total_cages = $_POST['total_cages'];
                $total_area = $_POST['total_area'];
                $a_type = $_POST['a_type'];


                $sql = "UPDATE blocks SET TOTAL_CAGES= '$total_cages', TotalArea= '$total_area', A_TYPE= '$a_type' WHERE BLOCK_NO= '$block_no'" ;

                if(mysqli_query($conn, $sql)) {
                   header('Location: blocksdb.php');
                }else {
                    echo "Error updating record" . mysqli_error($conn);
                }
            }
        ?>
    </body>
</html>