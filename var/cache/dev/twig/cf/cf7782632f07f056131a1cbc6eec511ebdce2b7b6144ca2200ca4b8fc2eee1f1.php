<?php

/* default/index.html.twig */
class __TwigTemplate_a96afe5161cdbf3a04693e6207e3fbfeffd3086690f7f4306aec03f8e873d24e extends Twig_Template
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
        $__internal_0f0b715ba3fcd0689256eb3ce59b9b78c0960daa8eeba49aafc06a0477d2a3c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f0b715ba3fcd0689256eb3ce59b9b78c0960daa8eeba49aafc06a0477d2a3c3->enter($__internal_0f0b715ba3fcd0689256eb3ce59b9b78c0960daa8eeba49aafc06a0477d2a3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_6a226e23f324574423e3c7c7ff6f2187db0c473af99d88454f67c258fddb7cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a226e23f324574423e3c7c7ff6f2187db0c473af99d88454f67c258fddb7cd6->enter($__internal_6a226e23f324574423e3c7c7ff6f2187db0c473af99d88454f67c258fddb7cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f0b715ba3fcd0689256eb3ce59b9b78c0960daa8eeba49aafc06a0477d2a3c3->leave($__internal_0f0b715ba3fcd0689256eb3ce59b9b78c0960daa8eeba49aafc06a0477d2a3c3_prof);

        
        $__internal_6a226e23f324574423e3c7c7ff6f2187db0c473af99d88454f67c258fddb7cd6->leave($__internal_6a226e23f324574423e3c7c7ff6f2187db0c473af99d88454f67c258fddb7cd6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bac9df80cfb8c4dcd3d1d952dcaef9c8bc642aa113933d56af8b63e3b86a2fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac9df80cfb8c4dcd3d1d952dcaef9c8bc642aa113933d56af8b63e3b86a2fa1->enter($__internal_bac9df80cfb8c4dcd3d1d952dcaef9c8bc642aa113933d56af8b63e3b86a2fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16d992927512666967ca919415420f43eff33c3e60205d3e30991fb95dd5df90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d992927512666967ca919415420f43eff33c3e60205d3e30991fb95dd5df90->enter($__internal_16d992927512666967ca919415420f43eff33c3e60205d3e30991fb95dd5df90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        // line 5
        echo "    <div class=\"count\">
        Total Rows - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
    </div>
    <table>
        <tr>
            ";
        // line 11
        echo "            <th>";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "a.id");
        echo "</th>
            <th";
        // line 12
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Title", "a.title");
        echo "</th>
            <th>";
        // line 13
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Release", array(0 => "a.date", 1 => "a.time"));
        echo "</th>
        </tr>

        ";
        // line 17
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
            // line 18
            echo "            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "fullname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "htmlUrl", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
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
        // line 27
        echo "    </table>
    ";
        // line 29
        echo "    <div class=\"navigation\">
        ";
        // line 30
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>

";
        
        $__internal_16d992927512666967ca919415420f43eff33c3e60205d3e30991fb95dd5df90->leave($__internal_16d992927512666967ca919415420f43eff33c3e60205d3e30991fb95dd5df90_prof);

        
        $__internal_bac9df80cfb8c4dcd3d1d952dcaef9c8bc642aa113933d56af8b63e3b86a2fa1->leave($__internal_bac9df80cfb8c4dcd3d1d952dcaef9c8bc642aa113933d56af8b63e3b86a2fa1_prof);

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
        return array (  148 => 30,  145 => 29,  142 => 27,  125 => 24,  121 => 23,  117 => 22,  113 => 21,  109 => 20,  105 => 19,  98 => 18,  80 => 17,  74 => 13,  66 => 12,  61 => 11,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        Total Rows - {{ pagination.getTotalItemCount }}
    </div>
    <table>
        <tr>
            {# sorting of properties based on query components #}
            <th>{{ knp_pagination_sortable(pagination, 'Id', 'a.id') }}</th>
            <th{% if pagination.isSorted('a.Title') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Title', 'a.title') }}</th>
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

{% endblock %}", "default/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/symfonyviresh/app/Resources/views/default/index.html.twig");
    }
}
