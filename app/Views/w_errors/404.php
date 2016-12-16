<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Page 404</title>

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
    
                
		</div>
		</header>

		<section id="section_main">
            <h1>Mais où est-elle donc passée..?</h1>
			<br>
			<!-- INTEGRER EN BACKGROUND L'IMAGE assets/img/404.jpg -->
			<p>Il semblerait que la page que vous recherchez ait été supprimée, désactivée ou déplacée.
			<br></p>
			<p><a href="<?=$this->url('default_home')?>">Retourner sur le site</a></p>


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
