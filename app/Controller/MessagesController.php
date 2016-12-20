<?php 

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel; //as Users;
use \W\Security\AuthentificationModel;

// Si on utilise "respect/validation". Ne pas oublier de l'ajouter via composer
use \Respect\Validation\Validator as v;

use Intervention\Image\ImageManagerStatic as Image;


class MessagesController extends Controller 
{
	public function sendMessages()
	{
		$UsersModel = new UsersModel();

		$errors = [];
		$post = [];
		$success = false;


		if (!empty($_POST)) {
			$post = array_map('trim', array_map('strip_tags',$_POST));
		
			if (!v::length(3, 25)->validate($post['firstname'])) {
				$errors[] = 'Votre prénom doit faire entre 3 et 25 caractères';
			}

			if (!v::length(3, 25)->validate($post['lastname'])) {
				$errors[] = 'Votre nom doit faire entre 3 et 25 caractères';
			}

			if (!v::length(4, 20)->validate($post['username'])) {
				$errors[] = 'Votre nom d\'utilisateur doit faire entre 4 et 20 caractères';
			}

	}



}