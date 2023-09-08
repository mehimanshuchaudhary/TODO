<?php 
include "conn.php";
$id = $_GET['id'];
$sql = "SELECT * FROM task WHERE id=$id";
$result=$conn->query($sql);
$row = $result->fetch_array();
?>

<form method="POST" action="edit.php">
        <label for="name">name</label>
        <input type="text" name="name" value="<?php echo $row['name'];?>">
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        <label for="Date">Date</label>
        <input type="date" name="date" value="<?php echo $row['date'];?>">
        <label for="Time">Time</label>
        <input type="time" name="time" value="<?php echo $row['time'];?>">
        <input type="submit" name="submit" value="submit">
    </form>