<?php

/* ECeasyCloudBundle:Default:index.html.twig */
class __TwigTemplate_b78dfcdbcb13df30f815364d51c076cc2d38dc9b78aef6b78d4abc74f6ab8a11 extends Twig_Template
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
        $__internal_df820d6bee3f1dd3087f4a7e69eed5f4152240b349fe2d3fdf8838ed625c7caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df820d6bee3f1dd3087f4a7e69eed5f4152240b349fe2d3fdf8838ed625c7caf->enter($__internal_df820d6bee3f1dd3087f4a7e69eed5f4152240b349fe2d3fdf8838ed625c7caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECeasyCloudBundle:Default:index.html.twig"));

        $__internal_72e211f7d0f64c15b7b2bc037da0135cb8610194a81d608b16646876fd748a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e211f7d0f64c15b7b2bc037da0135cb8610194a81d608b16646876fd748a5e->enter($__internal_72e211f7d0f64c15b7b2bc037da0135cb8610194a81d608b16646876fd748a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ECeasyCloudBundle:Default:index.html.twig"));

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

\t\t<title>Accueil</title>
\t</head>

\t<body>
\t\t<div class=\"container\">
\t\t\t<!-- inclusion de la page menu.html-->
\t\t\t";
        // line 15
        $this->loadTemplate("commun/menu.html", "ECeasyCloudBundle:Default:index.html.twig", 15)->display($context);
        // line 16
        echo "
    <!-- corp -->
\t\t\t<div class=\"jumbotron\">
\t\t\t\t<div >
\t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, ($context["info"] ?? $this->getContext($context, "info")), "html", null, true);
        echo "
\t\t\t\t</br>
\t\t\t\t</div>
\t\t\t\t <form class=\"form-signin\" action=\"/authentification\" method=\"post\">
\t\t\t\t\t<h2 class=\"form-signin-heading\">Authentifiez-vous</h2>

\t\t\t\t\t<label for=\"inputUserName\" class=\"sr-only\">Nom d'Utilisateur</label>
\t\t\t\t\t<input type=\"text\" name=\"pseudo\" class=\"form-control\" placeholder=\"Nom d'Utilisateur\" required autofocus>

\t\t\t\t\t<label for=\"inputPassword\" class=\"sr-only\">Mot de Passe</label>
\t\t\t\t\t<input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Mot de passe\" required autofocus>

\t\t\t\t\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Connexion</button>
\t\t\t\t</form>
\t\t\t\t\t<p><a href=\"/inscription\">Je n'ai pas encore de compte, je veux m'inscrire</a></p>
\t\t\t</div> <!-- /jumbotron -->
\t\t</div> <!-- /container -->

\t\t<!-- inclusion de la page piedDePage.html-->
\t\t\t";
        // line 39
        $this->loadTemplate("commun/piedDePage.html", "ECeasyCloudBundle:Default:index.html.twig", 39)->display($context);
        // line 40
        echo "\t</body>
</html>
";
        
        $__internal_df820d6bee3f1dd3087f4a7e69eed5f4152240b349fe2d3fdf8838ed625c7caf->leave($__internal_df820d6bee3f1dd3087f4a7e69eed5f4152240b349fe2d3fdf8838ed625c7caf_prof);

        
        $__internal_72e211f7d0f64c15b7b2bc037da0135cb8610194a81d608b16646876fd748a5e->leave($__internal_72e211f7d0f64c15b7b2bc037da0135cb8610194a81d608b16646876fd748a5e_prof);

    }

    public function getTemplateName()
    {
        return "ECeasyCloudBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 40,  74 => 39,  52 => 20,  46 => 16,  44 => 15,  33 => 7,  25 => 1,);
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

\t\t<title>Accueil</title>
\t</head>

\t<body>
\t\t<div class=\"container\">
\t\t\t<!-- inclusion de la page menu.html-->
\t\t\t{% include 'commun/menu.html' %}

    <!-- corp -->
\t\t\t<div class=\"jumbotron\">
\t\t\t\t<div >
\t\t\t\t\t{{ info }}
\t\t\t\t</br>
\t\t\t\t</div>
\t\t\t\t <form class=\"form-signin\" action=\"/authentification\" method=\"post\">
\t\t\t\t\t<h2 class=\"form-signin-heading\">Authentifiez-vous</h2>

\t\t\t\t\t<label for=\"inputUserName\" class=\"sr-only\">Nom d'Utilisateur</label>
\t\t\t\t\t<input type=\"text\" name=\"pseudo\" class=\"form-control\" placeholder=\"Nom d'Utilisateur\" required autofocus>

\t\t\t\t\t<label for=\"inputPassword\" class=\"sr-only\">Mot de Passe</label>
\t\t\t\t\t<input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Mot de passe\" required autofocus>

\t\t\t\t\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Connexion</button>
\t\t\t\t</form>
\t\t\t\t\t<p><a href=\"/inscription\">Je n'ai pas encore de compte, je veux m'inscrire</a></p>
\t\t\t</div> <!-- /jumbotron -->
\t\t</div> <!-- /container -->

\t\t<!-- inclusion de la page piedDePage.html-->
\t\t\t{% include 'commun/piedDePage.html' %}
\t</body>
</html>
", "ECeasyCloudBundle:Default:index.html.twig", "/home/amin/Documents/Pweb/easyCloud/src/EC/easyCloudBundle/Resources/views/Default/index.html.twig");
    }
}
