<?php

include("connexion.php");
    $s=$_POST['s'];
    $id=$_POST['id'];
    $sql="UPDATE souslist SET name = '$s' where id='$id'";
    $result=mysqli_query($connect,$sql);
    if($result){
        echo 1;
        }
    else{
        echo "no connection ";
    }
?>