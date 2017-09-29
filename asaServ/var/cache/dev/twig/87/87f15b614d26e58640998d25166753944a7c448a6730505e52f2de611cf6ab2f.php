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
        $__internal_142f18165d2f15e15a2c83de0bf4d6a841e00dabd05d282321a9e1dfd664bc01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142f18165d2f15e15a2c83de0bf4d6a841e00dabd05d282321a9e1dfd664bc01->enter($__internal_142f18165d2f15e15a2c83de0bf4d6a841e00dabd05d282321a9e1dfd664bc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:OrdersController:orders.html.twig"));

        $__internal_9c2f1e4a113f6c44ab206f9430bf05b9cff443fd870c12a9f94988fc596f14aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2f1e4a113f6c44ab206f9430bf05b9cff443fd870c12a9f94988fc596f14aa->enter($__internal_9c2f1e4a113f6c44ab206f9430bf05b9cff443fd870c12a9f94988fc596f14aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:OrdersController:orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_142f18165d2f15e15a2c83de0bf4d6a841e00dabd05d282321a9e1dfd664bc01->leave($__internal_142f18165d2f15e15a2c83de0bf4d6a841e00dabd05d282321a9e1dfd664bc01_prof);

        
        $__internal_9c2f1e4a113f6c44ab206f9430bf05b9cff443fd870c12a9f94988fc596f14aa->leave($__internal_9c2f1e4a113f6c44ab206f9430bf05b9cff443fd870c12a9f94988fc596f14aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0be65908cc5891d9468ac3bc08a016c76c34e06510d6b22f6b0d95cdc84fea3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be65908cc5891d9468ac3bc08a016c76c34e06510d6b22f6b0d95cdc84fea3e->enter($__internal_0be65908cc5891d9468ac3bc08a016c76c34e06510d6b22f6b0d95cdc84fea3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b627cc55dd35d9b06aa77a01d7da047beeaf818fd5781c4520dc6ce1e19855ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b627cc55dd35d9b06aa77a01d7da047beeaf818fd5781c4520dc6ce1e19855ac->enter($__internal_b627cc55dd35d9b06aa77a01d7da047beeaf818fd5781c4520dc6ce1e19855ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:OrdersController:orders";
        
        $__internal_b627cc55dd35d9b06aa77a01d7da047beeaf818fd5781c4520dc6ce1e19855ac->leave($__internal_b627cc55dd35d9b06aa77a01d7da047beeaf818fd5781c4520dc6ce1e19855ac_prof);

        
        $__internal_0be65908cc5891d9468ac3bc08a016c76c34e06510d6b22f6b0d95cdc84fea3e->leave($__internal_0be65908cc5891d9468ac3bc08a016c76c34e06510d6b22f6b0d95cdc84fea3e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6932bbb773989f6b785524565e20060103d55dea52df0d8893cbb1b547ef9e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6932bbb773989f6b785524565e20060103d55dea52df0d8893cbb1b547ef9e68->enter($__internal_6932bbb773989f6b785524565e20060103d55dea52df0d8893cbb1b547ef9e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_786b4f013ebcad9fb0f1b63eff0aed6e3eea6c2b00fb09cd99dfc7506c07b1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786b4f013ebcad9fb0f1b63eff0aed6e3eea6c2b00fb09cd99dfc7506c07b1b8->enter($__internal_786b4f013ebcad9fb0f1b63eff0aed6e3eea6c2b00fb09cd99dfc7506c07b1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["arrReq"] ?? $this->getContext($context, "arrReq")));
        echo "
";
        
        $__internal_786b4f013ebcad9fb0f1b63eff0aed6e3eea6c2b00fb09cd99dfc7506c07b1b8->leave($__internal_786b4f013ebcad9fb0f1b63eff0aed6e3eea6c2b00fb09cd99dfc7506c07b1b8_prof);

        
        $__internal_6932bbb773989f6b785524565e20060103d55dea52df0d8893cbb1b547ef9e68->leave($__internal_6932bbb773989f6b785524565e20060103d55dea52df0d8893cbb1b547ef9e68_prof);

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
        return array (  90 => 14,  86 => 12,  77 => 10,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
