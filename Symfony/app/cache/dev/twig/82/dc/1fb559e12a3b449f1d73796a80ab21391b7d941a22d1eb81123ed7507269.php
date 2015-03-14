<?php

/* FEFavorisBundle:UserFavoris:show.html.twig */
class __TwigTemplate_82dc1fb559e12a3b449f1d73796a80ab21391b7d941a22d1eb81123ed7507269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FEFavorisBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'favoris_content' => array($this, 'block_favoris_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FEFavorisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_favoris_content($context, array $blocks = array())
    {
        // line 4
        echo "    <table class=\"table\">
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeFavoris"]) ? $context["listeFavoris"] : $this->getContext($context, "listeFavoris")));
        foreach ($context['_seq'] as $context["_key"] => $context["favoris"]) {
            // line 6
            echo "        <tr>
            <td> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "url", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "nom", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "description", array()), "html", null, true);
            echo " </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoris'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </table>
<p>
    <!-- Button trigger modal -->
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

                <form action=\"\"  method=\"post\">
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"url\">URL :</label>
                            <input class=\"form-control\" type=\"text\" class=\"form-control\" id=\"url\" name=\"_url\" required=\"required\" maxlength=\"255\" placeholder=\"http://exemple.com\"/>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"nom\">Nom :</label>
                            <input class=\"form-control\" type=\"text\" id=\"nom\" name=\"_nom\" required=\"required\" maxlength=\"255\" placeholder=\"Exemple\"/>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"description\">Description :</label>
                            <textarea class=\"form-control\" id=\"description\" name=\"_description\" maxlength=\"2048\" rows=\"4\" placeholder=\"Ajouter une description pour décrire le favoris...\"/></textarea>
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
    </div>
</p>
";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "    <script type=\"text/javascript\">
    \$(function(){

    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FEFavorisBundle:UserFavoris:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 60,  116 => 59,  67 => 12,  58 => 9,  54 => 8,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
