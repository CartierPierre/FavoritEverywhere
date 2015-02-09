<?php

namespace FE\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FEAccountBundle:Default:index.html.twig', array('name' => $name));
    }
}
