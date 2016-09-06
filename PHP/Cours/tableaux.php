<?php
/**
 * Created by PhpStorm.
 * User: tiw
 * Date: 06/09/2016
 * Time: 11:04
 */

$mesNotesHistoires  = array(10,12.5,13,14,5.6,9,"ABS");
$mesNOtesMatch = array(17,18,14,19,17);
echo "<br>";
echo "<p>".$mesNotesHistoires[1]."</p>";
print_r($mesNotesHistoires);
var_dump($mesNotesHistoires);
echo "<br>";
$moyenne =  array_sum($mesNotesHistoires);
echo $moyenne/6;
echo "<br>";
$mesNotes = array($mesNotesHistoires,$mesNOtesMatch );
echo "<br>";
echo $mesNotes[0][2];

/*------------ARRAY HASH----------------*/
echo "<br>";
$utilisateur = array("nom"=>"ROUX","prénom"=>"Rémy","age"=>32,"ban"=> FALSE);

echo $utilisateur["nom"]." ".$utilisateur["prénom"]." a ".$utilisateur["age"];
echo "<br>";
$monTab = array();
$monTab[]= "foukoi";

$monTab["coucou"] = "banzai";
var_dump($monTab);
echo count($monTab);
echo "<br>";
echo "<h2> Notes d 'Histoire </h2>";
echo "<ul>";
echo "<li>".$mesNotesHistoires[0]."</li>";
echo "<li>".$mesNotesHistoires[1]."</li>";
echo "<li>".$mesNotesHistoires[2]."</li>";
echo "<li>".$mesNotesHistoires[3]."</li>";
echo "<li>".$mesNotesHistoires[4]."</li>";
echo "<li>".$mesNotesHistoires[5]."</li>";
echo "</ul>";
echo "<br>";
echo "<br>";
/*---------------LOOP ARRAY--------------------*/
echo "<h2> Notes d 'Histoire </h2>";
echo "<ul>";
foreach ($mesNotesHistoires as $key => $value){
echo '<li class=\'dqsdqs\'>'.$value."</li>";
}

echo "</ul>";
