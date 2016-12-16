<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $this->e($title) ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed:700" rel="stylesheet"> 

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>


<section id="section_main">
	<div id="login">
		<?php if (isset($errors) && !empty($errors)): ?>
			<div class="alert alert-danger">
				<?=$errors;?>
			</div>
		<?php endif; ?>

			<br><br>

			<p class="log-txt">Bonjour !<br> Veuillez entrer vos identifiants pour vous connecter.</p>

			<form method="POST">
				<label for="username">User:</label><br>
				<input type="text" id="username" name="username">

				<br><br>
				<label for="password">Mot de passe:</label><br>
				<input type="password" id="password" name="password">

				<br><br>
				<input type="submit" value="Se connecter">
			</form>
	</div>
</section>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	
</body>

</html>