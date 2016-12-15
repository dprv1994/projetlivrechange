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
    
	<link rel="stylesheet" href="<?= $this->assetUrl('css/styles.css') ?>">
 
</head>
<body id="page-top" class="index">
    <div id="wrapper">
		<header>

			<!-- Navigation -->
    	<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed">
            <div class="container1">
            <!-- Brand and toggle get grouped for better mobile display -->
            	<div class="navbar-header page-scroll">
                	<a class="navbar-brand page-scroll" href="/projetlivrechange/public/">Accueil</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="">Mon profil</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="search">Recherche</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="maps">Lieux d'échange</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">Actus</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">Dons</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="loginuser">Se connecter</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        	</div>
        	<!-- /.container-fluid -->
    	</nav>

        <div id="top-bar">
                <div id="logo">  
                </div>
                <div id="name-site">LivrEchange</div>
        </div>

		</header>

		<section>
            <?= $this->section('main_content') ?>
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
<?= $this->section('js') ?>
	
</body>
</html>