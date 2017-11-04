<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_f47960900a96039ab4036f3f9bdfe717bb2dd0da21e873b2c69d2cdb43bfed0f extends Twig_Template
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
        $__internal_3937b54a7ec43967f3dd7c940bf3aa79ecfde1dbb5a4adc5761458e2ab895bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3937b54a7ec43967f3dd7c940bf3aa79ecfde1dbb5a4adc5761458e2ab895bde->enter($__internal_3937b54a7ec43967f3dd7c940bf3aa79ecfde1dbb5a4adc5761458e2ab895bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4020f16ebb8bb32b69fce5420a6849060e7013d93571496c1c25fb6084a77258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4020f16ebb8bb32b69fce5420a6849060e7013d93571496c1c25fb6084a77258->enter($__internal_4020f16ebb8bb32b69fce5420a6849060e7013d93571496c1c25fb6084a77258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3937b54a7ec43967f3dd7c940bf3aa79ecfde1dbb5a4adc5761458e2ab895bde->leave($__internal_3937b54a7ec43967f3dd7c940bf3aa79ecfde1dbb5a4adc5761458e2ab895bde_prof);

        
        $__internal_4020f16ebb8bb32b69fce5420a6849060e7013d93571496c1c25fb6084a77258->leave($__internal_4020f16ebb8bb32b69fce5420a6849060e7013d93571496c1c25fb6084a77258_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_38d235d2a14355fb4b28ceb2f0c75a7ac14640dfc1daaa5a1c61d021fb1ec292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d235d2a14355fb4b28ceb2f0c75a7ac14640dfc1daaa5a1c61d021fb1ec292->enter($__internal_38d235d2a14355fb4b28ceb2f0c75a7ac14640dfc1daaa5a1c61d021fb1ec292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_493f04088f6b6885bb3cba98e16493f6ab29b7731aaab674b0138b5a45969146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493f04088f6b6885bb3cba98e16493f6ab29b7731aaab674b0138b5a45969146->enter($__internal_493f04088f6b6885bb3cba98e16493f6ab29b7731aaab674b0138b5a45969146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_493f04088f6b6885bb3cba98e16493f6ab29b7731aaab674b0138b5a45969146->leave($__internal_493f04088f6b6885bb3cba98e16493f6ab29b7731aaab674b0138b5a45969146_prof);

        
        $__internal_38d235d2a14355fb4b28ceb2f0c75a7ac14640dfc1daaa5a1c61d021fb1ec292->leave($__internal_38d235d2a14355fb4b28ceb2f0c75a7ac14640dfc1daaa5a1c61d021fb1ec292_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_43c4f5bfa4611624f665a9cfcb11b22962f61ca55c61fc358ed891046ed8f921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c4f5bfa4611624f665a9cfcb11b22962f61ca55c61fc358ed891046ed8f921->enter($__internal_43c4f5bfa4611624f665a9cfcb11b22962f61ca55c61fc358ed891046ed8f921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8e50fba535908e07deb13a48a8740df0350c672f06fd0e4849d649ea4667ee2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e50fba535908e07deb13a48a8740df0350c672f06fd0e4849d649ea4667ee2d->enter($__internal_8e50fba535908e07deb13a48a8740df0350c672f06fd0e4849d649ea4667ee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8e50fba535908e07deb13a48a8740df0350c672f06fd0e4849d649ea4667ee2d->leave($__internal_8e50fba535908e07deb13a48a8740df0350c672f06fd0e4849d649ea4667ee2d_prof);

        
        $__internal_43c4f5bfa4611624f665a9cfcb11b22962f61ca55c61fc358ed891046ed8f921->leave($__internal_43c4f5bfa4611624f665a9cfcb11b22962f61ca55c61fc358ed891046ed8f921_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8015e9bc23d89ad6cebc218af592f8421d135cc430a7eac0730d9fcad1e83e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8015e9bc23d89ad6cebc218af592f8421d135cc430a7eac0730d9fcad1e83e54->enter($__internal_8015e9bc23d89ad6cebc218af592f8421d135cc430a7eac0730d9fcad1e83e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cbd5e43ce50c3afdf511d33ccf2c9aeebd47576a9f315998b4bcf0697ff9a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbd5e43ce50c3afdf511d33ccf2c9aeebd47576a9f315998b4bcf0697ff9a2d->enter($__internal_2cbd5e43ce50c3afdf511d33ccf2c9aeebd47576a9f315998b4bcf0697ff9a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2cbd5e43ce50c3afdf511d33ccf2c9aeebd47576a9f315998b4bcf0697ff9a2d->leave($__internal_2cbd5e43ce50c3afdf511d33ccf2c9aeebd47576a9f315998b4bcf0697ff9a2d_prof);

        
        $__internal_8015e9bc23d89ad6cebc218af592f8421d135cc430a7eac0730d9fcad1e83e54->leave($__internal_8015e9bc23d89ad6cebc218af592f8421d135cc430a7eac0730d9fcad1e83e54_prof);

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
", "@Twig/layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/symfonyviresh/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
