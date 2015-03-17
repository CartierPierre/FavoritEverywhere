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
                <th> Info </th>
                <th> Modifier </th>
                <th> Supprimer </th>
            </tr>
        </thead>
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeFavoris"]) ? $context["listeFavoris"] : $this->getContext($context, "listeFavoris")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["favoris"]) {
            // line 16
            echo "        <tbody>
            <tr class=\"";
            // line 17
            echo ((($this->getAttribute($context["favoris"], "statifiable", array()) == false)) ? ("warning") : (""));
            echo " test\">
                <td><img class=\"media-object\" src=\"http://www.google.com/s2/favicons?domain=";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "url", array()), "html", null, true);
            echo "\" alt=\"Favicon du site ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "url", array()), "html", null, true);
            echo "\"></td>
                <td> <div class=\"limit\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "url", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "url", array()), "html", null, true);
            echo "</a></div></td>
                <td> <div class=\"limit\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "nom", array()), "html", null, true);
            echo "</div> </td>
                <td>
                    ";
            // line 22
            $this->env->loadTemplate("FEFavorisBundle:UserFavoris:info_content.html.twig")->display($context);
            // line 23
            echo "                </td>
                <td>
                    ";
            // line 25
            $this->env->loadTemplate("FEFavorisBundle:UserFavoris:modifie_content.html.twig")->display($context);
            // line 26
            echo "                </td>
                <td>
                    ";
            // line 28
            $this->env->loadTemplate("FEFavorisBundle:UserFavoris:supprime_content.html.twig")->display($context);
            // line 29
            echo "                </td>
            </tr>
        </tbody>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoris'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </table>

    ";
        // line 35
        $this->env->loadTemplate("FEFavorisBundle:UserFavoris:ajout_content.html.twig")->display($context);
        // line 36
        echo "
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
        return array (  130 => 36,  128 => 35,  124 => 33,  107 => 29,  105 => 28,  101 => 26,  99 => 25,  95 => 23,  93 => 22,  88 => 20,  82 => 19,  76 => 18,  72 => 17,  69 => 16,  52 => 15,  39 => 4,  36 => 3,  11 => 1,);
    }
}
