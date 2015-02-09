<?php

namespace FE\FavorisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FEFavorisBundle:Default:index.html.twig', array('name' => $name));
    }
}
