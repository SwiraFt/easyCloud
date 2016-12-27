<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_30b778b71a389b588e27b6272ed3bd867c64ee8c28b2661436e9435d1223e911 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_d3a7e1cffa3ff4ffbaa2d71708686ad7e271255c03ab757e6f61b62ee23b81b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a7e1cffa3ff4ffbaa2d71708686ad7e271255c03ab757e6f61b62ee23b81b0->enter($__internal_d3a7e1cffa3ff4ffbaa2d71708686ad7e271255c03ab757e6f61b62ee23b81b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f3bbecdab486fcb774b5d5692a0e43554b8b480f144147ba5884f21ad07725bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bbecdab486fcb774b5d5692a0e43554b8b480f144147ba5884f21ad07725bd->enter($__internal_f3bbecdab486fcb774b5d5692a0e43554b8b480f144147ba5884f21ad07725bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3a7e1cffa3ff4ffbaa2d71708686ad7e271255c03ab757e6f61b62ee23b81b0->leave($__internal_d3a7e1cffa3ff4ffbaa2d71708686ad7e271255c03ab757e6f61b62ee23b81b0_prof);

        
        $__internal_f3bbecdab486fcb774b5d5692a0e43554b8b480f144147ba5884f21ad07725bd->leave($__internal_f3bbecdab486fcb774b5d5692a0e43554b8b480f144147ba5884f21ad07725bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_32180a0535500f378eed06081e2071aeb6c371cff3a7c2d0a159d0752230025e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32180a0535500f378eed06081e2071aeb6c371cff3a7c2d0a159d0752230025e->enter($__internal_32180a0535500f378eed06081e2071aeb6c371cff3a7c2d0a159d0752230025e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_23274f726d3ff55d2be1f445acbd559526c17fd139e39ab087e4f7c8f0527655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23274f726d3ff55d2be1f445acbd559526c17fd139e39ab087e4f7c8f0527655->enter($__internal_23274f726d3ff55d2be1f445acbd559526c17fd139e39ab087e4f7c8f0527655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_23274f726d3ff55d2be1f445acbd559526c17fd139e39ab087e4f7c8f0527655->leave($__internal_23274f726d3ff55d2be1f445acbd559526c17fd139e39ab087e4f7c8f0527655_prof);

        
        $__internal_32180a0535500f378eed06081e2071aeb6c371cff3a7c2d0a159d0752230025e->leave($__internal_32180a0535500f378eed06081e2071aeb6c371cff3a7c2d0a159d0752230025e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05db838318df270c5e0070f88b6497d6662de353f825c6e9b8a7737be91fdf26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05db838318df270c5e0070f88b6497d6662de353f825c6e9b8a7737be91fdf26->enter($__internal_05db838318df270c5e0070f88b6497d6662de353f825c6e9b8a7737be91fdf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fb8685743c371e72be302d16aea737f754d18a14e8630ed291998464dfff9035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8685743c371e72be302d16aea737f754d18a14e8630ed291998464dfff9035->enter($__internal_fb8685743c371e72be302d16aea737f754d18a14e8630ed291998464dfff9035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fb8685743c371e72be302d16aea737f754d18a14e8630ed291998464dfff9035->leave($__internal_fb8685743c371e72be302d16aea737f754d18a14e8630ed291998464dfff9035_prof);

        
        $__internal_05db838318df270c5e0070f88b6497d6662de353f825c6e9b8a7737be91fdf26->leave($__internal_05db838318df270c5e0070f88b6497d6662de353f825c6e9b8a7737be91fdf26_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e00d412358535ab6f513725fd76db48e5b163bb7719b257f50623dfd7719b0ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00d412358535ab6f513725fd76db48e5b163bb7719b257f50623dfd7719b0ae->enter($__internal_e00d412358535ab6f513725fd76db48e5b163bb7719b257f50623dfd7719b0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2114100a11d0e6901a8e99b211525fca0fc3682e258c62f83d7b722378fed9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2114100a11d0e6901a8e99b211525fca0fc3682e258c62f83d7b722378fed9ed->enter($__internal_2114100a11d0e6901a8e99b211525fca0fc3682e258c62f83d7b722378fed9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2114100a11d0e6901a8e99b211525fca0fc3682e258c62f83d7b722378fed9ed->leave($__internal_2114100a11d0e6901a8e99b211525fca0fc3682e258c62f83d7b722378fed9ed_prof);

        
        $__internal_e00d412358535ab6f513725fd76db48e5b163bb7719b257f50623dfd7719b0ae->leave($__internal_e00d412358535ab6f513725fd76db48e5b163bb7719b257f50623dfd7719b0ae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/amin/Documents/Pweb/easyCloud/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
