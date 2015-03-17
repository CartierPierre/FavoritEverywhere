<?php

/* ::base.html.twig */
class __TwigTemplate_d04c184010aa7661738ca8e1d9056f4d281fef0e86151e9eabdbac9772fa0da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>Favorite Everywhere";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- Style Sheets -->
";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>   
        <nav class=\"navbar navbar-inverse navbar-static-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\">
                        <strong class=\"text-white\">Favorite Everywhere</strong>
                    </a>
                </div>

                <div class=\"collapse navbar-collapse\">
                    <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                        <ul class=\"nav navbar-nav navbar-left\">
";
        // line 42
        $context["currentPath"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 43
        $context["menu"] = array(0 => array(0 => "Accueil", 1 => "home", 2 => "/"), 1 => array(0 => "Favoris", 1 => "star", 2 => "/favoris/"), 2 => array(0 => "Compte", 1 => "user", 2 => "/account/profile/"));
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 48
            $context["texte"] = $this->getAttribute($context["row"], 2, array(), "array");
            // line 49
            echo "                            <li ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "pathinfo", array()) == (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")))) ? ("class=\"active\"") : (""));
            echo " >
                                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")), "html", null, true);
            echo "\">
";
            // line 51
            $context["glyphicon"] = $this->getAttribute($context["row"], 1, array(), "array");
            // line 52
            echo "                                    <span class=\"glyphicon glyphicon-";
            echo twig_escape_filter($this->env, (isset($context["glyphicon"]) ? $context["glyphicon"] : $this->getContext($context, "glyphicon")), "html", null, true);
            echo "\" aria-hidden=\"true\"></span>
";
            // line 53
            $context["texte"] = $this->getAttribute($context["row"], 0, array(), "array");
            // line 54
            echo "                                    <strong class=\"text-white\">  ";
            echo twig_escape_filter($this->env, (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")), "html", null, true);
            echo "</strong>
                                </a>
                            </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                        </ul>

                        <ul class=\"nav navbar-nav navbar-right\">
";
        // line 61
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 62
            echo "                            <li>
                                <p class=\"navbar-text\">
                                    <span class=\"text-white\">";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "</span>
                                </p>
                            </li>
                            <li>
                                <a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"></span><strong class=\"text-white\">  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</strong></a>

                            </li>
";
        } else {
            // line 72
            echo "                            <li ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "pathinfo", array()) == "/account/login")) ? ("class=\"active\"") : (""));
            echo ">
                                <a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span><strong class=\"text-white\">  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</strong></a>
                            </li>
                            <li ";
            // line 75
            echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "pathinfo", array()) == "/account/register/")) ? ("class=\"active\"") : (""));
            echo ">
                                <a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><span class=\"glyphicon glyphicon-floppy-disk\" aria-hidden=\"true\"></span><strong class=\"text-white\">  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</strong></a>
                            </li>
";
        }
        // line 79
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 89
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 90
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 91
                echo "                            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                                ";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "                </div>
            </div>
        </div>

        <footer class=\"bs-docs-footer\" role=\"contentinfo\">
            <div class=\"container\">
                <p class=\"text-center text-white\">
                    <small>
                        Site réaliser par Cartier Pierre et Savarre Amaury dans le cadre d'un projet d'Architecture Web.<br>
                        2015 <a href=\"https://github.com/heraknos/FavoritEverywhere\" target=\"_blank\">GitHub</a>
                    </small>
                </p>
            </div>
        </footer>

        <!-- Scripts -->
        <script src=\"https://code.jquery.com/jquery.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>
        ";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css\" rel=\"stylesheet\">
";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "52b617b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_52b617b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/52b617b_custom_1.css");
            // line 17
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\"/>
";
        } else {
            // asset "52b617b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_52b617b") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/52b617b.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\"/>
";
        }
        unset($context["asset_url"]);
    }

    // line 97
    public function block_body($context, array $blocks = array())
    {
        // line 98
        echo "                    <div class=\"jumbotron\">
                        <h1>Désolé</h1>
                        <p>Cette page est toujours en cours de construction !</p>
                        <p><a class=\"btn btn-primary btn-lg\" href=\"/\" role=\"button\">Accueil</a></p>
                    </div>
";
    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 122,  266 => 98,  263 => 97,  247 => 17,  243 => 16,  239 => 14,  236 => 12,  231 => 9,  225 => 123,  223 => 122,  203 => 104,  201 => 97,  198 => 96,  192 => 95,  183 => 92,  178 => 91,  173 => 90,  168 => 89,  157 => 79,  149 => 76,  145 => 75,  138 => 73,  133 => 72,  124 => 68,  117 => 64,  113 => 62,  111 => 61,  106 => 58,  95 => 54,  93 => 53,  88 => 52,  86 => 51,  82 => 50,  77 => 49,  75 => 48,  71 => 47,  69 => 43,  67 => 42,  43 => 21,  40 => 20,  38 => 12,  32 => 9,  23 => 2,);
    }
}
