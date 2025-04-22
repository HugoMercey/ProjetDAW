<?php require 'produit.class.php' ?>


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