<?php

/* base.html.twig */
class __TwigTemplate_2df58da4b5d552b45d1290be725fdcbf783aa57ae514a3ace8f602451f4efd85 extends Twig_Template
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
        $__internal_02d240029e38456b72e2fbc9201a0426bbec86408856adfb6e972339b4006503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d240029e38456b72e2fbc9201a0426bbec86408856adfb6e972339b4006503->enter($__internal_02d240029e38456b72e2fbc9201a0426bbec86408856adfb6e972339b4006503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_02d240029e38456b72e2fbc9201a0426bbec86408856adfb6e972339b4006503->leave($__internal_02d240029e38456b72e2fbc9201a0426bbec86408856adfb6e972339b4006503_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fded263baa5110315af8f4fdd50d311c7091cba1a6b1ad116bc3eba0756d2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fded263baa5110315af8f4fdd50d311c7091cba1a6b1ad116bc3eba0756d2f1->enter($__internal_3fded263baa5110315af8f4fdd50d311c7091cba1a6b1ad116bc3eba0756d2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3fded263baa5110315af8f4fdd50d311c7091cba1a6b1ad116bc3eba0756d2f1->leave($__internal_3fded263baa5110315af8f4fdd50d311c7091cba1a6b1ad116bc3eba0756d2f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c3e22b8a4f130967e77e31bd5f7a0582554198819a9f8e072cdf2b2eeecd4ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e22b8a4f130967e77e31bd5f7a0582554198819a9f8e072cdf2b2eeecd4ba0->enter($__internal_c3e22b8a4f130967e77e31bd5f7a0582554198819a9f8e072cdf2b2eeecd4ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c3e22b8a4f130967e77e31bd5f7a0582554198819a9f8e072cdf2b2eeecd4ba0->leave($__internal_c3e22b8a4f130967e77e31bd5f7a0582554198819a9f8e072cdf2b2eeecd4ba0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b41635d457b0a7f09fb91f76482ae59194202f8f794902a583584dd92dfbe7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b41635d457b0a7f09fb91f76482ae59194202f8f794902a583584dd92dfbe7a->enter($__internal_7b41635d457b0a7f09fb91f76482ae59194202f8f794902a583584dd92dfbe7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7b41635d457b0a7f09fb91f76482ae59194202f8f794902a583584dd92dfbe7a->leave($__internal_7b41635d457b0a7f09fb91f76482ae59194202f8f794902a583584dd92dfbe7a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cba9cb8e5d3547b9ac7cf113e4d1bb1cfcd16a37e6f1df6ba5da92ce20c4e9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba9cb8e5d3547b9ac7cf113e4d1bb1cfcd16a37e6f1df6ba5da92ce20c4e9dc->enter($__internal_cba9cb8e5d3547b9ac7cf113e4d1bb1cfcd16a37e6f1df6ba5da92ce20c4e9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cba9cb8e5d3547b9ac7cf113e4d1bb1cfcd16a37e6f1df6ba5da92ce20c4e9dc->leave($__internal_cba9cb8e5d3547b9ac7cf113e4d1bb1cfcd16a37e6f1df6ba5da92ce20c4e9dc_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
", "base.html.twig", "/opt/lampp/htdocs/rest_api/app/Resources/views/base.html.twig");
    }
}
