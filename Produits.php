<?php require 'produit.class.php' ?>

<form action="" method="POST">
    <label for="nom">NOM</label>
    <input type="text" name="nom" id="">
    <br>

    <label for="prix">PRIX</label>
    <input type="text" name="prix" id="">
    <br>

    <label for="description">DESCRIPTION</label>
    <input type="text" name="description" id="">
    <br>

    <input type="submit" value="Enregistrer">
</form>


<?php
    $nom = $_POST["nom"];
    $prix = $_POST["prix"];
    $description = $_POST["description"];

    if(isset($nom) && isset($prix) && isset($description)) {
        $data = [
            "nom" => $nom,
            "prix" => $prix,
            "description" => $description
        ];

        $content = file_get_contents("produits.json");
        $produits = [];
        if($content){
            $datas = json_decode($content,true);
        }
        $datas[] = $data;
        $produitsJSON = json_encode($datas, JSON_PRETTY_PRINT);
        file_put_contents("produits.json", $produitsJSON);
    }
?>

<?php
    $data = file_get_contents("produits.json");
    $produits = json_decode($data, true);
?>   

<table border=2>
    <thead>
        <th>NOM</th>
        <th>PRIX</th>
        <th>DESCRIPTION</th>
        <!-- <th>MOYENNE</th> -->
    </thead>

    <tbody>
        <?php foreach($produits as $produit): ?>
            <tr>
                <td><?php echo $produit["nom"]; ?></td>
                <td><?php echo $produit["prix"]; ?></td>
                <td><?php echo $produit["description"]; ?></td>
            </tr>
        <?php endforeach; ?>    
    </tbody>
</table>