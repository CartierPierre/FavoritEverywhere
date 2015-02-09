<?php

/* FavoritEverywhereFavorisBundle:Advert:view.html.twig */
class __TwigTemplate_349eb2e052fbb24a1edc21014e258740f9c556f478279d6aabe9ce75f6c5146e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Test Synfony</title>
    </head>
    <body>
        <h1>Affichage de l'annonce d'id : ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h1>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "FavoritEverywhereFavorisBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
