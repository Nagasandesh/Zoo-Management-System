<?php
 require 'conn.php';
 $block_no = $_GET['BLOCK_NO'];
 $sql = "DELETE FROM blocks WHERE BLOCK_NO='$block_no'"; 

if(mysqli_query($conn, $sql)) {
    header('Location: blocksdb.php');
} else {
    echo "Error deleting record: " .mysqli_error($conn);
}
           
?>