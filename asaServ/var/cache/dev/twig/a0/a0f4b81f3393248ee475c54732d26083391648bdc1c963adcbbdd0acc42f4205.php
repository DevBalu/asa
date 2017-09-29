<?php

/* AppBundle:OrdersController:all_orders.html.twig */
class __TwigTemplate_3043d0082d3b372607eb9edac8778906a8233017256aaba82f3dc3cb00f5161a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:OrdersController:all_orders.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aadec1c222fe10c0a983497038bb5ee3ee69f5397fe6c0389b73269661bdc62a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aadec1c222fe10c0a983497038bb5ee3ee69f5397fe6c0389b73269661bdc62a->enter($__internal_aadec1c222fe10c0a983497038bb5ee3ee69f5397fe6c0389b73269661bdc62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:OrdersController:all_orders.html.twig"));

        $__internal_4e1de36364de456f4cdf309419b91fdfd81baa77c253c15a8363edafd04bc203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1de36364de456f4cdf309419b91fdfd81baa77c253c15a8363edafd04bc203->enter($__internal_4e1de36364de456f4cdf309419b91fdfd81baa77c253c15a8363edafd04bc203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:OrdersController:all_orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aadec1c222fe10c0a983497038bb5ee3ee69f5397fe6c0389b73269661bdc62a->leave($__internal_aadec1c222fe10c0a983497038bb5ee3ee69f5397fe6c0389b73269661bdc62a_prof);

        
        $__internal_4e1de36364de456f4cdf309419b91fdfd81baa77c253c15a8363edafd04bc203->leave($__internal_4e1de36364de456f4cdf309419b91fdfd81baa77c253c15a8363edafd04bc203_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b66c78528e111af02e13f5c705839c2d4df820a602d1da2f86ba0b1bdb8a9dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b66c78528e111af02e13f5c705839c2d4df820a602d1da2f86ba0b1bdb8a9dd8->enter($__internal_b66c78528e111af02e13f5c705839c2d4df820a602d1da2f86ba0b1bdb8a9dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e508ffa163ae7e18b54bd5a01107828d876b64167e73296b9bf9e2571e140c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e508ffa163ae7e18b54bd5a01107828d876b64167e73296b9bf9e2571e140c15->enter($__internal_e508ffa163ae7e18b54bd5a01107828d876b64167e73296b9bf9e2571e140c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:OrdersController:allOrders";
        
        $__internal_e508ffa163ae7e18b54bd5a01107828d876b64167e73296b9bf9e2571e140c15->leave($__internal_e508ffa163ae7e18b54bd5a01107828d876b64167e73296b9bf9e2571e140c15_prof);

        
        $__internal_b66c78528e111af02e13f5c705839c2d4df820a602d1da2f86ba0b1bdb8a9dd8->leave($__internal_b66c78528e111af02e13f5c705839c2d4df820a602d1da2f86ba0b1bdb8a9dd8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_60b85dede6a781cdeade1a4c365b8c98d500b0b32c20da644c23d9e2c94f0988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b85dede6a781cdeade1a4c365b8c98d500b0b32c20da644c23d9e2c94f0988->enter($__internal_60b85dede6a781cdeade1a4c365b8c98d500b0b32c20da644c23d9e2c94f0988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f7d2f89fe3328979d9a24809d3748442b81d2e7f5da483923b6689eafae6457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7d2f89fe3328979d9a24809d3748442b81d2e7f5da483923b6689eafae6457->enter($__internal_1f7d2f89fe3328979d9a24809d3748442b81d2e7f5da483923b6689eafae6457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the OrdersController:allOrders page</h1>

    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["results"] ?? $this->getContext($context, "results")));
        echo "


";
        
        $__internal_1f7d2f89fe3328979d9a24809d3748442b81d2e7f5da483923b6689eafae6457->leave($__internal_1f7d2f89fe3328979d9a24809d3748442b81d2e7f5da483923b6689eafae6457_prof);

        
        $__internal_60b85dede6a781cdeade1a4c365b8c98d500b0b32c20da644c23d9e2c94f0988->leave($__internal_60b85dede6a781cdeade1a4c365b8c98d500b0b32c20da644c23d9e2c94f0988_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:OrdersController:all_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:OrdersController:allOrders{% endblock %}

{% block body %}
<h1>Welcome to the OrdersController:allOrders page</h1>

    {{ dump(results) }}


{% endblock %}
", "AppBundle:OrdersController:all_orders.html.twig", "/home/iucosoft/Documents/asaServ/src/AppBundle/Resources/views/OrdersController/all_orders.html.twig");
    }
}
