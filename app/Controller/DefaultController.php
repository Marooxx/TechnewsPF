<?php

namespace Controller;

use \W\Controller\Controller;
use Model\DB\dbFactory;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		#Connexion à la BDD
		dbFactory::start();
		#Récupération des Articles en SPOTLIGHT
		$spotlight= \ORM::for_table('view_articles')->where('SPOTLIGHTARTICLE',1)->find_result_set();
		#Récupération de la page d'accueil
		$articles = \ORM::for_table('view_articles')->find_result_set();

		#Transmission à la Vue
		$this->show('default/home',['spotlights'=>$spotlight,'articles'=>$articles]);
	}


	# la fonction permet d'afficher les articles d'une categorie
	# @param String $categorie
	public function categorie($categorie)

	{
		# connexion à la BDD
		dbFactory::start();

		# Récupérer les articles de la Categorie
		$articles = \ORM::for_table('view_articles')->where('LIBELLECATEGORIE',ucfirst($categorie))->find_result_set();// ucfirst() mettre premiere letter en majuscule

		#Transmission à la Vue
		$this->show('default/categorie',['article'=>$articles,'categorie'=>$categorie]);




	}



}

















/*public function accueil()
	{
		$this->show('default/accueil');
	}
	public function omar ()
	{
		$this->show('default/omar');
	}
*/
