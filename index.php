<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- <body style="background-image: url(/axciomLogo.jfif); background-size: cover; background-repeat: no-repeat;"> -->
<style>
    /* Style the table */
    table {
      width: 100%;
      border-collapse: collapse;
      font-family: Arial, sans-serif;
    }

    /* Style table headers */
    th {
      background-color: #f2f2f2;
    }

    /* Style table rows */
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    /* Style table cells */
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    /* Hover effect on table rows */
    tr:hover {
      background-color: #ccc;
    }
  </style>

    <body>
<h1>Task To Perform</h1>
    <div>
    <form method="POST" action="">
        <label for="name">name</label>
        <input type="text" name="name" value="">
        <label for="Date">Date</label>
        <input type="date" name="date" value="">
        <label for="Time">Time</label>
        <input type="time" name="time" value="">
        <input type="submit" name="submit" value="submit">
    </form>
    </div>
  
    <?php
    if(isset($_POST['submit']))
    {

include "conn.php";

$name=$_POST['name'];
$date= $_POST['date'];
$time=$_POST['time'];

$sqlquery = "INSERT INTO task (name,date,time ) VALUES
	('$name', '$date', '$time')";


if ($conn->query($sqlquery) === TRUE) {
	echo " record inserted successfully";
} else {
	echo "Error: " . $sqlquery . "<br>" . $conn->error;
}
}
?>
    <div>
        <table style="border: 1px solid black;border-collapse: collapse;width: 100%;">
            <tr>
                <th>S.no</th>
                <th>Task Name</th>
                <th>Date</th>
                <th>time</th>
                <th>Action</th>
            </tr>
            <?php 
            include "conn.php";
            
            $sql = "SELECT * FROM task";
            $result=$conn->query($sql);
            while($row = $result->fetch_array()){
                
            ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td><a href="editform.php?id=<?php echo $row['id'] ?>">Edit</a>&nbsp;&nbsp;<a href="dlt.php?id=<?php echo $row['id'] ?>">Dlt</a></td>
            </tr>

            <?php } ?> 

        </table>
    </div>
</body>
</html>