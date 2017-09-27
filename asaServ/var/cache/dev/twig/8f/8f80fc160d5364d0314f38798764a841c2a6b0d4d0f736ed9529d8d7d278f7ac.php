<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ff745af4c9785908df5f50f3220a611a7a8150c8acb4b2d4fa58002236a15742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_68e424052f495ebf42c6ae90592780b5a24a7c40adb09c6b36f307e11fc0ab0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e424052f495ebf42c6ae90592780b5a24a7c40adb09c6b36f307e11fc0ab0d->enter($__internal_68e424052f495ebf42c6ae90592780b5a24a7c40adb09c6b36f307e11fc0ab0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5abfd9e71d82db376ea79e3b2559913a5548b4240048a3785e42eb67e5cc7e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abfd9e71d82db376ea79e3b2559913a5548b4240048a3785e42eb67e5cc7e7f->enter($__internal_5abfd9e71d82db376ea79e3b2559913a5548b4240048a3785e42eb67e5cc7e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68e424052f495ebf42c6ae90592780b5a24a7c40adb09c6b36f307e11fc0ab0d->leave($__internal_68e424052f495ebf42c6ae90592780b5a24a7c40adb09c6b36f307e11fc0ab0d_prof);

        
        $__internal_5abfd9e71d82db376ea79e3b2559913a5548b4240048a3785e42eb67e5cc7e7f->leave($__internal_5abfd9e71d82db376ea79e3b2559913a5548b4240048a3785e42eb67e5cc7e7f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e01e68acb28b22ede41666f101d5236e82958ae950b9fdb67631586302325b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e01e68acb28b22ede41666f101d5236e82958ae950b9fdb67631586302325b6->enter($__internal_9e01e68acb28b22ede41666f101d5236e82958ae950b9fdb67631586302325b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf4fdb39998e16c80a8bfde49bdcdf17206fcf871a1b7b2cafcc53395b91698a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4fdb39998e16c80a8bfde49bdcdf17206fcf871a1b7b2cafcc53395b91698a->enter($__internal_cf4fdb39998e16c80a8bfde49bdcdf17206fcf871a1b7b2cafcc53395b91698a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cf4fdb39998e16c80a8bfde49bdcdf17206fcf871a1b7b2cafcc53395b91698a->leave($__internal_cf4fdb39998e16c80a8bfde49bdcdf17206fcf871a1b7b2cafcc53395b91698a_prof);

        
        $__internal_9e01e68acb28b22ede41666f101d5236e82958ae950b9fdb67631586302325b6->leave($__internal_9e01e68acb28b22ede41666f101d5236e82958ae950b9fdb67631586302325b6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_996cb7cf90cc073533d1e47997d88a52279d9e2a4f1f329fe6d090cd23d101b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996cb7cf90cc073533d1e47997d88a52279d9e2a4f1f329fe6d090cd23d101b3->enter($__internal_996cb7cf90cc073533d1e47997d88a52279d9e2a4f1f329fe6d090cd23d101b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c88888c3b31c59656100f31c1230d9e110c65e2b3dfd4f1d5023ae43c8bbb32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88888c3b31c59656100f31c1230d9e110c65e2b3dfd4f1d5023ae43c8bbb32e->enter($__internal_c88888c3b31c59656100f31c1230d9e110c65e2b3dfd4f1d5023ae43c8bbb32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c88888c3b31c59656100f31c1230d9e110c65e2b3dfd4f1d5023ae43c8bbb32e->leave($__internal_c88888c3b31c59656100f31c1230d9e110c65e2b3dfd4f1d5023ae43c8bbb32e_prof);

        
        $__internal_996cb7cf90cc073533d1e47997d88a52279d9e2a4f1f329fe6d090cd23d101b3->leave($__internal_996cb7cf90cc073533d1e47997d88a52279d9e2a4f1f329fe6d090cd23d101b3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc137106ad066cb0afe79d672f1bdd9c432e9916d7111ccc4ae425885de413da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc137106ad066cb0afe79d672f1bdd9c432e9916d7111ccc4ae425885de413da->enter($__internal_bc137106ad066cb0afe79d672f1bdd9c432e9916d7111ccc4ae425885de413da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e60e5b94e984447d1942c136b2f8e92b56129e1285f27f7b0a4824e271a730a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60e5b94e984447d1942c136b2f8e92b56129e1285f27f7b0a4824e271a730a1->enter($__internal_e60e5b94e984447d1942c136b2f8e92b56129e1285f27f7b0a4824e271a730a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e60e5b94e984447d1942c136b2f8e92b56129e1285f27f7b0a4824e271a730a1->leave($__internal_e60e5b94e984447d1942c136b2f8e92b56129e1285f27f7b0a4824e271a730a1_prof);

        
        $__internal_bc137106ad066cb0afe79d672f1bdd9c432e9916d7111ccc4ae425885de413da->leave($__internal_bc137106ad066cb0afe79d672f1bdd9c432e9916d7111ccc4ae425885de413da_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/iucosoft/Documents/asaServ/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
