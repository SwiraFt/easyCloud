<?php

/* ECeasyCloudBundle:Default:inscription.html.twig */
class __TwigTemplate_cec3a50f9b2b5467ffdbcbe2718fcc6a110554972d104c1f072c4b8f40c7682e extends Twig_Template
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
        $__internal_3e07516b24e951ac61e864152556109cbfe2aba7d808f0ecb78592d54c426ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e07516b24e951ac61e864152556109cbfe2aba7d808f0ecb78592d54c426ba1->enter($__internal_3e07516b24e951ac61e864152556109cbfe2aba7d808f0ecb78592d54c426ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECeasyCloudBundle:Default:inscription.html.twig"));

        $__internal_eb4e4d1b213293f547671661f3d3b1cfa9d2944a066bc1d8a5c29093d9ff7cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4e4d1b213293f547671661f3d3b1cfa9d2944a066bc1d8a5c29093d9ff7cce->enter($__internal_eb4e4d1b213293f547671661f3d3b1cfa9d2944a066bc1d8a5c29093d9ff7cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECeasyCloudBundle:Default:inscription.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"HandheldFriendly\" content=\"true\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/style/css/bootstrap.css"), "html", null, true);
        echo "\" />

\t\t<title>Formulaire d'inscription</title>
\t</head>

\t<body>
\t\t<div class=\"container\">

\t\t\t<!-- inclusion de la page menu.html-->
\t\t\t";
        // line 16
        $this->loadTemplate("commun/menu.html", "ECeasyCloudBundle:Default:inscription.html.twig", 16)->display($context);
        // line 17
        echo "
\t\t\t<!-- //Corps -->
\t\t\t<div class=\"jumbotron\">
\t\t\t  <form class=\"inscription\" action=\"/inscription\" method=\"post\">

\t\t\t\t<label for=\"inputUserName class=\"sr-only\">Nom d'Utilisateur</label>
\t\t\t\t<input type=\"text\" name=\"pseudo\" class=\"form-control\" placeholder=\"Nom d'Utilisateur\" required autofocus>

\t\t\t\t<label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
\t\t\t\t<input type=\"password\" name=\"pass\"  class=\"form-control\" placeholder=\"Mot de passe\" required autofocus>

\t\t\t\t<label for=\"inputPassword\" class=\"sr-only\">Confirmer le mot de passe</label>
\t\t\t\t<input type=\"password\" name=\"passConf\"  class=\"form-control\" placeholder=\"Confirmer le mot de passe\" required autofocus>

\t\t\t\t<label for=\"inputUserName class=\"sr-only\">Email</label>
\t\t\t\t<input type=\"text\" name=\"mail\" class=\"form-control\" placeholder=\"Adresse Mail\" required autofocus>

\t\t\t\t<button type=\"submit\">S'inscrire</button>
\t\t\t  </form>
\t\t\t</div> <!-- /jumbotron -->
\t\t</div> <!-- /container -->

\t\t<!-- inclusion de la page piedDePage.html-->
\t\t\t";
        // line 40
        $this->loadTemplate("commun/piedDePage.html", "ECeasyCloudBundle:Default:inscription.html.twig", 40)->display($context);
        // line 41
        echo "\t</body>
</html>
";
        
        $__internal_3e07516b24e951ac61e864152556109cbfe2aba7d808f0ecb78592d54c426ba1->leave($__internal_3e07516b24e951ac61e864152556109cbfe2aba7d808f0ecb78592d54c426ba1_prof);

        
        $__internal_eb4e4d1b213293f547671661f3d3b1cfa9d2944a066bc1d8a5c29093d9ff7cce->leave($__internal_eb4e4d1b213293f547671661f3d3b1cfa9d2944a066bc1d8a5c29093d9ff7cce_prof);

    }

    public function getTemplateName()
    {
        return "ECeasyCloudBundle:Default:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 41,  72 => 40,  47 => 17,  45 => 16,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"HandheldFriendly\" content=\"true\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('bundles/style/css/bootstrap.css') }}\" />

\t\t<title>Formulaire d'inscription</title>
\t</head>

\t<body>
\t\t<div class=\"container\">

\t\t\t<!-- inclusion de la page menu.html-->
\t\t\t{% include 'commun/menu.html' %}

\t\t\t<!-- //Corps -->
\t\t\t<div class=\"jumbotron\">
\t\t\t  <form class=\"inscription\" action=\"/inscription\" method=\"post\">

\t\t\t\t<label for=\"inputUserName class=\"sr-only\">Nom d'Utilisateur</label>
\t\t\t\t<input type=\"text\" name=\"pseudo\" class=\"form-control\" placeholder=\"Nom d'Utilisateur\" required autofocus>

\t\t\t\t<label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
\t\t\t\t<input type=\"password\" name=\"pass\"  class=\"form-control\" placeholder=\"Mot de passe\" required autofocus>

\t\t\t\t<label for=\"inputPassword\" class=\"sr-only\">Confirmer le mot de passe</label>
\t\t\t\t<input type=\"password\" name=\"passConf\"  class=\"form-control\" placeholder=\"Confirmer le mot de passe\" required autofocus>

\t\t\t\t<label for=\"inputUserName class=\"sr-only\">Email</label>
\t\t\t\t<input type=\"text\" name=\"mail\" class=\"form-control\" placeholder=\"Adresse Mail\" required autofocus>

\t\t\t\t<button type=\"submit\">S'inscrire</button>
\t\t\t  </form>
\t\t\t</div> <!-- /jumbotron -->
\t\t</div> <!-- /container -->

\t\t<!-- inclusion de la page piedDePage.html-->
\t\t\t{% include 'commun/piedDePage.html' %}
\t</body>
</html>
", "ECeasyCloudBundle:Default:inscription.html.twig", "/home/amin/Documents/Pweb/easyCloud/src/EC/easyCloudBundle/Resources/views/Default/inscription.html.twig");
    }
}
