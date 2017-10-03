<?php

/* AppBundle:OrdersController:orders.html.twig */
class __TwigTemplate_6f219b77f8192778ac734b85c6cb678dc407f0429555d9427a90581a06ef7363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:OrdersController:orders.html.twig", 1);
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
        $__internal_ef82870def1e4ed0bb4880618e2c1c696860212ebe10733955fc9c356e963b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef82870def1e4ed0bb4880618e2c1c696860212ebe10733955fc9c356e963b85->enter($__internal_ef82870def1e4ed0bb4880618e2c1c696860212ebe10733955fc9c356e963b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:OrdersController:orders.html.twig"));

        $__internal_dfe83caaa96182cc1f175e896d679a935d99d6e5af874bd69b4c694a21d7bdf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe83caaa96182cc1f175e896d679a935d99d6e5af874bd69b4c694a21d7bdf0->enter($__internal_dfe83caaa96182cc1f175e896d679a935d99d6e5af874bd69b4c694a21d7bdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:OrdersController:orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef82870def1e4ed0bb4880618e2c1c696860212ebe10733955fc9c356e963b85->leave($__internal_ef82870def1e4ed0bb4880618e2c1c696860212ebe10733955fc9c356e963b85_prof);

        
        $__internal_dfe83caaa96182cc1f175e896d679a935d99d6e5af874bd69b4c694a21d7bdf0->leave($__internal_dfe83caaa96182cc1f175e896d679a935d99d6e5af874bd69b4c694a21d7bdf0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19daba5df6e807f660e9a739c186c6391cceba1601f92f9c72597cccb6ac0d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19daba5df6e807f660e9a739c186c6391cceba1601f92f9c72597cccb6ac0d14->enter($__internal_19daba5df6e807f660e9a739c186c6391cceba1601f92f9c72597cccb6ac0d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a362034bea5028dc067e55119a79e04b2804f8e691ccbd4855e59444b2fbfd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a362034bea5028dc067e55119a79e04b2804f8e691ccbd4855e59444b2fbfd4->enter($__internal_5a362034bea5028dc067e55119a79e04b2804f8e691ccbd4855e59444b2fbfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:OrdersController:orders";
        
        $__internal_5a362034bea5028dc067e55119a79e04b2804f8e691ccbd4855e59444b2fbfd4->leave($__internal_5a362034bea5028dc067e55119a79e04b2804f8e691ccbd4855e59444b2fbfd4_prof);

        
        $__internal_19daba5df6e807f660e9a739c186c6391cceba1601f92f9c72597cccb6ac0d14->leave($__internal_19daba5df6e807f660e9a739c186c6391cceba1601f92f9c72597cccb6ac0d14_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d918be6bbf5960f87a742899e467877b21e93480ee60ae7e0747d3db8fe41fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d918be6bbf5960f87a742899e467877b21e93480ee60ae7e0747d3db8fe41fa3->enter($__internal_d918be6bbf5960f87a742899e467877b21e93480ee60ae7e0747d3db8fe41fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b47b743b7cacb8b42cdd8a8b802c6dfcf55b010c41ce35c9c4747c953a636b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b47b743b7cacb8b42cdd8a8b802c6dfcf55b010c41ce35c9c4747c953a636b4->enter($__internal_8b47b743b7cacb8b42cdd8a8b802c6dfcf55b010c41ce35c9c4747c953a636b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the OrdersController:orders page </h1>


    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arrReq"] ?? $this->getContext($context, "arrReq")));
        foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
            // line 10
            echo "            <h1>";
            echo twig_escape_filter($this->env, $context["req"], "html", null, true);
            echo "</h1>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["arrReq"] ?? $this->getContext($context, "arrReq")));
        echo "
";
        
        $__internal_8b47b743b7cacb8b42cdd8a8b802c6dfcf55b010c41ce35c9c4747c953a636b4->leave($__internal_8b47b743b7cacb8b42cdd8a8b802c6dfcf55b010c41ce35c9c4747c953a636b4_prof);

        
        $__internal_d918be6bbf5960f87a742899e467877b21e93480ee60ae7e0747d3db8fe41fa3->leave($__internal_d918be6bbf5960f87a742899e467877b21e93480ee60ae7e0747d3db8fe41fa3_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:OrdersController:orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 13,  86 => 12,  77 => 10,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:OrdersController:orders{% endblock %}

{% block body %}
<h1>Welcome to the OrdersController:orders page </h1>


    {% for req in arrReq %}
            <h1>{{ req }}</h1>
    {% endfor %}

    {{ dump(arrReq) }}
{% endblock %}
", "AppBundle:OrdersController:orders.html.twig", "/home/iucosoft/Documents/asaServ/src/AppBundle/Resources/views/OrdersController/orders.html.twig");
    }
}
