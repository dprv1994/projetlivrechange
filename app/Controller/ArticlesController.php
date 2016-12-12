<?php 

namespace Controller;

use \W\Controller\Controller;
use \Model\ArticlesModel;
use \W\Security\AuthentificationModel;

// Si on utilise "respect/validation". Ne pas oublier de l'ajouter via composer
use \Respect\Validation\Validator as v;
// Si on utilise "intervention/image" pour upload l'image
use \Intervention\Image\ImageManagerStatic as Image;

class ArticlesController extends Controller 
{
	/*
	*
	*Méthode pour gérer l'ajout d'article
	*
	*/

	public function add()
	{
		$post = [];
		$errors = [];
		$success = false;

		$folderUpload = getApp()->getConfig('upload_dir'); //Récupère la valeur de la clé "upload_dir" du fichier config

		//Retournera : /Chemin/vers/repertoire/framework/public/assets/upload/
		//$_SERVER['DOCUMENT_ROOT'] => Racine du site web.. en local, htdocs
		//$_SERVER['W_BASE'] =>Racine du framework (spécifque a W)

		$fullFolderUpload = $_SERVER['DOCUMENT_ROOT'].$_SERVER['W_BASE'].'/assets'.$folderUpload;

		if (!empty($_POST)) {
		//On nettoie les données
			$post = array_map('trim', array_map('strip_tags', $_POST));

			if(!v::notEmpty()->length(10, 140)->validate($post['title'])){
				$errors[] = 'Votre titre doit comporter entre 10 et 140 caractères';
			}
			if(!v::notEmpty()->length(10, null)->validate($post['content'])){
				$errors[] = 'Votre contenu doit comporter au moins 10 caractères';
			}

			// Valide le mimeType de l'image
			if(!v::image()->validate($_FILES['picture']['tmp_name'])){
				$errors[] = 'Le fichier envoyé n\'est pas une image valide';
			}
			// Valide la taille de l'image
			if(!v::size(null, '2MB')->validate($_FILES['picture']['tmp_name'])){
				$errors[] = 'La taille de votre image doit être inférieur à 2MB';
			}
			// Vérifie que l'image a bien été uploadée
			if(!v::uploaded()->validate($_FILES['picture']['tmp_name'])){
				$errors[] = 'Une erreur est survenue lors de l\'upload de l\'image';
			}


			if(count($errors) === 0){

				// dossier des images => /public/assets/upload/
				// Créer le dossier des images si inexistant
				if(!is_dir($fullFolderUpload)){
					mkdir($fullFolderUpload, 0755);
					}

				$img = Image::make($_FILES['picture']['tmp_name']);

				// On définit l'extension de l'image en fonction de son mimeType
				switch ($img->mime()){
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

				//le nom de l'image + son extension
				$imgName = uniqid('art_').$extension;

				$img->save($fullFolderUpload.$imgName);

				$user = $this->getUser();

				//On instancie le modèle pour communiquer avec la BDD
				$articlesModel = new ArticlesModel();

				$insert = $articlesModel->insert([
					'title'		  => $post['title'],
					'content'	  => $post['content'],
					'image'		  => $imgName,
					'id_user' 	=>  $user['id'], //Deviendra un vrai id_user récupéré depuis une session
					]);

				//Si l'insertion est ok
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

		$this->show('articles/add', $params);

	}
}