<?php

use LDAP\Result;

include("connexion.php");
    $array=[];
    $sql="select * from historique";
    $result=mysqli_query($connect,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $array[] = $row['name'];
    }
    echo json_encode($array);
?>