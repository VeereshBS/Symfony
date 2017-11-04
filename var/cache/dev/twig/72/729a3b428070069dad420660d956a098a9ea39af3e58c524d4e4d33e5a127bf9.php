<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_579100e3918be8d6eb2de83dc0831b5927694f45b2d5331e29f7ce7f551e0ee2 extends Twig_Template
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
        $__internal_effb59608d8f1f3993eb555f0e74a8c3cda131417fe051ebec97e88279cb547f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effb59608d8f1f3993eb555f0e74a8c3cda131417fe051ebec97e88279cb547f->enter($__internal_effb59608d8f1f3993eb555f0e74a8c3cda131417fe051ebec97e88279cb547f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_11cfd6c669498053c7e6f0081a646e9252e0d34108c939ffac1b7e183df4bc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11cfd6c669498053c7e6f0081a646e9252e0d34108c939ffac1b7e183df4bc52->enter($__internal_11cfd6c669498053c7e6f0081a646e9252e0d34108c939ffac1b7e183df4bc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_effb59608d8f1f3993eb555f0e74a8c3cda131417fe051ebec97e88279cb547f->leave($__internal_effb59608d8f1f3993eb555f0e74a8c3cda131417fe051ebec97e88279cb547f_prof);

        
        $__internal_11cfd6c669498053c7e6f0081a646e9252e0d34108c939ffac1b7e183df4bc52->leave($__internal_11cfd6c669498053c7e6f0081a646e9252e0d34108c939ffac1b7e183df4bc52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_630b8f11bb847f685cd18b8cbb48afeea7aed26f4ee0e6160f14304cc1c43fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630b8f11bb847f685cd18b8cbb48afeea7aed26f4ee0e6160f14304cc1c43fed->enter($__internal_630b8f11bb847f685cd18b8cbb48afeea7aed26f4ee0e6160f14304cc1c43fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b364195215f1c0a8ca4d47a9dc5f42a9f0f2e54010f9b0548f32e9a6d9b7b0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b364195215f1c0a8ca4d47a9dc5f42a9f0f2e54010f9b0548f32e9a6d9b7b0c1->enter($__internal_b364195215f1c0a8ca4d47a9dc5f42a9f0f2e54010f9b0548f32e9a6d9b7b0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b364195215f1c0a8ca4d47a9dc5f42a9f0f2e54010f9b0548f32e9a6d9b7b0c1->leave($__internal_b364195215f1c0a8ca4d47a9dc5f42a9f0f2e54010f9b0548f32e9a6d9b7b0c1_prof);

        
        $__internal_630b8f11bb847f685cd18b8cbb48afeea7aed26f4ee0e6160f14304cc1c43fed->leave($__internal_630b8f11bb847f685cd18b8cbb48afeea7aed26f4ee0e6160f14304cc1c43fed_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4665d37208d1f3f0ac2332be37cc5517f29d8c2b133b474b5c0b749aff206ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4665d37208d1f3f0ac2332be37cc5517f29d8c2b133b474b5c0b749aff206ddd->enter($__internal_4665d37208d1f3f0ac2332be37cc5517f29d8c2b133b474b5c0b749aff206ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6e01a9baf390f0694f1a83bb898644ef6ade1dfbed92fe11ba847e24d35a7519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e01a9baf390f0694f1a83bb898644ef6ade1dfbed92fe11ba847e24d35a7519->enter($__internal_6e01a9baf390f0694f1a83bb898644ef6ade1dfbed92fe11ba847e24d35a7519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6e01a9baf390f0694f1a83bb898644ef6ade1dfbed92fe11ba847e24d35a7519->leave($__internal_6e01a9baf390f0694f1a83bb898644ef6ade1dfbed92fe11ba847e24d35a7519_prof);

        
        $__internal_4665d37208d1f3f0ac2332be37cc5517f29d8c2b133b474b5c0b749aff206ddd->leave($__internal_4665d37208d1f3f0ac2332be37cc5517f29d8c2b133b474b5c0b749aff206ddd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d92e74a80b88907407536707a1f449ae8a0ba339953686f84b51846f3c89e7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92e74a80b88907407536707a1f449ae8a0ba339953686f84b51846f3c89e7d8->enter($__internal_d92e74a80b88907407536707a1f449ae8a0ba339953686f84b51846f3c89e7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa923763d17ea05410624a3508f48a7559dad962b63811bcc6c72483d1c49fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa923763d17ea05410624a3508f48a7559dad962b63811bcc6c72483d1c49fd1->enter($__internal_aa923763d17ea05410624a3508f48a7559dad962b63811bcc6c72483d1c49fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_aa923763d17ea05410624a3508f48a7559dad962b63811bcc6c72483d1c49fd1->leave($__internal_aa923763d17ea05410624a3508f48a7559dad962b63811bcc6c72483d1c49fd1_prof);

        
        $__internal_d92e74a80b88907407536707a1f449ae8a0ba339953686f84b51846f3c89e7d8->leave($__internal_d92e74a80b88907407536707a1f449ae8a0ba339953686f84b51846f3c89e7d8_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/symfonyviresh/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
