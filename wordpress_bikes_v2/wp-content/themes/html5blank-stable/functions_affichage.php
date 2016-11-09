<?php
//fonction d'affichage d'un produit en zone bestseller
function affiche_bestseller($bestseller, $best){

//on initialise la variable global $post
$bestseller->the_post();
	
$produit="<article id=\"bestseller\">\n";
if(isset($best))
  {
   $best=" best";
  }	
	$produit.="<div class=\"bestseller_g" . $best . "\">\n";
		$produit.=get_the_post_thumbnail($bestseller->ID, 'medium');
	$produit.="</div>\n";
	
	$produit.="<div class=\"bestseller_d\">\n";
		$produit.="<h2>" . get_the_title() . "</h2>\n";
		$produit.="<p class=\"designer\">" . get_field("designer") . "</p>\n";	
		$produit.="<p class=\"prix\">" . get_field("prix") . " €</p>\n";	
		$produit.="<p class=\"rating\">Rating: ";
		
		for($i=0;$i<get_field("notation");$i++)
			{
			$produit.="<span class=\"dashicons dashicons-star-filled\"></span>\n";
			}
			
		$produit.="</p>\n";
		$produit.="<a href=\"" . get_the_permalink(23) . "\">Ask the Customer a Question</a>\n";
	$produit.="</div>\n";		

$produit.="</article>\n";     

return $produit;
}

function extrait($chaine_entrante, $nb_mots){
$chaine_sortante=explode(" ",$chaine_entrante);
if(sizeof($chaine_sortante)<$nb_mots)
  {
  $nb_mots=sizeof($chaine_sortante);
  }
  
//$chaine_a_afficher="";
$chaine_a_afficher=join(" ",array_slice($chaine_sortante, 0, $nb_mots));  

// for($i=0;$i<$nb_mots;$i++)
   // {
   // $chaine_a_afficher.=$chaine_sortante[$i] . " ";
   // } 
// $chaine_a_afficher.="...";

return $chaine_a_afficher;
}


?>