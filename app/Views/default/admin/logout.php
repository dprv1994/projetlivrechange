
<?php
	//Si la SESSION EST VIDE ALORS RETOURNE VERS LOGIN 
	if (empty($_SESSION)) {
		header('Location: admin/login');
	} 
// On appelle la session
session_start();

// On écrase le tableau de session
$_SESSION = array();

// On détruit la session
session_destroy();

 ?>