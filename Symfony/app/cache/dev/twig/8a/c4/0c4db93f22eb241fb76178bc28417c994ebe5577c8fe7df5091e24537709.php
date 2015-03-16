<?php

/* FEFavorisBundle:UserFavoris:supprime_content.html.twig */
class __TwigTemplate_8ac40c4db93f22eb241fb76178bc28417c994ebe5577c8fe7df5091e24537709 extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fe_favoris_supprime");
        echo "\" id\"del_form\" method=\"post\">
    <input type=\"hidden\" name=\"_id\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "id", array()), "html", null, true);
        echo "\" />
    <a class=\"btn btn-danger btn-xs\" role=\"button\" onclick='this.parentNode.submit(); return false;'>
        <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
    </a>
</form>";
    }

    public function getTemplateName()
    {
        return "FEFavorisBundle:UserFavoris:supprime_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
