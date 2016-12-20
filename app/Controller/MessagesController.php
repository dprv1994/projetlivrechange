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
		
			if (!v::length(3, 50)->validate($post['name'])) {
				$errors[] = 'Votre nom complet doit faire entre 3 et 50 caractères';
			}

			if (!v::email()->validate($post['email'])) {
				$errors[] = 'Votre e-mail n\'est pas valide';
			}

			if (!v::length(4, 30)->validate($post['subject'])) {
				$errors[] = 'Votre objet doit faire entre 4 et 30 caractères';
			}

	}



}