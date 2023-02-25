<?php

namespace App\Controller;

use App\Model\AbonneModel;
use App\Model\BaseModel;
use App\Model\BorrowsModel;
use App\Model\ProduitModel;
use App\Service\Form;
use App\Service\Validation;
use Core\Kernel\Config;
class BorrowsController extends BaseController
{

    public function index(){
       $utilisateurs = BorrowsModel::getAllBorrowsOrderBy();
        $errors = array();
        $form = new Form($errors);
        $abonnes = AbonneModel::all();
        $produits = ProduitModel::all();
        if(!empty($_POST['submitted'])) {

            // CleanXss
            $post = $this->cleanXss($_POST);
            // Validation
            $v = new Validation();
            $verifProduit = ProduitModel::findById($post['select-produits']);

            if (empty($verifProduit)) {
                $errors['select-produits'] = 'Le produit' . 'n\'existe pas dans la base de données';
            }
            $verifabonne = AbonneModel::findById($post['select-abonne']);
            if (empty($verifabonne)) {
                $errors['select-abonne'] = 'L \'abonner' . 'n\'existe pas dans la base de données';
            }
            if ($v->isValid($errors)) {
                BorrowsModel::insert($post);
                $this->redirect('borrows');
            }
        }


        $this->render('app.borrows.index',array(
            'form'=>$form,
            'utilisateurs'=> $utilisateurs,
            'produits'=>$produits,
            'abonnes'=>$abonnes,
            'subscribe'=> AbonneModel::all(),
            'prd'=> ProduitModel::all(),

        ),'admin');
    }

    // stats
    public function stats(){
        $utilisateurs = BorrowsModel::countEmpruntsEnCours();
        $abonnes = BorrowsModel::countabonnesEnCours();
        $produits = BorrowsModel::countproduitEnCours();
        $produitsfini = BorrowsModel::countEmpruntsFini() ;
        $this->render('app.borrows.stats', array(
            'utilisateurs' => $utilisateurs,
            'abonnes'=>$abonnes,
            'produits'=> $produits,
            'produitsfini' => $produitsfini
        ),'admin');

    }

    public function end($id) {
        $cat = BorrowsModel::findById($id);
        if (empty($cat)){
            $this->redirect('404');
        }
        BorrowsModel::updateendDate($id);
        $this->redirect('borrows');
    }

    // listing //
    public function single($id){
        $abonne = AbonneModel::findById($id);

        $utilisateurs = BorrowsModel::getAllBorrowsID($abonne->id);
        $this->render('app.borrows.single',array(
           'utilisateurs' => $utilisateurs,
        ),'admin');
    }









}