
<?php
	//Si la SESSION EST VIDE ALORS RETOURNE VERS LOGIN 
	if (empty($_SESSION)) {
		header('Location: admin/login');
	} 

 ?>