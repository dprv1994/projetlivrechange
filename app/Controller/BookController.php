<?php 

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel; //as Users;
use  Model\AdminModel;

// Si on utilise "respect/validation". Ne pas oublier de l'ajouter via composer
use \Respect\Validation\Validator as v;

use Intervention\Image\ImageManagerStatic as Image;


class BookController extends Controller 
{
/*
	*
	* Page ajout livres
	* 
	 */
	public function ajoutlivres()
	{

		//Si l'internaute accède à la page sans login, on le redirige vers la page 404
		if (empty($_SESSION)){
			$this->showNotFound();
		}
		else{

			$UsersModel = new UsersModel();

			$errors = [];
			$post = [];
			$success = false;

			$folderUpload = getApp()->getConfig('upload_dir_book'); // Récupère la valeur de la clé "upload_dir" du fichier config
			// Retournera : /chemin/vers/repertoire/framework/public/assets/uploads/
			// $_SERVER['DOCUMENT_ROOT'] => Racine du site web.. en local, htdocs
			// $_SERVER['W_BASE'] => Racine du framework (spécifique à W)
			$fullFolderUpload = $_SERVER['DOCUMENT_ROOT'].$_SERVER['W_BASE'].'/assets'.$folderUpload;

			if (!empty($_POST)) {
				$post = array_map('trim', array_map('strip_tags',$_POST));
				
				if (!v::length(3, 25)->validate($post['title'])) {
					$errors[] = 'Le titre doit faire entre 3 et 25 caractères';
				}

				if (!v::length(3, 25)->validate($post['author'])) {
					$errors[] = 'le nom de l\'auteur doit faire entre 3 et 25 caractères';
				}

				if (!v::length(4, 20)->validate($post['category'])) {
					$errors[] = 'Il faut selectionné une catégories';
				}

				if(!v::image()->validate($_FILES['picture']['tmp_name'])) {
					$errors[] = 'L\'image n\'est pas valide';
				}

				// Vérifie que l'image a bien été uploadée
				if(!v::uploaded()->validate($_FILES['picture']['tmp_name'])){
					$errors[] = 'Une erreur est survenue lors de l\'upload de l\'image';
				}

				if (!v::length(3,null)->validate($post['condition'])) {
					$errors[] = 'L\'etat du livre doit avoir au moins 3 caractères';
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
				$imgName = uniqid('book_').$extension;
				// On sauvegarde l'image 
				$img->save($fullFolderUpload.$imgName);

				$user = $this->getUser(); // contient l'utilisateur connecté
						 
					//On instancie le modèle pour communiquer avec la BDD
					$UserModel = new UsersModel();

					$insert = $UserModel->insert( [
						'title'			=> $post['title'],
						'author'		=> $post['author'],
						'category'		=> $post['category'],
						'picture_book'  => $imgName,
						'condition'		=> $post['condition'], 	
					]);

					if ($insert) {
						$success = true;
					}
					else{

						$errors[] = 'Erreur lors de l\'ajout en BDD';
						var_dump($errors);
					}
				}
			}

			// Après le !empty($_POST) on envoi la vue et les éventuels paramètres
			$params = [
				'errors'  => $errors,
				'success' => $success,
			];

			$this->show('default/ajoutlivres', $params);
		}	
	}

	/**
	 * Page Recherche livre
	*/
	public function search()
	{
		$this->show('default/search');

	}


}