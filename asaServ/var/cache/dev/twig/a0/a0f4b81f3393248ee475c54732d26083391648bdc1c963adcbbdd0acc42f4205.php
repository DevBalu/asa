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
        $__internal_1c742a772c0bdf454325c32a5600161ae968b5184f489f67e35f8ff2f0ec4d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c742a772c0bdf454325c32a5600161ae968b5184f489f67e35f8ff2f0ec4d65->enter($__internal_1c742a772c0bdf454325c32a5600161ae968b5184f489f67e35f8ff2f0ec4d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:OrdersController:all_orders.html.twig"));

        $__internal_2e65d8dbf83cfea97081a04e2a020924617f98d6112026ff68cdde8f763702fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e65d8dbf83cfea97081a04e2a020924617f98d6112026ff68cdde8f763702fc->enter($__internal_2e65d8dbf83cfea97081a04e2a020924617f98d6112026ff68cdde8f763702fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:OrdersController:all_orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c742a772c0bdf454325c32a5600161ae968b5184f489f67e35f8ff2f0ec4d65->leave($__internal_1c742a772c0bdf454325c32a5600161ae968b5184f489f67e35f8ff2f0ec4d65_prof);

        
        $__internal_2e65d8dbf83cfea97081a04e2a020924617f98d6112026ff68cdde8f763702fc->leave($__internal_2e65d8dbf83cfea97081a04e2a020924617f98d6112026ff68cdde8f763702fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfbfcb9fa012cc3bd9fdf0c89400e3e7be0ff9ec2d467cdd08e61f478af1a07a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfbfcb9fa012cc3bd9fdf0c89400e3e7be0ff9ec2d467cdd08e61f478af1a07a->enter($__internal_bfbfcb9fa012cc3bd9fdf0c89400e3e7be0ff9ec2d467cdd08e61f478af1a07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7cdd6204e94a60b2edd655547dfa68d157ae392bd0d5f2c6f3da9a914c4b61fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cdd6204e94a60b2edd655547dfa68d157ae392bd0d5f2c6f3da9a914c4b61fe->enter($__internal_7cdd6204e94a60b2edd655547dfa68d157ae392bd0d5f2c6f3da9a914c4b61fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:OrdersController:allOrders";
        
        $__internal_7cdd6204e94a60b2edd655547dfa68d157ae392bd0d5f2c6f3da9a914c4b61fe->leave($__internal_7cdd6204e94a60b2edd655547dfa68d157ae392bd0d5f2c6f3da9a914c4b61fe_prof);

        
        $__internal_bfbfcb9fa012cc3bd9fdf0c89400e3e7be0ff9ec2d467cdd08e61f478af1a07a->leave($__internal_bfbfcb9fa012cc3bd9fdf0c89400e3e7be0ff9ec2d467cdd08e61f478af1a07a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8913b05e71165203c148d5b1c2a6f0b67dc526534382f103754a0d34bc188541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8913b05e71165203c148d5b1c2a6f0b67dc526534382f103754a0d34bc188541->enter($__internal_8913b05e71165203c148d5b1c2a6f0b67dc526534382f103754a0d34bc188541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_679f1acb6aa74081c3bb62f46bafd348532d940afd4d252ed09171010e744d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679f1acb6aa74081c3bb62f46bafd348532d940afd4d252ed09171010e744d0e->enter($__internal_679f1acb6aa74081c3bb62f46bafd348532d940afd4d252ed09171010e744d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the OrdersController:allOrders page</h1>
    ";
        
        $__internal_679f1acb6aa74081c3bb62f46bafd348532d940afd4d252ed09171010e744d0e->leave($__internal_679f1acb6aa74081c3bb62f46bafd348532d940afd4d252ed09171010e744d0e_prof);

        
        $__internal_8913b05e71165203c148d5b1c2a6f0b67dc526534382f103754a0d34bc188541->leave($__internal_8913b05e71165203c148d5b1c2a6f0b67dc526534382f103754a0d34bc188541_prof);

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
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
    {% endblock %}
", "AppBundle:OrdersController:all_orders.html.twig", "/home/iucosoft/Documents/asaServ/src/AppBundle/Resources/views/OrdersController/all_orders.html.twig");
    }
}
