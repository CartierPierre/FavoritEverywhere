<?php

namespace FE\FavorisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FEFavorisBundle:Default:index.html.twig');
    }
    
    public function listAction()
    {
        $favoris = $this->get('doctrine')
            ->getManager()
            ->createQuery('SELECT p FROM FE/FavorisBundle:Default p')
            ->execute();

        return $this->render('index.html.twig', array('favoris' => $favoris));
    }

    public function showAction($id)
    {
        $favori = $this->get('doctrine')
            ->getManager()
            ->getRepository('FE/FavorisBundle:Default')
            ->find($id);

        if (!$favori) {
            // cause the 404 page not found to be displayed
            throw $this->createNotFoundException();
        }

        return $this->render('index.html.twig', array('favori' => $favori));
    }
}
