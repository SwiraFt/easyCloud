<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d6418f4a2efbcd3e563a9fdfd0ef504b2d80bcfaea20c446334a64f23285c305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a5c256e8fcf8feae239d233ece162c4ff430b463d516a729104d123fc1df44c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5c256e8fcf8feae239d233ece162c4ff430b463d516a729104d123fc1df44c->enter($__internal_7a5c256e8fcf8feae239d233ece162c4ff430b463d516a729104d123fc1df44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ea26457c9c50965c5fe565064049cc0bff3f0795f6e7455e9b8483bce7b36b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea26457c9c50965c5fe565064049cc0bff3f0795f6e7455e9b8483bce7b36b0a->enter($__internal_ea26457c9c50965c5fe565064049cc0bff3f0795f6e7455e9b8483bce7b36b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a5c256e8fcf8feae239d233ece162c4ff430b463d516a729104d123fc1df44c->leave($__internal_7a5c256e8fcf8feae239d233ece162c4ff430b463d516a729104d123fc1df44c_prof);

        
        $__internal_ea26457c9c50965c5fe565064049cc0bff3f0795f6e7455e9b8483bce7b36b0a->leave($__internal_ea26457c9c50965c5fe565064049cc0bff3f0795f6e7455e9b8483bce7b36b0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_891f411087a2d6d5c26efe846163839daf0ded19280e566fbe7b7ee8a2c21acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891f411087a2d6d5c26efe846163839daf0ded19280e566fbe7b7ee8a2c21acc->enter($__internal_891f411087a2d6d5c26efe846163839daf0ded19280e566fbe7b7ee8a2c21acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d207d3a0ce82d63f33cf84de9e37c96ee3507058f9611e5021babd481f909d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d207d3a0ce82d63f33cf84de9e37c96ee3507058f9611e5021babd481f909d4a->enter($__internal_d207d3a0ce82d63f33cf84de9e37c96ee3507058f9611e5021babd481f909d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d207d3a0ce82d63f33cf84de9e37c96ee3507058f9611e5021babd481f909d4a->leave($__internal_d207d3a0ce82d63f33cf84de9e37c96ee3507058f9611e5021babd481f909d4a_prof);

        
        $__internal_891f411087a2d6d5c26efe846163839daf0ded19280e566fbe7b7ee8a2c21acc->leave($__internal_891f411087a2d6d5c26efe846163839daf0ded19280e566fbe7b7ee8a2c21acc_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_06839646ba958d5dab148e061e6df5a0c1e12799ffef29535b85fb9e1e18753f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06839646ba958d5dab148e061e6df5a0c1e12799ffef29535b85fb9e1e18753f->enter($__internal_06839646ba958d5dab148e061e6df5a0c1e12799ffef29535b85fb9e1e18753f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0003fe2bf769c51819703fe7a95c86156461ac26302de773e53d645e5640fd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0003fe2bf769c51819703fe7a95c86156461ac26302de773e53d645e5640fd06->enter($__internal_0003fe2bf769c51819703fe7a95c86156461ac26302de773e53d645e5640fd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0003fe2bf769c51819703fe7a95c86156461ac26302de773e53d645e5640fd06->leave($__internal_0003fe2bf769c51819703fe7a95c86156461ac26302de773e53d645e5640fd06_prof);

        
        $__internal_06839646ba958d5dab148e061e6df5a0c1e12799ffef29535b85fb9e1e18753f->leave($__internal_06839646ba958d5dab148e061e6df5a0c1e12799ffef29535b85fb9e1e18753f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f543093971f604d9a289f8e51b1cf6303fe48cc561635ec7e9d08d2382c294b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f543093971f604d9a289f8e51b1cf6303fe48cc561635ec7e9d08d2382c294b2->enter($__internal_f543093971f604d9a289f8e51b1cf6303fe48cc561635ec7e9d08d2382c294b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da1bbe28d3e249b482b61e009e4062e7c5001aa82d34fd882512b629cc60d487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1bbe28d3e249b482b61e009e4062e7c5001aa82d34fd882512b629cc60d487->enter($__internal_da1bbe28d3e249b482b61e009e4062e7c5001aa82d34fd882512b629cc60d487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_da1bbe28d3e249b482b61e009e4062e7c5001aa82d34fd882512b629cc60d487->leave($__internal_da1bbe28d3e249b482b61e009e4062e7c5001aa82d34fd882512b629cc60d487_prof);

        
        $__internal_f543093971f604d9a289f8e51b1cf6303fe48cc561635ec7e9d08d2382c294b2->leave($__internal_f543093971f604d9a289f8e51b1cf6303fe48cc561635ec7e9d08d2382c294b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/amin/Documents/Pweb/easyCloud/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
