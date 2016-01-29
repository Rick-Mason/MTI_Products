<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_27ce8e2a8ee602478a6e792e2360c764a5e759c587116323294148941bc2f5e6 extends Twig_Template
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
        $__internal_1cbc7e0e57bb9e03b7c5463419e707a4d3e6c2ff971cff18db31aaf4c0f17ebe = $this->env->getExtension("native_profiler");
        $__internal_1cbc7e0e57bb9e03b7c5463419e707a4d3e6c2ff971cff18db31aaf4c0f17ebe->enter($__internal_1cbc7e0e57bb9e03b7c5463419e707a4d3e6c2ff971cff18db31aaf4c0f17ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cbc7e0e57bb9e03b7c5463419e707a4d3e6c2ff971cff18db31aaf4c0f17ebe->leave($__internal_1cbc7e0e57bb9e03b7c5463419e707a4d3e6c2ff971cff18db31aaf4c0f17ebe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c33415726368c5588d1974315f2385fa136d36fc799fe9df1582654c60f94b8a = $this->env->getExtension("native_profiler");
        $__internal_c33415726368c5588d1974315f2385fa136d36fc799fe9df1582654c60f94b8a->enter($__internal_c33415726368c5588d1974315f2385fa136d36fc799fe9df1582654c60f94b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c33415726368c5588d1974315f2385fa136d36fc799fe9df1582654c60f94b8a->leave($__internal_c33415726368c5588d1974315f2385fa136d36fc799fe9df1582654c60f94b8a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d7fe16c07ebca8da4b4ae90fd7c5491f96c61cfa2b559305f9028aa31ab11e4 = $this->env->getExtension("native_profiler");
        $__internal_6d7fe16c07ebca8da4b4ae90fd7c5491f96c61cfa2b559305f9028aa31ab11e4->enter($__internal_6d7fe16c07ebca8da4b4ae90fd7c5491f96c61cfa2b559305f9028aa31ab11e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d7fe16c07ebca8da4b4ae90fd7c5491f96c61cfa2b559305f9028aa31ab11e4->leave($__internal_6d7fe16c07ebca8da4b4ae90fd7c5491f96c61cfa2b559305f9028aa31ab11e4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_432305c42d7d6f9f76d73f751664a53d22242f3d12442afc28c06ff105b911b5 = $this->env->getExtension("native_profiler");
        $__internal_432305c42d7d6f9f76d73f751664a53d22242f3d12442afc28c06ff105b911b5->enter($__internal_432305c42d7d6f9f76d73f751664a53d22242f3d12442afc28c06ff105b911b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : null))));
        echo "
";
        
        $__internal_432305c42d7d6f9f76d73f751664a53d22242f3d12442afc28c06ff105b911b5->leave($__internal_432305c42d7d6f9f76d73f751664a53d22242f3d12442afc28c06ff105b911b5_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
