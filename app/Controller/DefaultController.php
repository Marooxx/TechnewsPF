<?php

namespace Controller;

use \W\Controller\Controller;
use Model\DB\DbFactory;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		#Connexion à la BDD
		DbFactory::start();
		#Récupération des Articles en SPOTLIGHT
		$spotlight= \ORM::for_table('view_articles')->where('SPOTLIGHTARTICLE',1)->find_result_set();

		#Transmission à la Vue
		$this->show('default/home',['spotlights'=>$spotlight]);
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
}
