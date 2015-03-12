<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_1296d4351f9b4eec9d69b6a34356e756991ef83f50139ee59ad9f6952fb45f29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"jumbotron\">
        <h1>Profil du compte</h1>
        ";
        // line 8
        $this->env->loadTemplate("FOSUserBundle:Profile:show_content.html.twig")->display($context);
        // line 9
        echo "        <p><a class=\"btn btn-primary btn-lg\" href=\"edit\" role=\"button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  43 => 8,  39 => 6,  36 => 5,  11 => 1,);
    }
}
