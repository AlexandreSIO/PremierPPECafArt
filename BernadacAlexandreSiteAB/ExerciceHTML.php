<?php 

		session_start();

		$_SESSION['pseudoSession'];
		
		if($_SESSION['pseudoSession']==null)
		{
			$_SESSION['pseudoSession']="Invité";
		}

?>
					
					
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Caf'Art Carcassonne</title>
		<link rel="stylesheet" href="\BernadacAlexandreSiteAB\SiteCss\SiteCSS.css">
	</head>
	<body>
	<?php include "LaBanniere.php";?>
	<h1 id="bonjour" class="titre">Caf'Art Carcassonne<br>Bonjour!</h1>
		
		<p id="Image_Lieu">
			<img src="Images/maison-japon.jpg"><br>
			Lieu du salon de thé
		</p>
			<?php include "LeNav.php";?>
		<section id="SecIntro">
		<p id="Intro_para_theme">
		<a href=\BernadacAlexandreSiteAB\HTMLtheme.php>Thème</a> actuel. Il change chaque saison alors ne ratez pas l'évenement.
		</p>
		<p id="Intro_para1">
		Notre salon de thé vous propose tous les services d'un salon ordinaire en plus d'expositions,
		de concerts et l'écoute d'oeuvres classiques sur vinyle.
		</p>
		<p id="Intro_para2">
		Tous nos thés sont hauts de gamme, cultivés au Japon ainsi qu'artisanaux et biologiques.
		D'ailleur voici la carte de <a href=\BernadacAlexandreSiteAB\HTMLThes.php>nos thés</a>.
		<p/>
		<p id="Intro_para3">
		Notre établissement propose aussi du café. Le café que nous vous proposons n'est que ce qu'il se 
		fait de mieux dans toutes les nations productrices de café. <br>Si ceci vous intéressent, n'hésitez pas
		à regarder la carte de <a href=\BernadacAlexandreSiteAB\HTMLCafes.php>nos cafés</a>.
		</p>
		<p>
		Que peut-on voir de spécial dans l'etablissement?<br>Attention à l'orthographe<br>
		<form method="post" action="\BernadacAlexandreSiteAB\Concours.php">
			<input type="text" name="ConcoursText" placeholder="Etes-vous un connaisseur?"/>
			<input type="submit"/>
		</form>
		</p>
		<p>
		Donnez votre avis sur le site et/ou le salon:<br>
		<form method="post">
			<input type="text" name="SujetText" placeholder="Sujet"/><br><br>
			<TEXTAREA name="avisText" placeholder="Votre avis/commentaire" wrap=physical rows=10 cols=50></TEXTAREA><br>
			<input type="submit"/>
		</form>
		</p>
		<?php $bdd=new PDO('mysql:host=localhost;dbname=AlexandreDB;charset=utf8','root','');?>
		
		<?php if(isset($_POST['nomText']) and isset($_POST['SujetText']) or isset($_POST['avisText']))
								{$req=$bdd->prepare('insert into avis(nom,sujet,texte) Values(?,?,?)');
								$req->execute(array(
			
								$_POST['nomText'],$_POST['SujetText'],$_POST['avisText']));
								}
		?>
		
		</section>

			<?php include "foot.php";?>
	</body>
	</html>