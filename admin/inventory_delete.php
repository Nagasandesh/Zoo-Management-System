<?php
 require 'conn.php';
 $a_id= $_GET['A_ID']; 
 $sql = "DELETE FROM inventory WHERE A_ID='$a_id'"; 

if(mysqli_query($conn, $sql)) {
    header('Location: inventorydb.php');
} else {
    echo "Error deleting record: " .mysqli_error($conn);
}
           
?>

