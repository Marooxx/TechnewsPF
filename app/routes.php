<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/accueil.html', 'Default#home', 'default_accueil'],
		//['GET', '/accueil.html', 'Default#accueil', 'default_accueil'],
		//['GET', '/omar.html'/*on met le nom que l'on veut*/, 'Default#omar', 'default_omar'],

		#Route pour afficher les articles d'une catégorie
		['GET', '/categorie/[:categorie]', 'Default#categorie', 'default_categorie'],
	);             //      controller    /  routes       /
