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

	/**
	 * 
	 * Page de messages reçu
	**/
	public function listmessages()
	{
		$listmsg = new MessagesModel();
		$msg = $listmsg->findAll();

		$data = [
			'messages' => $msg
		];

		$this->show('default/admin/messages', $data);

	}
	
	/**
	 * 
	 * Page de envoyer messages 
	**/
	public function sendMessages()
	{
		$UsersModel = new UsersModel();

		$errors = [];
		$post = [];
		$success = false;


		if (!empty($_POST)) {
			$post = array_map('trim', array_map('strip_tags',$_POST));
		
			if (!v::length(3, 50)->validate($post['fullname'])) {
				$errors[] = 'Votre nom complet doit faire entre 3 et 50 caractères';
			}

			if (!v::email()->validate($post['email'])) {
				$errors[] = 'Votre e-mail n\'est pas valide';
			}

			if (!v::length(4, 30)->validate($post['subject'])) {
				$errors[] = 'Votre objet doit faire entre 4 et 30 caractères';
			}

			if (!v::length(4, 30)->validate($post['message'])) {
				$errors[] = 'Votre objet doit faire entre 4 et 30 caractères';
			}

			if (count($errors) === 0 ) {

				//On instancie le modèle pour communiquer avec la BDD
				$UserModel = new UsersModel();

				$insert = $UsersModel->insert([
					'name' => $post['fullname'],
					'email' => $post['email'],
					'subject' => $post['subject'],
					'message' => $post['message'],
					]);

				if ($insert) {
					$success = true;
					var_dump($insert);
				}
				else{
					$errors[] = 'Erreur lors de l\'ajout en BDD';
				}
			}
		}

		// Après le !empty($_POST) on envoi la vue et les éventuels paramètres
		$params = [
			'errors'  => $errors,
			'success' => $success,
		];

		$this->show('default/contact', $params);	
	}


}

