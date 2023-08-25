<?php
include("connexion.php");

$id = $_POST['id'];

$sql="select * from historique where id = '$id' ";
        $result=mysqli_query($connect,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $name=$row['name'];
            $date=$row['date'];
            $priorite=$row['priorite'];
        }
        if($result){
            $sql="insert into list (name,date,priorite) values ('$name','$date','$priorite')";
            $result=mysqli_query($connect,$sql);
            if($result){
                $sql="delete from historique where id = '$id' ";
                $result=mysqli_query($connect,$sql);
                if($result){
                    echo 1;
                }
                else{
                    echo "no connection {$sql}".mysqli_error($connect);
                }
            }
            else{
                echo "no connection {$sql}".mysqli_error($connect);
            }
        }
        else{
            echo "no connection {$sql}".mysqli_error($connect);
        }
?>