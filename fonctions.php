<?php require 'produit.class.php' ?>


<?php 

	function produitObjet($produits){
		$array = [];
		foreach ($produits as $produit) {
			$array[] = new Produit($produit["id"],$produit["nom"],$produit["description"],$produit["prix"],$produit["avis"],$produit["images"]);
		}
		return $array;
	}



?>