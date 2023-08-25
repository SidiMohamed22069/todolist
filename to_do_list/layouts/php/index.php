<?php 
include("..\\templates\\footer.php");
include("..\\templates\\header.php"); 
?>
    <div class="back">
        <div class="container">
            <h2>TO_DO LIST</h2>
            <div class="input">
                <input type="text" placeholder="tappez ici" id="txt" name="jk">
                <input type="number" min="0" max="10" step="1" class="priorite" id="pr" value="0">
                <button type="button" id="btn">ajouter</button>
            </div>
            <ul id="list">
            </ul>
        </div>
        <button class="historique" id="historique_btn">voir historique</button>

    </div>
<div id="popup_container">
        <div id="close">
            <span>close</span>
        </div>
        <input type="text" placeholder="tappez ici" id="txtupdate">
        <input type="number" min="0" max="10" step="1" id="prioriteupdate">
        <button class="update-btn" id="updatebtn">UPDATE</button>
    </div>
    <div id="popup_container_inside">
        <div id="close_inside">
            <span>close</span>
        </div>
        <input type="text" placeholder="tappez ici" id="txtupdate_inside">
        <button class="update-btn" id="updatebtn_inside">UPDATE</button>
    </div>
    <div id="historique">
        <div id="close_historique">
            <span>close</span>
        </div>
        <ul id="his">
        </ul>
    </div>
    <div id="ajouter_sous_li">
        <div id="close_sous_li">
            <span>close</span>
        </div>
        <input type="text" placeholder="tappez ici" id="txt_sous_li">
        <button type="button" id="btn_sous_li">ajouter</button>
</div>