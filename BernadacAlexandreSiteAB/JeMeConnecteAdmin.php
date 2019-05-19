<?php
				
					session_start();
					$_SESSION['pseudoSession'];
					
	$bdd=new PDO('mysql:host=localhost;dbname=AlexandreDB;charset=utf8','root','');
	
	
	if(isset($_POST['nomAdmin']) and isset($_POST['passWordIdAdmin']) and isset($_POST['boutonLogInAdmin']))
				{
					
					$connect=$bdd->query('SELECT * from admin');
					while($caff=$connect->fetch())
					{
						if($caff['Id_Admin']==$_POST['nomAdmin'] and $caff['MDP_Admin']==$_POST['passWordIdAdmin'])
						{
							$_SESSION['pseudoSession']=$_POST['nomAdmin'];
						}
					}
				}
				

?>
<!DOCTYPE>
<a href=\BernadacAlexandreSiteAB\ExerciceHTML.php>Accueil</a>
