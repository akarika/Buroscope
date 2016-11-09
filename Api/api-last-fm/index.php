<?php


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

$inputArtist = array();
if (!empty($_GET['inputArtist'])) {
    $url = "http://ws.audioscrobbler.com/2.0/?method=artist.getsimilar&artist=".urlencode($_GET['inputArtist'])."&limit=".$_GET['limit']."&api_key=4edf9859942eacfdf6e9323806058c7e&format=json&";
    $data = getUrl($url);
//on transforme notre résultat JSON en objet php , avec true on obtient un tableau associatif au lieu dun objet
    $data = json_decode($data, true);
    if (!isset($data['error'])){
        $inputArtist = $data['similarartists']['artist'];
    }else{
        $erreur = $data;
    }

}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Api last fm</title>
    <style>
        h2 {
            font-size: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <div id="row">
        <?php echo isset($_GET['inputArtist'])?"<h2>Artistes similaire à \"".$_GET['inputArtist']."\"</h2>" :"<h2>GooOOOOoooO</h2>" ?></h2>
        <form class="form-inline" method="get" action="index.php">
            <div class="form-group">
                <label  for="inputArtist">Artiste</label>
                <input type="text" name="inputArtist" class="form-control" id="inputArtist" placeholder="Artiste...">
                <label  for="limit">Limit recherche</label>
                <select  name="limit" class="form-control" id="limit">
                    <?php for ($i=1;$i<=10;$i++):?>
                    <option value="<?php echo $i?>"><?php echo $i?></option>
                    <?php endfor;?>
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>
    </div>
    <div id="artist" class="row">
        <?php if (isset($erreur['error'])): ?>
            <div class="alert alert-danger">
                <?php echo $erreur['message'];?>
            </div>
        <?php else: ?>
            <?php
            foreach ($inputArtist as $key => $value) :?>
                <div class="col-sm-3">
                    <img class="img-responsive artist" src="<?php echo $value['image'][3]['#text'] ?>" alt="">
                    <h2><a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['name']; ?></a></h2>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<script src="../api-weather/js/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>