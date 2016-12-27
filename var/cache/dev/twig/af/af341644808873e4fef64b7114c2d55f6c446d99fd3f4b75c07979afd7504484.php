<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_1f3d9f84543d4fe9e6c371ac2f27f1ef7f42f7c3000ee7fcf5276b6d28eb20e8 extends Twig_Template
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
        $__internal_9a057be3f226aaca192a77b0aba1723f2ab318c9f0e23ee3b02261df8a622f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a057be3f226aaca192a77b0aba1723f2ab318c9f0e23ee3b02261df8a622f74->enter($__internal_9a057be3f226aaca192a77b0aba1723f2ab318c9f0e23ee3b02261df8a622f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_fb3eb5293e25b93437b76c7c476143fa75dfe0cfdc4b8c3358afb0e29c250fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3eb5293e25b93437b76c7c476143fa75dfe0cfdc4b8c3358afb0e29c250fcf->enter($__internal_fb3eb5293e25b93437b76c7c476143fa75dfe0cfdc4b8c3358afb0e29c250fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_9a057be3f226aaca192a77b0aba1723f2ab318c9f0e23ee3b02261df8a622f74->leave($__internal_9a057be3f226aaca192a77b0aba1723f2ab318c9f0e23ee3b02261df8a622f74_prof);

        
        $__internal_fb3eb5293e25b93437b76c7c476143fa75dfe0cfdc4b8c3358afb0e29c250fcf->leave($__internal_fb3eb5293e25b93437b76c7c476143fa75dfe0cfdc4b8c3358afb0e29c250fcf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/amin/Documents/Pweb/easyCloud/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
