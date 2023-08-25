<?php

include("connexion.php");
$id=$_POST['id'];
    $nom = $_POST['nom'];
    $priorite=$_POST['priorite'];
$sql="select * from list";
$resultat=mysqli_query($connect,$sql);
$inserted=[];
$trouve=false;
while($row=mysqli_fetch_assoc($resultat)){
    array_push($inserted,$row['name']);
}
for($i=0;$i<count($inserted);$i++){
    if($inserted[$i]==trim($nom)){
        $trouve=true;
        break;
    }
}

    // pour l'insertion
    if(!$trouve){
        $sql="UPDATE list SET name = '$nom',priorite='$priorite' where id = '$id' ";
        $result=mysqli_query($connect,$sql);
        if($result){
            echo 1;
            }
        else{
            echo "no connection ";
        }
    }
   
?>