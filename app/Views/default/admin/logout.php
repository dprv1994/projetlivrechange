<?php 

session_start();

if (!isset($_SESSION['username'])) {
	header('Location: login.php');
	die;
}

if  (isset($_GET['logout']) && $_GET['logout'] == 'yes') {
	// Détruit les entrées de username et password de $_SESSION
	unset($_SESSION['user']);
    session_destroy();
	// Redirige vers la page voulu
	header('Location:login.php');
	die();
}

echo "<h2>Déconnexion</h2>";


if (isset($_SESSION['username'])) {
	echo 'voulez-vous vous déconnecter?';
	echo '<br><br><a href="logout.php?logout=yes">Se déconnecter</button></a>' ;
}
else {
    echo "Vous êtes déconnecté(e)";
    echo '<br><br>' ;
 }

 ?>