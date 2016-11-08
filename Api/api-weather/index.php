<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php


/*;

accés pas php
*/
$ch =curl_init();
curl_setopt($ch, CURLOPT_URL, "http://api.wunderground.com/api/5164c04c467585bf/forecast/geolookup/conditions/q/FR/Rennes.json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER, false);
$exe = curl_exec($ch);
curl_close($ch);
$data = json_decode($exe,true);
echo $data->location->city;
var_dump($data);
?>
<div id="meteo">

</div>
<!--<script src="js/jquery.js"></script>
<script src="js/meteo.js"></script>-->
</body>
</html>