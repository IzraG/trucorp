<?php

$conn=new mysqli("db","root","secret","Trucorp");
if ($conn->connect_error) {
    die("Connection failed: \n" . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully! \n";
}

$rows = array();
$join = $conn->query("SELECT users.ID, users.Nama, users.Alamat, users.Jabatan FROM users");
while($row = mysqli_fetch_assoc($join)){
    $rows[] = $row;
}
?>

<!DOCTYPE html>
<html>

    <head>
    </head>


    <body>
    
    <?php $count = 0; 
    foreach($rows as $row):?>
        
        <?php $count = $count+ 1?>

    <?php endforeach;?>
    <?="Jumlah users: " . $count ?>

    </body>


</html> 