<section class="sidebar">

    <?php include ('sidebar.php') ?>
    <div class="wrapform">

    <form action="" method="post" novalidate class="wrapform">
        <?php echo $form->label('prenom'); ?>
        <?php echo $form->input('prenom','text',$abonnes->prenom ?? '') ?>
        <?php echo $form->error('prenom'); ?>

        <?php echo $form->label('Nom'); ?>
        <?php echo $form->input('nom','text', $abonnes->nom ?? '') ?>
        <?php echo $form->error('nom'); ?>

        <?php echo $form->label('Email'); ?>
        <?php echo $form->input('email','email', $abonnes->email ?? '') ?>
        <?php echo $form->error('email'); ?>

        <?php echo $form->label('Age'); ?>
        <?php echo $form->input('age','text', $abonnes->age ?? '') ;?>
        <?php echo $form->error('age'); ?>

        </form>
    </div>
</section>
