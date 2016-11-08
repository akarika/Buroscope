<?php


/*;

accés pas php
*/
// on initialise la ressource  curl (ouvre le tunnel)
function getUrl($url)
{
    $ch = curl_init();
// on definit l url a contacter
    curl_setopt($ch, CURLOPT_URL, $url);
// on definit le type de retour
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//TRUE pour inclure l'en-tête dans la valeur de retour.	header de la réponse
    curl_setopt($ch, CURLOPT_HEADER, false);
//on execute la requete => $exe contient la reponse
    $exe = curl_exec($ch);
//ON R2CUP2RE LE STATUS HTTP de la réponse
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

//on ferme la ressource
    curl_close($ch);
//on retourne les données si la requete est réussit HHTP>= 200 et<300
    return ($httpcode >= 200 && $httpcode < 300) ? $exe : false;
}

$data = getUrl("http://ws.audioscrobbler.com/2.0/?method=artist.getsimilar&artist=usher&limit=10&api_key=4edf9859942eacfdf6e9323806058c7e&format=json");
$data = json_decode($data);
$name = $data->similarartists->artist;




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Api last fm</title>
</head>
<body>
<div class="container">
    <div id="artist" class="row">
        <?php
        foreach ($name as $key => $value) :?>
            <div class="col-sm-3">

                
            </div>
           <?php echo "<p>Artiste : $value->name</p>";?>
        <?php endforeach;?>
    </div>
</div>
<script src="../api-weather/js/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>