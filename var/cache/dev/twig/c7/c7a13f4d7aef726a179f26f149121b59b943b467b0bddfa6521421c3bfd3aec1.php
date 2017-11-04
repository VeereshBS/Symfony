<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_cac6d13a6002837aad689596ca8b06806d15a00effb869011890a989b28d5db0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1be247ae6dcd284c1683ba41d270ead11fed59222f53649f80fc00c7b11fa5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be247ae6dcd284c1683ba41d270ead11fed59222f53649f80fc00c7b11fa5a7->enter($__internal_1be247ae6dcd284c1683ba41d270ead11fed59222f53649f80fc00c7b11fa5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_156c144530e9474e117f041b03751871cc10ea5b3e9baec1837aea0cb41eff82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156c144530e9474e117f041b03751871cc10ea5b3e9baec1837aea0cb41eff82->enter($__internal_156c144530e9474e117f041b03751871cc10ea5b3e9baec1837aea0cb41eff82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_1be247ae6dcd284c1683ba41d270ead11fed59222f53649f80fc00c7b11fa5a7->leave($__internal_1be247ae6dcd284c1683ba41d270ead11fed59222f53649f80fc00c7b11fa5a7_prof);

        
        $__internal_156c144530e9474e117f041b03751871cc10ea5b3e9baec1837aea0cb41eff82->leave($__internal_156c144530e9474e117f041b03751871cc10ea5b3e9baec1837aea0cb41eff82_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "@KnpPaginator/Pagination/sortable_link.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/symfonyviresh/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
