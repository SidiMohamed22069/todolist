<?php
include("connexion.php");

$id = $_POST['id'];
$sql="delete from historique where id = '$id' ";
    $result=mysqli_query($connect,$sql);
if($result){
        echo 1;
    }
    else{
        echo "no connection {$sql}".mysqli_error($connect);
    }
?>