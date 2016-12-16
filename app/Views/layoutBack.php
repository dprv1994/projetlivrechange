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
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed:700" rel="stylesheet"> 

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1><?= $this->e($title) ?></h1>

			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?=$this->url('admin_indexBack')?>">LivrEchange</a>
					</div>


						<p class="navbar-text navbar-left">
							<span class="text-primary">Bonjour <strong><?=$w_user['username'];?></strong></span>
						</p>
					<div id="nav-bar-back">
			    	<ul id="nav-bar-back">

			      		
			      		    
			      			<li><a href="">Infos</a></li>
					        <li><a href="<?=$this->url('user_list')?>">Utilisateurs</a></li>
					        <li><a href="">Messages</a></li>
					        
					        <li><a href="">Actus</a></li>
					        <li><a target="_blank" href="<?=$this->url('default_home')?>" id="logout">Voir le site</a></li>
			      			<li><a href="<?=$this->url('logout')?>">Déconnexion</a></li>

			    	</ul>
			    	</div>

			  	</div>
			</nav>

		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

<?= $this->section('js') ?>	

</body>
</html>