<?php

/* base.html.twig */
class __TwigTemplate_61918ff246ebe89f5d2436465afc958ea377f671a86a64bbcd4d63126fe7ead3 extends Twig_Template
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
        $__internal_e45e117d2c0fd7339238daeaa5ab9fec331bff38adfb6a2d171163bd3126114d = $this->env->getExtension("native_profiler");
        $__internal_e45e117d2c0fd7339238daeaa5ab9fec331bff38adfb6a2d171163bd3126114d->enter($__internal_e45e117d2c0fd7339238daeaa5ab9fec331bff38adfb6a2d171163bd3126114d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" 
              href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" 
              integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" 
              crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" 
              href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" 
              integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" 
              crossorigin=\"anonymous\">
        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <div class=\"container\">
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "    </div>
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
        
        $__internal_e45e117d2c0fd7339238daeaa5ab9fec331bff38adfb6a2d171163bd3126114d->leave($__internal_e45e117d2c0fd7339238daeaa5ab9fec331bff38adfb6a2d171163bd3126114d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1814d1681f824a62a06b9a31af5e6ba19a176392d443345d1a52ae8e78ce9ff2 = $this->env->getExtension("native_profiler");
        $__internal_1814d1681f824a62a06b9a31af5e6ba19a176392d443345d1a52ae8e78ce9ff2->enter($__internal_1814d1681f824a62a06b9a31af5e6ba19a176392d443345d1a52ae8e78ce9ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1814d1681f824a62a06b9a31af5e6ba19a176392d443345d1a52ae8e78ce9ff2->leave($__internal_1814d1681f824a62a06b9a31af5e6ba19a176392d443345d1a52ae8e78ce9ff2_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_878a04a2083a35c05712905a417c37750cd83c538c83d83b9aa95607c122d11f = $this->env->getExtension("native_profiler");
        $__internal_878a04a2083a35c05712905a417c37750cd83c538c83d83b9aa95607c122d11f->enter($__internal_878a04a2083a35c05712905a417c37750cd83c538c83d83b9aa95607c122d11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_878a04a2083a35c05712905a417c37750cd83c538c83d83b9aa95607c122d11f->leave($__internal_878a04a2083a35c05712905a417c37750cd83c538c83d83b9aa95607c122d11f_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e86feb586c32efc51c31da10d793cb380d22eb11ba86b60b23d0cf7a8b207cc = $this->env->getExtension("native_profiler");
        $__internal_9e86feb586c32efc51c31da10d793cb380d22eb11ba86b60b23d0cf7a8b207cc->enter($__internal_9e86feb586c32efc51c31da10d793cb380d22eb11ba86b60b23d0cf7a8b207cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e86feb586c32efc51c31da10d793cb380d22eb11ba86b60b23d0cf7a8b207cc->leave($__internal_9e86feb586c32efc51c31da10d793cb380d22eb11ba86b60b23d0cf7a8b207cc_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec68fb626f7c7068a587665e6581362825df597168ee391cb2977a50e8a55eee = $this->env->getExtension("native_profiler");
        $__internal_ec68fb626f7c7068a587665e6581362825df597168ee391cb2977a50e8a55eee->enter($__internal_ec68fb626f7c7068a587665e6581362825df597168ee391cb2977a50e8a55eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" 
                integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" 
                crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_ec68fb626f7c7068a587665e6581362825df597168ee391cb2977a50e8a55eee->leave($__internal_ec68fb626f7c7068a587665e6581362825df597168ee391cb2977a50e8a55eee_prof);

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
        return array (  114 => 26,  108 => 25,  97 => 23,  86 => 18,  74 => 5,  65 => 32,  63 => 25,  60 => 24,  58 => 23,  50 => 19,  48 => 18,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         */
/*         <!-- Latest compiled and minified CSS -->*/
/*         <link rel="stylesheet" */
/*               href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" */
/*               integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" */
/*               crossorigin="anonymous">*/
/* */
/*         <!-- Optional theme -->*/
/*         <link rel="stylesheet" */
/*               href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" */
/*               integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" */
/*               crossorigin="anonymous">*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     <div class="container">*/
/*         {% block body %}{% endblock %}*/
/*     </div>*/
/*         {% block javascripts %}*/
/*             <!-- Latest compiled and minified JavaScript -->*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/*             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" */
/*                 integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" */
/*                 crossorigin="anonymous"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
