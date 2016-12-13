<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $this->e($title) ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/styles.css') ?>">
</head>
<body id="page-top" class="index">

	
		<header>

			<div id="top-bar">
            	<div id="logo">Logo</div>
            	<div id="name-site">LivrEchange</div>
    		</div>

			<!-- Navigation -->
    	<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            	<div class="navbar-header page-scroll">
                	<a class="navbar-brand page-scroll" href="">Accueil</a>
            	</div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#profil">Mon profil</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#search">Recherche</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Lieux d'échange</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Actus</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Dons</a>
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
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
            <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; LIVRECHANGE-2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    
                        <a href="#">Nous contacter</a>
                </div>
            </div>
            </div>
		</footer>
	</div>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
	
</body>
</html>