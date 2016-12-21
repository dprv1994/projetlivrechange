<?php 

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel; //as Users;
use Model\BooksModel;
use \W\Security\AuthentificationModel;

// Si on utilise "respect/validation". Ne pas oublier de l'ajouter via composer
use \Respect\Validation\Validator as v;

use Intervention\Image\ImageManagerStatic as Image;


class UsersController extends Controller 
{

	/**
	 * 
	 * Page de login
	 *
	**/
	public function loginUser()
	{
		$errors = null;

		if (!empty($_POST)) {
		$post = array_map('trim', array_map('strip_tags', $_POST));
		

			if (empty($post['username']) && empty($post['password'])) {
				$errors = 'Vous devez compléter votre identifiant et mot de passe pour vous connecter';
			}
			else{
				//l'utilisateur a bien rempli un mot de passe et un username
				$authModel = new AuthentificationModel;
				$idUser = $authModel->isValidLoginInfo($post['username'], $post['password']);

				//On a un id utilisateur si le couple username/password est bon, sinon 0
				if($idUser){
					$UsersModel = new UsersModel();
					$user = $UsersModel->find($idUser); //Récupère les données de l'utilisateur via son ID

					//Connecte L'utilisateur et peuple la session
					$authModel->logUserIn($user);
				}
				else{ // $idUser est égal à 0
					$errors = 'Erreur d\'identifiant ou de mot de passe';
				}
			}
		}
		//$this->getUser() récupere l'utilisateur actuelment connecté
		//Si déjà connecté je le redirige
		
		if (!empty($this->getUser())) {
			//Je le sors du !empty($_POST) pour que la redirection soit effective si un utilisateur et déjà connecté arrive sur le formulaire de connexion
			
			$this->redirectToRoute('profilUser');

		}
		else{
			$param = ['errors' => $errors];
			$this->show('default/loginuser', $param);
		}

		$this->show('default/loginuser');
	}

	public function logoutUser()
	{	//Si la SESSION N'EST PAS VIDE 
		if (!empty($this->getUser())){
			$authModel = new AuthentificationModel;

			//Deconnecte L'utilisateur 
			$authModel->logUserOut();
			
			$this->redirectToRoute('default_home');
		}
		//Si la SESSION EST VIDE 
		$this->redirectToRoute('loginUser');

	}

	/**
	 *Affiche le profil d'un membre sélectionné
	 * Page de profil
	**/
	public function profilUser()
	{
		$user = $this->getUser();
		if(!empty($user)){
			$BooksModel = new BooksModel(); // On instancie la classe des livres
			
			//Permet de gérer l'affichage
			$data = [
				'user' 	 => $user, 
				'upload' => getApp()->getConfig('upload_dir'),
				'books'  => $BooksModel->Mybook($user['id']), 
			];
			$this->show('default/profiluser', $data);
		}
		else{
			//Si l'internaute accède à la page sans login, on le redirige vers la page 404
			$this->showNotFound();
		}
	}

