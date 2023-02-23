<?php

namespace App\Controller;

use App\Model\AbonneModel;
use App\Service\Form;
use App\Service\Validation;
use Core\Kernel\Config;

class AbonneController extends BaseController
{
    public function index()
    {


        $message = 'Administrateur';
        //$this->dump($message);
        $this->render('app.abonne.index',array(
            'message' => $message,
            'abonnes'=> AbonneModel::all(),

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
            $errors['email[]'] = $this->getemailUnique($post['email']);
            if($v->isValid($errors))  {
                AbonneModel::insert($post);
                $this->addFlash('success', 'Merci pour votre Inscription!');
                // redirection
            }
        }
        $form = new Form($errors);
        $this->render('app.abonne.add',array(
               'form' =>$form,
        ), 'admin');
    }


    public function single($id){
       $errors = array();
        $articles = $this->getAbonneByIdOr404($id);
        $abonnes = AbonneModel::findById($id);
        $form = new Form($errors);
        $this->render('app.abonne.single',array(
            'form' =>$form,
            'abonnes' => $abonnes,
        ),'admin');

    }

    public function edit($id)
    {
        $abonnes = $this->getAbonneByIdOr404($id);
     $errors = array();
        $message = 'Administrateur';
        //$this->dump($message);
        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            // Validation
            $v = new Validation();
            $errors = $this->validate($v, $post);
            if ($v->isValid($errors)) {
                AbonneModel::update($id, $post);
                // Message flash
                $this->addFlash('success', 'Merci pour l\'édition de cette recette!');
                // redirection
                $this->redirect('abonne');
            }
        }
        $form = new Form($errors);
        $this->render('app.abonne.edit',array(
            'form' =>$form,
            'abonnes'=>$abonnes,
        ),'admin');
    }



    // delete
    public function delete($id) {
        $this->getAbonneByIdOr404($id);
        AbonneModel::delete($id);
        $this->addFlash('success', 'Merci pour avoir effacé cette recette!');
        $this->redirect('abonne');
    }


    private function validate($v,$post)
    {
        $errors = [];
        $errors['email']=$v->emailValid($post['email']);
        $errors['age'] = $v->textValid($post['age'], 'age',1, 3);
        $errors['prenom'] = $v->textValid($post['prenom'], 'prenom',1, 500);
        $errors['nom'] = $v->textValid($post['nom'], 'nom',5, 20);
        return $errors;
    }



    public function getemailUnique($value){
        $column = 'email';
        $errors = '';
        $email = AbonneModel::findByColumn($column,$value);
        if(!empty($email)) {
            $errors = 'Email déjà pris';
        }
        return $errors;
    }


    private function getAbonneByIdOr404($id)
    {
        $abonne = AbonneModel::findById($id);
        if(empty($abonne)) {
            $this->Abort404();
        }
        return $abonne;
    }



}