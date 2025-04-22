<?php require 'fonctions.php' ?>

<?php
	$data = file_get_contents("produits.json");
    $dataDecode = json_decode($data, true);
    $dir_nom = './ImageProduit';
    $produits = produitObjet($dataDecode);
?>

<label for="produitSelect">Choisir un produit</label>

<select name="produit" id="produitSelect">
	<?php foreach($produits as $produit): ?>
		<option value="<?php echo $produit->getId() ?>"><?php echo $produit->getNom() ?></option>
	<?php endforeach; ?>
</select>