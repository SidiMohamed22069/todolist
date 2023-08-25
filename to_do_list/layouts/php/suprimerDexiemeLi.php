<?php
include("connexion.php");
    $valeur = $_POST['valeur'];
    $sql="delete from souslist where id = '$valeur' ";
    $result=mysqli_query($connect,$sql);
    if($result){
        echo 1;
        }
    else{
        echo "no connection {$sql}".mysqli_error($connect);
    }
?>