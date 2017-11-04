<?php

/* base.html.twig */
class __TwigTemplate_8a0ac2dca6fdae482b667c007414bbb3da93af0f2eaaf766ad68816149a23f34 extends Twig_Template
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
        $__internal_c78807e47f56a2f142301b56434eada8b35bd73dd571f9cdf1b558aba7aa7537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78807e47f56a2f142301b56434eada8b35bd73dd571f9cdf1b558aba7aa7537->enter($__internal_c78807e47f56a2f142301b56434eada8b35bd73dd571f9cdf1b558aba7aa7537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_825718cc4862e42fe130da5d99bdc1e1486cd915ce31b013eb3a24e3958710a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825718cc4862e42fe130da5d99bdc1e1486cd915ce31b013eb3a24e3958710a2->enter($__internal_825718cc4862e42fe130da5d99bdc1e1486cd915ce31b013eb3a24e3958710a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c78807e47f56a2f142301b56434eada8b35bd73dd571f9cdf1b558aba7aa7537->leave($__internal_c78807e47f56a2f142301b56434eada8b35bd73dd571f9cdf1b558aba7aa7537_prof);

        
        $__internal_825718cc4862e42fe130da5d99bdc1e1486cd915ce31b013eb3a24e3958710a2->leave($__internal_825718cc4862e42fe130da5d99bdc1e1486cd915ce31b013eb3a24e3958710a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_94fdeaf4a269369e36a3f9a7aa053d70077ca910fbf6111f40fadef03d91b0d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94fdeaf4a269369e36a3f9a7aa053d70077ca910fbf6111f40fadef03d91b0d6->enter($__internal_94fdeaf4a269369e36a3f9a7aa053d70077ca910fbf6111f40fadef03d91b0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b330db59f064f64ccbcf63ddc936bdb1cf4781d73f6bb495ac4958f1e0089a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b330db59f064f64ccbcf63ddc936bdb1cf4781d73f6bb495ac4958f1e0089a89->enter($__internal_b330db59f064f64ccbcf63ddc936bdb1cf4781d73f6bb495ac4958f1e0089a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b330db59f064f64ccbcf63ddc936bdb1cf4781d73f6bb495ac4958f1e0089a89->leave($__internal_b330db59f064f64ccbcf63ddc936bdb1cf4781d73f6bb495ac4958f1e0089a89_prof);

        
        $__internal_94fdeaf4a269369e36a3f9a7aa053d70077ca910fbf6111f40fadef03d91b0d6->leave($__internal_94fdeaf4a269369e36a3f9a7aa053d70077ca910fbf6111f40fadef03d91b0d6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b346d70f45511b637a204c125d40c4c9e66846643708f000e23d33e1b99a6b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b346d70f45511b637a204c125d40c4c9e66846643708f000e23d33e1b99a6b74->enter($__internal_b346d70f45511b637a204c125d40c4c9e66846643708f000e23d33e1b99a6b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_edafc31e2f861c382fde586e6fc99aca168cf40863f59e18109dbb9dc5a67deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edafc31e2f861c382fde586e6fc99aca168cf40863f59e18109dbb9dc5a67deb->enter($__internal_edafc31e2f861c382fde586e6fc99aca168cf40863f59e18109dbb9dc5a67deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_edafc31e2f861c382fde586e6fc99aca168cf40863f59e18109dbb9dc5a67deb->leave($__internal_edafc31e2f861c382fde586e6fc99aca168cf40863f59e18109dbb9dc5a67deb_prof);

        
        $__internal_b346d70f45511b637a204c125d40c4c9e66846643708f000e23d33e1b99a6b74->leave($__internal_b346d70f45511b637a204c125d40c4c9e66846643708f000e23d33e1b99a6b74_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_386a853809bfe13bcc29ba07ceef95d7b7898f27da639a77a82e1226ad6854a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386a853809bfe13bcc29ba07ceef95d7b7898f27da639a77a82e1226ad6854a1->enter($__internal_386a853809bfe13bcc29ba07ceef95d7b7898f27da639a77a82e1226ad6854a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70c493c85e9ff6c093c4e6178a1c69b0650f6bd218f08275543cd4c9aac98635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c493c85e9ff6c093c4e6178a1c69b0650f6bd218f08275543cd4c9aac98635->enter($__internal_70c493c85e9ff6c093c4e6178a1c69b0650f6bd218f08275543cd4c9aac98635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_70c493c85e9ff6c093c4e6178a1c69b0650f6bd218f08275543cd4c9aac98635->leave($__internal_70c493c85e9ff6c093c4e6178a1c69b0650f6bd218f08275543cd4c9aac98635_prof);

        
        $__internal_386a853809bfe13bcc29ba07ceef95d7b7898f27da639a77a82e1226ad6854a1->leave($__internal_386a853809bfe13bcc29ba07ceef95d7b7898f27da639a77a82e1226ad6854a1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e589fd92502455ae1c03d60aad46a9ca12fed930bb1a38b7cb9a3679ffdd52b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e589fd92502455ae1c03d60aad46a9ca12fed930bb1a38b7cb9a3679ffdd52b4->enter($__internal_e589fd92502455ae1c03d60aad46a9ca12fed930bb1a38b7cb9a3679ffdd52b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ee95874f14e255415f6876afd48649df6c59abfc023b442c4e732baf690a42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee95874f14e255415f6876afd48649df6c59abfc023b442c4e732baf690a42b->enter($__internal_8ee95874f14e255415f6876afd48649df6c59abfc023b442c4e732baf690a42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8ee95874f14e255415f6876afd48649df6c59abfc023b442c4e732baf690a42b->leave($__internal_8ee95874f14e255415f6876afd48649df6c59abfc023b442c4e732baf690a42b_prof);

        
        $__internal_e589fd92502455ae1c03d60aad46a9ca12fed930bb1a38b7cb9a3679ffdd52b4->leave($__internal_e589fd92502455ae1c03d60aad46a9ca12fed930bb1a38b7cb9a3679ffdd52b4_prof);

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
", "base.html.twig", "D:\\xampp\\htdocs\\symfonyviresh\\app\\Resources\\views\\base.html.twig");
    }
}
