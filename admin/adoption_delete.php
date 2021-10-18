<?php
 require 'conn.php';
 $adopter_id = $_GET['ADOPTER_ID']; 
 $sql = "DELETE FROM adoption WHERE ADOPTER_ID='$adopter_id'"; 

if(mysqli_query($conn, $sql)) {
    header('Location: adoptiondb.php');
} else {
    echo "Error deleting record: " .mysqli_error($conn);
}
           
?>