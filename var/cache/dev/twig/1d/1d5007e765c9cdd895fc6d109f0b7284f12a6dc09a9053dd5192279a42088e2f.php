<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c4f1b343f4d395023c6d803231f811cf2c29879666e0d857c15deeca9db4be9a extends Twig_Template
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
        $__internal_579ec0b0d81e2c2380fffea5c4a48628e59c27fbb79cac0efc171ab3ae995f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579ec0b0d81e2c2380fffea5c4a48628e59c27fbb79cac0efc171ab3ae995f8b->enter($__internal_579ec0b0d81e2c2380fffea5c4a48628e59c27fbb79cac0efc171ab3ae995f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_579ec0b0d81e2c2380fffea5c4a48628e59c27fbb79cac0efc171ab3ae995f8b->leave($__internal_579ec0b0d81e2c2380fffea5c4a48628e59c27fbb79cac0efc171ab3ae995f8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97a390a1da465da3997dd920796143cde90549c2e0306aa03a2a89354a387256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a390a1da465da3997dd920796143cde90549c2e0306aa03a2a89354a387256->enter($__internal_97a390a1da465da3997dd920796143cde90549c2e0306aa03a2a89354a387256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97a390a1da465da3997dd920796143cde90549c2e0306aa03a2a89354a387256->leave($__internal_97a390a1da465da3997dd920796143cde90549c2e0306aa03a2a89354a387256_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_450ecb9c3e3772df40acb1240781fb8725bd4109d3fd5a02c7ae17d8db83e442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450ecb9c3e3772df40acb1240781fb8725bd4109d3fd5a02c7ae17d8db83e442->enter($__internal_450ecb9c3e3772df40acb1240781fb8725bd4109d3fd5a02c7ae17d8db83e442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_450ecb9c3e3772df40acb1240781fb8725bd4109d3fd5a02c7ae17d8db83e442->leave($__internal_450ecb9c3e3772df40acb1240781fb8725bd4109d3fd5a02c7ae17d8db83e442_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f097e34207ca33edc0331742275e3d6b0c41c6956013f7c541497f8a43ce7dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f097e34207ca33edc0331742275e3d6b0c41c6956013f7c541497f8a43ce7dae->enter($__internal_f097e34207ca33edc0331742275e3d6b0c41c6956013f7c541497f8a43ce7dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f097e34207ca33edc0331742275e3d6b0c41c6956013f7c541497f8a43ce7dae->leave($__internal_f097e34207ca33edc0331742275e3d6b0c41c6956013f7c541497f8a43ce7dae_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
