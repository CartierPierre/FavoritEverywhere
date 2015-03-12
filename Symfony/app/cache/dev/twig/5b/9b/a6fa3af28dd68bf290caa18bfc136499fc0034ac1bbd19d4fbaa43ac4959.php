<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_5b9ba6fa3af28dd68bf290caa18bfc136499fc0034ac1bbd19d4fbaa43ac4959 extends Twig_Template
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
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    <div id=\"fos_user_registration_form\">
        <div class=\"form-group\">
            <label for=\"fos_user_registration_form_email\" class=\"required\">Email:</label>
            <input class=\"form-control\" type=\"email\" id=\"fos_user_registration_form_email\" name=\"fos_user_registration_form[email]\" required=\"required\" />
        </div>

        <div class=\"form-group\">
            <label for=\"fos_user_registration_form_username\" class=\"required\">Username:</label>
            <input class=\"form-control\" type=\"text\" id=\"fos_user_registration_form_username\" name=\"fos_user_registration_form[username]\" required=\"required\" maxlength=\"255\" pattern=\".{2,}\" />
        </div>

        <div class=\"form-group\">
            <label for=\"fos_user_registration_form_plainPassword_first\" class=\"required\">Password:</label>
            <input class=\"form-control\" type=\"password\" id=\"fos_user_registration_form_plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" />
        </div>

        <div class=\"form-group\">
            <label for=\"fos_user_registration_form_plainPassword_second\" class=\"required\">Repeat password:</label>
            <input class=\"form-control\" type=\"password\" id=\"fos_user_registration_form_plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" />
        </div>

        <input type=\"hidden\" id=\"fos_user_registration_form__token\" name=\"fos_user_registration_form[_token]\" value=\"s8RLjp99gy6ieQNgxMqlezacsWyP_LahjiZnQgU_TOQ\" />
    </div>

    <div class=\"form-group\">
        <input class=\"btn btn-default\" type=\"submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 29,  22 => 3,  19 => 2,);
    }
}
