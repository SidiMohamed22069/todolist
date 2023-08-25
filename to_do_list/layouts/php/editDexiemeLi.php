<?php
include("connexion.php");
    $id = $_POST['id'];
    $response = array();
    $sql="select * from souslist where id = '$id' ";
    $result=mysqli_query($connect,$sql);
    $netije = array();
while ($row = mysqli_fetch_assoc($result)) {
    $netije['nom'] = $row['name'];

}
echo json_encode($netije);
?>