<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\MapsModel; 
use \W\Security\AuthentificationModel;



	class MapsController{

	/**
	* Page Maps
	*/
	public function showMaps()
	{
		$this->show('default/maps');

	}

	}

?>