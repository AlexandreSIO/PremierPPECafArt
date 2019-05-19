<!doctype html>
<html lang="fr">
<?php include "LeCSSHead.php";
include "LaBanniere.php";?>
<?php
		if(isset($_POST['ConcoursText']) and ($_POST['ConcoursText'] == "papillon rouge") or ($_POST['ConcoursText']=="Papillon rouge"))
		{
			echo $_POST['ConcoursText'];
			echo " est la bonne reponse.Appelez le 04-xx-xx-xx-xx pour obtenir des reductions de 15%</p>";
		}
		else
		{
			echo "Vous avez dit ";
			echo $_POST['ConcoursText'];
			echo ".De quoi parlez vous?";
		}
?>
<?php include "LeNav.php";
include "foot.php";?>
