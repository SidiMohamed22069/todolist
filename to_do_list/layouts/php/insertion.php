<?php
include("connexion.php");
$txt = $_POST['txt'];
$pr=$_POST['pr'];
// pour la verification
$sql="select * from list";
$resultat=mysqli_query($connect,$sql);
$inserted=[];
$trouve=false;
while($row=mysqli_fetch_assoc($resultat)){
    array_push($inserted,$row['name']);
}
for($i=0;$i<count($inserted);$i++){
    if($inserted[$i]==trim($txt)){
        $trouve=true;
        break;
    }
}

    // pour l'insertion
    if(!$trouve){
        if(trim($txt) != '' && $pr>=0 && $pr<=10){
            $sql="insert into list (name,date,priorite) values ('$txt',CURRENT_DATE(),'$pr')";
        $result=mysqli_query($connect,$sql);
        if($result){
            echo 1;
            }
        else{
            echo "no connection {$sql}".mysqli_error($connect);
        }
            
        }
        else{
            ?>
            <script>alert("impossible on ne peut pas inserer un valeur vide")</script>
            <?php
        }
    }
?>