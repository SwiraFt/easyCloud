<?php

/* commun/menu.html */
class __TwigTemplate_3ddca9491a53f994d819a4a09b2ab3e4c7b491511485060d8d3a2f6e356cc807 extends Twig_Template
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
        $__internal_4e58a20ca18dbaa493645623cc07169a96d7c124af48310c3a38084c96ee189b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e58a20ca18dbaa493645623cc07169a96d7c124af48310c3a38084c96ee189b->enter($__internal_4e58a20ca18dbaa493645623cc07169a96d7c124af48310c3a38084c96ee189b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "commun/menu.html"));

        $__internal_9c08a65573c73847aaf1503d7bbb2fdf7607a259317c08355c28e7a1661ad0b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c08a65573c73847aaf1503d7bbb2fdf7607a259317c08355c28e7a1661ad0b3->enter($__internal_9c08a65573c73847aaf1503d7bbb2fdf7607a259317c08355c28e7a1661ad0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "commun/menu.html"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Easy Cloud</a>
          </div>
          <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
              <li class=\"active\"><a href=\"/\">Accueil</a></li>
\t\t\t  <li><a href=\"/inscription\">Inscription</a></li>
\t\t\t  <li><a href=\"/\">Authentification</a></li>
              <li><a href=\"/repertoire\">Mon repertoire</a></li>
\t\t\t  </li>
\t\t</div><!--/.nav-collapse -->
\t</div><!--/.container-fluid -->
</nav>
";
        
        $__internal_4e58a20ca18dbaa493645623cc07169a96d7c124af48310c3a38084c96ee189b->leave($__internal_4e58a20ca18dbaa493645623cc07169a96d7c124af48310c3a38084c96ee189b_prof);

        
        $__internal_9c08a65573c73847aaf1503d7bbb2fdf7607a259317c08355c28e7a1661ad0b3->leave($__internal_9c08a65573c73847aaf1503d7bbb2fdf7607a259317c08355c28e7a1661ad0b3_prof);

    }

    public function getTemplateName()
    {
        return "commun/menu.html";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Easy Cloud</a>
          </div>
          <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
              <li class=\"active\"><a href=\"/\">Accueil</a></li>
\t\t\t  <li><a href=\"/inscription\">Inscription</a></li>
\t\t\t  <li><a href=\"/\">Authentification</a></li>
              <li><a href=\"/repertoire\">Mon repertoire</a></li>
\t\t\t  </li>
\t\t</div><!--/.nav-collapse -->
\t</div><!--/.container-fluid -->
</nav>
", "commun/menu.html", "/home/amin/Documents/Pweb/easyCloud/app/Resources/views/commun/menu.html");
    }
}
