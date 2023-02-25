<?php
$view->dump($produitsfini)

?>
<section class="listing_abonne">
<?php include ('sidebar.php');?>
    <div class="bloc_stats">
        <p>Nombre d'abonner : <?= $abonnes ;?> </p>
        <p>Nombre de produits : <?= $produits;?> </p>
        <p>Emprunts en cours  : <?= $utilisateurs;?> </p>
        <p>Emprunts en total  : <?= $produitsfini;?> </p>
    </div>
</section>




