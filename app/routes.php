<?php
	
	$w_routes = array(

		// Default#home => Default correspond au nom du controller
		// home correspond au nom de la méthode dans le controller
		['GET|POST', '/', 'Default#home', 'default_home'],

		
		// UserFront
		['GET|POST', '/register', 'Users#signIn', 'register'],
		['GET|POST', '/loginuser', 'Users#loginuser', 'loginuser'],
		['GET|POST', '/profiluser/[i:id]', 'Users#profilUser', 'profiluser'],

		// Admin
		['GET|POST', '/admin/login', 'Admin#login', 'login'],
		['GET|POST', '/admin/logout', 'Admin#logout', 'logout'],
		['GET|POST', '/admin/indexBack', 'Admin#indexBack', 'admin_indexBack'],
		['GET|POST', '/admin/profilBack/[i:id]', 'Admin#profilBack', 'profilBack'],
		['GET', '/admin/list', 'Admin#listAll', 'user_list'],

		// Route Ajax
		['GET|POST', '/ajax/add_user', 'Ajax#addUser', 'ajax_addUser'],
		
		// Autres
		['GET', '/error/page404', 'Default#page404', 'page404'],
	);