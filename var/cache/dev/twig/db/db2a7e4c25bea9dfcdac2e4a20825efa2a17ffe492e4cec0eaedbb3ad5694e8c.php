<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8e974115fce568c9c73d20e507e3eba5b5edadf490cc5ea39fd23fb4c7893e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77b5da70afebb7e782bad67ae61c9f17de6bf611025a7ed64e63324504a7c301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b5da70afebb7e782bad67ae61c9f17de6bf611025a7ed64e63324504a7c301->enter($__internal_77b5da70afebb7e782bad67ae61c9f17de6bf611025a7ed64e63324504a7c301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_97d91c506253b7dc1de3364944c201f23149803841e910799c2789456233cdb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d91c506253b7dc1de3364944c201f23149803841e910799c2789456233cdb8->enter($__internal_97d91c506253b7dc1de3364944c201f23149803841e910799c2789456233cdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77b5da70afebb7e782bad67ae61c9f17de6bf611025a7ed64e63324504a7c301->leave($__internal_77b5da70afebb7e782bad67ae61c9f17de6bf611025a7ed64e63324504a7c301_prof);

        
        $__internal_97d91c506253b7dc1de3364944c201f23149803841e910799c2789456233cdb8->leave($__internal_97d91c506253b7dc1de3364944c201f23149803841e910799c2789456233cdb8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb4d368b359ea29dc4aeee9a2a24fb9d0ad4e54721adbfd75b2f103a91816011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4d368b359ea29dc4aeee9a2a24fb9d0ad4e54721adbfd75b2f103a91816011->enter($__internal_fb4d368b359ea29dc4aeee9a2a24fb9d0ad4e54721adbfd75b2f103a91816011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_abe7219f143084aa1bf995b449c9b2b919a8deaea3b1eaa9989cb64f8650e6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe7219f143084aa1bf995b449c9b2b919a8deaea3b1eaa9989cb64f8650e6f3->enter($__internal_abe7219f143084aa1bf995b449c9b2b919a8deaea3b1eaa9989cb64f8650e6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_abe7219f143084aa1bf995b449c9b2b919a8deaea3b1eaa9989cb64f8650e6f3->leave($__internal_abe7219f143084aa1bf995b449c9b2b919a8deaea3b1eaa9989cb64f8650e6f3_prof);

        
        $__internal_fb4d368b359ea29dc4aeee9a2a24fb9d0ad4e54721adbfd75b2f103a91816011->leave($__internal_fb4d368b359ea29dc4aeee9a2a24fb9d0ad4e54721adbfd75b2f103a91816011_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fae231c7af1751ed3b07ef1a58adb3220d5ac8274e1fbce5b50548ab519fdb51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae231c7af1751ed3b07ef1a58adb3220d5ac8274e1fbce5b50548ab519fdb51->enter($__internal_fae231c7af1751ed3b07ef1a58adb3220d5ac8274e1fbce5b50548ab519fdb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_313c7777724c94fa9e8f896587ba23056e6bec72702573bde1c94f9a6a8678d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313c7777724c94fa9e8f896587ba23056e6bec72702573bde1c94f9a6a8678d7->enter($__internal_313c7777724c94fa9e8f896587ba23056e6bec72702573bde1c94f9a6a8678d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_313c7777724c94fa9e8f896587ba23056e6bec72702573bde1c94f9a6a8678d7->leave($__internal_313c7777724c94fa9e8f896587ba23056e6bec72702573bde1c94f9a6a8678d7_prof);

        
        $__internal_fae231c7af1751ed3b07ef1a58adb3220d5ac8274e1fbce5b50548ab519fdb51->leave($__internal_fae231c7af1751ed3b07ef1a58adb3220d5ac8274e1fbce5b50548ab519fdb51_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_673b235aab306d5fc64c4f9175f8d6aa7d37b9f43e2ec7ed29167a093abae121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673b235aab306d5fc64c4f9175f8d6aa7d37b9f43e2ec7ed29167a093abae121->enter($__internal_673b235aab306d5fc64c4f9175f8d6aa7d37b9f43e2ec7ed29167a093abae121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7e2e2f3d20f997c98e35ffecd54a251b5565c7236689bf545fe2249081513767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2e2f3d20f997c98e35ffecd54a251b5565c7236689bf545fe2249081513767->enter($__internal_7e2e2f3d20f997c98e35ffecd54a251b5565c7236689bf545fe2249081513767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7e2e2f3d20f997c98e35ffecd54a251b5565c7236689bf545fe2249081513767->leave($__internal_7e2e2f3d20f997c98e35ffecd54a251b5565c7236689bf545fe2249081513767_prof);

        
        $__internal_673b235aab306d5fc64c4f9175f8d6aa7d37b9f43e2ec7ed29167a093abae121->leave($__internal_673b235aab306d5fc64c4f9175f8d6aa7d37b9f43e2ec7ed29167a093abae121_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/amin/Documents/Pweb/easyCloud/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
