<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_126f9d29f853e2cae2b1b3eae1a15db7b503b27c39443e9259a0801a9aea4fb6 extends Twig_Template
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
        $__internal_b280f0cd9c5a74e12b93cdc9229ea61d80b6a81eab94282f6b94f00a0cc3f756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b280f0cd9c5a74e12b93cdc9229ea61d80b6a81eab94282f6b94f00a0cc3f756->enter($__internal_b280f0cd9c5a74e12b93cdc9229ea61d80b6a81eab94282f6b94f00a0cc3f756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a4cffdc5a4ef346956f71b841ca0fd93970fe18f3d0bb4f5c8712d367ccd337e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cffdc5a4ef346956f71b841ca0fd93970fe18f3d0bb4f5c8712d367ccd337e->enter($__internal_a4cffdc5a4ef346956f71b841ca0fd93970fe18f3d0bb4f5c8712d367ccd337e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b280f0cd9c5a74e12b93cdc9229ea61d80b6a81eab94282f6b94f00a0cc3f756->leave($__internal_b280f0cd9c5a74e12b93cdc9229ea61d80b6a81eab94282f6b94f00a0cc3f756_prof);

        
        $__internal_a4cffdc5a4ef346956f71b841ca0fd93970fe18f3d0bb4f5c8712d367ccd337e->leave($__internal_a4cffdc5a4ef346956f71b841ca0fd93970fe18f3d0bb4f5c8712d367ccd337e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6439fdc88b6c3d05c549e8c2ddd753d76c1cf67ef3edd2b4f1d95e573e6f3688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6439fdc88b6c3d05c549e8c2ddd753d76c1cf67ef3edd2b4f1d95e573e6f3688->enter($__internal_6439fdc88b6c3d05c549e8c2ddd753d76c1cf67ef3edd2b4f1d95e573e6f3688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e448afb3fa2791a4183071c8c5262735f0f0fd301b35b875554aa091c37c6a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e448afb3fa2791a4183071c8c5262735f0f0fd301b35b875554aa091c37c6a04->enter($__internal_e448afb3fa2791a4183071c8c5262735f0f0fd301b35b875554aa091c37c6a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e448afb3fa2791a4183071c8c5262735f0f0fd301b35b875554aa091c37c6a04->leave($__internal_e448afb3fa2791a4183071c8c5262735f0f0fd301b35b875554aa091c37c6a04_prof);

        
        $__internal_6439fdc88b6c3d05c549e8c2ddd753d76c1cf67ef3edd2b4f1d95e573e6f3688->leave($__internal_6439fdc88b6c3d05c549e8c2ddd753d76c1cf67ef3edd2b4f1d95e573e6f3688_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c0967c914f9430d67410e5d482e370ba12d61e2b815e30dc41b0c6ddd42e838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c0967c914f9430d67410e5d482e370ba12d61e2b815e30dc41b0c6ddd42e838->enter($__internal_9c0967c914f9430d67410e5d482e370ba12d61e2b815e30dc41b0c6ddd42e838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_38e9e85ddd9f77346358369c6b15be435014aaa594f44d9466b2630b97d0ec64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e9e85ddd9f77346358369c6b15be435014aaa594f44d9466b2630b97d0ec64->enter($__internal_38e9e85ddd9f77346358369c6b15be435014aaa594f44d9466b2630b97d0ec64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_38e9e85ddd9f77346358369c6b15be435014aaa594f44d9466b2630b97d0ec64->leave($__internal_38e9e85ddd9f77346358369c6b15be435014aaa594f44d9466b2630b97d0ec64_prof);

        
        $__internal_9c0967c914f9430d67410e5d482e370ba12d61e2b815e30dc41b0c6ddd42e838->leave($__internal_9c0967c914f9430d67410e5d482e370ba12d61e2b815e30dc41b0c6ddd42e838_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fa40da497017337f39af5f70482c045a8aca1270890faab35c2a4880a985d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa40da497017337f39af5f70482c045a8aca1270890faab35c2a4880a985d4b->enter($__internal_6fa40da497017337f39af5f70482c045a8aca1270890faab35c2a4880a985d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b7f0fa48f8fb3605791175d8bb91ce93bb61c0ac234a311fec738340ef54b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7f0fa48f8fb3605791175d8bb91ce93bb61c0ac234a311fec738340ef54b7d->enter($__internal_6b7f0fa48f8fb3605791175d8bb91ce93bb61c0ac234a311fec738340ef54b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6b7f0fa48f8fb3605791175d8bb91ce93bb61c0ac234a311fec738340ef54b7d->leave($__internal_6b7f0fa48f8fb3605791175d8bb91ce93bb61c0ac234a311fec738340ef54b7d_prof);

        
        $__internal_6fa40da497017337f39af5f70482c045a8aca1270890faab35c2a4880a985d4b->leave($__internal_6fa40da497017337f39af5f70482c045a8aca1270890faab35c2a4880a985d4b_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/iucosoft/Documents/asaServ/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
