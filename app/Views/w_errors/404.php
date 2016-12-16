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


<!-- essai -->

<body id="page-top" class="index">
    <div id="wrapper">
		<header>

        <div id="conteneur-accueil-404">
    			<!-- Navigation -->
        	<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed">
                <div class="container1">
                <!-- Brand and toggle get grouped for better mobile display -->
                	<div class="navbar-header page-scroll">
                    	<a class="navbar-brand page-scroll" href="<?=$this->url('admin_indexBack')?>">
                    	<i class="fa fa-user-secret" aria-hidden="true"></i>

                    	<strong><?=$w_user['username'];?></strong>
                    	</a>
                    </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                            	<a href=""><i class="fa fa-cogs" aria-hidden="true"></i> Infos</a>
                            </li>
					        <li>
					        	<a href="<?=$this->url('user_list')?>"><i class="fa fa-user-plus" aria-hidden="true"></i>
Utilisateurs</a>
					        </li>
					        <li>
					        	<a href=""><i class="fa fa-envelope" aria-hidden="true"></i>
Messages</a>
					        </li>
					        
					        <li>
					        	<a href=""><i class="fa fa-globe" aria-hidden="true"></i>
Actus</a>
					        </li>
					        <li>
					        	<a target="_blank" href="<?=$this->url('default_home')?>" id="logout"><i class="fa fa-search" aria-hidden="true"></i>
Voir le site</a>
					        </li>
			      			<li>
			      				<a href="<?=$this->url('logout')?>"><i class="fa fa-sign-out" aria-hidden="true"></i>
Déconnexion</a>
			      			</li>
                        </ul>
                    </div>
                </div><!-- fin div container1 -->
            <!-- <div id="top-bar">
                <div id="logo"></div>
                <div id="name-site">LivrEchange</div>
            </div> -->
		</div><!-- fin div conteneur accueil -->
		</header>

		<section id="section_main">
            <h1>Mais où est-elle donc passée..?</h1>
			<br>
			<!-- INTEGRER EN BACKGROUND L'IMAGE assets/img/404.jpg -->
			<p>Il semblerait que la page que vous recherchez ait été supprimée, désactivée ou déplacée.
			<br></p>


        </section>

        <footer>
            <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; LivrEchange-2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div id="contact">
                        <a href="#">Nous contacter</a>
                    </div> 
                </div>
            </div>
            </div>
        </footer>
    </div>
    </div><!-- fin wrapper -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	
</body>

</html>
