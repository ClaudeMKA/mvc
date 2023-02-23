<?php

?>

<nav>
    <ul>
        <li>
            <a href="#" class="logo">
                <i class="fa-solid fa-star"></i>
                <span class="nav-item">Claudy</span>
            </a>
        </li>
        <li><a href="<?= $view->path(''); ?>">
                <i class="fas fa-home"></i>
                <span class="nav-item">Home</span>
            </a></li>
        <li><a href="<?= $view->path('abonne'); ?>">
                <i class="fas fa-user"></i>
                <span class="nav-item">Abonne</span>
            </a></li>
        <li><a href="<?= $view->path('produit'); ?>">
                <i class="fas fa-wallet"></i>
                <span class="nav-item">Produits</span>
            </a></li>
        <li><a href="#">
                <i class="fas fa-chart-bar"></i>
                <span class="nav-item">Analytics</span>
            </a></li>
        <li><a href="#">
                <i class="fas fa-chart-tasks"></i>
                <span class="nav-item">Task</span>
            </a></li>
    </ul>
</nav>
