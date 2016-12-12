<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel; //as Users;


Class AdminController extends Controller
{
	/**
	* Page d'accueil de l'admin
	*/
	public function admin_main()
	{
		$this->show('default/admin/admin_main');
	}

}