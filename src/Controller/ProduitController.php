<?php


namespace App\Controller;

use App\Model\ProduitModel;
use App\Service\Form;
use App\Service\Validation;
use Core\Kernel\Config;

class ProduitController extends BaseController
{

    public function index()
    {


        //$this->dump($message);
        $this->render('app.produit.index',array(

            'produits'=> ProduitModel::all(),

        ),'admin');
    }

    public function add()
    {
        $errors = array();
        if(!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            // Validation
            $v = new Validation();
            $errors = $this->validate($v,$post);
            if($v->isValid($errors))  {
                ProduitModel::insert($post);
                $this->addFlash('success', 'Merci pour l\'ajout de votre produit!');
                // redirection
                $this->redirect('produit');
            }
        }
        $form = new Form($errors);
        $this->render('app.produit.add',array(
            'form' =>$form,
        ), 'admin');
    }

    /* edit */

    public function edit($id)
    {
        $produits = $this->getProduitByIdOr404($id);
        $errors = array();
        $message = 'Administrateur';
        //$this->dump($message);
        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            // Validation
            $v = new Validation();
            $errors = $this->validate($v, $post);
            if ($v->isValid($errors)) {
                ProduitModel::update($id, $post);
                // Message flash
                $this->addFlash('success', 'Merci pour l\'ajout de votre produit!');
                // redirection
                $this->redirect('produit');
            }
        }
        $form = new Form($errors);
        $this->render('app.produit.edit',array(
            'form' =>$form,
            'produits'=>$produits,
        ),'admin');
    }

    /* delete */
    public function delete($id) {
        $this->getProduitByIdOr404($id);
        ProduitModel::delete($id);
        $this->addFlash('success', 'Merci pour avoir effacé cette recette!');
        $this->redirect('produit');
    }

    private function validate($v,$post)
    {
        $errors = [];
        $errors['titre'] = $v->textValid($post['titre'], 'titre',1, 70);
        $errors['description'] = $v->textValid($post['description'], 'description',15, 500);
        $errors['reference'] = $v->textValid($post['reference'], 'reference',2, 15);
        return $errors;
    }

 // single //

    public function single($id){
        $errors = array();
        $articles = $this->getProduitByIdOr404($id);
        $produits = ProduitModel::findById($id);
        $form = new Form($errors);
        $this->render('app.produit.single',array(
            'form' =>$form,
            'produits' => $produits,
        ),'admin');
    }
    private function getProduitByIdOr404($id)
    {
        $abonne = ProduitModel::findById($id);
        if(empty($abonne)) {
            $this->Abort404();
        }
        return $abonne;
    }
}