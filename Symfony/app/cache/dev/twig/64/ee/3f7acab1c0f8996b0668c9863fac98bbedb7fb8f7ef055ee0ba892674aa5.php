<?php

/* FEFavorisBundle:UserFavoris:modifie_content.html.twig */
class __TwigTemplate_64ee3f7acab1c0f8996b0668c9863fac98bbedb7fb8f7ef055ee0ba892674aa5 extends Twig_Template
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
        echo "<button type=\"button\" class=\"btn btn-warning btn-xs\" data-toggle=\"modal\" data-target=\"#modif";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "id", array()), "html", null, true);
        echo "Modal\">
    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"modif";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "id", array()), "html", null, true);
        echo "Modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modifModalLabel\" aria-hidden=\"true\" data-backdrop=\"false\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"ajoutModalLabel\">Modification :</h4>
            </div>

            <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fe_favoris_modifie");
        echo "\"  method=\"post\">
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <label for=\"nom\">Nom :</label>
                        <input class=\"form-control\" type=\"text\" id=\"nom\" name=\"_nom\" required=\"required\" maxlength=\"64\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "nom", array()), "html", null, true);
        echo "\"/>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"url\">URL :</label>
                        <input class=\"form-control\" type=\"url\" class=\"form-control\" id=\"url\" name=\"_url\" required=\"required\" maxlength=\"255\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "url", array()), "html", null, true);
        echo "\" disabled/>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"description\">Description :</label>
                        <textarea class=\"form-control\" id=\"description\" name=\"_description\" maxlength=\"255\" rows=\"4\" />";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "description", array()), "html", null, true);
        echo "</textarea>
                    </div>

                    <div class=\"form-group\">
                        <input type=\"checkbox\" id=\"statifiable\" name=\"_statifiable\" value=\"true\" ";
        // line 32
        echo ((($this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "statifiable", array()) == 1)) ? ("checked=\"true\"") : (""));
        echo "/>
                        <label for=\"statifiable\">Permettre l'utilisation de ce favoris pour les statistiques</label>
                    </div>
                    <input type=\"hidden\" name=\"_id\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favoris"]) ? $context["favoris"] : $this->getContext($context, "favoris")), "id", array()), "html", null, true);
        echo "\" />
                </div>

                <div class=\"modal-footer\">
                    <div class=\"form-group\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                        <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"Modifier\" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FEFavorisBundle:UserFavoris:modifie_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 35,  69 => 32,  62 => 28,  54 => 23,  46 => 18,  39 => 14,  28 => 6,  19 => 1,);
    }
}
