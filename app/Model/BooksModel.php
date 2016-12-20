<?php 
namespace Model;

class BooksModel extends \W\Model\Model
{

	public function MyBooks()
	{	
		$select = $bdd->prepare('SELECT books.title, users.username FROM users
		INNER JOIN books
		ON books.id_users = users.id');

		if ($select->execute()) {
			$books = $select->fetchAll(PDO::FETCH_ASSOC);
		}
		
	}

}
