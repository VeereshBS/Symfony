<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_98b5e37a43884eddfd8e9faad171de67a114b7f670503cab42b41259974e124a extends Twig_Template
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
        $__internal_699cbddd59bdff89d8ea7fb74c315699a4fd51dddced4ad700b0d086e3c08312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699cbddd59bdff89d8ea7fb74c315699a4fd51dddced4ad700b0d086e3c08312->enter($__internal_699cbddd59bdff89d8ea7fb74c315699a4fd51dddced4ad700b0d086e3c08312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f4f86b481395607d61ae9dabd256f4b92de9c3ea489f470389bc12649746502d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f86b481395607d61ae9dabd256f4b92de9c3ea489f470389bc12649746502d->enter($__internal_f4f86b481395607d61ae9dabd256f4b92de9c3ea489f470389bc12649746502d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_699cbddd59bdff89d8ea7fb74c315699a4fd51dddced4ad700b0d086e3c08312->leave($__internal_699cbddd59bdff89d8ea7fb74c315699a4fd51dddced4ad700b0d086e3c08312_prof);

        
        $__internal_f4f86b481395607d61ae9dabd256f4b92de9c3ea489f470389bc12649746502d->leave($__internal_f4f86b481395607d61ae9dabd256f4b92de9c3ea489f470389bc12649746502d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_724f9f3114715c7882e8c02ecd28ca6f85d1abc1c758a56dda211866ceb817a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724f9f3114715c7882e8c02ecd28ca6f85d1abc1c758a56dda211866ceb817a2->enter($__internal_724f9f3114715c7882e8c02ecd28ca6f85d1abc1c758a56dda211866ceb817a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b07326fb7e5b66341bb7ace109591f2010eb83a42a0f3d6183eb9b907f97c1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07326fb7e5b66341bb7ace109591f2010eb83a42a0f3d6183eb9b907f97c1d5->enter($__internal_b07326fb7e5b66341bb7ace109591f2010eb83a42a0f3d6183eb9b907f97c1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b07326fb7e5b66341bb7ace109591f2010eb83a42a0f3d6183eb9b907f97c1d5->leave($__internal_b07326fb7e5b66341bb7ace109591f2010eb83a42a0f3d6183eb9b907f97c1d5_prof);

        
        $__internal_724f9f3114715c7882e8c02ecd28ca6f85d1abc1c758a56dda211866ceb817a2->leave($__internal_724f9f3114715c7882e8c02ecd28ca6f85d1abc1c758a56dda211866ceb817a2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f1ad3d4485b161f54cc9592fe785f1d3464534e5b4ca177b9c034501f997ac45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ad3d4485b161f54cc9592fe785f1d3464534e5b4ca177b9c034501f997ac45->enter($__internal_f1ad3d4485b161f54cc9592fe785f1d3464534e5b4ca177b9c034501f997ac45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_03be1ccd4e1aef86a898e6dd6e4555d8631da65ca5df2cd3ed965c35d2ebc1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03be1ccd4e1aef86a898e6dd6e4555d8631da65ca5df2cd3ed965c35d2ebc1c1->enter($__internal_03be1ccd4e1aef86a898e6dd6e4555d8631da65ca5df2cd3ed965c35d2ebc1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_03be1ccd4e1aef86a898e6dd6e4555d8631da65ca5df2cd3ed965c35d2ebc1c1->leave($__internal_03be1ccd4e1aef86a898e6dd6e4555d8631da65ca5df2cd3ed965c35d2ebc1c1_prof);

        
        $__internal_f1ad3d4485b161f54cc9592fe785f1d3464534e5b4ca177b9c034501f997ac45->leave($__internal_f1ad3d4485b161f54cc9592fe785f1d3464534e5b4ca177b9c034501f997ac45_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06e8cee195cdf0c73466d55e639dfce63ccabaf213f8f96eaec73a3eac06005e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e8cee195cdf0c73466d55e639dfce63ccabaf213f8f96eaec73a3eac06005e->enter($__internal_06e8cee195cdf0c73466d55e639dfce63ccabaf213f8f96eaec73a3eac06005e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c2d1ba38f331372eb741e0a4b91ca18b40f1476571c979908770b8be8cc7bae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d1ba38f331372eb741e0a4b91ca18b40f1476571c979908770b8be8cc7bae3->enter($__internal_c2d1ba38f331372eb741e0a4b91ca18b40f1476571c979908770b8be8cc7bae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c2d1ba38f331372eb741e0a4b91ca18b40f1476571c979908770b8be8cc7bae3->leave($__internal_c2d1ba38f331372eb741e0a4b91ca18b40f1476571c979908770b8be8cc7bae3_prof);

        
        $__internal_06e8cee195cdf0c73466d55e639dfce63ccabaf213f8f96eaec73a3eac06005e->leave($__internal_06e8cee195cdf0c73466d55e639dfce63ccabaf213f8f96eaec73a3eac06005e_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "D:\\xampp\\htdocs\\symfonyviresh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
