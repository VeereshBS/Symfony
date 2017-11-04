<?php

/* base.html.twig */
class __TwigTemplate_4053d97b4b98ca669b5c68aafe72775bdf731f663da20e73bff828ff9d8a82f0 extends Twig_Template
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
        $__internal_75bdb186f5e5b1fa81afb0f4cc8453aa75983604e24797d105bb921f8d970afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75bdb186f5e5b1fa81afb0f4cc8453aa75983604e24797d105bb921f8d970afb->enter($__internal_75bdb186f5e5b1fa81afb0f4cc8453aa75983604e24797d105bb921f8d970afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1fea56a4f8c162177f902f1f12ef0a1ce110c858b05b68681a701b3bc53f171d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fea56a4f8c162177f902f1f12ef0a1ce110c858b05b68681a701b3bc53f171d->enter($__internal_1fea56a4f8c162177f902f1f12ef0a1ce110c858b05b68681a701b3bc53f171d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_75bdb186f5e5b1fa81afb0f4cc8453aa75983604e24797d105bb921f8d970afb->leave($__internal_75bdb186f5e5b1fa81afb0f4cc8453aa75983604e24797d105bb921f8d970afb_prof);

        
        $__internal_1fea56a4f8c162177f902f1f12ef0a1ce110c858b05b68681a701b3bc53f171d->leave($__internal_1fea56a4f8c162177f902f1f12ef0a1ce110c858b05b68681a701b3bc53f171d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e3f62a67e07afe4affb49dcedb753c394ebb6d93170620bda883b75775e37b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3f62a67e07afe4affb49dcedb753c394ebb6d93170620bda883b75775e37b5->enter($__internal_7e3f62a67e07afe4affb49dcedb753c394ebb6d93170620bda883b75775e37b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98af02262c60b006a8e52d88fc95f9f0e0510afd228578dbebbbbbef583dafe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98af02262c60b006a8e52d88fc95f9f0e0510afd228578dbebbbbbef583dafe0->enter($__internal_98af02262c60b006a8e52d88fc95f9f0e0510afd228578dbebbbbbef583dafe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_98af02262c60b006a8e52d88fc95f9f0e0510afd228578dbebbbbbef583dafe0->leave($__internal_98af02262c60b006a8e52d88fc95f9f0e0510afd228578dbebbbbbef583dafe0_prof);

        
        $__internal_7e3f62a67e07afe4affb49dcedb753c394ebb6d93170620bda883b75775e37b5->leave($__internal_7e3f62a67e07afe4affb49dcedb753c394ebb6d93170620bda883b75775e37b5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef73aca99e2e4ebcc4d27ade12e5e6ca98b31dd180d285c73142508a2de24699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef73aca99e2e4ebcc4d27ade12e5e6ca98b31dd180d285c73142508a2de24699->enter($__internal_ef73aca99e2e4ebcc4d27ade12e5e6ca98b31dd180d285c73142508a2de24699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e3be7f32079011ebe8d20c5d386b86dfee5db9167c20c3e6ca9c59e30e4c3731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3be7f32079011ebe8d20c5d386b86dfee5db9167c20c3e6ca9c59e30e4c3731->enter($__internal_e3be7f32079011ebe8d20c5d386b86dfee5db9167c20c3e6ca9c59e30e4c3731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e3be7f32079011ebe8d20c5d386b86dfee5db9167c20c3e6ca9c59e30e4c3731->leave($__internal_e3be7f32079011ebe8d20c5d386b86dfee5db9167c20c3e6ca9c59e30e4c3731_prof);

        
        $__internal_ef73aca99e2e4ebcc4d27ade12e5e6ca98b31dd180d285c73142508a2de24699->leave($__internal_ef73aca99e2e4ebcc4d27ade12e5e6ca98b31dd180d285c73142508a2de24699_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b207eddbf984c9a3f6abd6d52c4fac99284d0a1ea5af7f0193841e9d2bd2a31c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b207eddbf984c9a3f6abd6d52c4fac99284d0a1ea5af7f0193841e9d2bd2a31c->enter($__internal_b207eddbf984c9a3f6abd6d52c4fac99284d0a1ea5af7f0193841e9d2bd2a31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f3a358a75799d01396c545b7d9c25a80afe264573428a7b3f9a36a46df876b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3a358a75799d01396c545b7d9c25a80afe264573428a7b3f9a36a46df876b3->enter($__internal_8f3a358a75799d01396c545b7d9c25a80afe264573428a7b3f9a36a46df876b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8f3a358a75799d01396c545b7d9c25a80afe264573428a7b3f9a36a46df876b3->leave($__internal_8f3a358a75799d01396c545b7d9c25a80afe264573428a7b3f9a36a46df876b3_prof);

        
        $__internal_b207eddbf984c9a3f6abd6d52c4fac99284d0a1ea5af7f0193841e9d2bd2a31c->leave($__internal_b207eddbf984c9a3f6abd6d52c4fac99284d0a1ea5af7f0193841e9d2bd2a31c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fb470125c9efa1d1e12466a24d3805ad506b5eee1039bf7c6feb4d90825689e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb470125c9efa1d1e12466a24d3805ad506b5eee1039bf7c6feb4d90825689e->enter($__internal_3fb470125c9efa1d1e12466a24d3805ad506b5eee1039bf7c6feb4d90825689e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_64866153e747d7cbb5f6ea53d72d574b428acbdfd9782bc224df4a24ef46f8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64866153e747d7cbb5f6ea53d72d574b428acbdfd9782bc224df4a24ef46f8e2->enter($__internal_64866153e747d7cbb5f6ea53d72d574b428acbdfd9782bc224df4a24ef46f8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_64866153e747d7cbb5f6ea53d72d574b428acbdfd9782bc224df4a24ef46f8e2->leave($__internal_64866153e747d7cbb5f6ea53d72d574b428acbdfd9782bc224df4a24ef46f8e2_prof);

        
        $__internal_3fb470125c9efa1d1e12466a24d3805ad506b5eee1039bf7c6feb4d90825689e->leave($__internal_3fb470125c9efa1d1e12466a24d3805ad506b5eee1039bf7c6feb4d90825689e_prof);

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
", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/symfonyviresh/app/Resources/views/base.html.twig");
    }
}
