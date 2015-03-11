<?php

/* base.html.twig */
class __TwigTemplate_7e9139f1af86903a7e06aff0f07fbbc3340591cdf2a1e0aa8720155d8ce2a8ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'test' => array($this, 'block_test'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
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
                <ul class=\"nav navbar-nav\">
                    ";
        // line 24
        ob_start();
        // line 25
        echo "                        ";
        $context["currentPath"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 26
        echo "                        ";
        $context["menu"] = array(0 => array(0 => "Accueil", 1 => "/"), 1 => array(0 => "Favoris", 1 => "/favoris/"), 2 => array(0 => "Compte", 1 => "/account/"));
        // line 27
        echo "                        ";
        $context["texte"] = "";
        // line 28
        echo "
                        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 30
            echo "                            ";
            $context["texte"] = $this->getAttribute($context["row"], 1, array(), "array");
            // line 31
            echo "                            <li ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "pathinfo", array()) == (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")))) ? ("class=\"active\"") : (""));
            echo " >
                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")), "html", null, true);
            echo "\">
                                    ";
            // line 33
            $context["texte"] = $this->getAttribute($context["row"], 0, array(), "array");
            // line 34
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
        // line 38
        echo "                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 39
        echo "                </ul>
            </div>
        </nav>

        <div class=\"container-fluid\">
            <div class=\"row\">

                <div class=\"col-md-8\">
                    ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "                </div>

                <div class=\"col-md-1\">
                    ";
        // line 51
        $this->displayBlock('test', $context, $blocks);
        // line 52
        echo "                </div>  
            </div>
        </div>        
        
        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Favorite Everywhere";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            ";
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
    }

    // line 51
    public function block_test($context, array $blocks = array())
    {
    }

    // line 56
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
        return array (  159 => 56,  154 => 51,  149 => 47,  144 => 9,  142 => 8,  139 => 7,  133 => 6,  127 => 57,  125 => 56,  119 => 52,  117 => 51,  112 => 48,  110 => 47,  100 => 39,  97 => 38,  86 => 34,  84 => 33,  80 => 32,  75 => 31,  72 => 30,  68 => 29,  65 => 28,  62 => 27,  59 => 26,  56 => 25,  54 => 24,  37 => 11,  35 => 7,  31 => 6,  24 => 1,);
    }
}
