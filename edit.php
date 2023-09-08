<?php 
include 'conn.php';

$id = $_POST['id']; 
$name=$_POST['name'];
$date= $_POST['date'];
$time=$_POST['time'];            
           

$sql = "UPDATE task SET name='$name', date='$date', time='$time' WHERE id=$id";

if($conn->query($sql)===true){
    echo "<script>alert('Data Updated');</script>";
    header("Location: index.php");
}else{
    echo "Not Updated";
}



?>