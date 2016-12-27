<?php

/* commun/piedDePage.html */
class __TwigTemplate_69d88d37aeff5d051691157eb5eb8e1bf0ad4a3735b6f04f748d00eedb75c6a5 extends Twig_Template
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
        $__internal_c0395ffdc388e41287e8a95285edfe71df00a3d07c3abf96798d3c1472019b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0395ffdc388e41287e8a95285edfe71df00a3d07c3abf96798d3c1472019b8c->enter($__internal_c0395ffdc388e41287e8a95285edfe71df00a3d07c3abf96798d3c1472019b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "commun/piedDePage.html"));

        $__internal_47875bf192c415e2b0f4525e21021eb9e3e63064bb8c7d81225b1e6451169a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47875bf192c415e2b0f4525e21021eb9e3e63064bb8c7d81225b1e6451169a09->enter($__internal_47875bf192c415e2b0f4525e21021eb9e3e63064bb8c7d81225b1e6451169a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "commun/piedDePage.html"));

        // line 1
        echo "    <footer class=\"footer\">
      <div class=\"container\">
        <span class=\"text-muted\">IUT PARIS DESCARTES - 2eme année Informatique - APP Amin GHELIS, Sinan HARTLAP</span>
      </div>
    </footer> ";
        
        $__internal_c0395ffdc388e41287e8a95285edfe71df00a3d07c3abf96798d3c1472019b8c->leave($__internal_c0395ffdc388e41287e8a95285edfe71df00a3d07c3abf96798d3c1472019b8c_prof);

        
        $__internal_47875bf192c415e2b0f4525e21021eb9e3e63064bb8c7d81225b1e6451169a09->leave($__internal_47875bf192c415e2b0f4525e21021eb9e3e63064bb8c7d81225b1e6451169a09_prof);

    }

    public function getTemplateName()
    {
        return "commun/piedDePage.html";
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
        return new Twig_Source("    <footer class=\"footer\">
      <div class=\"container\">
        <span class=\"text-muted\">IUT PARIS DESCARTES - 2eme année Informatique - APP Amin GHELIS, Sinan HARTLAP</span>
      </div>
    </footer> ", "commun/piedDePage.html", "/home/amin/Documents/Pweb/easyCloud/app/Resources/views/commun/piedDePage.html");
    }
}
