<?php

/* FEGeneralBundle:Accueil:index.html.twig */
class __TwigTemplate_eb5e7e8fb9fc870d082c57ef3d6a49fec794377cd90574b6ed3166e522988ad4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"jumbotron\">
    <h1>Favorite Everywhere</h1>
        
    <div>
        Emportez vos favoris sur n'importe quel navigateur, peu importe où vous allez.<br/>
        Il vous suffit de vous connecter pour accèder facilement à vos sites préférés.
    </div>

    <h2>Comment ça marche ?</h2>

    <div>
        Connectez-vous ou inscrivez-vous si vous n'avez pas de compte, puis allez dans l'onglet Favoris.<br/>
        Il vous suffit alors de suivre la démarche pour enregistrer vos liens vers vos sites favoris.<br/>
        Vous pourrez à tout moment modifier ou supprimer ces liens, ainsi que gérer votre compte.
    </div>

    <h2>Quels sont les avantages ?</h2>

    <div>
        Grâce à Favorite Everywhere, vous pourrez emporter facilement tous vos favoris sur n'importe quel ordinateur ayant un accès internet !<br/>
        Vous voyagez à l'étranger, vous n'avez pas en tête le lien vers votre carnetd e rendez-vous en ligne ? Pas de panique, connectez vous à Favorite Everywhere pour retrouver en un seul clic vos sites préférés.<br/>
        Ce système à l'avantage de fonctionner sur n'importe quel navigateur de n'importe quel système d'exploitation !
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FEGeneralBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
