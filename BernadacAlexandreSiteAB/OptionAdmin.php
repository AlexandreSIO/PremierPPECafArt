<?php
				
					session_start();
					$_SESSION['pseudoSession'];
					
	$bdd=new PDO('mysql:host=localhost;dbname=AlexandreDB;charset=utf8','root','');
?>
			
<!DOCTYPE>

<a href="\BernadacAlexandreSiteAB\ExerciceHTML.php">Accueil</a><br>
						<form method="post">
						<input type="text" name="leCompte" placeholder="EFFACER COMPTE">
						<input type="submit" name="effacerCompte" placeholder="EFFACER">
						</form><br><br>

<?php
				if(isset($_POST['effacerCompte']))
				{
				$del=$bdd->exec('delete from utilisateur where pseudo_utilisateur="'.$_POST['leCompte'].'"');
				}
				$lesUsers=$bdd->query('SELECT * from utilisateur');
				while($showUsers=$lesUsers->fetch())
				{
					echo 'Pseudo:'.$showUsers['pseudo_utilisateur'].'<br>'.'MDP:'.$showUsers['mdp_utilisateur'].'<br><br><br>';
				}
?>