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
        echo "    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th></th>
                <th> URL </th>
                <th> Nom </th>
                <th> Description </th>
            </tr>
        </thead>
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeFavoris"]) ? $context["listeFavoris"] : $this->getContext($context, "listeFavoris")));
        foreach ($context['_seq'] as $context["_key"] => $context["favoris"]) {
            // line 14
            echo "        <tbody>
            <tr ";
            // line 15
            echo ((($this->getAttribute($context["favoris"], "statifiable", array()) == false)) ? ("class=\"warning\"") : (""));
            echo ">
                <td><img class=\"media-object\" src=\"http://www.google.com/s2/favicons?domain=";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "url", array()), "html", null, true);
            echo "\" alt=\"...\"></td>
                <td> <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "url", array()), "html", null, true);
            echo "</a></td>
                <td> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "nom", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "description", array()), "html", null, true);
            echo " </td>
                <td>
                    <button type=\"button\" class=\"btn btn-info btn-xs\" data-toggle=\"modal\" data-target=\"#";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "id", array()), "html", null, true);
            echo "Modal\">
                        <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                    </button>

                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "id", array()), "html", null, true);
            echo "Modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modifModalLabel\" aria-hidden=\"true\" data-backdrop=\"false\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <h4 class=\"modal-title\" id=\"ajoutModalLabel\">Modification :</h4>
                                </div>

                                <form action=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("fe_favoris_modifie");
            echo "\"  method=\"post\">
                                    <div class=\"modal-body\">
                                        <div class=\"form-group\">
                                            <label for=\"nom\">Nom :</label>
                                            <input class=\"form-control\" type=\"text\" id=\"nom\" name=\"_nom\" required=\"required\" maxlength=\"255\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "nom", array()), "html", null, true);
            echo "\"/>
                                        </div>

                                        <div class=\"form-group\">
                                            <label for=\"url\">URL :</label>
                                            <input class=\"form-control\" type=\"url\" class=\"form-control\" id=\"url\" name=\"_url\" required=\"required\" maxlength=\"255\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "url", array()), "html", null, true);
            echo "\"/>
                                        </div>

                                        <div class=\"form-group\">
                                            <label for=\"description\">Description :</label>
                                            <textarea class=\"form-control\" id=\"description\" name=\"_description\" maxlength=\"2048\" rows=\"4\" />";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "description", array()), "html", null, true);
            echo "</textarea>
                                        </div>

                                        <div class=\"form-group\">
                                            <input type=\"checkbox\" id=\"statifiable\" name=\"_statifiable\" value=\"true\" ";
            // line 52
            echo ((($this->getAttribute($context["favoris"], "statifiable", array()) == 1)) ? ("checked=\"true\"") : (""));
            echo "/>
                                            <label for=\"statifiable\">Permettre l'utilisation de ce favoris pour les statistiques</label>
                                        </div>
                                        <input type=\"hidden\" name=\"_id\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "id", array()), "html", null, true);
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
                    </div>
                </td>
                <td>
                    <form action=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("fe_favoris_supprime");
            echo "\" id\"del_form\" method=\"post\">
                        <input type=\"hidden\" name=\"_id\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "id", array()), "html", null, true);
            echo "\" />
                        <a class=\"btn btn-danger btn-xs\" role=\"button\" onclick='this.parentNode.submit(); return false;'>
                            <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                        </a>
                    </form>
                </td>
            </tr>
        <tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoris'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    </table>

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

                <form action=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("fe_favoris_ajoute");
        echo "\"  method=\"post\">
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"nom\">Nom :</label>
                            <input class=\"form-control\" type=\"text\" id=\"nom\" name=\"_nom\" required=\"required\" maxlength=\"255\" placeholder=\"Exemple\"/>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"url\">URL :</label>
                            <input class=\"form-control\" type=\"url\" class=\"form-control\" id=\"url\" name=\"_url\" required=\"required\" maxlength=\"255\" placeholder=\"http://exemple.com\"/>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"description\">Description :</label>
                            <textarea class=\"form-control\" id=\"description\" name=\"_description\" maxlength=\"2048\" rows=\"4\" placeholder=\"Ajouter une description pour décrire le favoris...\" defaultValue=\"\"/></textarea>
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
    </div>
";
    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        // line 132
        echo "    <script type=\"text/javascript\">
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
        return array (  232 => 132,  229 => 131,  191 => 96,  173 => 80,  158 => 71,  154 => 70,  136 => 55,  130 => 52,  123 => 48,  115 => 43,  107 => 38,  100 => 34,  89 => 26,  81 => 21,  76 => 19,  72 => 18,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  51 => 13,  40 => 4,  37 => 3,  11 => 1,);
    }
}
