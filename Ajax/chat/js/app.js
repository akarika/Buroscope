$(document).ready(function(){
    $.ajax(
        'ajax.php',
        {
            method:'POST',
            data:{
                action:'addMessage',
                pseudo:'',
                message:'',

            }
        }
    );
});