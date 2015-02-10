<?php

namespace FE\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('FEGeneralBundle:Accueil:index.html.twig');
    }
}
