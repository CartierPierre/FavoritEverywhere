<?php

namespace FE\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FEAccountBundle:Default:index.html.twig');
    }
    
    public function newAccountAction($name)
    {
        // On crée un objet Advert
	    $compte = new Compte();

	    // On crée le FormBuilder grâce au service form factory
	    $formBuilder = $this->get('form.factory')->createBuilder('form', $compte);
	
	    // On ajoute les champs de l'entité que l'on veut à notre formulaire
	    $formBuilder
	      ->add('Pseudo',       'text')
	      ->add('Mot de passe', 'password')
	      ->add('E-mail',       'text')
	      ->add('Valider',      'submit')
	    ;
	
	    // À partir du formBuilder, on génère le formulaire
	    $form = $formBuilder->getForm();
	
	    // On passe la méthode createView() du formulaire à la vue
	    // afin qu'elle puisse afficher le formulaire toute seule
	    return $this->render('FEAccountBundle:Default:index.html.twig', array(
	      'form' => $form->createView(),
	    ));
    }
}
