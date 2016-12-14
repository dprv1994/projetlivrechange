

<?php $this->layout('layout', ['title' => 'Lieux d\'échanges']) ?>

<?php $this->start('main_content') ?>




 	

	<!-- ...................................APPEL A API GOOGLE MAPS............................................... -->

 	<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe8QWWw2r23oo6rVQHCipJfMvvdrv8hRE&callback=initMap&region=FR">/* key = cle api google*/
    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe8QWWw2r23oo6rVQHCipJfMvvdrv8hRE&libraries=places"></script>

    <!-- ...................................APPEL A JQUERY........................................................ -->

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>	


<?php $this->stop('main_content') ?>