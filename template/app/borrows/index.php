<?php

?>

<section class="listing_abonne">
    <?php include ('sidebar.php');?>

    <div class="bloc_">
    <form action="" method="post" novalidate class="wrapform form_select" onsubmit="return confirm('Voulez-vous confirmer ?');">

        <?php echo $form->label('Le produit empruntés'); ?>
        <?php echo $form->selectEntity('select-produits', $produits, 'titre'); ?>

        <?php echo $form->error('select-produits'); ?>

        <?php echo $form->label('L\'abonné'); ?>
        <?php echo $form->selectEntity('select-abonne', $abonnes, 'nom'); ?>

        <?php echo $form->error('select-abonne'); ?>

        <?php echo $form->submit('submitted'); ?>
    </form>

    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Objet emprunté</th>
            <th>Date de commencement</th>
            <th>Email</th>
            <th>Age</th>
            <th> Donnez un date de fin </th>
        </tr>
        </thead>
        <tbody>
        <?php
        // boucle sur les objets empruntés par l'utilisateur
        foreach ($utilisateurs as $utilisateur) {
            $nom = $utilisateur->getnom();
            $prenom = $utilisateur->getPrenom();
            $objet_emprunte = $utilisateur->getTitre();
            $date_debut = $utilisateur->getDate_start();
            $email = $utilisateur->getEmail();
            $age = $utilisateur->getAge();
            // affiche une ligne pour chaque objet emprunté
            echo "<tr>
                        <td>$nom</td>
                        <td>$prenom</td>
                        <td>$objet_emprunte</td>
                        <td>$date_debut</td>
                        <td>$email</td>
                        <td>$age</td>
                        <td>  <a class=\"btn\" onclick=\"return confirm('Voulez-vous confirmer ?')\" href=\"" . $view->path('end', array('id' => $utilisateur->id)) . "\">Fin</a></td>
  
                       
</td>
                      </tr>";
        }
        ?>
        </tbody>
    </table>
    </div>




</section>
