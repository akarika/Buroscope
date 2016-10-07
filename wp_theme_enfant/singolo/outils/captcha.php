<?php

//Le nombre de caracteres
 $ncarac =4;
 //Le nombre de lignes
 $nlignes =6;
 //Les caractères qui seront utilises
 $carac = array('2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'm', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z','M');
 $nca = count($carac);//On determine le nombre de lettres possible: 26
 //Police de caractere a utiliser
 $font = 'Adler.ttf';
 //On determine les tailles de limage
 $x = $ncarac*30+20;
 $y = 40;
 //On cree limage
 $img = imagecreatetruecolor($x,$y);
 
//pour rendre le fond transparent
imagealphablending($img, false);
imagefill($img,0,0,0x7fff0000);
imagesavealpha($img, true);

/*pour attribuer une couleur spécifique
$fond_captcha=imagecolorallocate($img,255,255,255);
//On remplit l'image avec du blanc
imagefill($img,0,0,$fond_captcha);
*/


 //On ajoute les caracteres
 $chaine = "";
 for($i=1;$i<=$ncarac;$i++)//On ajoute $ncarac caracteres
 {
         $c = $carac[rand(0,($nca-1))];//Le nouveau caractere sera choisi aleatoirement
         imagettftext($img, 25, rand(-10,10), (($i-1)*30)+5, 30, imagecolorallocate($img, rand(0,100), rand(0,100), rand(0,100)),$font, $c);//On ajoute le caractere sur limage
         $chaine .= $c;//On ajoute le nouveau caractere a la chaine
 }
 //On ajoute les lignes
 for($i=1;$i<=$nlignes;$i++)//On ajoute "$nlignes" lignes
 {
         imagesetthickness($img,rand(1,2));//On specifie lepaisseur de la ligne
         imageline($img,rand(0,$x),rand(0,$y),rand(0,$x),rand(0,$y), imagecolorallocate($img, rand(0,100), rand(0,100), rand(0,100)));//On ajoute la ligne
 }
 //On stoque la chaine de caractere dans les sessions
 session_start();
 $_SESSION['captcha'] = $chaine;
 //On affiche l'image finale
 header('Content-type: image/png');
 imagepng($img);
 

?>
