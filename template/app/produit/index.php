<?php
?>

<?php
//$view->dump($produits)

?>
<section class="listing_abonne">
    <?php include ('sidebar.php') ?>
    <div class="wrap_listing">
        <p> Les produits </p>
        <p><a class="btnnew" href="<?php echo $view->path('add-produit'); ?>"> Ajouter un produit</a></p>


        <table class="wrapform">
            <thead>
            <tr>
                <th>Titre du Produits</th>
                <th>Détails</th>
                <th>Supprimer</th>
                <th>Éditer</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($produits as $produit) { ?>
                <tr>
                    <td><?php echo $produit->titre; ?></td>
                    <td><a class="btn" href="<?php echo $view->path('single-produit', array('id' => $produit->id)); ?>">Détails</a></td>
                    <td><a class="btn supp" onclick="return confirm('Voulez-vous effacer ?')" href="<?php echo $view->path('delete-produit', array('id' => $produit->id)); ?>">Effacer</a></td>
                    <td><a class="btn" href="<?php echo $view->path('edit-produit', array('id' => $produit->id)); ?>">Éditer</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    </div>
</section>


