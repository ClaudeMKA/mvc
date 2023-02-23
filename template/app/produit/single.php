<section class="sidebar">

    <?php include ('sidebar.php') ?>
    <div class="wrapform">
        <form action="" method="post" novalidate class="wrapform">
            <?php echo $form->label('titre'); ?>
            <?php echo $form->input('titre','text',$produits->titre ?? '') ?>
            <?php echo $form->error('titre'); ?>

            <?php echo $form->label('description'); ?>
            <?php echo $form->input('description','text',$produits->description ?? '') ?>
            <?php echo $form->error('description'); ?>

            <?php echo $form->label('reference'); ?>
            <?php echo $form->input('reference','reference',$produits->reference ?? '') ?>
            <?php echo $form->error('reference'); ?>



        </form>
    </div>
</section>
