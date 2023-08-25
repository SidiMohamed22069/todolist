<?php
include("connexion.php");
$name = $_POST['name'];
$id=$_POST['id'];
if(trim($name)!=''){
    $sql="insert into souslist (name,list_id) values ('$name','$id')";
    $result=mysqli_query($connect,$sql);
    if($result){
        echo 1;
        }
    else{
            echo "no connection {$sql}".mysqli_error($connect);
        }
    }

?>