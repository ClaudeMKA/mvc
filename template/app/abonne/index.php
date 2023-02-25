<?php


?>
<section class="listing_abonne">
    <?php include ('sidebar.php') ?>
    <div class="wrap_listing">
        <?php echo $message ;?>
        <p><a class="btnnew" href="<?php echo $view->path('add-abonne'); ?>"> Ajouter un Abonne </a></p>


        <table class="wrapform">
            <thead>
            <tr>
                <th>Prénom</th>
                <th>Détails</th>
                <th>Supprimer</th>
                <th>Éditer</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($abonnes as $abonne) { ?>
                <tr>
                    <td><?php echo $abonne->prenom; ?></td>
                    <td><a class="btn" href="<?php echo $view->path('single-abonne', array('id' => $abonne->id)); ?>">Détails</a>
                        <a href="<?php echo $view->path('single-borrows', array('id' => $abonne->id)); ?>">Détails des emprunts</a>
                    </td>
                    <td><a class="btn supp" onclick="return confirm('Voulez-vous effacer ?')" href="<?php echo $view->path('delete-abonne', array('id' => $abonne->id)); ?>">Effacer</a></td>
                    <td><a class="btn" href="<?php echo $view->path('edit-abonne', array('id' => $abonne->id)); ?>">Éditer</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    </div>
</section>