	/**
	 *Méthode pour verifier l'inscritipon de l'utilisateur
	 * Page d'inscription
	**/
	public function signIn()
	{

		$UsersModel = new UsersModel();

		$errors = [];
		$post = [];
		$success = false;

		$folderUpload = getApp()->getConfig('upload_dir'); // Récupère la valeur de la clé "upload_dir" du fichier config
		// Retournera : /chemin/vers/repertoire/framework/public/assets/uploads/
		// $_SERVER['DOCUMENT_ROOT'] => Racine du site web.. en local, htdocs
		// $_SERVER['W_BASE'] => Racine du framework (spécifique à W)
		$fullFolderUpload = $_SERVER['DOCUMENT_ROOT'].$_SERVER['W_BASE'].'/assets'.$folderUpload;


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

			//si l'username existe déjà en BDD renverra TRUE
			if ($UsersModel->usernameExists($post['username'])) {
				$errors[] = 'Le pseudo est déjà utilisé';
			}

			if(!v::image()->validate($_FILES['picture']['tmp_name'])) {
				$errors[] = 'Le fichier envoyé n\'est pas une image valide';
			}

			if (!v::email()->validate($post['email'])) {
				$errors[] = 'Votre e-mail n\'est pas valide';
			}

			//si l'email existe déjà en BDD renverra TRUE
			if ($UsersModel->emailExists($post['email'])) {
				$errors[] = 'L\'adresse email et déjà utilisé';
			}

			if (!v::length(7,null)->validate($post['password'])) {
				$errors[] = 'Le mot de passe doit avoir au moins 7 caractères';
			}

			// Vérifie que l'image a bien été uploadée
			if(!v::uploaded()->validate($_FILES['picture']['tmp_name'])){
				$errors[] = 'Une erreur est survenue lors de l\'upload de l\'image';
			}

			if (count($errors) === 0 ) {

				// dossier des images => /public/assets/upload/
				// Créer le dossier des images si inexistant
				if(!is_dir($fullFolderUpload)){
					mkdir($fullFolderUpload, 0755);
				}

				$img = Image::make($_FILES['picture']['tmp_name']);

				// On définit l'extension de l'image en fonction de son mimeType
				switch($img->mime()){
					case 'image/jpg':
					case 'image/jpeg':
						$extension = '.jpg';
					break;
					case 'image/png':
						$extension = '.png';
					break;
					case 'image/gif':
						$extension = '.gif';
					break;

				}

				// Le nom de l'image + son extension
				$imgName = uniqid('art_').$extension;
				// On sauvegarde l'image 
				$img->save($fullFolderUpload.$imgName);

				$user = $this->getUser(); // contient l'utilisateur connecté

				$authModel = new AuthentificationModel(); // Permet d'utiliser la fonction de hash de password

				//On instancie le modèle pour communiquer avec la BDD
				$UserModel = new UsersModel();

				$insert = $UserModel->insert([
				 	'firstname' => $post['firstname'],
				 	'lastname'	=> $post['lastname'],
				 	'username'	=> $post['username'],
				 	'picture'	=> $imgName,
				 	'email'		=> $post['email'],
				 	'password'	=> $authModel->hashPassword($post['password']),
				 	'role'		=> 'user',
				]);

				if ($insert) {
					$success = true;
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

		$this->show('default/signin', $params);
		
	}

	public function updateUser()
	{
	$UsersModel = new UsersModel();

		$errors = [];
		$post = [];
		$success = false;

		$folderUpload = getApp()->getConfig('upload_dir'); // Récupère la valeur de la clé "upload_dir" du fichier config
		// Retournera : /chemin/vers/repertoire/framework/public/assets/uploads/
		// $_SERVER['DOCUMENT_ROOT'] => Racine du site web.. en local, htdocs
		// $_SERVER['W_BASE'] => Racine du framework (spécifique à W)
		$fullFolderUpload = $_SERVER['DOCUMENT_ROOT'].$_SERVER['W_BASE'].'/assets'.$folderUpload;


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

			//si l'username existe déjà en BDD renverra TRUE
			if ($UsersModel->usernameExists($post['username'])) {
				$errors[] = 'Le pseudo est déjà utilisé';
			}

			if(!v::image()->validate($_FILES['picture']['tmp_name'])) {
				$errors[] = 'Le fichier envoyé n\'est pas une image valide';
			}

			if (!v::email()->validate($post['email'])) {
				$errors[] = 'Votre e-mail n\'est pas valide';
			}

			//si l'email existe déjà en BDD renverra TRUE
			if ($UsersModel->emailExists($post['email'])) {
				$errors[] = 'L\'adresse email et déjà utilisé';
			}

			if (!v::length(7,null)->validate($post['password'])) {
				$errors[] = 'Le mot de passe doit avoir au moins 7 caractères';
			}

			// Vérifie que l'image a bien été uploadée
			if(!v::uploaded()->validate($_FILES['picture']['tmp_name'])){
				$errors[] = 'Une erreur est survenue lors de l\'upload de l\'image';
			}

			if (count($errors) === 0 ) {

				// dossier des images => /public/assets/upload/
				// Créer le dossier des images si inexistant
				if(!is_dir($fullFolderUpload)){
					mkdir($fullFolderUpload, 0755);
				}

				$img = Image::make($_FILES['picture']['tmp_name']);

				// On définit l'extension de l'image en fonction de son mimeType
				switch($img->mime()){
					case 'image/jpg':
					case 'image/jpeg':
						$extension = '.jpg';
					break;
					case 'image/png':
						$extension = '.png';
					break;
					case 'image/gif':
						$extension = '.gif';
					break;

				}

				// Le nom de l'image + son extension
				$imgName = uniqid('art_').$extension;
				// On sauvegarde l'image 
				$img->save($fullFolderUpload.$imgName);

				$user = $this->getUser(); // contient l'utilisateur connecté

				$authModel = new AuthentificationModel(); // Permet d'utiliser la fonction de hash de password

				//On instancie le modèle pour communiquer avec la BDD
				$UserModel = new UsersModel();

				$upload = $UserModel->upload([
				 	'firstname' => $post['firstname'],
				 	'lastname'	=> $post['lastname'],
				 	'username'	=> $post['username'],
				 	'picture'	=> $imgName,
				 	'email'		=> $post['email'],
				 	'password'	=> $authModel->hashPassword($post['password']),
				 	'role'		=> 'user',
				]);

				if ($upload) {
					$success = true;
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

		$this->show('default/updateUser', $params);
	}	
	
	

}


	




 ?>