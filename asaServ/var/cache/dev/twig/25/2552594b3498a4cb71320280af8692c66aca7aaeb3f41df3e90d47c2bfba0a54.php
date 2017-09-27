<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5822d96dc649f46e30dff249a3a71de6a19ae062cb782a290b55e829dac1467e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e23d342df32318d6c07896663b037e23ced22ef4c87b1d3b24ede37959e8f7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e23d342df32318d6c07896663b037e23ced22ef4c87b1d3b24ede37959e8f7be->enter($__internal_e23d342df32318d6c07896663b037e23ced22ef4c87b1d3b24ede37959e8f7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1d6666d9512444c675c3a63e72196c9b8c7bf11cd4ec263324b3833463668b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6666d9512444c675c3a63e72196c9b8c7bf11cd4ec263324b3833463668b4c->enter($__internal_1d6666d9512444c675c3a63e72196c9b8c7bf11cd4ec263324b3833463668b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e23d342df32318d6c07896663b037e23ced22ef4c87b1d3b24ede37959e8f7be->leave($__internal_e23d342df32318d6c07896663b037e23ced22ef4c87b1d3b24ede37959e8f7be_prof);

        
        $__internal_1d6666d9512444c675c3a63e72196c9b8c7bf11cd4ec263324b3833463668b4c->leave($__internal_1d6666d9512444c675c3a63e72196c9b8c7bf11cd4ec263324b3833463668b4c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f2da32761df494e928cc979f21b359d57336b98f2c6e42c368379f0cca5aaea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2da32761df494e928cc979f21b359d57336b98f2c6e42c368379f0cca5aaea->enter($__internal_6f2da32761df494e928cc979f21b359d57336b98f2c6e42c368379f0cca5aaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5abfd2955e8c9f8846f3d48f027130fa30d4e9f1af491fce503da04bdbf2745e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abfd2955e8c9f8846f3d48f027130fa30d4e9f1af491fce503da04bdbf2745e->enter($__internal_5abfd2955e8c9f8846f3d48f027130fa30d4e9f1af491fce503da04bdbf2745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5abfd2955e8c9f8846f3d48f027130fa30d4e9f1af491fce503da04bdbf2745e->leave($__internal_5abfd2955e8c9f8846f3d48f027130fa30d4e9f1af491fce503da04bdbf2745e_prof);

        
        $__internal_6f2da32761df494e928cc979f21b359d57336b98f2c6e42c368379f0cca5aaea->leave($__internal_6f2da32761df494e928cc979f21b359d57336b98f2c6e42c368379f0cca5aaea_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3daf183c4d15dc63c7f7bb93c99974f29d73e84a0b7d7522db6ffafb83e79df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3daf183c4d15dc63c7f7bb93c99974f29d73e84a0b7d7522db6ffafb83e79df7->enter($__internal_3daf183c4d15dc63c7f7bb93c99974f29d73e84a0b7d7522db6ffafb83e79df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2c922a0cb310650e59b443beaf202e1b949cb15b68f4513883df6013d6ebe42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c922a0cb310650e59b443beaf202e1b949cb15b68f4513883df6013d6ebe42a->enter($__internal_2c922a0cb310650e59b443beaf202e1b949cb15b68f4513883df6013d6ebe42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2c922a0cb310650e59b443beaf202e1b949cb15b68f4513883df6013d6ebe42a->leave($__internal_2c922a0cb310650e59b443beaf202e1b949cb15b68f4513883df6013d6ebe42a_prof);

        
        $__internal_3daf183c4d15dc63c7f7bb93c99974f29d73e84a0b7d7522db6ffafb83e79df7->leave($__internal_3daf183c4d15dc63c7f7bb93c99974f29d73e84a0b7d7522db6ffafb83e79df7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff094278e710f805cc34360f7e0c17686eb241c572b1f64f473b537c3a8c7a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff094278e710f805cc34360f7e0c17686eb241c572b1f64f473b537c3a8c7a74->enter($__internal_ff094278e710f805cc34360f7e0c17686eb241c572b1f64f473b537c3a8c7a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9243a5a6f36678fc77e368f21fdd983a5eb5a70ab2014582363516bb07e0a827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9243a5a6f36678fc77e368f21fdd983a5eb5a70ab2014582363516bb07e0a827->enter($__internal_9243a5a6f36678fc77e368f21fdd983a5eb5a70ab2014582363516bb07e0a827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9243a5a6f36678fc77e368f21fdd983a5eb5a70ab2014582363516bb07e0a827->leave($__internal_9243a5a6f36678fc77e368f21fdd983a5eb5a70ab2014582363516bb07e0a827_prof);

        
        $__internal_ff094278e710f805cc34360f7e0c17686eb241c572b1f64f473b537c3a8c7a74->leave($__internal_ff094278e710f805cc34360f7e0c17686eb241c572b1f64f473b537c3a8c7a74_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/iucosoft/Documents/asaServ/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}