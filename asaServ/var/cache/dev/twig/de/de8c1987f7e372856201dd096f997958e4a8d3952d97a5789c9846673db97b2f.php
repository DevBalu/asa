<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_010742bacd7922f8c0ef3868b50c1fd85132c12a1b910d45f0522f422e756bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7611c01bf4297c7871ee926d742bf4404dc0109eeae98f60367a2ce7c47a9111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7611c01bf4297c7871ee926d742bf4404dc0109eeae98f60367a2ce7c47a9111->enter($__internal_7611c01bf4297c7871ee926d742bf4404dc0109eeae98f60367a2ce7c47a9111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_951b7eb5f7a5b42f750535bb712722ddf33977113cbacea89ff2b5d5e03e0272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951b7eb5f7a5b42f750535bb712722ddf33977113cbacea89ff2b5d5e03e0272->enter($__internal_951b7eb5f7a5b42f750535bb712722ddf33977113cbacea89ff2b5d5e03e0272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7611c01bf4297c7871ee926d742bf4404dc0109eeae98f60367a2ce7c47a9111->leave($__internal_7611c01bf4297c7871ee926d742bf4404dc0109eeae98f60367a2ce7c47a9111_prof);

        
        $__internal_951b7eb5f7a5b42f750535bb712722ddf33977113cbacea89ff2b5d5e03e0272->leave($__internal_951b7eb5f7a5b42f750535bb712722ddf33977113cbacea89ff2b5d5e03e0272_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f327e4b7f73e80f329f28eb721dc98c06b4f663994625245b18eca0c33d5cace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f327e4b7f73e80f329f28eb721dc98c06b4f663994625245b18eca0c33d5cace->enter($__internal_f327e4b7f73e80f329f28eb721dc98c06b4f663994625245b18eca0c33d5cace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_18bb0f12feca4e6957659676753094b00256d45af23f72f8ffe77f4db2bef83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bb0f12feca4e6957659676753094b00256d45af23f72f8ffe77f4db2bef83b->enter($__internal_18bb0f12feca4e6957659676753094b00256d45af23f72f8ffe77f4db2bef83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_18bb0f12feca4e6957659676753094b00256d45af23f72f8ffe77f4db2bef83b->leave($__internal_18bb0f12feca4e6957659676753094b00256d45af23f72f8ffe77f4db2bef83b_prof);

        
        $__internal_f327e4b7f73e80f329f28eb721dc98c06b4f663994625245b18eca0c33d5cace->leave($__internal_f327e4b7f73e80f329f28eb721dc98c06b4f663994625245b18eca0c33d5cace_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d73838d9d8e4de3643fb240f43899667fab87d15884633d696880f87fc6788e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d73838d9d8e4de3643fb240f43899667fab87d15884633d696880f87fc6788e->enter($__internal_3d73838d9d8e4de3643fb240f43899667fab87d15884633d696880f87fc6788e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9d5b2d8f1e871271b159169a34afd36e4d90d2b91b14122c87d4b838108d6fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5b2d8f1e871271b159169a34afd36e4d90d2b91b14122c87d4b838108d6fc9->enter($__internal_9d5b2d8f1e871271b159169a34afd36e4d90d2b91b14122c87d4b838108d6fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9d5b2d8f1e871271b159169a34afd36e4d90d2b91b14122c87d4b838108d6fc9->leave($__internal_9d5b2d8f1e871271b159169a34afd36e4d90d2b91b14122c87d4b838108d6fc9_prof);

        
        $__internal_3d73838d9d8e4de3643fb240f43899667fab87d15884633d696880f87fc6788e->leave($__internal_3d73838d9d8e4de3643fb240f43899667fab87d15884633d696880f87fc6788e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c4c936c4e9cacbc4a395edcd8463b972cf387a97f1aab48d68286cd99b20b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4c936c4e9cacbc4a395edcd8463b972cf387a97f1aab48d68286cd99b20b26->enter($__internal_6c4c936c4e9cacbc4a395edcd8463b972cf387a97f1aab48d68286cd99b20b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_98ffa4fd0457e7b4c4f1e853008e9b9cce3ea29b5562f0f5f4a35ca218c7ecf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ffa4fd0457e7b4c4f1e853008e9b9cce3ea29b5562f0f5f4a35ca218c7ecf5->enter($__internal_98ffa4fd0457e7b4c4f1e853008e9b9cce3ea29b5562f0f5f4a35ca218c7ecf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_98ffa4fd0457e7b4c4f1e853008e9b9cce3ea29b5562f0f5f4a35ca218c7ecf5->leave($__internal_98ffa4fd0457e7b4c4f1e853008e9b9cce3ea29b5562f0f5f4a35ca218c7ecf5_prof);

        
        $__internal_6c4c936c4e9cacbc4a395edcd8463b972cf387a97f1aab48d68286cd99b20b26->leave($__internal_6c4c936c4e9cacbc4a395edcd8463b972cf387a97f1aab48d68286cd99b20b26_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/iucosoft/Documents/asaServ/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
