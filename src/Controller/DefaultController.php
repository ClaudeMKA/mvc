<?php

namespace App\Controller;

use Core\Kernel\AbstractController;

/**
 *
 */
class DefaultController extends AbstractController
{
    public function index()
    {
        $message = 'Quels contenus souhaitez vous gérer ?';
        //$this->dump($message);
        $this->render('app.default.frontpage',array(
            'message' => $message,
        ));
    }

    /**
     * Ne pas enlever
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }
}
