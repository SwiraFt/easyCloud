<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d7191ed6050f5d9e5056fe06dbc62804828a74fe1cd6785df392c7280362a90a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3c4a8cde2f0750411afd508cd9edbeaff21f09d88f5c1500eb217547a77d5f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c4a8cde2f0750411afd508cd9edbeaff21f09d88f5c1500eb217547a77d5f4->enter($__internal_b3c4a8cde2f0750411afd508cd9edbeaff21f09d88f5c1500eb217547a77d5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2450517b1e4a6d1d65a408449687b9b1b307668f34b8817d2d65445f30d5e61e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2450517b1e4a6d1d65a408449687b9b1b307668f34b8817d2d65445f30d5e61e->enter($__internal_2450517b1e4a6d1d65a408449687b9b1b307668f34b8817d2d65445f30d5e61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3c4a8cde2f0750411afd508cd9edbeaff21f09d88f5c1500eb217547a77d5f4->leave($__internal_b3c4a8cde2f0750411afd508cd9edbeaff21f09d88f5c1500eb217547a77d5f4_prof);

        
        $__internal_2450517b1e4a6d1d65a408449687b9b1b307668f34b8817d2d65445f30d5e61e->leave($__internal_2450517b1e4a6d1d65a408449687b9b1b307668f34b8817d2d65445f30d5e61e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8f3059d66f81d7baca332da74737f5e0d95377ca21aa41ae956709a9e361b2e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3059d66f81d7baca332da74737f5e0d95377ca21aa41ae956709a9e361b2e5->enter($__internal_8f3059d66f81d7baca332da74737f5e0d95377ca21aa41ae956709a9e361b2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed5864cb8febcba555d9751eabd5bae188b3c4f6be7a9033341aa5b6b8c4b0a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5864cb8febcba555d9751eabd5bae188b3c4f6be7a9033341aa5b6b8c4b0a0->enter($__internal_ed5864cb8febcba555d9751eabd5bae188b3c4f6be7a9033341aa5b6b8c4b0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ed5864cb8febcba555d9751eabd5bae188b3c4f6be7a9033341aa5b6b8c4b0a0->leave($__internal_ed5864cb8febcba555d9751eabd5bae188b3c4f6be7a9033341aa5b6b8c4b0a0_prof);

        
        $__internal_8f3059d66f81d7baca332da74737f5e0d95377ca21aa41ae956709a9e361b2e5->leave($__internal_8f3059d66f81d7baca332da74737f5e0d95377ca21aa41ae956709a9e361b2e5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/amin/Documents/Pweb/easyCloud/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
