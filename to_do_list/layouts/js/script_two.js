function showdata(){//function pour faire : afficher le contenue de la base de donnes
    $.ajax({
        url: '..\\php\\show.php',
        type : 'post',
        success: function(result){
            $("#list").html(result);
            const input = document.getElementById('txt');
            const pr = document.getElementById('pr');
            input.value = '';
            pr.value='0';
        }
    });
}
$(document).on("click","#pl",function(){//function pour faire : ajouter un <li> dans une autre <li>
    id = $(this).data("id");
    element=$(this);
    $("#ajouter_sous_li").show(); 
    $("#close_sous_li").click(function(){
        $("#ajouter_sous_li").hide();
    })
    
})
$("#btn_sous_li").click(function(){
    nom=document.getElementById("txt_sous_li")
    console.log("nom", nom);
     if(nom.value.trim()!=''){
        $.ajax({
            url: '..\\php\\insertionSousList.php',
            type : 'post',
            data : {id : id ,name : nom.value },
            success: function(result){
                if(result==1){
                    showdata();
                    $("#ajouter_sous_li").hide();
                    nom.value = '';
                }
                else{
                    console.log(result);
                }
            }
        })
    }
    else{
        alert("erreur");
    } 
})