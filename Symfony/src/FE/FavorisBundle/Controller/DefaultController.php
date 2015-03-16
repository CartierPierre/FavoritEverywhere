<?php

namespace FE\FavorisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Model\UserInterface;
use FE\FavorisBundle\Entity\Favoris;

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

    public function ajoutAction(Request $request)
    {
        if ($request->isMethod('POST'))
        {
            $favoris = new Favoris();
            $data = $request->request->all();

            $em = $this->getDoctrine()->getManager();
            $listeFavoris = $em->getRepository('FEFavorisBundle:Favoris')
                               ->urlExist($this->getUser()->getId(), $data['_url']);

            if(count($listeFavoris) == 0)
            {
                $favoris->setUrl($data['_url']);
                $favoris->setNom($data['_nom']);
                $favoris->setDescription($data['_description']);
                if(array_key_exists( '_statifiable' , $data ))
                    $favoris->setStatifiable(true);
                else
                    $favoris->setStatifiable(false);
                $favoris->setIdUser($this->getUser()->getId());

                $em->persist($favoris);
                $em->flush();

                $request->getSession()->getFlashBag()->add('success', 'Nouveau favoris ajouté.');
            }
            else
            {
                $request->getSession()->getFlashBag()->add('info', 'Vous avez déjà cette adresse en favoris.');
            }
        }
        else
        {
            $request->getSession()->getFlashBag()->add('danger', 'Impossible d\'ajouté le favoris.');
        }

        return $this->redirect($this->generateUrl('fe_favoris_homepage'));
    }

    public function modifieAction(Request $request)
    {
        if ($request->isMethod('POST'))
        {
            $data = $request->request->all();

            //Récupère le favoris à modifier
            $em = $this->getDoctrine()->getManager();
            $favoris = $em->getRepository('FEFavorisBundle:Favoris')->find($data['_id']);

            //Met à jour les données
            $favoris->setNom($data['_nom']);
            $favoris->setDescription($data['_description']);
            if(array_key_exists( '_statifiable' , $data ))
                $favoris->setStatifiable(true);
            else
                $favoris->setStatifiable(false);

            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'Le favoris à été mis à jour.');
        }
        else
        {
            $request->getSession()->getFlashBag()->add('danger', 'Impossible de mettre à jour le favoris.');
        }

        return $this->redirect($this->generateUrl('fe_favoris_homepage'));
    }

    public function supprimeAction(Request $request)
    {
        if ($request->isMethod('POST'))
        {
            $data = $request->request->all();

            //Récupère le favoris à modifier
            $em = $this->getDoctrine()->getManager();
            $favoris = $em->getRepository('FEFavorisBundle:Favoris')->find($data['_id']);

            //Supprime le favoris
            $em->remove($favoris);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'Le favoris à été supprimé.');
        }
        else
        {
            $request->getSession()->getFlashBag()->add('danger', 'Impossible de supprimer le favoris.');
        }

        return $this->redirect($this->generateUrl('fe_favoris_homepage'));
    }
}
