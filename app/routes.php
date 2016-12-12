<?php
	
	$w_routes = array(

		//Default#home => Default correspond au nom du controller
		//home correspond au nom de la méthode dans le controller
		['GET|POST', '/', 'Default#home', 'default_home'],

		['GET|POST', '/page/', 'Default#page', 'default_page'],
		

		// UserFront
		['GET|POST', '/front/login', 'Users#login', 'user_login'],
		['GET', '/front/profil/[i:id]', 'Users#profil', 'profil'],
		['GET|POST', '/front/delete[i:id]', 'Users#delete', 'user_delete'],
		['GET|POST', '/front/signin', 'Users#signIn', 'user_signIn'],

		// Admin
		['GET|POST', '/admin/login', 'Admin#login', 'login'],
		['GET|POST', '/admin/indexBack', 'Admin#indexBack', 'admin_indexBack'],
		['GET', '/admin/list', 'Users#listAll', 'user_list'],
		['GET', '/admin/profilBack/[i:id]', 'Users#profilBack', 'profilBack'],

		//route Ajax
		['GET|POST', '/ajax/add_user', 'Ajax#addUser', 'ajax_addUser'],
		
		// Autres
		['GET|POST', '/cat/', 'Users#cat', 'cat'],
		['GET', '/error/page404', 'Default#page404', 'page404'],
	);