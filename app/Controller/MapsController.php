<?php

namespace Controller;

use \W\Controller\Controller;

use Model\MapsModel; 




class MapsController extends Controller
{

use \W\Security\AuthentificationModel;
use Model\MapsModel; 


	class MapsController 
	{

	/**
	* Page Maps
	*/
	public function showMaps()
	{
		$this->show('/default/maps');

		public function getMakers()
		{
			$MapsModel = new MapsModel();
			$markers = $MapsModel->findAll();
		
			var_dump($markers);
			$data = [
				'markers' => $markers
			];
			$this->show('default/maps', $data); // envoie les données en paramètres 
		}


}