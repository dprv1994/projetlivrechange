<?php
	
	$w_routes = array(

		//Default#home => Default correspond au nom du controller
		//home correspond au nom de la méthode dans le controller
		['GET|POST', '/', 'Default#home', 'default_home'],

		['GET|POST', '/page/', 'Default#page', 'default_page'],
		

		// UserFront
		['GET|POST', '/front/login', 'Users#login', 'user_login'],
		['GET', '/front/profil/[i:id]', 'Users#profil', 'profil'],
		['GET', '/front/list', 'Users#listAll', 'user_list'],
		['GET|POST', '/front/delete[i:id]', 'Users#delete', 'user_delete'],
		['GET|POST', '/front/signin', 'Users#signIn', 'user_signIn'],

		// Admin
		['GET|POST', '/admin/indexBack', 'Admin#indexBack', 'admin'],
		['GET|POST', '/admin/login', 'Admin#login', 'login'],

		//route Ajax
		['GET|POST', '/ajax/add_user', 'Ajax#addUser', 'ajax_addUser'],
		

		['GET|POST', '/cat/', 'Users#cat', 'cat'],
		['GET', '/error/page404', 'Default#page404', 'page404'],
	);