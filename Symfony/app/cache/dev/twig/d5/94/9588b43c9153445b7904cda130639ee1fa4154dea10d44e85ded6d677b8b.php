<?php

/* FEAccountBundle:Default:index.html.twig */
class __TwigTemplate_d5949588b43c9153445b7904cda130639ee1fa4154dea10d44e85ded6d677b8b extends Twig_Template
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
        echo " - Compte";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<form>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"accountEmail\">Email</label>
\t    \t<input type=\"email\" class=\"form-control\" id=\"accountEmail\" placeholder=\"Votre Email\">
\t    </div>
\t    <div class=\"form-group\">
\t\t\t<label for=\"accountPassword\">Email</label>
\t    \t<input type=\"password\" class=\"form-control\" id=\"accountPassword\" placeholder=\"Votre mot de passe\">
\t    </div>
\t    <button type=\"submit\" class=\"btn btn-default\">Submit</button>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "FEAccountBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
