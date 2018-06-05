<?php
function redirect($location){

                header("Location: $location");
            }
            
$database = "crud";
$conn= mysqli_connect('localhost', 'root', '',$database);
$delete_id = $_GET['delete'];

$delete_query = "DELETE  FROM alumni_records WHERE id = '$delete_id'";

$Execute = mysqli_query($conn,$delete_query);

if ($Execute){
    
    redirect("delete_from_db.php?deleted=success");
}


?>