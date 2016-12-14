<?php

namespace Controller;

use \W\Controller\Controller;
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

	}

	}

?>