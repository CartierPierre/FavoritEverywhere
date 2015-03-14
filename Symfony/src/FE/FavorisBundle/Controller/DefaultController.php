<?php

namespace FE\FavorisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $securityContext = $this->container->get('security.context');

        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->showAction();
        }
        else
        {
            return $this->statAction();
        }
    }

    public function statAction()
    {
        $em = $this->getDoctrine()->getManager();
        $favorisRepository = $em->getRepository('FEFavorisBundle:Favoris');
        $listeFavoris = $favorisRepository->countFavoris();

        if( null === $listeFavoris )
        {
            throw new NotFoundHttpException("Problème dans la récupération de la liste des favoris");
        }

        return $this->render('FEFavorisBundle:Stats:index.html.twig', array( 'listeFavoris' => $listeFavoris));
    }

    public function listAction()
    {
        $favoris = $this->get('doctrine')
            ->getManager()
            ->createQuery('SELECT p FROM FE/FavorisBundle:Default p')
            ->execute();

        return $this->render('index.html.twig', array('favoris' => $favoris));
    }

    public function showAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $listeFavoris = $this->getDoctrine()
                             ->getManager()
                             ->getRepository('FEFavorisBundle:Favoris')
                             ->userFavoris($user->getId());

        return $this->render('FEFavorisBundle:UserFavoris:show.html.twig', array( 'listeFavoris' => $listeFavoris));
    }
}
