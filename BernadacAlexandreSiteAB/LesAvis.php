<?php include 'SessionVariables.php'; ?>
<!doctype html>
<?php $bdd=new PDO('mysql:host=localhost;dbname=AlexandreDB;charset=utf8','root','');?>
<?php include "LeCSSHead.php";?>
<?php include "LaBanniere.php";?>
<?php $reponse=$bdd->query('select * from avis');
		while ($donnees=$reponse->fetch())
		{
			
			echo '<p>'.
			 $donnees['nom'].'<br>'.
			 $donnees['sujet'].'<br>'.
			 $donnees['texte'].'</p>';
		}
?>
<?php include "LeNav.php";?>

<?php include "foot.php";?>