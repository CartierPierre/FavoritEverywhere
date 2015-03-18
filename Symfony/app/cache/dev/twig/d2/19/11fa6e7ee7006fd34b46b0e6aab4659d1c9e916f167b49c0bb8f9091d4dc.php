<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_d21911fa6e7ee7006fd34b46b0e6aab4659d1c9e916f167b49c0bb8f9091d4dc extends Twig_Template
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
        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <table class=\"table\">
        <tr>
            <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</td>
            <td>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" role=\"button\" class=\"btn btn-danger\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
            </td>
        </tr>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  45 => 14,  39 => 11,  35 => 10,  29 => 7,  25 => 6,  19 => 2,);
    }
}
