<?php
 require 'conn.php';
 $e_id= $_GET['E_ID']; 
 $sql = "DELETE FROM employee WHERE E_ID='$e_id'"; 

if(mysqli_query($conn, $sql)) {
    header('Location: employeedb.php');
} else {
    echo "Error deleting record: " .mysqli_error($conn);
}
           
?>


