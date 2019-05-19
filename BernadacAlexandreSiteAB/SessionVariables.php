<?php 

		session_start();
		
		$_SESSION['pseudoSession'];
		
		if($_SESSION['pseudoSession']==null)
		{
			$_SESSION['pseudoSession']="Invité";
		}

?>