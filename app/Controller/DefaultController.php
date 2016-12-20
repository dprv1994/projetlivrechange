<?php

namespace Controller;

use \W\Controller\Controller;


class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{	
		$this->show('/default/home');
	}

	/**
	 * Page Inscription
	 */
	public function loginuser()
	{
		$this->show('default/loginuser');
	}


	/**
	 * Page actualités
	*/
	public function actu()
	{
		$this->show('default/actu');

	}
	
	/**
	* Page de dons
	*/
	public function dons()
	{
		$this->show('default/dons');
	}

	/**
	 * Page 404
	*/
	public function notFound()
	{
		$this->showNotFound();

	}
	
	
	

}