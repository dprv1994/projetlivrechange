<?php

namespace Controller;

use \W\Controller\Controller;
use Model\MapsModel; 
use \W\View\Plates\PlatesExtensions;




class MapsController extends Controller
{

		public function getMarkers()
		{
			$showMarker = new MapsModel();
			$markers = $showMarker->findAll();
		
			$data = [
				'markers' => $markers
			];
			$this->show('default/maps', $data); // envoie les données en paramètres 
		
		}
		public function getMarkersBack()
		{
			$showMarkerBack = new MapsModel();
			$markers = $showMarkerBack->findAll();
		
			$data = [
				'markers' => $markers
			];
			$this->show('default/admin/updateMaps', $data); // envoie les données en paramètres 
		
		}
		public function deleteMarker()
		{

			if(!empty($_POST['delete'])){

				$destroyMarker = new MapsModel();
				$destroy = $destroyMarker->delete($Marker['id']);

				$this->show('default/admin/updateMaps');  
			}
		}
		
}