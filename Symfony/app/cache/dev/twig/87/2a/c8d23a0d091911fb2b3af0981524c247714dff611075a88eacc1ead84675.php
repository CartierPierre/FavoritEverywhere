<?php

/* FEFavorisBundle:Stats:index.html.twig */
class __TwigTemplate_872ac8d23a0d091911fb2b3af0981524c247714dff611075a88eacc1ead84675 extends Twig_Template
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
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeFavoris"]) ? $context["listeFavoris"] : $this->getContext($context, "listeFavoris")));
        foreach ($context['_seq'] as $context["_key"] => $context["favoris"]) {
            // line 5
            echo "        <p><span class=\"text-capitalize\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($context["favoris"], "url", array()), "."), 1, array(), "array"), "html", null, true);
            echo " </span> - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["favoris"], "nb_fav", array()), "html", null, true);
            echo " </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoris'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "FEFavorisBundle:Stats:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  44 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
