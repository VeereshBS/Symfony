<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_3152559555b87953fc2bd777dae98eef95c7e83d63d0dd81a5917a08e05e153e extends Twig_Template
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
        $__internal_90154f52b784fd550fa76ee2c9cef843d357bd1f29329169a3b1da6dc139179a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90154f52b784fd550fa76ee2c9cef843d357bd1f29329169a3b1da6dc139179a->enter($__internal_90154f52b784fd550fa76ee2c9cef843d357bd1f29329169a3b1da6dc139179a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8e12bcd68a4727b84f857722267c9230d4d29dc4370b527e777c53e688360ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e12bcd68a4727b84f857722267c9230d4d29dc4370b527e777c53e688360ce8->enter($__internal_8e12bcd68a4727b84f857722267c9230d4d29dc4370b527e777c53e688360ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_90154f52b784fd550fa76ee2c9cef843d357bd1f29329169a3b1da6dc139179a->leave($__internal_90154f52b784fd550fa76ee2c9cef843d357bd1f29329169a3b1da6dc139179a_prof);

        
        $__internal_8e12bcd68a4727b84f857722267c9230d4d29dc4370b527e777c53e688360ce8->leave($__internal_8e12bcd68a4727b84f857722267c9230d4d29dc4370b527e777c53e688360ce8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d95e9f23ed6d6bc7298e36963b4360f7e05cf71fb8f92783656ce889b3f8d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d95e9f23ed6d6bc7298e36963b4360f7e05cf71fb8f92783656ce889b3f8d67->enter($__internal_0d95e9f23ed6d6bc7298e36963b4360f7e05cf71fb8f92783656ce889b3f8d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a296fc60ec35ead01a96771ba8cfedc8b1dd71b43b298a4828f3b3cb6d250add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a296fc60ec35ead01a96771ba8cfedc8b1dd71b43b298a4828f3b3cb6d250add->enter($__internal_a296fc60ec35ead01a96771ba8cfedc8b1dd71b43b298a4828f3b3cb6d250add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a296fc60ec35ead01a96771ba8cfedc8b1dd71b43b298a4828f3b3cb6d250add->leave($__internal_a296fc60ec35ead01a96771ba8cfedc8b1dd71b43b298a4828f3b3cb6d250add_prof);

        
        $__internal_0d95e9f23ed6d6bc7298e36963b4360f7e05cf71fb8f92783656ce889b3f8d67->leave($__internal_0d95e9f23ed6d6bc7298e36963b4360f7e05cf71fb8f92783656ce889b3f8d67_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e47112c06620da6d61f7d5dd591d571f911437b343781d758f12a37af5adee8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47112c06620da6d61f7d5dd591d571f911437b343781d758f12a37af5adee8e->enter($__internal_e47112c06620da6d61f7d5dd591d571f911437b343781d758f12a37af5adee8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a498a0741c767d1c98ac8661a6d334e909f862c8cd0e37213c04599c331982f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a498a0741c767d1c98ac8661a6d334e909f862c8cd0e37213c04599c331982f3->enter($__internal_a498a0741c767d1c98ac8661a6d334e909f862c8cd0e37213c04599c331982f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a498a0741c767d1c98ac8661a6d334e909f862c8cd0e37213c04599c331982f3->leave($__internal_a498a0741c767d1c98ac8661a6d334e909f862c8cd0e37213c04599c331982f3_prof);

        
        $__internal_e47112c06620da6d61f7d5dd591d571f911437b343781d758f12a37af5adee8e->leave($__internal_e47112c06620da6d61f7d5dd591d571f911437b343781d758f12a37af5adee8e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_22a9541cec70381439b724cb4616887c8a2b79cb49dc7ce307506fdf64ea44b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a9541cec70381439b724cb4616887c8a2b79cb49dc7ce307506fdf64ea44b7->enter($__internal_22a9541cec70381439b724cb4616887c8a2b79cb49dc7ce307506fdf64ea44b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd63cbfdafc394b88227f8950f568b64d2a70ecfe0c16d76809b22ab13308bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd63cbfdafc394b88227f8950f568b64d2a70ecfe0c16d76809b22ab13308bdc->enter($__internal_cd63cbfdafc394b88227f8950f568b64d2a70ecfe0c16d76809b22ab13308bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd63cbfdafc394b88227f8950f568b64d2a70ecfe0c16d76809b22ab13308bdc->leave($__internal_cd63cbfdafc394b88227f8950f568b64d2a70ecfe0c16d76809b22ab13308bdc_prof);

        
        $__internal_22a9541cec70381439b724cb4616887c8a2b79cb49dc7ce307506fdf64ea44b7->leave($__internal_22a9541cec70381439b724cb4616887c8a2b79cb49dc7ce307506fdf64ea44b7_prof);

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
", "@Twig/layout.html.twig", "D:\\xampp\\htdocs\\symfonyviresh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
