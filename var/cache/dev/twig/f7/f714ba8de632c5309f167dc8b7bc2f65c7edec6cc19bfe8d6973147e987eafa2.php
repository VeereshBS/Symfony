<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e656b3c7a19983735c2f04a3388789e831702f5ea9e0bdc9f4122a472de8f540 extends Twig_Template
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
        $__internal_bc41605d068e67022fde16814751149aa70edbddf74c9f388be2350055b8202d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc41605d068e67022fde16814751149aa70edbddf74c9f388be2350055b8202d->enter($__internal_bc41605d068e67022fde16814751149aa70edbddf74c9f388be2350055b8202d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_56c853423110d3e7db50fa54b157e5132bb8cea94b89410c537365d5c6f158a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c853423110d3e7db50fa54b157e5132bb8cea94b89410c537365d5c6f158a9->enter($__internal_56c853423110d3e7db50fa54b157e5132bb8cea94b89410c537365d5c6f158a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc41605d068e67022fde16814751149aa70edbddf74c9f388be2350055b8202d->leave($__internal_bc41605d068e67022fde16814751149aa70edbddf74c9f388be2350055b8202d_prof);

        
        $__internal_56c853423110d3e7db50fa54b157e5132bb8cea94b89410c537365d5c6f158a9->leave($__internal_56c853423110d3e7db50fa54b157e5132bb8cea94b89410c537365d5c6f158a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a705537ad7b307589285c5048c61939aacd41867906a455b73c832d0e70522a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a705537ad7b307589285c5048c61939aacd41867906a455b73c832d0e70522a7->enter($__internal_a705537ad7b307589285c5048c61939aacd41867906a455b73c832d0e70522a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ef72d5de5eeb7eeab09dbab6325f53c1114474c0171fcbc7a949144fdca42339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef72d5de5eeb7eeab09dbab6325f53c1114474c0171fcbc7a949144fdca42339->enter($__internal_ef72d5de5eeb7eeab09dbab6325f53c1114474c0171fcbc7a949144fdca42339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef72d5de5eeb7eeab09dbab6325f53c1114474c0171fcbc7a949144fdca42339->leave($__internal_ef72d5de5eeb7eeab09dbab6325f53c1114474c0171fcbc7a949144fdca42339_prof);

        
        $__internal_a705537ad7b307589285c5048c61939aacd41867906a455b73c832d0e70522a7->leave($__internal_a705537ad7b307589285c5048c61939aacd41867906a455b73c832d0e70522a7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de55b74128e5f650f48ff236f262ba5236979b5459c6ded8c9536a1b4dddc4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de55b74128e5f650f48ff236f262ba5236979b5459c6ded8c9536a1b4dddc4e4->enter($__internal_de55b74128e5f650f48ff236f262ba5236979b5459c6ded8c9536a1b4dddc4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dd8542a5330c941083014293aa0e897fb6e5423c6bcbfa026c234aaa07f060ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8542a5330c941083014293aa0e897fb6e5423c6bcbfa026c234aaa07f060ec->enter($__internal_dd8542a5330c941083014293aa0e897fb6e5423c6bcbfa026c234aaa07f060ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dd8542a5330c941083014293aa0e897fb6e5423c6bcbfa026c234aaa07f060ec->leave($__internal_dd8542a5330c941083014293aa0e897fb6e5423c6bcbfa026c234aaa07f060ec_prof);

        
        $__internal_de55b74128e5f650f48ff236f262ba5236979b5459c6ded8c9536a1b4dddc4e4->leave($__internal_de55b74128e5f650f48ff236f262ba5236979b5459c6ded8c9536a1b4dddc4e4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08d2609a4780b22c7136be4b61b87eab03b47da349d5cd349a8149670687778c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d2609a4780b22c7136be4b61b87eab03b47da349d5cd349a8149670687778c->enter($__internal_08d2609a4780b22c7136be4b61b87eab03b47da349d5cd349a8149670687778c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b706fa8fecfab4ecb054fc5f973d93d2d8acf64882941d5bfd9291234cf7d522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b706fa8fecfab4ecb054fc5f973d93d2d8acf64882941d5bfd9291234cf7d522->enter($__internal_b706fa8fecfab4ecb054fc5f973d93d2d8acf64882941d5bfd9291234cf7d522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b706fa8fecfab4ecb054fc5f973d93d2d8acf64882941d5bfd9291234cf7d522->leave($__internal_b706fa8fecfab4ecb054fc5f973d93d2d8acf64882941d5bfd9291234cf7d522_prof);

        
        $__internal_08d2609a4780b22c7136be4b61b87eab03b47da349d5cd349a8149670687778c->leave($__internal_08d2609a4780b22c7136be4b61b87eab03b47da349d5cd349a8149670687778c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/symfonyviresh/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
