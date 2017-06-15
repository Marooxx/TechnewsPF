<?PHP
namespace Model\News;

class CategorieModel extends \W\Model\Model
{

	public function getCategories()
	{
		// je récupère les catégories depuis la BDD
		$categories = $this->findAll();
		#print_r($categories);
        #SELECT DISTINCT(LIBELLECATEGORIE) FROM view_articles


		// Je cree un tableau vide pour stocker mes objets de categorie
		$data = [];


	// -- Je commence par parcourir mes catégories et pour chacune d'elles, je crée un nouvel objet.
	// -- je place ensuite cet objet 'Categorie' dans un tableau "data"

		foreach($categories as $categorie)
		{
			$data[] = new Categorie($categorie['IDCATEGORIE'],$categorie['LIBELLECATEGORIE']);
		}
		// Ma fonction renvoi le tableau comprenant les objets de type categorie
		return $data;
	}

#print_r($data)
//



}
