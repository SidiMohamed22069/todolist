<?php

include("connexion.php");
    $id = $_POST['id'];
    $response = array();
    $sql="select id,priorite , name from list where id = '$id' ";
    $result=mysqli_query($connect,$sql);
    $netije = array();
while ($row = mysqli_fetch_assoc($result)) {
    $netije['nom'] = $row['name'];
    $netije['priorite'] = $row['priorite'];
    $netije['id'] = $row['id'];

}
echo json_encode($netije);
?>