<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ae68ec367f20b92fb8fa9bb6f8485b1daf017b8cf764633f77281754c54cc47f extends Twig_Template
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
        $__internal_8dfff237b947a6db6754fb5804b3acc9d5b08deeb31ce7ec19dd8fe0f5a2e8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dfff237b947a6db6754fb5804b3acc9d5b08deeb31ce7ec19dd8fe0f5a2e8e3->enter($__internal_8dfff237b947a6db6754fb5804b3acc9d5b08deeb31ce7ec19dd8fe0f5a2e8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_73140967c8bc88bf4a11ba105dee886ade7389ea002a5a0babaf41de89550433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73140967c8bc88bf4a11ba105dee886ade7389ea002a5a0babaf41de89550433->enter($__internal_73140967c8bc88bf4a11ba105dee886ade7389ea002a5a0babaf41de89550433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dfff237b947a6db6754fb5804b3acc9d5b08deeb31ce7ec19dd8fe0f5a2e8e3->leave($__internal_8dfff237b947a6db6754fb5804b3acc9d5b08deeb31ce7ec19dd8fe0f5a2e8e3_prof);

        
        $__internal_73140967c8bc88bf4a11ba105dee886ade7389ea002a5a0babaf41de89550433->leave($__internal_73140967c8bc88bf4a11ba105dee886ade7389ea002a5a0babaf41de89550433_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e087f7ae78f020a3367e9e3a29f355a04e6e9c819c93b852a98ca8a34d4e493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e087f7ae78f020a3367e9e3a29f355a04e6e9c819c93b852a98ca8a34d4e493->enter($__internal_8e087f7ae78f020a3367e9e3a29f355a04e6e9c819c93b852a98ca8a34d4e493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_89fece1bfb0ab10f55925ac1a1eee5bdd691a3992438c299d3c2e7bbd60f35a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fece1bfb0ab10f55925ac1a1eee5bdd691a3992438c299d3c2e7bbd60f35a0->enter($__internal_89fece1bfb0ab10f55925ac1a1eee5bdd691a3992438c299d3c2e7bbd60f35a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_89fece1bfb0ab10f55925ac1a1eee5bdd691a3992438c299d3c2e7bbd60f35a0->leave($__internal_89fece1bfb0ab10f55925ac1a1eee5bdd691a3992438c299d3c2e7bbd60f35a0_prof);

        
        $__internal_8e087f7ae78f020a3367e9e3a29f355a04e6e9c819c93b852a98ca8a34d4e493->leave($__internal_8e087f7ae78f020a3367e9e3a29f355a04e6e9c819c93b852a98ca8a34d4e493_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9090dfbc8a73e5760bf8909417e863748f66ba5572d9181e18786c76c36f0702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9090dfbc8a73e5760bf8909417e863748f66ba5572d9181e18786c76c36f0702->enter($__internal_9090dfbc8a73e5760bf8909417e863748f66ba5572d9181e18786c76c36f0702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e1d369ec8eb3ae3c2e874c6e7f345cc0ec68d0b577be0e43b1688829fdc23499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d369ec8eb3ae3c2e874c6e7f345cc0ec68d0b577be0e43b1688829fdc23499->enter($__internal_e1d369ec8eb3ae3c2e874c6e7f345cc0ec68d0b577be0e43b1688829fdc23499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1d369ec8eb3ae3c2e874c6e7f345cc0ec68d0b577be0e43b1688829fdc23499->leave($__internal_e1d369ec8eb3ae3c2e874c6e7f345cc0ec68d0b577be0e43b1688829fdc23499_prof);

        
        $__internal_9090dfbc8a73e5760bf8909417e863748f66ba5572d9181e18786c76c36f0702->leave($__internal_9090dfbc8a73e5760bf8909417e863748f66ba5572d9181e18786c76c36f0702_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_743ad364d256ac8603a188c1cc526bdd9fff66f13a0c6539acd5e12959eb5afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743ad364d256ac8603a188c1cc526bdd9fff66f13a0c6539acd5e12959eb5afa->enter($__internal_743ad364d256ac8603a188c1cc526bdd9fff66f13a0c6539acd5e12959eb5afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5ee517f8a4e711fcdbf03734a3e220176675b6ae12da1b38efdcb2f10add8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ee517f8a4e711fcdbf03734a3e220176675b6ae12da1b38efdcb2f10add8fb->enter($__internal_f5ee517f8a4e711fcdbf03734a3e220176675b6ae12da1b38efdcb2f10add8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f5ee517f8a4e711fcdbf03734a3e220176675b6ae12da1b38efdcb2f10add8fb->leave($__internal_f5ee517f8a4e711fcdbf03734a3e220176675b6ae12da1b38efdcb2f10add8fb_prof);

        
        $__internal_743ad364d256ac8603a188c1cc526bdd9fff66f13a0c6539acd5e12959eb5afa->leave($__internal_743ad364d256ac8603a188c1cc526bdd9fff66f13a0c6539acd5e12959eb5afa_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\symfonyviresh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
