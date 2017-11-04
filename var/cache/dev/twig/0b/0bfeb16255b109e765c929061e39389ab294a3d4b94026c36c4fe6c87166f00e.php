<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_7bbb90df3aa4df76c736597cdd32af81200c950101b5173baf3abaa537e8025a extends Twig_Template
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
        $__internal_d2adae72c2f197ef675706bb68a6de3fa931f12537f919d45ca0c9cb81cb3467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2adae72c2f197ef675706bb68a6de3fa931f12537f919d45ca0c9cb81cb3467->enter($__internal_d2adae72c2f197ef675706bb68a6de3fa931f12537f919d45ca0c9cb81cb3467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_a22b53605ef4f86a7de60d0ff7b50d01f283c973f9f7d07fb4d654dff18653db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22b53605ef4f86a7de60d0ff7b50d01f283c973f9f7d07fb4d654dff18653db->enter($__internal_a22b53605ef4f86a7de60d0ff7b50d01f283c973f9f7d07fb4d654dff18653db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

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
        
        $__internal_d2adae72c2f197ef675706bb68a6de3fa931f12537f919d45ca0c9cb81cb3467->leave($__internal_d2adae72c2f197ef675706bb68a6de3fa931f12537f919d45ca0c9cb81cb3467_prof);

        
        $__internal_a22b53605ef4f86a7de60d0ff7b50d01f283c973f9f7d07fb4d654dff18653db->leave($__internal_a22b53605ef4f86a7de60d0ff7b50d01f283c973f9f7d07fb4d654dff18653db_prof);

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
", "@KnpPaginator/Pagination/sortable_link.html.twig", "D:\\xampp\\htdocs\\symfonyviresh\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\sortable_link.html.twig");
    }
}
