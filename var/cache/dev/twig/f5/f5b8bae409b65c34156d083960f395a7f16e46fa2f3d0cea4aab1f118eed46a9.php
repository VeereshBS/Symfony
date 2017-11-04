<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d2d54e79ae28ab0101f494064a7ccb6036a6efea4cee91ca17bfe598648d3313 extends Twig_Template
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
        $__internal_bd5cb389ff39c781546c7b93664a43cb757a5dd2f0c0e3e127893480aaf0b250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5cb389ff39c781546c7b93664a43cb757a5dd2f0c0e3e127893480aaf0b250->enter($__internal_bd5cb389ff39c781546c7b93664a43cb757a5dd2f0c0e3e127893480aaf0b250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_57818e5c0805da819f704f7b9c190bf7245135b48743379261e99ef94e748b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57818e5c0805da819f704f7b9c190bf7245135b48743379261e99ef94e748b52->enter($__internal_57818e5c0805da819f704f7b9c190bf7245135b48743379261e99ef94e748b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd5cb389ff39c781546c7b93664a43cb757a5dd2f0c0e3e127893480aaf0b250->leave($__internal_bd5cb389ff39c781546c7b93664a43cb757a5dd2f0c0e3e127893480aaf0b250_prof);

        
        $__internal_57818e5c0805da819f704f7b9c190bf7245135b48743379261e99ef94e748b52->leave($__internal_57818e5c0805da819f704f7b9c190bf7245135b48743379261e99ef94e748b52_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_300125f9ae83fd9b30d95175892dc8a94e02902b71ee6c9083f8df4e67bd25ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_300125f9ae83fd9b30d95175892dc8a94e02902b71ee6c9083f8df4e67bd25ec->enter($__internal_300125f9ae83fd9b30d95175892dc8a94e02902b71ee6c9083f8df4e67bd25ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5346b5791aa0d77a3cdda3d1df9b68956cb0d96971ba5ac615bfa2fb7b3d68ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5346b5791aa0d77a3cdda3d1df9b68956cb0d96971ba5ac615bfa2fb7b3d68ba->enter($__internal_5346b5791aa0d77a3cdda3d1df9b68956cb0d96971ba5ac615bfa2fb7b3d68ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5346b5791aa0d77a3cdda3d1df9b68956cb0d96971ba5ac615bfa2fb7b3d68ba->leave($__internal_5346b5791aa0d77a3cdda3d1df9b68956cb0d96971ba5ac615bfa2fb7b3d68ba_prof);

        
        $__internal_300125f9ae83fd9b30d95175892dc8a94e02902b71ee6c9083f8df4e67bd25ec->leave($__internal_300125f9ae83fd9b30d95175892dc8a94e02902b71ee6c9083f8df4e67bd25ec_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "D:\\xampp\\htdocs\\symfonyviresh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
