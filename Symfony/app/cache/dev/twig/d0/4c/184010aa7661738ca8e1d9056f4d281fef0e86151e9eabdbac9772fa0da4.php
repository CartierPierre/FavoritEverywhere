<?php

/* base.html.twig */
class __TwigTemplate_d04c184010aa7661738ca8e1d9056f4d281fef0e86151e9eabdbac9772fa0da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'test' => array($this, 'block_test'),
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
        <!-- Scripts -->
        <script src=\"https://code.jquery.com/jquery.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>   
        <nav class=\"navbar navbar-inverse navbar-static-top\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"/\">
                    <strong class=\"text-white\">Favorite Everywhere</strong>
                </a>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-left\">
";
        // line 38
        $context["currentPath"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 39
        $context["menu"] = array(0 => array(0 => "Accueil", 1 => "home", 2 => "/"), 1 => array(0 => "Favoris", 1 => "star", 2 => "/favoris/"), 2 => array(0 => "Compte", 1 => "user", 2 => "/account/"));
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 44
            $context["texte"] = $this->getAttribute($context["row"], 2, array(), "array");
            // line 45
            echo "                    <li ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "pathinfo", array()) == (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")))) ? ("class=\"active\"") : (""));
            echo " >
                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")), "html", null, true);
            echo "\">
";
            // line 47
            $context["glyphicon"] = $this->getAttribute($context["row"], 1, array(), "array");
            // line 48
            echo "                            <span class=\"glyphicon glyphicon-";
            echo twig_escape_filter($this->env, (isset($context["glyphicon"]) ? $context["glyphicon"] : $this->getContext($context, "glyphicon")), "html", null, true);
            echo "\" aria-hidden=\"true\"></span>
";
            // line 49
            $context["texte"] = $this->getAttribute($context["row"], 0, array(), "array");
            // line 50
            echo "                            <strong class=\"text-white\">  ";
            echo twig_escape_filter($this->env, (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")), "html", null, true);
            echo "</strong>
                        </a>
                    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
";
        // line 57
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 58
            echo "                    <li>
                        <p class=\"navbar-text\">
                            <span class=\"text-white\">";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " - </span><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        </p>
                    </li>
";
        } else {
            // line 64
            echo "                    <li>
                        <a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    </li>
";
        }
        // line 71
        echo "                </ul>
            </div>
        </nav>

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-2\">
";
        // line 78
        $this->displayBlock('test', $context, $blocks);
        // line 79
        echo "                </div>

                <div class=\"col-md-10\">
                    ";
        // line 83
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 84
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 85
                echo "                            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                                ";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "                </div>
            </div>
        </div>

        ";
        // line 102
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
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

    // line 78
    public function block_test($context, array $blocks = array())
    {
    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        // line 92
        echo "                    <div class=\"jumbotron\">
                        <h1>Désolé</h1>
                        <p>Cette page est toujours en cours de construction !</p>
                        <p><a class=\"btn btn-primary btn-lg\" href=\"/\" role=\"button\">Learn more</a></p>
                    </div>
";
    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 102,  249 => 92,  246 => 91,  241 => 78,  225 => 17,  221 => 16,  217 => 14,  214 => 12,  209 => 9,  203 => 103,  201 => 102,  195 => 98,  193 => 91,  190 => 90,  184 => 89,  175 => 86,  170 => 85,  165 => 84,  160 => 83,  155 => 79,  153 => 78,  144 => 71,  136 => 68,  128 => 65,  125 => 64,  114 => 60,  110 => 58,  108 => 57,  103 => 54,  92 => 50,  90 => 49,  85 => 48,  83 => 47,  79 => 46,  74 => 45,  72 => 44,  68 => 43,  66 => 39,  64 => 38,  48 => 25,  41 => 20,  39 => 12,  33 => 9,  24 => 2,);
    }
}
