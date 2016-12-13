<?php
	
	$w_routes = array(

		// Default#home => Default correspond au nom du controller
		// home correspond au nom de la méthode dans le controller
		['GET|POST', '/', 'Default#home', 'default_home'],

		
		// UserFront
		['GET|POST', '/front/signin', 'Users#signIn', 'user_signIn'],
		['GET|POST', '/loginuser', 'Users#loginuser', 'loginuser'],
		['GET', '/profiluser', 'Users#profilUser', 'profiluser'],

		// Admin
		['GET|POST', '/admin/login', 'Admin#login', 'login'],
		['GET|POST', '/admin/logout', 'Admin#logout', 'logout'],
		['GET|POST', '/admin/indexBack', 'Admin#indexBack', 'admin_indexBack'],
		['GET', '/admin/profilBack/[i:id]', 'Users#profilBack', 'profilBack'],
		['GET', '/admin/list', 'Users#listAll', 'user_list'],

		// Route Ajax
		['GET|POST', '/ajax/add_user', 'Ajax#addUser', 'ajax_addUser'],
		
		// Autres
		['GET', '/error/page404', 'Default#page404', 'page404'],
	);