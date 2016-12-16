<?php



$address = 'bordeaux';
 
// On prépare l'URL du géocodeur
$geocoder = "http://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false";
 
// Pour cette exemple, je vais considérer que ma chaîne n'est pas
// en UTF8, le géocoder ne fonctionnant qu'avec du texte en UTF8
$url_address = utf8_encode($address);
 
// Penser a encoder votre adresse
$url_address = urlencode($url_address);
 
// On prépare notre requête
$query = sprintf($geocoder,$url_address);
 
// On interroge le serveur
$results = file_get_contents($query);
 
// On affiche le résultat
var_dump(json_decode($results));



?>
<?php $this->layout('layoutBack', ['title' => 'Gestion de la carte google maps']) ?>

<?php $this->start('main_content') ?>

	<br><br>

 	<div id="mapupdate"></div><!--  La carte s affichera dans cette div "map" -->
 	<br>

 	<hr>
 	<br>

 	<h3>ajouter un nouveau lieu d'échange</h3>

 	<form method="POST">
		<label for="adress"></label>
		<input type="text" name="adress">
		<input type="submit" name="envoyer">

	</form>


 	<h3>Liste des points d'échange</h3>

 	<!-- lISTE DES MARKERS -->

 	<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>title</th>
					</tr>
			</thead>

			<tbody>
				<?php foreach($markers as $marker): ?>
				<tr>
					<td><?=$marker['id'];?></td>
					<td><?=$marker['title'];?></td>
					<td><a href="<?=$this->url('marker_delete', ['id' => $marker['id']]);?>">
				Effacer le marker</a></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>




<?php $this->stop('main_content') ?>


<?php $this->start('js') ?>

	  <script type="text/javascript">
	  		

			
			function initMap() {
			  	
			  	/* --------------AFFICHAGE DE LA MAP--------------- */
			  	var geocoder;
			  	var map;
			  	var image = {
				  url: "<?=$this->assetUrl('img/logo.png');?>" ,
				  size: new google.maps.Size(100, 100),
				  origin: new google.maps.Point(0, 0),
				  anchor: new google.maps.Point(17, 34),
				  scaledSize: new google.maps.Size(40, 60),
				};
			  	
			  	map = new google.maps.Map(document.getElementById('mapupdate'), {/* Ici on crée notre objet map*/
				    center: {lat: 44.8404400, lng:-0.5805000}, // centrage de la carte à l'affichage
				    zoom: 13 // niveau de zoom
			  	});
				
			  	/* --------------AFFICHAGE DES MARQUEURS--------------- */

				
	             //Création de l'icone
	         }   
	            
			   
	    	   </script>


	  			<!-- .......................FIN DU SCRIPT MAPS................................... -->


	<!-- ...................................APPEL A API GOOGLE MAPS............................................... -->

 	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe8QWWw2r23oo6rVQHCipJfMvvdrv8hRE&callback=initMap&region=FR">/* key = cle api google*/
    </script>
    



<?php $this->stop('js') ?>