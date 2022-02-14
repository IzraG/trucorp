<?php

$conn=new mysqli("db","root","secret","Trucorp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
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
    <link href="style.css" rel="stylesheet">
    </head>


    <body>

    <table class="tabel">
   
        <tr>
            <th>ID</th>
            <th >Nama</th>
            <th >Alamat</th>
            <th >Jabatan</th>
        </tr>
    
    <?php $count = 1; 
    foreach($rows as $row):?>
        <?php $count = $count % 2?>
        <tr <?php if ($count == 0):?> style="background-color: lightgray" <?php ; elseif($count==1):?> style="background-color: white"<?php endif;?> >
            <td ><?=$row['ID'] ?></td>
            <td ><?=$row['Nama'] ?></td>
            <td ><?=$row['Alamat'] ?></td>
            <td ><?=$row['Jabatan'] ?></td>
        </tr>
        <?php $count = $count+ 1?>

    <?php endforeach;?>
    </table>
    

    </body>


</html> 