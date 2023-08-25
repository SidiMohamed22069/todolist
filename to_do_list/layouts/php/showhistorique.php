<?php
include("connexion.php");
$sql='SELECT * FROM historique';
    $result=mysqli_query($connect,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            ?> 
            <li><p><?php echo $row['name']; ?></p><button id="Bouton" data-id="<?php echo $row['id'];  ?>"><i class="fa-solid fa-reply"></i></button><button id="Boutondel" data-id="<?php echo $row['id'];  ?>"><i class="fa-solid fa-trash"></i></button></li>
        <?php
        }}
?>