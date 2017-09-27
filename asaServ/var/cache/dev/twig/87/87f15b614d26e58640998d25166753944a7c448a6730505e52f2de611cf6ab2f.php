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
        $__internal_1531f8737fa63040342056d38e6252ef20b707d10b17e674c43bf6f23ade9c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1531f8737fa63040342056d38e6252ef20b707d10b17e674c43bf6f23ade9c4c->enter($__internal_1531f8737fa63040342056d38e6252ef20b707d10b17e674c43bf6f23ade9c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:OrdersController:orders.html.twig"));

        $__internal_ef53933264eed7a016e0daecc32af5d9f07a06cebd1ec4c66bef703e35aa38fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef53933264eed7a016e0daecc32af5d9f07a06cebd1ec4c66bef703e35aa38fa->enter($__internal_ef53933264eed7a016e0daecc32af5d9f07a06cebd1ec4c66bef703e35aa38fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:OrdersController:orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1531f8737fa63040342056d38e6252ef20b707d10b17e674c43bf6f23ade9c4c->leave($__internal_1531f8737fa63040342056d38e6252ef20b707d10b17e674c43bf6f23ade9c4c_prof);

        
        $__internal_ef53933264eed7a016e0daecc32af5d9f07a06cebd1ec4c66bef703e35aa38fa->leave($__internal_ef53933264eed7a016e0daecc32af5d9f07a06cebd1ec4c66bef703e35aa38fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7c039ec3bf160fc34ca7bd0a203285df9ee3739fb55f8b6ba597b3400ede283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c039ec3bf160fc34ca7bd0a203285df9ee3739fb55f8b6ba597b3400ede283->enter($__internal_b7c039ec3bf160fc34ca7bd0a203285df9ee3739fb55f8b6ba597b3400ede283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10df9a782beb89e7e2ad1792688584df9747968a792cf1e47f1cd08e5c944d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10df9a782beb89e7e2ad1792688584df9747968a792cf1e47f1cd08e5c944d35->enter($__internal_10df9a782beb89e7e2ad1792688584df9747968a792cf1e47f1cd08e5c944d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:OrdersController:orders";
        
        $__internal_10df9a782beb89e7e2ad1792688584df9747968a792cf1e47f1cd08e5c944d35->leave($__internal_10df9a782beb89e7e2ad1792688584df9747968a792cf1e47f1cd08e5c944d35_prof);

        
        $__internal_b7c039ec3bf160fc34ca7bd0a203285df9ee3739fb55f8b6ba597b3400ede283->leave($__internal_b7c039ec3bf160fc34ca7bd0a203285df9ee3739fb55f8b6ba597b3400ede283_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f022e69f30a72061171791a3a2e448b3d45d2b275373349a253a0410bc665158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f022e69f30a72061171791a3a2e448b3d45d2b275373349a253a0410bc665158->enter($__internal_f022e69f30a72061171791a3a2e448b3d45d2b275373349a253a0410bc665158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f66bd85403ca90810efca2f6d6ff005c4a6064f8175380e17413416e3bcc03d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f66bd85403ca90810efca2f6d6ff005c4a6064f8175380e17413416e3bcc03d->enter($__internal_2f66bd85403ca90810efca2f6d6ff005c4a6064f8175380e17413416e3bcc03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f66bd85403ca90810efca2f6d6ff005c4a6064f8175380e17413416e3bcc03d->leave($__internal_2f66bd85403ca90810efca2f6d6ff005c4a6064f8175380e17413416e3bcc03d_prof);

        
        $__internal_f022e69f30a72061171791a3a2e448b3d45d2b275373349a253a0410bc665158->leave($__internal_f022e69f30a72061171791a3a2e448b3d45d2b275373349a253a0410bc665158_prof);

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
