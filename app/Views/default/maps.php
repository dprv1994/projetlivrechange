

<?php $this->layout('layout', ['title' => 'Lieux d\'échanges']) ?>

<?php $this->start('main_content') ?>



 <div id="map"></div><!--  La carte s affichera dans cette div "map" -->


<?php $this->stop('main_content') ?>


<?php $this->start('js') ?>

	  <script type="text/javascript">
	  		

			
			function initMap() {
			  	
			  	/* --------------AFFICHAGE DE LA MAP--------------- */

			  	var map;
			  	
			  	map = new google.maps.Map(document.getElementById('map'), {/* Ici on crée notre objet map*/
				    center: {lat: 44.8404400, lng:-0.5805000}, // centrage de la carte à l'affichage
				    zoom: 13 // niveau de zoom
			  	});
				
			  	/* --------------AFFICHAGE DES MARQUEURS--------------- */



				var locations = [
					<?php foreach($markers as $marker): ?>
						['<?=$marker['title'];?>', '<?=$marker['lat'];?>', '<?=$marker['lng'];?>'],
					<?php endforeach; ?>
				];

				
	             //Création de l'icone
	             var myMarkerImage = new google.maps.Marker;
	                  
	             //Affichage du marqueur
	             for(i=0;i<locations.length;i++) { 
				 	marker = new google.maps.Marker({
				 	position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				 	map: map,
					
					});
				};
				  
			}
	  </script>


	  			<!-- .......................FIN DU SCRIPT MAPS................................... -->


	<!-- ...................................APPEL A API GOOGLE MAPS............................................... -->

 	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe8QWWw2r23oo6rVQHCipJfMvvdrv8hRE&callback=initMap&region=FR">/* key = cle api google*/
    </script>
    



<?php $this->stop('js') ?>