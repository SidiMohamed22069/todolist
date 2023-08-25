<?php
include("connexion.php");
$sql='SELECT * FROM list ORDER BY priorite ASC';
    $result=mysqli_query($connect,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            ?>
            
            <li  id="<?php echo $row['id']; ?>"><p><?php echo $row['name']; ?></p><span class="date"><?php echo $row['date']; ?></span><button class="plus" id="pl" data-id="<?php echo $row['id'];  ?>"><i class="fa-solid fa-plus"></i></button><button class="edit" id="edit" data-id="<?php echo $row['id'];  ?>"><i class="fa-solid fa-pen-to-square"></i></button><button id="delete" data-id="<?php echo $row['id'];  ?>"><i class="fa-solid fa-trash"></i></button>
    <ul class="ul_inside">
    <?php
            $sq='SELECT * FROM souslist where list_id='.$row["id"].'';
            $resul=mysqli_query($connect,$sq);
            if($resul){
                while($ro=mysqli_fetch_assoc($resul)){
                    
                        ?>
                    <li><p><?php echo $ro['name']; ?></p><button class="edit" id="edit_inside" data-id="<?php echo $ro['id'];  ?>"><i class="fa-solid fa-pen-to-square"></i></button><button id="delete_inside" data-id="<?php echo $ro['id'];  ?>"><i class="fa-solid fa-trash"></i></button>
                    
        <?php
                }}
        ?>
        </ul>
        </li>
        <?php
        
        }}
?>
<script src="..\js\script_two.js"></script>