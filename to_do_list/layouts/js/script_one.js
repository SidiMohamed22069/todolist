$(document).ready(function(){

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
    function showhistorique(){
        $.ajax({
            url: '..\\php\\showhistorique.php',
            type : 'post',
            success: function(result){
                $("#his").html(result);
            }
        });
    }

    showdata();

    $("#btn").on("click",function(e) { //function pour faire : inserer dans la base de donnes
        e.preventDefault();
        txt = $("#txt").val();
        pr = $("#pr").val();
        $.ajax({
            url: '..\\php\\insertion.php',
            type : 'post',
            data : {txt: txt ,pr:pr},
            success: function(result){
                if( result == 1){
                    showdata();
                }
                else{
                   console.log(result);
                }
            }

        });
    });
    $(document).on("click","#delete",function(){//function pour faire : supprimer un <li>
        id = $(this).data("id");
        element=$(this);
        $.ajax({
            url: '..\\php\\suprimer.php',
            type : 'post',
            data : {id: id },
            success: function(result){
                if(result == 1){
                    $(element).closest("li").fadeOut();
                    showdata();
                }
                else{
                    alert("supprimez les sous listes d'abord ")
                 }
            }

        });
    })
    $(document).on("click","#delete_inside",function(){//function pour faire : supprimer la dexieme <li>
        valeur = $(this).data("id");
        element=$(this);
        $.ajax({
            url: '..\\php\\suprimerDexiemeLi.php',
            type : 'post',
            data : {valeur: valeur },
            success: function(result){
                if(result == 1){
                    showdata();
                }
                else{
                    console.log(result);
                 }
            }

        });
    })

    $(document).on("click","#edit",function(){//function pour faire : afficher le pop-up et modifier un <li>
        id = $(this).data("id");
        element=$(this);
        $.ajax({
            url: '..\\php\\edit.php',
            type : 'post',
            data : {id: id },
            dataType: "json",
            success: function(result){
                ancientN=result.nom;
                ancientP=result.priorite;
                id=result.id;
                var inputElement = document.getElementById("txtupdate");
                inputElement.value = ancientN;
                var inputElement = document.getElementById("prioriteupdate");
                inputElement.value = ancientP;
                $("#popup_container").show();
                $("#close").click(function(){
                    $("#popup_container").hide();
                })
                $("#updatebtn").click(function(){
                    nom=document.getElementById("txtupdate")
                    priorite=document.getElementById("prioriteupdate")
                    if(nom.value.trim()!='' && priorite.value>=0 && priorite.value<=10){
                        $.ajax({
                            url: '..\\php\\update.php',
                            type : 'post',
                            data : {id: id , nom : nom.value , priorite :priorite.value },
                            success: function(result){
                                if(result == 1){
                                    showdata();
                                    $("#popup_container").hide();
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
            }

        });
    })

    $(document).on("click","#edit_inside",function(){//function pour faire : afficher le pop-up et modifier la dexieme <li>
        id = $(this).data("id");
        element=$(this);
        $.ajax({
            url: '..\\php\\editDexiemeLi.php',
            type : 'post',
            data : {id: id },
            dataType: "json",
            success: function(result){
                ancientN=result.nom;
                var inputElement = document.getElementById("txtupdate_inside");
                inputElement.value = ancientN;
                $("#popup_container_inside").show();
                $("#close_inside").click(function(){
                    $("#popup_container_inside").hide();
                })
                $("#updatebtn_inside").click(function(){
                    nom=document.getElementById("txtupdate_inside")
                        $.ajax({
                            url: '..\\php\\updateDexiemeLi.php',
                            type : 'post',
                            data : {id: id , s : nom.value },
                            success: function(result){
                                if(result == 1){
                                    showdata();
                                    $("#popup_container_inside").hide();
                                }
                                else{
                                    console.log(result);
                                 }
                            }
                        })
                })
            }
        })
        })
                $(document).on("click","#historique_btn",function(){//function pour faire : afficher le pop-up de l'historoque
            $.ajax({
                url: '..\\php\\historique.php',
                dataType: "json",
                success: function(result){
                    $("#historique").show();
                    $("#close_historique").click(function(){
                        $("#historique").hide();
                    })
                    showhistorique();
                }
            })
            })
            $(document).on("click","#Boutondel",function(){//function pour faire : supprimer le <li> finalement
                id = $(this).data("id");
                $.ajax({
                    url: '..\\php\\suprimerhistorique.php',
                    type : 'post',
                    data : {id: id },
                    success: function(result){
                        if(result == 1){
                            showhistorique();
                        }
                        else{
                            alert("error")
                            console.log(result);
                         }
                    }
                })
            })
            $(document).on("click","#Bouton",function(){//function pour faire : remettre le <li> dans la liste
                id = $(this).data("id");
                $.ajax({
                    url: '..\\php\\retourhistorique.php',
                    type : 'post',
                    data : {id: id },
                    success: function(result){
                        if(result == 1){
                            showdata();
                            showhistorique();
                        }
                        else{
                            alert("error")
                            console.log(result);
                        }
                    }
                })
            })
});