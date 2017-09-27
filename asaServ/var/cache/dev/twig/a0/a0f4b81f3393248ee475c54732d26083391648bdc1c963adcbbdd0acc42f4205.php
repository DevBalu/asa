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
        $__internal_094dd095c02830ebc8d2a9708d6ac87e49785cc457984e08106457153f71a62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094dd095c02830ebc8d2a9708d6ac87e49785cc457984e08106457153f71a62b->enter($__internal_094dd095c02830ebc8d2a9708d6ac87e49785cc457984e08106457153f71a62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:OrdersController:all_orders.html.twig"));

        $__internal_4442fc6c7917e46657ac6900b38016482d9705bb0ea8350e94eb205e28999ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4442fc6c7917e46657ac6900b38016482d9705bb0ea8350e94eb205e28999ce0->enter($__internal_4442fc6c7917e46657ac6900b38016482d9705bb0ea8350e94eb205e28999ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:OrdersController:all_orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_094dd095c02830ebc8d2a9708d6ac87e49785cc457984e08106457153f71a62b->leave($__internal_094dd095c02830ebc8d2a9708d6ac87e49785cc457984e08106457153f71a62b_prof);

        
        $__internal_4442fc6c7917e46657ac6900b38016482d9705bb0ea8350e94eb205e28999ce0->leave($__internal_4442fc6c7917e46657ac6900b38016482d9705bb0ea8350e94eb205e28999ce0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddc46ddce7ff2e4ec7777c6900272eac56bf89107ed2ef0d0dba76b9b5f5aec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc46ddce7ff2e4ec7777c6900272eac56bf89107ed2ef0d0dba76b9b5f5aec8->enter($__internal_ddc46ddce7ff2e4ec7777c6900272eac56bf89107ed2ef0d0dba76b9b5f5aec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11871abedcaeaffc1ad41f0ca5453793e3f8e4df8d5e199d17bdacf363abc710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11871abedcaeaffc1ad41f0ca5453793e3f8e4df8d5e199d17bdacf363abc710->enter($__internal_11871abedcaeaffc1ad41f0ca5453793e3f8e4df8d5e199d17bdacf363abc710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:OrdersController:allOrders";
        
        $__internal_11871abedcaeaffc1ad41f0ca5453793e3f8e4df8d5e199d17bdacf363abc710->leave($__internal_11871abedcaeaffc1ad41f0ca5453793e3f8e4df8d5e199d17bdacf363abc710_prof);

        
        $__internal_ddc46ddce7ff2e4ec7777c6900272eac56bf89107ed2ef0d0dba76b9b5f5aec8->leave($__internal_ddc46ddce7ff2e4ec7777c6900272eac56bf89107ed2ef0d0dba76b9b5f5aec8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d0319ed9bc4c9740db646f0d1128f96929af7ae66831393b0bfbcce184b2644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0319ed9bc4c9740db646f0d1128f96929af7ae66831393b0bfbcce184b2644->enter($__internal_8d0319ed9bc4c9740db646f0d1128f96929af7ae66831393b0bfbcce184b2644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e52868ccd29b486a02136b0c60ee546d9e2f0d5e280a70dafb611c8b7ecf5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e52868ccd29b486a02136b0c60ee546d9e2f0d5e280a70dafb611c8b7ecf5f4->enter($__internal_3e52868ccd29b486a02136b0c60ee546d9e2f0d5e280a70dafb611c8b7ecf5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the OrdersController:allOrders page</h1>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "modofcar", array()), "html", null, true);
            echo " <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        
        $__internal_3e52868ccd29b486a02136b0c60ee546d9e2f0d5e280a70dafb611c8b7ecf5f4->leave($__internal_3e52868ccd29b486a02136b0c60ee546d9e2f0d5e280a70dafb611c8b7ecf5f4_prof);

        
        $__internal_8d0319ed9bc4c9740db646f0d1128f96929af7ae66831393b0bfbcce184b2644->leave($__internal_8d0319ed9bc4c9740db646f0d1128f96929af7ae66831393b0bfbcce184b2644_prof);

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
        return array (  85 => 11,  76 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

    {% for res in results %}
        {{ res.modofcar }} <br>
    {% endfor %}

{% endblock %}
", "AppBundle:OrdersController:all_orders.html.twig", "/home/iucosoft/Documents/asaServ/src/AppBundle/Resources/views/OrdersController/all_orders.html.twig");
    }
}
