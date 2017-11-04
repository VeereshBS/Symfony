<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_77fdbfa3c85c92cca552e6d5f3c52995b4cbf243101ad61de0f6caa6669dc75e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_309da47aea295344e23411628a313ccb84b438278ad0f26a73df4c1c7262e492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309da47aea295344e23411628a313ccb84b438278ad0f26a73df4c1c7262e492->enter($__internal_309da47aea295344e23411628a313ccb84b438278ad0f26a73df4c1c7262e492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_54281622fb840d3aec3e7a709996c7f431eb5c521a6f5976cab1b486beea8f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54281622fb840d3aec3e7a709996c7f431eb5c521a6f5976cab1b486beea8f00->enter($__internal_54281622fb840d3aec3e7a709996c7f431eb5c521a6f5976cab1b486beea8f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_309da47aea295344e23411628a313ccb84b438278ad0f26a73df4c1c7262e492->leave($__internal_309da47aea295344e23411628a313ccb84b438278ad0f26a73df4c1c7262e492_prof);

        
        $__internal_54281622fb840d3aec3e7a709996c7f431eb5c521a6f5976cab1b486beea8f00->leave($__internal_54281622fb840d3aec3e7a709996c7f431eb5c521a6f5976cab1b486beea8f00_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e1a1e57ae1700a6bef80cc17ef2b576455121836a7ffaaefaee680d729df6ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a1e57ae1700a6bef80cc17ef2b576455121836a7ffaaefaee680d729df6ab4->enter($__internal_e1a1e57ae1700a6bef80cc17ef2b576455121836a7ffaaefaee680d729df6ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c4f08f863334cd2b0ccca3617064a93e8c3b301d1ceae4edf803f5923aff2a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f08f863334cd2b0ccca3617064a93e8c3b301d1ceae4edf803f5923aff2a4b->enter($__internal_c4f08f863334cd2b0ccca3617064a93e8c3b301d1ceae4edf803f5923aff2a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c4f08f863334cd2b0ccca3617064a93e8c3b301d1ceae4edf803f5923aff2a4b->leave($__internal_c4f08f863334cd2b0ccca3617064a93e8c3b301d1ceae4edf803f5923aff2a4b_prof);

        
        $__internal_e1a1e57ae1700a6bef80cc17ef2b576455121836a7ffaaefaee680d729df6ab4->leave($__internal_e1a1e57ae1700a6bef80cc17ef2b576455121836a7ffaaefaee680d729df6ab4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/symfonyviresh/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
