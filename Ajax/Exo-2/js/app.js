$(document).ready(function () {

    $("#addArticle").on('click', function (e) {
        var offset = $('#actus>div').length;
        console.log(offset);

        $.get("index.php", //url de notre fichier
            {page: "addArticle", decalage:offset},// paramétre a passer au fichier php
            function (data) {
                $('#actus').append(data);
            });
    });
});