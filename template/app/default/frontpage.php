
<section id="frontpage">
<?php include('sidebar.php') ?>

    <div class="cadre1">
    <h1 style="text-align: center;font-size:33px;margin: 100px 0;color:#A67153;">
    <?= $message; ?>
</h1>
        <div class="petit_cadre">
        <div class="bloc_blanc">
            <a href="<?= $view->path('produit'); ?>">
            <p> Les Produits </p>
            </a>
            <i class="fa-brands fa-shopify"></i>
        </div>
            <div class="bloc_blanc">
                <a href="<?= $view->path('abonne'); ?>">
                    <p> Les Abonnee </p>
                </a>
                <i class="fa-brands fa-discord"></i>
            </div>

            <div class="bloc_blanc">
                <a href="<?= $view->path('abonne'); ?>">
                    <p> Les Emprunts </p>
                </a>
                <i class="fa-solid fa-arrow-up"></i>
            </div>

            <div class="bloc_blanc">
                <a href="<?= $view->path('abonne'); ?>">
                    <p> Les Statistiques </p>
                </a>
                <i class="fa-brands fa-stack-overflow"></i>
            </div>
        </div>
    </div>
</section>