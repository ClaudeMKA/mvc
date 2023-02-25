<?php

$routes = array(
    array('home','default','index'),
    /* Route */
    array('abonne', 'abonne','index'),
    array('add-abonne', 'abonne','add'),
    array('edit-abonne','abonne','edit',['id']),
    array('single-abonne','abonne','single', ['id']),
    array('delete-abonne','abonne','delete', array('id')),
    /* Route */
    array('produit', 'produit','index'),
    array('add-produit', 'produit','add'),
    array('edit-produit','produit','edit',['id']),
    array('single-produit','produit','single', ['id']),
    array('delete-produit','produit','delete', array('id')),
    /* Emprunt  */
    array('borrows', 'borrows','index'),
    /*  Route */
    array('stats', 'borrows','stats'),
    array('end', 'borrows','end',array('id')),
    array('single-borrows','borrows','single',array('id')),

);









