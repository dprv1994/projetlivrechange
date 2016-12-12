<?php
	
	$w_routes = array(

		//Default#home => Default correspond au nom du controller
		//home correspond au nom de la méthode dans le controller
		['GET|POST', '/', 'Default#home', 'default_home'],

		['GET|POST', '/page/', 'Default#page', 'default_page'],


		['GET|POST', '/user/login', 'Users#login', 'user_login'],
		['GET', '/user/profil/[i:id]', 'Users#profil', 'profil'],
		['GET', '/user/list', 'Users#listAll', 'user_list'],
		['GET|POST', '/user/delete[i:id]', 'Users#delete', 'user_delete'],
		['GET|POST', '/user/signin', 'Users#signIn', 'user_signIn'],

		['GET|POST', '/articles/add', 'Articles#add', 'articles_add'],

		//route Ajax
		['GET|POST', '/ajax/add_user', 'Ajax#addUser', 'ajax_addUser'],
		

		['GET|POST', '/cat/', 'Users#cat', 'cat'],
		['GET', '/error/page404', 'Default#page404', 'page404'],
	);