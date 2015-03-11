<?php

/* FEGeneralBundle:Accueil:index.html.twig */
class __TwigTemplate_04706c90b9bb9b6479605d08951ecd4f4e471bec385cc04a071238862f38c552 extends Twig_Template
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
            'body' => array($this, 'block_body'),
            'test' => array($this, 'block_test'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    Homepage.
";
    }

    // line 7
    public function block_test($context, array $blocks = array())
    {
        // line 8
        echo "    TEST
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
        return array (  48 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
