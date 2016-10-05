$(document).ready(function() {
    $("#chatForm").on("submit", function (e) {
        e.preventDefault();// bloque le comportement d envoie de formulaire par la méthode normal
        var form = $(this);// on place le formulaire courant dans une variable
        var fd = new FormData(form[0]);// on cré un objet contenant les données du formulaire
        //execute l appel Ajax
        $.ajax(
            "ajax.php",
            {
                type:"POST",
                processData: false,// indique a jquery de ne pas traiter les données
                contentType: false,// indique a jquery de ne pas configurer le contenType
                data: fd,
                success: function(reponse){
                    var erreur=null;
                    switch (reponse){
                        case"1":
                            erreur="Le pseudo utilisé n existe pas ou a été ban!";
                            break;
                        case"2":
                            erreur="vous devez écrire un message";
                            break;

                    }
                    if(erreur !== null){
                        var message="<div class='alert alert-danger alert-dismissible'><button type=\"button \" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">" +
                            "<span aria-hidden=\"true\">&times;</span></button>"+ erreur +"</div>";
                        $('#main').prepend(message);
                    }
                }
            }
        )
    });
    var updateTimer = setInterval(function(){
        //TODO: Appel Ajax de maj de la zone de chat

    var lastId = $(".messageItem:last-child").data('id');

        $.ajax('ajax.php',{
            type: "get",
            data: {id: lastId},
            success: function(reponse){
                if(reponse!== null){
                    $('#chatZone').append(reponse);
                }
            }
        });
    },1000);



});