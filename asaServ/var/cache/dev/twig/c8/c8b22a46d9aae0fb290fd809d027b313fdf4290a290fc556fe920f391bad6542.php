<?php

/* base.html.twig */
class __TwigTemplate_47fd51b039e5f4fb7e336b9f260737cefed48cbce97d781ee1d74e5c39c4c062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75c9ecf39d31a8f33ff0cfe46363673d50a7a3def6f21e34d4593378c6aec53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c9ecf39d31a8f33ff0cfe46363673d50a7a3def6f21e34d4593378c6aec53a->enter($__internal_75c9ecf39d31a8f33ff0cfe46363673d50a7a3def6f21e34d4593378c6aec53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2b6c9872602f245ed35ef8a69145cd179a77ad5534d73ab20eca15b4d77f6fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6c9872602f245ed35ef8a69145cd179a77ad5534d73ab20eca15b4d77f6fe5->enter($__internal_2b6c9872602f245ed35ef8a69145cd179a77ad5534d73ab20eca15b4d77f6fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_75c9ecf39d31a8f33ff0cfe46363673d50a7a3def6f21e34d4593378c6aec53a->leave($__internal_75c9ecf39d31a8f33ff0cfe46363673d50a7a3def6f21e34d4593378c6aec53a_prof);

        
        $__internal_2b6c9872602f245ed35ef8a69145cd179a77ad5534d73ab20eca15b4d77f6fe5->leave($__internal_2b6c9872602f245ed35ef8a69145cd179a77ad5534d73ab20eca15b4d77f6fe5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c3349d245b06ddb36785c5a9fb3f8ea47636a0fbf31d6f94ef35c94433e6e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3349d245b06ddb36785c5a9fb3f8ea47636a0fbf31d6f94ef35c94433e6e9c->enter($__internal_8c3349d245b06ddb36785c5a9fb3f8ea47636a0fbf31d6f94ef35c94433e6e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_922ef04c1a40c4d607de041564096f2aaaddce780d922c50c0111f7ec633a889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922ef04c1a40c4d607de041564096f2aaaddce780d922c50c0111f7ec633a889->enter($__internal_922ef04c1a40c4d607de041564096f2aaaddce780d922c50c0111f7ec633a889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_922ef04c1a40c4d607de041564096f2aaaddce780d922c50c0111f7ec633a889->leave($__internal_922ef04c1a40c4d607de041564096f2aaaddce780d922c50c0111f7ec633a889_prof);

        
        $__internal_8c3349d245b06ddb36785c5a9fb3f8ea47636a0fbf31d6f94ef35c94433e6e9c->leave($__internal_8c3349d245b06ddb36785c5a9fb3f8ea47636a0fbf31d6f94ef35c94433e6e9c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f770f6140905764487aaca450eb4fd20fe1df9f2c31771df2ad30064d2b77472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f770f6140905764487aaca450eb4fd20fe1df9f2c31771df2ad30064d2b77472->enter($__internal_f770f6140905764487aaca450eb4fd20fe1df9f2c31771df2ad30064d2b77472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ee44a56d4d8cb5bf424343e275369a5f8c1ddcd78c7a23d424527c366207c595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee44a56d4d8cb5bf424343e275369a5f8c1ddcd78c7a23d424527c366207c595->enter($__internal_ee44a56d4d8cb5bf424343e275369a5f8c1ddcd78c7a23d424527c366207c595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ee44a56d4d8cb5bf424343e275369a5f8c1ddcd78c7a23d424527c366207c595->leave($__internal_ee44a56d4d8cb5bf424343e275369a5f8c1ddcd78c7a23d424527c366207c595_prof);

        
        $__internal_f770f6140905764487aaca450eb4fd20fe1df9f2c31771df2ad30064d2b77472->leave($__internal_f770f6140905764487aaca450eb4fd20fe1df9f2c31771df2ad30064d2b77472_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b620b033fd63d03f7e9e71b20d667bbb35e3f92b74fb16e726c486cb5e7a7d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b620b033fd63d03f7e9e71b20d667bbb35e3f92b74fb16e726c486cb5e7a7d2->enter($__internal_1b620b033fd63d03f7e9e71b20d667bbb35e3f92b74fb16e726c486cb5e7a7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc8cfe2c4438dfaf44413084a7d1dcad9ebe710413d24ff9f9b129981bce3f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8cfe2c4438dfaf44413084a7d1dcad9ebe710413d24ff9f9b129981bce3f63->enter($__internal_bc8cfe2c4438dfaf44413084a7d1dcad9ebe710413d24ff9f9b129981bce3f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bc8cfe2c4438dfaf44413084a7d1dcad9ebe710413d24ff9f9b129981bce3f63->leave($__internal_bc8cfe2c4438dfaf44413084a7d1dcad9ebe710413d24ff9f9b129981bce3f63_prof);

        
        $__internal_1b620b033fd63d03f7e9e71b20d667bbb35e3f92b74fb16e726c486cb5e7a7d2->leave($__internal_1b620b033fd63d03f7e9e71b20d667bbb35e3f92b74fb16e726c486cb5e7a7d2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7367630d0bf3ae72600e644661f888bc2342d19ab2bfb84f6d8886f4a449136d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7367630d0bf3ae72600e644661f888bc2342d19ab2bfb84f6d8886f4a449136d->enter($__internal_7367630d0bf3ae72600e644661f888bc2342d19ab2bfb84f6d8886f4a449136d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b8841a9b35f077296c94c2d0c101b6b96acb402277878c599aeb2469f0dd39fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8841a9b35f077296c94c2d0c101b6b96acb402277878c599aeb2469f0dd39fd->enter($__internal_b8841a9b35f077296c94c2d0c101b6b96acb402277878c599aeb2469f0dd39fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b8841a9b35f077296c94c2d0c101b6b96acb402277878c599aeb2469f0dd39fd->leave($__internal_b8841a9b35f077296c94c2d0c101b6b96acb402277878c599aeb2469f0dd39fd_prof);

        
        $__internal_7367630d0bf3ae72600e644661f888bc2342d19ab2bfb84f6d8886f4a449136d->leave($__internal_7367630d0bf3ae72600e644661f888bc2342d19ab2bfb84f6d8886f4a449136d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/iucosoft/Documents/asaServ/app/Resources/views/base.html.twig");
    }
}
