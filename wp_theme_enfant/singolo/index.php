
<!DOCTYPE html>
<html>
	<head>
		<title>Singolo</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
				
		<link href="css/style-singolo.css" rel="stylesheet" type="text/css" />
		<link href="css/formulaire.css" rel="stylesheet" type="text/css" >		

		<link href="css/responsive-singolo.css" rel="stylesheet" type="text/css" >
		<meta name="viewport" content="width=device-width,target-densitydpi=160dpi,initial-scale=1.0"/>
		
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		

		<link href="images/####.png" rel="icon" type="image/png" />

	</head>
	<body>
	<div id="conteneur">
		
<!------------------HEADER-------------------------------------->
		<header>
			<div id="menuTop">
				<figure>
					<h1 id="logo">
						<a href="index.php">SINGOLO<span>&#42;</span></a>
						<?php
						echo date("d/m/y");
						?>
					</h1>
				</figure>
				
				<nav>
					<div id="menu">
						<a href="#">
							<ul>
								<li><a href="index.php">HOME</a></li>
								<li><a href="index.php?page=services">SERVICES</a></li>								
								<li><a href="index.php?page=portfolio">PORTFOLIO</a></li>
								<li><a href="index.php?page=aboutus">ABOUT</a></li>
								<li><a href="#">CONTACT</a></li>
							</ul>
						</a>
					</div>	
					<!--menu hamburger qui apparait à partir de 768px-->
					<a id="menu_responsive" href="#menu"><span class="fa fa-bars"></span></a>					
				</nav>
			</div>
			<div id="slider">
				<img src="images/slider.png" alt="Slider" />
			</div>
		</header>
		

		<?php
		//permet de rendre possible l'usage des
		//variables de session
		session_start();
		//si la  variable page est exploitable par php
		if(isset($_GET['page']))
			{
			if($_GET['page']=="portfolio")
			  {
			  include("pages/portfolio.php");
			  }
			else
			  {
			  include("pages/".$_GET['page'].".html");
			  }
			}
		 else
			{
			include("pages/services.html"); 
			}
		//methode POST pour traiter les données du formulaire
		//si qq appuie sur le bouton envoyer
		if(isset($_POST['submit']))
			{
			//si l'internaute n'a pas mis de captcha
			if(empty($_POST['captcha']))
				{
				$resume="<h2>Ton captcha est vide</h2>";
				}
			//si l'internaute a mal recopié le code
			elseif($_POST['captcha']!=$_SESSION['captcha'])
				{
				$resume="<h2>Ton captcha est faux</h2>";
				}
			else{
				$resume="<h2>Voici les infos transmises</h2>\n";
				$resume.="<span><strong>Nom : </strong>" . $_POST['nom'] . "</span><br />\n";
				$resume.="<span><strong>Email : </strong>" . $_POST['mel'] . "</span><br />\n";
				$resume.="<span><strong>Objet : </strong>" . $_POST['subject'] . "</span><br />\n";
				$resume.="<span><strong>Tél : </strong>";
				if(!empty($_POST['tel']))
					{
					$resume.=$_POST['tel'] . "</span><br />\n";
					}
				else
					{
					$resume.="non communiqué</span><br />\n";
					}
				$resume.="<p><strong>Message : </strong><br />\n" . $_POST['message'] . "</p>\n";			
				//envoi d'un mail de confirmation pour le client
				@mail($_POST['mel'],
				"Merci pour votre commande sur bigarnaque.com",
				"Merci\n\nVotre commande est en préparation",
				"reply-to:info@bigarnaque.com\r\n");
				
				//envoi d'un mail de confirmation pour vous
				@mail("contact@bigaranaque.com",
				"Un pignouf a commandé",
				$resume,"reply-to:" . $_POST['mel'] . "\r\n");	
				}			
			}
			
		?>


<!--------------------GET A QUOTE------------------------------>
		<section id="quote">
			<h1>Get a Quote</h1>
			<p>Tenetur nihil proident cursus quos donec, penatibus sequi ridiculus, numquam aenean, praesent! Sapien adipisicing, voluptate laoreet dapibus tempor ut sem, mollis dolor excepturi scelerisque, hendrerit aliqua nihil dolorum quasi delectus.</p>

			<form action="index.php#quote" name="contact" method="post" id="contact">

				<input type="text" name="nom" value="" placeholder="Nom(Required)" required="required" />		
				<input type="email" name="mel" value="" placeholder="Email(Required)" required="required" />		
				<input type="text" name="subject" value="" placeholder="Subject" />
				<input type="text" name="tel" value="" placeholder="Tel" />
				<textarea name="message" placeholder="Describe" required="required"></textarea>
				<img src="outils/captcha.php" alt="Captcha" />
				<input type="text" name="captcha" value="" placeholder="Sécurité"  />
				<input id="envoi" type="submit" name="submit" value="ENVOYER" />

				<script type="text/javascript">
				/*document.contact.nom.focus();*/
				</script>
			</form>
			<div id="resume">
				<?php if(isset($resume)){echo $resume;} ?>
			</div>
		</section>
<!--------------------SECTION------------------------------>
		<section></section>
<!--------------------SECTION------------------------------>
		<section></section>




<!------------------FOOTER------------------------------------>
		<footer></footer>
	</div>
	</body>
</html>