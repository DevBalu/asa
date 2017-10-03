<?php

/* AppBundle:OrdersController:findOrder.html.twig */
class __TwigTemplate_a1c820a062647c813e464191cc398a4fa3165cf0c569bb427334585f48ccf081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:OrdersController:findOrder.html.twig", 1);
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
        $__internal_953694ffad2ec5d1c6db76b17a6561379ffb9dd483ea2c79eddd51d7db089785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953694ffad2ec5d1c6db76b17a6561379ffb9dd483ea2c79eddd51d7db089785->enter($__internal_953694ffad2ec5d1c6db76b17a6561379ffb9dd483ea2c79eddd51d7db089785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:OrdersController:findOrder.html.twig"));

        $__internal_fbbdf72f9c493cb193c2b65712eebd41e4db60a1e4be0b9cf88a300b800a3d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbdf72f9c493cb193c2b65712eebd41e4db60a1e4be0b9cf88a300b800a3d0e->enter($__internal_fbbdf72f9c493cb193c2b65712eebd41e4db60a1e4be0b9cf88a300b800a3d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:OrdersController:findOrder.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_953694ffad2ec5d1c6db76b17a6561379ffb9dd483ea2c79eddd51d7db089785->leave($__internal_953694ffad2ec5d1c6db76b17a6561379ffb9dd483ea2c79eddd51d7db089785_prof);

        
        $__internal_fbbdf72f9c493cb193c2b65712eebd41e4db60a1e4be0b9cf88a300b800a3d0e->leave($__internal_fbbdf72f9c493cb193c2b65712eebd41e4db60a1e4be0b9cf88a300b800a3d0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_81dc88d8cc5cb88afc2cb42cac1f3f3943b81b68b3bc72d076d4a84b75af4ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81dc88d8cc5cb88afc2cb42cac1f3f3943b81b68b3bc72d076d4a84b75af4ef1->enter($__internal_81dc88d8cc5cb88afc2cb42cac1f3f3943b81b68b3bc72d076d4a84b75af4ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68e175617f53bc412df5f041fb294190cced76a31080853adeb24c8ca8353bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e175617f53bc412df5f041fb294190cced76a31080853adeb24c8ca8353bba->enter($__internal_68e175617f53bc412df5f041fb294190cced76a31080853adeb24c8ca8353bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:OrdersController:findOrder";
        
        $__internal_68e175617f53bc412df5f041fb294190cced76a31080853adeb24c8ca8353bba->leave($__internal_68e175617f53bc412df5f041fb294190cced76a31080853adeb24c8ca8353bba_prof);

        
        $__internal_81dc88d8cc5cb88afc2cb42cac1f3f3943b81b68b3bc72d076d4a84b75af4ef1->leave($__internal_81dc88d8cc5cb88afc2cb42cac1f3f3943b81b68b3bc72d076d4a84b75af4ef1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bffd1d5560b7c69632f1ba1cf9805ee746c1c66060034637d6cabefc258c6006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bffd1d5560b7c69632f1ba1cf9805ee746c1c66060034637d6cabefc258c6006->enter($__internal_bffd1d5560b7c69632f1ba1cf9805ee746c1c66060034637d6cabefc258c6006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_536750ef0714c63baecb69b41776033f4d517a6387ab75f84bc27d7e25e816c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536750ef0714c63baecb69b41776033f4d517a6387ab75f84bc27d7e25e816c2->enter($__internal_536750ef0714c63baecb69b41776033f4d517a6387ab75f84bc27d7e25e816c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the OrdersController:findOrder page </h1>
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["orderById"] ?? $this->getContext($context, "orderById")));
        echo "
";
        
        $__internal_536750ef0714c63baecb69b41776033f4d517a6387ab75f84bc27d7e25e816c2->leave($__internal_536750ef0714c63baecb69b41776033f4d517a6387ab75f84bc27d7e25e816c2_prof);

        
        $__internal_bffd1d5560b7c69632f1ba1cf9805ee746c1c66060034637d6cabefc258c6006->leave($__internal_bffd1d5560b7c69632f1ba1cf9805ee746c1c66060034637d6cabefc258c6006_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:OrdersController:findOrder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:OrdersController:findOrder{% endblock %}

{% block body %}
<h1>Welcome to the OrdersController:findOrder page </h1>
    {{ dump(orderById) }}
{% endblock %}
", "AppBundle:OrdersController:findOrder.html.twig", "/home/iucosoft/Documents/asaServ/src/AppBundle/Resources/views/OrdersController/findOrder.html.twig");
    }
}
