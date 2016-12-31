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
        $__internal_904e1a2e38bb421da07be52af940ef9b0551d545052d02e009209cacf8665cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_904e1a2e38bb421da07be52af940ef9b0551d545052d02e009209cacf8665cdf->enter($__internal_904e1a2e38bb421da07be52af940ef9b0551d545052d02e009209cacf8665cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECeasyCloudBundle:Default:inscription.html.twig"));

        $__internal_39362c4ad0aa3080901da3bca230fe48e0d5e7f95fa5ae4b42c05e918adf9f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39362c4ad0aa3080901da3bca230fe48e0d5e7f95fa5ae4b42c05e918adf9f70->enter($__internal_39362c4ad0aa3080901da3bca230fe48e0d5e7f95fa5ae4b42c05e918adf9f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECeasyCloudBundle:Default:inscription.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"HandheldFriendly\" content=\"true\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bootstrap/css/bootstrap.css"), "html", null, true);
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
\t\t\t\t<div >
\t\t\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, ($context["info"] ?? $this->getContext($context, "info")), "html", null, true);
        echo "
\t\t\t\t</br>
\t\t\t\t</div>

\t\t\t  <form class=\"inscription\" action=\"/inscription\" method=\"post\">
\t\t\t\t<h2 class=\"form-signin-heading\">Enregistrez-vous</h2>

\t\t\t\t<label for=\"inputUserName\" class=\"sr-only\">Nom d'Utilisateur</label>
\t\t\t\t<input type=\"text\" name=\"pseudo\" class=\"form-control\" ";
        // line 29
        if ((($context["pseudo"] ?? $this->getContext($context, "pseudo")) != "")) {
            echo " value=";
            echo twig_escape_filter($this->env, ($context["pseudo"] ?? $this->getContext($context, "pseudo")), "html", null, true);
            echo " ";
        }
        echo " placeholder=\"Nom d'Utilisateur\" required autofocus>

\t\t\t\t<label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
\t\t\t\t<input type=\"password\" name=\"pass\"  class=\"form-control\" ";
        // line 32
        if ((($context["pass"] ?? $this->getContext($context, "pass")) != "")) {
            echo " value=";
            echo twig_escape_filter($this->env, ($context["pass"] ?? $this->getContext($context, "pass")), "html", null, true);
            echo " ";
        }
        echo " placeholder=\"Mot de passe\" required autofocus>

\t\t\t\t<label for=\"inputPassword\" class=\"sr-only\">Confirmer le mot de passe</label>
\t\t\t\t<input type=\"password\" name=\"passConf\"  class=\"form-control\" ";
        // line 35
        if ((($context["passConf"] ?? $this->getContext($context, "passConf")) != "")) {
            echo " value=";
            echo twig_escape_filter($this->env, ($context["passConf"] ?? $this->getContext($context, "passConf")), "html", null, true);
            echo " ";
        }
        echo " placeholder=\"Confirmer le mot de passe\" required autofocus>

\t\t\t\t<label for=\"inputEmail\" class=\"sr-only\">Email</label>
\t\t\t\t<input type=\"text\" name=\"mail\" class=\"form-control\" ";
        // line 38
        if ((($context["mail"] ?? $this->getContext($context, "mail")) != "")) {
            echo " value=";
            echo twig_escape_filter($this->env, ($context["mail"] ?? $this->getContext($context, "mail")), "html", null, true);
            echo " ";
        }
        echo " placeholder=\"Adresse Mail\" required autofocus>

\t\t\t\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">S'inscrire</button>
\t\t\t  </form>
\t\t\t</div> <!-- /jumbotron -->
\t\t</div> <!-- /container -->

\t\t<!-- inclusion de la page piedDePage.html-->
\t\t\t";
        // line 46
        $this->loadTemplate("commun/piedDePage.html", "ECeasyCloudBundle:Default:inscription.html.twig", 46)->display($context);
        // line 47
        echo "\t</body>
</html>
";
        
        $__internal_904e1a2e38bb421da07be52af940ef9b0551d545052d02e009209cacf8665cdf->leave($__internal_904e1a2e38bb421da07be52af940ef9b0551d545052d02e009209cacf8665cdf_prof);

        
        $__internal_39362c4ad0aa3080901da3bca230fe48e0d5e7f95fa5ae4b42c05e918adf9f70->leave($__internal_39362c4ad0aa3080901da3bca230fe48e0d5e7f95fa5ae4b42c05e918adf9f70_prof);

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
        return array (  111 => 47,  109 => 46,  94 => 38,  84 => 35,  74 => 32,  64 => 29,  53 => 21,  47 => 17,  45 => 16,  33 => 7,  25 => 1,);
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
\t\t<link rel=\"stylesheet\" href=\"{{ asset('bundles/bootstrap/css/bootstrap.css') }}\" />

\t\t<title>Formulaire d'inscription</title>
\t</head>

\t<body>
\t\t<div class=\"container\">

\t\t\t<!-- inclusion de la page menu.html-->
\t\t\t{% include 'commun/menu.html' %}

\t\t\t<!-- //Corps -->
\t\t\t<div class=\"jumbotron\">
\t\t\t\t<div >
\t\t\t\t\t{{ info }}
\t\t\t\t</br>
\t\t\t\t</div>

\t\t\t  <form class=\"inscription\" action=\"/inscription\" method=\"post\">
\t\t\t\t<h2 class=\"form-signin-heading\">Enregistrez-vous</h2>

\t\t\t\t<label for=\"inputUserName\" class=\"sr-only\">Nom d'Utilisateur</label>
\t\t\t\t<input type=\"text\" name=\"pseudo\" class=\"form-control\" {% if pseudo != '' %} value={{ pseudo }} {% endif %} placeholder=\"Nom d'Utilisateur\" required autofocus>

\t\t\t\t<label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
\t\t\t\t<input type=\"password\" name=\"pass\"  class=\"form-control\" {% if pass != '' %} value={{ pass }} {% endif %} placeholder=\"Mot de passe\" required autofocus>

\t\t\t\t<label for=\"inputPassword\" class=\"sr-only\">Confirmer le mot de passe</label>
\t\t\t\t<input type=\"password\" name=\"passConf\"  class=\"form-control\" {% if passConf != '' %} value={{ passConf }} {% endif %} placeholder=\"Confirmer le mot de passe\" required autofocus>

\t\t\t\t<label for=\"inputEmail\" class=\"sr-only\">Email</label>
\t\t\t\t<input type=\"text\" name=\"mail\" class=\"form-control\" {% if mail != '' %} value={{ mail }} {% endif %} placeholder=\"Adresse Mail\" required autofocus>

\t\t\t\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">S'inscrire</button>
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
