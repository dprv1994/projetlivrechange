

<?php $this->layout('layout', ['title' => 'Lieux d\'échanges']) ?>

<?php $this->start('main_content') ?>

 <div id="map"></div><!--  La carte s affichera dans cette div "map" -->


<?php $this->stop('main_content') ?>


<?php $this->start('js') ?>
	  <script type="text/javascript">
	  		

			function initMap() {
			  	
			  	var map;
			  	
			  	map = new google.maps.Map(document.getElementById('map'), {/* Ici on crée notre objet map*/
				    center: {lat: 44.8404400, lng:-0.5805000}, // centrage de la carte à l'affichage
				    zoom: 13 // niveau de zoom
			  	});
				
				var tMarker = [
				  { lat : 44.837368,
				    lon : -0.576144,
				    title : 'Bordeaux'
				  },
				  { lat :45.767299,
				    lon : 4.834329,
				    title : 'Lyon'
				  },
				  {lat :43.297612,
				   lon : 5.381042,
				   title : 'Marseille'
				  },
				  {
				    lat : 48.856667,
				    lon :  2.350987,
				    title : 'Paris'
				  }
				];

				function createMarqueur( tab, map){
				  var oLatLng, oMarker, data;
				  var i, nb = tab.length;
				 
				  for( i = 0; i < nb; i++){
				    data = tab[i];
				    oLatLng = new google.maps.LatLng( data.lat, data.lon);
				    oMarker = new google.maps.Marker({
				      position : oLatLng,
				      map : map,
				      title : data.title
				    });
				  }
				}	
				createMarqueur( tMarker, map);

			}
	  </script>

 



	<!-- ...................................APPEL A API GOOGLE MAPS............................................... -->

 	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe8QWWw2r23oo6rVQHCipJfMvvdrv8hRE&callback=initMap&region=FR">/* key = cle api google*/
    </script>
    



<?php $this->stop('js') ?>