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
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>   
        <nav class=\"navbar navbar-inverse navbar-static-top\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"/\">
                    <strong>Favorite Everywhere</strong>
                </a>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-left\">
                    ";
        // line 26
        ob_start();
        // line 27
        echo "                        ";
        $context["currentPath"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 28
        echo "                        ";
        $context["menu"] = array(0 => array(0 => "Accueil", 1 => "/"), 1 => array(0 => "Favoris", 1 => "/favoris/"), 2 => array(0 => "Compte", 1 => "/account/"));
        // line 29
        echo "                        ";
        $context["texte"] = "";
        // line 30
        echo "
                        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 32
            echo "                            ";
            $context["texte"] = $this->getAttribute($context["row"], 1, array(), "array");
            // line 33
            echo "                            <li ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "pathinfo", array()) == (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")))) ? ("class=\"active\"") : (""));
            echo " >
                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")), "html", null, true);
            echo "\">
                                    ";
            // line 35
            $context["texte"] = $this->getAttribute($context["row"], 0, array(), "array");
            // line 36
            echo "                                    ";
            echo twig_escape_filter($this->env, (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")), "html", null, true);
            echo "
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 41
        echo "                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    
                        ";
        // line 44
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 45
            echo "                        <li>
                            <p class=\"navbar-text\">
                                ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            </p>
                        </li>
                        ";
        } else {
            // line 51
            echo "                        <li>
                            <a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        </li>
                        ";
        }
        // line 58
        echo "                    
                </ul>
            </div>
        </nav>

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    ";
        // line 66
        $this->displayBlock('test', $context, $blocks);
        // line 67
        echo "                </div>

                <div class=\"col-md-10\">
                    ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "                </div>

                
            </div>
        </div>        
        
        ";
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            ";
        // line 11
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
    }

    // line 66
    public function block_test($context, array $blocks = array())
    {
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        // line 71
        echo "                        <div class=\"jumbotron\">
                            <h1>Désolé</h1>
                            <p>Cette page est toujours en cours de construction !</p>
                            <p><a class=\"btn btn-primary btn-lg\" href=\"/\" role=\"button\">Learn more</a></p>
                        </div>
                    ";
    }

    // line 83
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
        return array (  209 => 83,  200 => 71,  197 => 70,  192 => 66,  187 => 11,  185 => 10,  182 => 9,  177 => 8,  171 => 84,  169 => 83,  161 => 77,  159 => 70,  154 => 67,  152 => 66,  142 => 58,  134 => 55,  126 => 52,  123 => 51,  112 => 47,  108 => 45,  106 => 44,  101 => 41,  98 => 40,  87 => 36,  85 => 35,  81 => 34,  76 => 33,  73 => 32,  69 => 31,  66 => 30,  63 => 29,  60 => 28,  57 => 27,  55 => 26,  38 => 13,  36 => 9,  32 => 8,  24 => 2,);
    }
}
