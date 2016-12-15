<?php
	
	$w_routes = array(

		// Default#home => Default correspond au nom du controller
		// home correspond au nom de la méthode dans le controller
		['GET|POST', '/', 'Default#home', 'default_home'],

		// UserFront

		['GET|POST', '/signin', 'Users#signIn', 'user_signIn'],
		['GET|POST', '/loginuser', 'Users#loginUser', 'loginUser'],
		['GET|POST', '/profiluser/[i:id]', 'Users#profilUser', 'profilUser'],
		['GET|POST', '/search', 'Default#search', 'search_book'],

		// maps
		['GET|POST', '/maps','Maps#getMakers', 'maps'],

		// Admin
		['GET|POST', '/admin/login', 'Admin#logIn', 'login'],
		['GET|POST', '/admin/logout', 'Admin#logOut', 'logout'],
		['GET|POST', '/admin', 'Admin#indexBack', 'admin_indexBack'],
		['GET|POST', '/admin/profilBack/[i:id]', 'Admin#profilBack', 'profilBack'],
		['GET', '/delete/[i:id]', 'Admin#delete', 'user_delete'],
		['GET', '/update/[i:id]', 'Admin#update', 'user_update'],
		['GET', '/admin/list', 'Admin#listAll', 'user_list'],
		['GET|POST', '/admin/addUser', 'Admin#add', 'addUser'],
		
		// Autres
		['GET', '/error/page404', 'Default#page404', 'page404'],
	);