<?php

/* FEFavorisBundle::layout.html.twig */
class __TwigTemplate_78617f1e06e4f06effc33e567f1dc2765a052ad3bb1917f8812068fe44ad3ef8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'favoris_content' => array($this, 'block_favoris_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " - Favoris";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"jumbotron container\">
    <h1>Favoris</h1>
    ";
        // line 8
        $this->displayBlock('favoris_content', $context, $blocks);
        // line 10
        echo "</div>
";
    }

    // line 8
    public function block_favoris_content($context, array $blocks = array())
    {
        // line 9
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FEFavorisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  58 => 8,  53 => 10,  51 => 8,  47 => 6,  44 => 5,  38 => 3,  11 => 1,);
    }
}
