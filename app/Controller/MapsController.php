<?php

namespace Controller;

use \W\Controller\Controller;
use Model\MapsModel; 
use \W\View\Plates\PlatesExtensions;




class MapsController extends Controller
{

		public function getMakers()
		{
			$MapsModel = new MapsModel();
			$markers = $MapsModel->findAll();
		
			$data = [
				'markers' => $markers
			];
			$this->show('default/maps', $data); // envoie les données en paramètres 
		}

		
}