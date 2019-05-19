<?php
				
					session_start();
					$_SESSION['pseudoSession'];
					
	$bdd=new PDO('mysql:host=localhost;dbname=AlexandreDB;charset=utf8','root','');
	
	
	
	
	if(isset($_POST['nomUtilisateur']) and isset($_POST['passWordId']) and isset($_POST['boutonLogIn']))
				{
					$connect=$bdd->query('SELECT * from utilisateur;');
					while($caff=$connect->fetch())
					{
						if($caff['pseudo_utilisateur']==$_POST['nomUtilisateur'] and $caff['mdp_utilisateur']==$_POST['passWordId'])
						{
							$_SESSION['pseudoSession']=$_POST['nomUtilisateur'];
						}
					}
				}
				
					include 'LeNav.php';

?>
<!DOCTYPE>
<?php include 'LeCSSHead.php';?>