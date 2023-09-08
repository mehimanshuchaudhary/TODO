<?php 
include 'conn.php';

$id = $_GET['id'];            
           

$sql = "DELETE FROM task WHERE id=$id";

if($conn->query($sql)===true){
    echo "<script>alert('Data Delete');</script>";
    header("Location: index.php");
}else{
    echo "Not Updated";
}



?>