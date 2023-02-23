<section class="sidebar">

    <?php include ('sidebar.php') ?>
    <div class="wrapform">
    <form action="" method="post" novalidate class="wrapform">
        <?php echo $form->label('prenom'); ?>
        <?php echo $form->input('prenom','text') ?>
        <?php echo $form->error('prenom'); ?>

        <?php echo $form->label('Nom'); ?>
        <?php echo $form->input('nom','text') ?>
        <?php echo $form->error('nom'); ?>

        <?php echo $form->label('Email'); ?>
        <?php echo $form->input('email','email') ?>
        <?php echo $form->error('email'); ?>

        <?php echo $form->label('Age'); ?>
        <?php echo $form->input('age','text') ?>
        <?php echo $form->error('age'); ?>




        <?php echo $form->submit('submitted'); ?>
    </form>
    </div>
</section>

