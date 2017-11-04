<?php

/* default/index.html.twig */
class __TwigTemplate_73e8004626aee3219a80c6816a0ef25dac317798d03655e54de97945330ea270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c978d1fe3a031ccae46f5f1abfc7f960d1f400b3d719d9e43c192734bff5aa20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c978d1fe3a031ccae46f5f1abfc7f960d1f400b3d719d9e43c192734bff5aa20->enter($__internal_c978d1fe3a031ccae46f5f1abfc7f960d1f400b3d719d9e43c192734bff5aa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_04afb4939768800da0641ac5151be6f4b9a6a3671f944fbb4f295edabc7ee138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04afb4939768800da0641ac5151be6f4b9a6a3671f944fbb4f295edabc7ee138->enter($__internal_04afb4939768800da0641ac5151be6f4b9a6a3671f944fbb4f295edabc7ee138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c978d1fe3a031ccae46f5f1abfc7f960d1f400b3d719d9e43c192734bff5aa20->leave($__internal_c978d1fe3a031ccae46f5f1abfc7f960d1f400b3d719d9e43c192734bff5aa20_prof);

        
        $__internal_04afb4939768800da0641ac5151be6f4b9a6a3671f944fbb4f295edabc7ee138->leave($__internal_04afb4939768800da0641ac5151be6f4b9a6a3671f944fbb4f295edabc7ee138_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf64bc25dbcd974307f5f07e8442ad9c8bdf69d723ebab32a4792912bcf92a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf64bc25dbcd974307f5f07e8442ad9c8bdf69d723ebab32a4792912bcf92a30->enter($__internal_bf64bc25dbcd974307f5f07e8442ad9c8bdf69d723ebab32a4792912bcf92a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3774129c986e33c579e0ef5e80a5ce9873240c8dbd8d9c666d03c6cbba351487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3774129c986e33c579e0ef5e80a5ce9873240c8dbd8d9c666d03c6cbba351487->enter($__internal_3774129c986e33c579e0ef5e80a5ce9873240c8dbd8d9c666d03c6cbba351487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        // line 5
        echo "    <div class=\"count\">
\t\t<h3 style=\"align:center\">Symfony Project</h3>
        Total Rows - ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
    </div>
    <table>
        <tr>
            ";
        // line 12
        echo "            <th>";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "a.id");
        echo "</th>
            <th>";
        // line 13
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Title", "a.title");
        echo "</th>
            <th>";
        // line 14
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Release", array(0 => "a.date", 1 => "a.time"));
        echo "</th>
        </tr>

        ";
        // line 18
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "fullname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "htmlUrl", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "gitUrl", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </table>
    ";
        // line 30
        echo "    <div class=\"navigation\">
        ";
        // line 31
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>

";
        
        $__internal_3774129c986e33c579e0ef5e80a5ce9873240c8dbd8d9c666d03c6cbba351487->leave($__internal_3774129c986e33c579e0ef5e80a5ce9873240c8dbd8d9c666d03c6cbba351487_prof);

        
        $__internal_bf64bc25dbcd974307f5f07e8442ad9c8bdf69d723ebab32a4792912bcf92a30->leave($__internal_bf64bc25dbcd974307f5f07e8442ad9c8bdf69d723ebab32a4792912bcf92a30_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 31,  142 => 30,  139 => 28,  122 => 25,  118 => 24,  114 => 23,  110 => 22,  106 => 21,  102 => 20,  95 => 19,  77 => 18,  71 => 14,  67 => 13,  62 => 12,  55 => 7,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {# total items count #}
    <div class=\"count\">
\t\t<h3 style=\"align:center\">Symfony Project</h3>
        Total Rows - {{ pagination.getTotalItemCount }}
    </div>
    <table>
        <tr>
            {# sorting of properties based on query components #}
            <th>{{ knp_pagination_sortable(pagination, 'Id', 'a.id') }}</th>
            <th>{{ knp_pagination_sortable(pagination, 'Title', 'a.title') }}</th>
            <th>{{ knp_pagination_sortable(pagination, 'Release', ['a.date', 'a.time']) }}</th>
        </tr>

        {# table body #}
        {% for article in pagination %}
            <tr {% if loop.index is odd %}class=\"color\"{% endif %}>
                <td>{{ article.id }}</td>
                <td>{{ article.name }}</td>
                <td>{{ article.fullname }}</td>
                <td>{{ article.htmlUrl }}</td>
                <td>{{ article.description }}</td>
                <td>{{ article.gitUrl }}</td>
            </tr>
        {% endfor %}
    </table>
    {# display navigation #}
    <div class=\"navigation\">
        {{ knp_pagination_render(pagination) }}
    </div>

{% endblock %}", "default/index.html.twig", "D:\\xampp\\htdocs\\symfonyviresh\\app\\Resources\\views\\default\\index.html.twig");
    }
}
