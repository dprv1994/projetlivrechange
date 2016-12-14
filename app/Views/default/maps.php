

<?php $this->layout('layout', ['title' => 'Lieux d\'échanges']) ?>

<?php $this->start('main_content') ?>

 <div id="map"></div><!--  La carte s affichera dans cette div "map" -->


<?php $this->stop('main_content') ?>


<?php $this->start('js') ?>
	  <script type="text/javascript">
	  		

			function initMap() {
			  	
			  	var map;
			  	var geocoder;

			  	map = new google.maps.Map(document.getElementById('map'), {/* Ici on crée notre objet map*/
				    center: {lat: 44.8404400, lng:-0.5805000}, // centrage de la carte à l'affichage
				    zoom: 13 // niveau de zoom
			  });
				google.maps.event.addListener(map, 'click', function(event) {
				    placeMarker(event.latLng);
				  });
				 
				var marker;
				function placeMarker(location) {
				  if(marker){ //on vérifie si le marqueur existe
				    marker.setPosition(location); //on change sa position
				  }else{
				    marker = new google.maps.Marker({ //on créé le marqueur
				      position: location,
				      map: map
				    });
				  }
				  inputLatitude.value=location.lat();
				  inputLongitude.value=location.lng();
				}
			
			}
	  </script>

 



	<!-- ...................................APPEL A API GOOGLE MAPS............................................... -->

 	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe8QWWw2r23oo6rVQHCipJfMvvdrv8hRE&callback=initMap&region=FR">/* key = cle api google*/
    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe8QWWw2r23oo6rVQHCipJfMvvdrv8hRE&libraries=places"></script>



<?php $this->stop('js') ?>