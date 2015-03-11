<?php

/* FEFavorisBundle:Default:index.html.twig */
class __TwigTemplate_f88a9966cb5e07b3cda70044d713331f26656b21a3064d0fc2c91b65c3c9289f extends Twig_Template
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
        echo "\t<h1>Voici la liste de vos favoris</h1>
\t<ul>
\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")));
        foreach ($context['_seq'] as $context["_key"] => $context["favori"]) {
            // line 7
            echo "\t\t<li>
\t\t\t<img src=\"http://www.google.com/s2/favicons?domain=";
            // line 8
            echo $this->env->getExtension('routing')->getPath("ROUTE");
            echo "\" />
\t\t\t<a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("ROUTE");
            echo "\">";
            echo $this->env->getExtension('routing')->getPath("ROUTE");
            echo "</a>
\t\t\t- ";
            // line 10
            echo $this->env->getExtension('routing')->getPath("ROUTE");
            echo "
\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favori'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "FEFavorisBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  60 => 10,  54 => 9,  50 => 8,  47 => 7,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
