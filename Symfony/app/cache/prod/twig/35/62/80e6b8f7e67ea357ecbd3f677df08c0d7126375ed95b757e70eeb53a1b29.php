<?php

/* FEFavorisBundle:UserFavoris:ajout_content.html.twig */
class __TwigTemplate_356280e6b8f7e67ea357ecbd3f677df08c0d7126375ed95b757e70eeb53a1b29 extends Twig_Template
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
        echo "<!-- Button trigger modal -->
<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#ajoutModal\">
  Ajouter un favoris
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"ajoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ajoutModalLabel\" aria-hidden=\"true\" data-backdrop=\"false\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"ajoutModalLabel\">Ajouter un favoris :</h4>
            </div>

            <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fe_favoris_ajoute");
        echo "\"  method=\"post\">
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <label for=\"nom\">Nom :</label>
                        <input class=\"form-control\" type=\"text\" id=\"nom\" name=\"_nom\" required=\"required\" maxlength=\"64\" placeholder=\"Exemple\"/>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"url\">URL :</label>
                        <input class=\"form-control\" type=\"url\" class=\"form-control\" id=\"url\" name=\"_url\" required=\"required\" maxlength=\"255\" placeholder=\"http://exemple.com\"/>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"description\">Description :</label>
                        <textarea class=\"form-control\" id=\"description\" name=\"_description\" maxlength=\"255\" rows=\"4\" placeholder=\"Ajouter une description pour décrire le favoris...\" defaultValue=\"\"/></textarea>
                    </div>

                    <div class=\"form-group\">
                        <input type=\"checkbox\" id=\"statifiable\" name=\"_statifiable\" value=\"true\" checked=\"true\" />
                        <label for=\"statifiable\">Permettre l'utilisation de ce favoris pour les statistiques</label>
                    </div>
                </div>

                <div class=\"modal-footer\">
                    <div class=\"form-group\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                        <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"Ajouter\" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FEFavorisBundle:UserFavoris:ajout_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  19 => 1,);
    }
}
