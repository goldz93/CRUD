<html>
<head>
    <title>Add Mobil</title>
</head>

<body bgcolor="pink">
    <a href="index.php">Home</a>
    <br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Merk</td>
                <td><input type="text" name="merk"></td>
            </tr>
            <tr> 
                <td>Transmisi</td>
                <td><input type="text" name="transmisi"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $merk = $_POST['merk'];
        $transmisi = $_POST['transmisi'];
        $harga = $_POST['harga'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO mobil(merk,transmisi,harga) VALUES('$merk','$transmisi','$harga')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View New Mobil</a>";
    }
    ?>
</body>
</html>