<?php $bdd=new PDO('mysql:host=localhost;dbname=AlexandreDB;charset=utf8','root','');?>
<table id="TabHoraires">
			<tr>
				<td><strong>Jour</strong></td>
				<td><strong>Heures</strong></td>
			</tr>
			<tr>
				<td>Lundi</td>
				<td>Fermé</td>
			</tr>
			<tr>
				<td>Mardi</td>
				<td>8h-22h</td>
			</tr>
			<tr>
				<td>Mercredi</td>
				<td>8h-22h</td>
			</tr>
			<tr>
				<td>Jeudi</td>
				<td>8h-14h</td>
			</tr>
			<tr>
				<td>Vendredi</td>
				<td>8h-22h</td>
			</tr>
			<tr>
				<td>Samedi</td>
				<td>8h-22h</td>
			</tr>
			<tr>
				<td>Dimanche</td>
				<td>8h-22h</td>
			</tr>	
		</table>
			<nav>
				<a href=\BernadacAlexandreSiteAB\HTMLtheme.php>Thème actuel</a><br>
				<a href=\BernadacAlexandreSiteAB\HTMLThes.php>Nos thés</a><br>
				<a href=\BernadacAlexandreSiteAB\HTMLCafes.php>Nos cafés</a><br>
				<a href=\BernadacAlexandreSiteAB\LesAvis.php>Vos avis</a><br>
				<a href=\BernadacAlexandreSiteAB\ExerciceHTML.php><img src="images/Japanese_teacup.jpg" alt="Accueil" title="Accueil"></a><br>
				<?php
						$option=$bdd->query('SELECT * FROM admin;');
						while($voirOption=$option->fetch())
						{
						if($_SESSION['pseudoSession']==$voirOption['Id_Admin'])
						{
							echo '<a href="\BernadacAlexandreSiteAB\OptionAdmin.php">GestionCompte</a>';
						}
						}
				?><br>
				
				<br>
				<br>
				<form method="post" action="JeMeConnecte.php">
						<label>Nom:</label><br>
						<input type="text" name="nomUtilisateur" placeholder="Nom" size=12/><br><br>
						<label>Mot de Passe:</label><br>
						<input type="password" name="passWordId" placeholder="Mot De Passe" size=12/><br><br>
						<input type="submit" value="S'enregistrer" name="boutonRegister"/><br><br>
						<input type="submit" value="Se connecter" name="boutonLogIn">
				</form>
			<?php 
				if(isset($_POST['nomUtilisateur']) and isset($_POST['passWordId']) and isset($_POST['boutonRegister']))
				{
					$regis=$bdd->prepare('insert into utilisateur values (?,?)');
					$regis->execute(array($_POST['nomUtilisateur'],$_POST['passWordId']));
				}
				
				echo 'Compte:'.$_SESSION['pseudoSession'];
			?>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br>
			<form method="post" action="JeMeConnecteAdmin.php">
						<label>Admin:</label><br>
						<input type="text" name="nomAdmin" placeholder="Admin" size=12/><br><br>
						<label>Mot de Passe:</label><br>
						<input type="password" name="passWordIdAdmin" placeholder="Mot De Passe" size=12/><br><br>
						<input type="submit" value="Se connecter" name="boutonLogInAdmin">
			</nav>
