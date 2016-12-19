<?php
	
	$w_routes = array(

		// Default#home => Default correspond au nom du controller
		// home correspond au nom de la méthode dans le controller
		['GET|POST', '/', 'Default#home', 'default_home'],
		
		// UserFront

		['GET|POST', '/signin', 'Users#signIn', 'user_signIn'],
		['GET|POST', '/loginuser', 'Users#loginUser', 'loginUser'],
		['GET|POST', '/profiluser', 'Users#profilUser', 'profilUser'],
		['GET|POST', '/logout', 'Users#logOutUser', 'logoutUser'],
		['GET|POST', '/ajoutlivres', 'Users#ajoutLivres', 'add_book'],
		['GET|POST', '/contact', 'Users#contact', 'contact'],

		// Books
		['GET|POST', '/search', 'Default#search', 'search_book'],
		

		// Actu
		['GET|POST', '/actu', 'Default#actu', 'user_actu'],

		// Dons
		['GET', '/dons', 'Default#dons', 'dons'],

		// maps
		['GET|POST', '/maps','Maps#getMarkers', 'maps'],
		['GET|POST', '/admin/updateMaps', 'Maps#getMarkersBack', 'updateMaps'],
		['GET|POST', '/admin/deleteMarker/[i:id]', 'Maps#deleteMarker', 'marker_delete'],

		

		// Admin
		['GET|POST', '/admin/login', 'Admin#logIn', 'login'],
		['GET|POST', '/admin/logout', 'Admin#logOut', 'logout'],
		['GET|POST', '/admin/indexBack', 'Admin#indexBack', 'indexBack'],
	
		['GET|POST', '/admin/profilBack/[i:id]', 'Admin#profilBack', 'profilBack'],
		['GET', 	 '/admin/delete/[i:id]', 'Admin#delete', 'user_delete'],
		['GET', 	 '/admin/update/[i:id]', 'Admin#updateUser', 'user_update'],
		['GET', 	 '/admin/list', 'Admin#listAll', 'user_list'],
		['GET|POST', '/admin/addUser', 'Admin#add', 'addUser'],
		
		// Autres
		['GET', '/error/page404', 'Default#page404', 'page404'],
	);