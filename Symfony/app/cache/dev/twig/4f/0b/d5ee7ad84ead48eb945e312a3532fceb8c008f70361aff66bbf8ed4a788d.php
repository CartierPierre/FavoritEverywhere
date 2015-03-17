<?php

/* FEFavorisBundle:UserFavoris:info_content.html.twig */
class __TwigTemplate_4f0bd5ee7ad84ead48eb945e312a3532fceb8c008f70361aff66bbf8ed4a788d extends Twig_Template
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
        echo "<button type=\"button\" class=\"btn btn-info btn-xs\" data-toggle=\"modal\" data-target=\"#info";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "id", array()), "html", null, true);
        echo "Modal\">
    <span class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></span>
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"info";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "id", array()), "html", null, true);
        echo "Modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"infoModalLabel\" aria-hidden=\"true\" data-backdrop=\"false\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"infoModalLabel\"> <div class=\"limit\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "nom", array()), "html", null, true);
        echo "</div> :</h4>
            </div>

            <div class=\"modal-body\">
                <table class=\"table\">
                    <tr>
                        <td>Nom : </td>
                        <td><div class=\"limit\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "nom", array()), "html", null, true);
        echo "</div></td>
                    </tr>
                    <tr>
                        <td>URL : </td>
                        <td><div class=\"limit\"><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "url", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "url", array()), "html", null, true);
        echo "</a></div></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><div class=\"description\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "description", array()), "html", null, true);
        echo "</div></td>
                    </tr>
                </table>
            </div>

            <div class=\"modal-footer\">
                <div class=\"form-group\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FEFavorisBundle:UserFavoris:info_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 26,  53 => 22,  46 => 18,  36 => 11,  28 => 6,  19 => 1,);
    }
}
