<!--------------------PORTFOLIO------------------------------>
<?php
if(isset($_GET['filtre']))
	{
	//on calcule le CSS pour laisser le bouton activé
	$bouton_active[$_GET['filtre']]="active";
	
	//on calcule le lien vers le fichier correspondant
	$fichier="pages/portfolio_".$_GET['filtre'].".html";
	}
else
   {
   //$bouton_active['all']="active";
   //on affiche par défaut le portfolio_all.html 
   //si l'internaute ne choisi pas de filtre 
   $fichier="pages/portfolio_all.html";
   }
?>

<section id="portfolio">
	<h1>Portfolio</h1>
	<p>Maiores nisl feugiat repellat quisque, quis ab dis! Excepteur iaculis leo rem nunc ullamcorper porttitor!</p>
	<div id="choix" >
		<a class="bouton <?php if(isset($bouton_active['all'])){echo $bouton_active['all'];} ?>" href="index.php?page=portfolio&filtre=all#portfolio">All</a>
		<a class="bouton <?php if(isset($bouton_active['webdesign'])){echo $bouton_active['webdesign'];} ?>" href="index.php?page=portfolio&filtre=webdesign#portfolio">Web Design</a>
		<a class="bouton <?php if(isset($bouton_active['graphicdesign'])){echo $bouton_active['graphicdesign'];} ?>" href="index.php?page=portfolio&filtre=graphicdesign#portfolio">Graphic Design</a>
		<a class="bouton <?php if(isset($bouton_active['artwork'])){echo $bouton_active['artwork'];} ?>" href="index.php?page=portfolio&filtre=artwork#portfolio">Artwork</a>
	</div>
	<?php include($fichier); ?>
</section>