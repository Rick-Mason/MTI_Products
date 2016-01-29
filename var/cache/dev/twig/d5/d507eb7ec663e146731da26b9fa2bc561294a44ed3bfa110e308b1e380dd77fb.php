<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_323460b820594a5a2c259a202b95f317172d1729cbe80c0118254cbac3572c84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9cb7a3ecb4c4d880b7e1e747ce6d6e507f5425433fcbc609f5d5dade07e5db7e = $this->env->getExtension("native_profiler");
        $__internal_9cb7a3ecb4c4d880b7e1e747ce6d6e507f5425433fcbc609f5d5dade07e5db7e->enter($__internal_9cb7a3ecb4c4d880b7e1e747ce6d6e507f5425433fcbc609f5d5dade07e5db7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb7a3ecb4c4d880b7e1e747ce6d6e507f5425433fcbc609f5d5dade07e5db7e->leave($__internal_9cb7a3ecb4c4d880b7e1e747ce6d6e507f5425433fcbc609f5d5dade07e5db7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1c2bd16e7c6e6cba10023546e3d7a6afa2a11ca56713713705b374c74236b72 = $this->env->getExtension("native_profiler");
        $__internal_c1c2bd16e7c6e6cba10023546e3d7a6afa2a11ca56713713705b374c74236b72->enter($__internal_c1c2bd16e7c6e6cba10023546e3d7a6afa2a11ca56713713705b374c74236b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c1c2bd16e7c6e6cba10023546e3d7a6afa2a11ca56713713705b374c74236b72->leave($__internal_c1c2bd16e7c6e6cba10023546e3d7a6afa2a11ca56713713705b374c74236b72_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_172e6e4cbfd3571706e971b68b029bdfc543c664eb97f6bb8287eaef6b178d10 = $this->env->getExtension("native_profiler");
        $__internal_172e6e4cbfd3571706e971b68b029bdfc543c664eb97f6bb8287eaef6b178d10->enter($__internal_172e6e4cbfd3571706e971b68b029bdfc543c664eb97f6bb8287eaef6b178d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_172e6e4cbfd3571706e971b68b029bdfc543c664eb97f6bb8287eaef6b178d10->leave($__internal_172e6e4cbfd3571706e971b68b029bdfc543c664eb97f6bb8287eaef6b178d10_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b4c5c1de8cb187fa612f9081b08123ea3342f7d1dce5bbd46bfa8557c92bf92 = $this->env->getExtension("native_profiler");
        $__internal_0b4c5c1de8cb187fa612f9081b08123ea3342f7d1dce5bbd46bfa8557c92bf92->enter($__internal_0b4c5c1de8cb187fa612f9081b08123ea3342f7d1dce5bbd46bfa8557c92bf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : null))));
            echo "
        </div>
    ";
        }
        
        $__internal_0b4c5c1de8cb187fa612f9081b08123ea3342f7d1dce5bbd46bfa8557c92bf92->leave($__internal_0b4c5c1de8cb187fa612f9081b08123ea3342f7d1dce5bbd46bfa8557c92bf92_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
