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

        $errors = array();
        $form = new Form($errors);
        $abonnes = AbonneModel::all();
        $produits = ProduitModel::all();
//        $utilisateurs = BorrowsModel::getAllBorrowsOrderBy();

        // CleanXss
        $post = $this->cleanXss($_POST);
        $this->dump( $post['select-produits']);
        $this->dump( $post['select-abonne']);
        // Validation
        $v = new Validation();
        $verifProduit = ProduitModel::findById($post['select-produits'] );
        if (empty($verifProduit)){
                       $errors['select-produits'] =  'Le produit' . 'n\'existe pas dans la base de données';
        }
        $verifabonne = ProduitModel::findById($post['select-abonne'] );
        if (empty($verifabonne)){
            $errors['select-abonne'] =  'L \'abonner' . 'n\'existe pas dans la base de données';
        }
        if($v->isValid($errors))  {
            BorrowsModel::insert($post);
            $this->redirect('borrows');
        }
        $this->render('app.borrows.index',array(
            'form'=>$form,
//            'utilisateurs'=> $utilisateurs,
            'produits'=>$produits,
            'abonnes'=>$abonnes,
            'subscribe'=> AbonneModel::all(),
            'prd'=> ProduitModel::all(),

        ),'admin');
    }

//    public function validate($post, $name)
//    {
//        $name1 = ProduitModel::findById($post['name'] );
//        if (empty($name1)){
//            $errors = $name. ' n\'existe pas dans la base de données';
//        }
//        return $errors ;
//    }



}