<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM mobil");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body bgcolor="pink">
<a href="add.php">Add New Mobil</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Merk</th> <th>Transmisi</th> <th>Harga</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['merk']."</td>";
        echo "<td>".$user_data['transmisi']."</td>";
        echo "<td>".$user_data['harga']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>