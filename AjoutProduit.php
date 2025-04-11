<?php require 'produit.class.php' ?>

<h1>Ajouter des produits</h1>

<form action="" method="POST" enctype="multipart/form-data">
    <label for="nom">NOM</label>
    <input type="text" name="nom" id="">
    <br>

    <label for="prix">PRIX</label>
    <input type="text" name="prix" id="">
    <br>

    <label for="description">DESCRIPTION</label>
    <input type="text" name="description" id="">
    <br>

    <label for="images">IMAGES</label>
    <input name="upload[]" type="file" id="images" accept="image/*" multiple />
    <br>

    <input type="submit" value="Enregistrer">
</form>


<?php
    if(isset($_POST["nom"]) && $_POST["nom"]!="" && isset($_POST["prix"]) && $_POST["prix"]!="" && isset($_POST["description"]) && $_POST["description"]!="" && (array_key_exists('upload', $_FILES) && array_key_exists('error', $_FILES['upload']))){
        
        foreach ($_FILES["upload"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["upload"]["tmp_name"][$key];
                // basename() may prevent filesystem traversal attacks;
                // further validation/sanitation of the filename may be appropriate
                $name = basename($_FILES["upload"]["name"][$key]);
                move_uploaded_file($tmp_name, "ImageProduit/$name");
            }
        }

        $nom = $_POST["nom"];
        $prix = $_POST["prix"];
        $description = $_POST["description"];
        $images = array();

        foreach ($_FILES["upload"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $images[] = $_FILES["upload"]["name"][$key];
            }
        }

        
        $data = [
            "nom" => $nom,
            "prix" => $prix,
            "description" => $description,
            "images" => $images
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
    $dir_nom = './ImageProduit';

?>   

<table border=2>
    <thead>
        <th>NOM</th>
        <th>PRIX</th>
        <th>DESCRIPTION</th>
        <th>IMAGES</th>
    </thead>

    <tbody>
        <?php foreach($produits as $produit): ?>
            <tr>
                <td><?php echo $produit["nom"]; ?></td>
                <td><?php echo $produit["prix"]; ?></td>
                <td><?php echo $produit["description"]; ?></td>
                <td>
                    <?php foreach($produit["images"] as $image): ?>
                        <?php echo "<img src=\"$dir_nom/$image\" width='200' height='200'>" ?>
                    <?php endforeach ?>
                </td>
            </tr>
        <?php endforeach; ?>    
    </tbody>
</table>