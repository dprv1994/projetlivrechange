

<?php $this->layout('layout', ['title' => 'Lieux d\'échanges']) ?>

<?php $this->start('main_content') ?>
<br><br>
	<div id="map_text">
		<i class="fa fa-map-signs" aria-hidden="true"></i><u>Carte des Lieux d'échange :</u> <i class="fa fa-users" aria-hidden="true"></i>
	</i>

	</div>
<br>

 <div id="map"></div><!--  La carte s affichera dans cette div "map" -->

<br><br><br><br><br>

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
	            var image = {
				  url: "<?=$this->assetUrl('img/logo.png');?>" ,
				  size: new google.maps.Size(100, 100),
				  origin: new google.maps.Point(0, 0),
				  anchor: new google.maps.Point(17, 34),
				  scaledSize: new google.maps.Size(40, 60),
				};
	            
				    
	    	     //Affichage du marqueur
	            for(i=0;i<locations.length;i++) { 
				   marker = new google.maps.Marker({
				   position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				   map: map,
				   icon: image, 
				   
					
				   });
				 // Création infobulle  
	            	var infowindow = new google.maps.InfoWindow();  

					
					google.maps.event.addListener(marker, 'click', (function(marker, i) {
						return function() {
							infowindow.setContent('Echangez ! <b>' + locations[i][0]);
							infowindow.open(map, marker);
						}
						})(marker, i));
				
					 

				};
				  
			}
			
	  
	  </script>


	  			<!-- .......................FIN DU SCRIPT MAPS................................... -->


	<!-- ...................................APPEL A API GOOGLE MAPS............................................... -->

 	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe8QWWw2r23oo6rVQHCipJfMvvdrv8hRE&callback=initMap&region=FR">/* key = cle api google*/
    </script>
    



<?php $this->stop('js') ?>