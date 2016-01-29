<?php

/* product/index.html.twig */
class __TwigTemplate_87e6c46f27ae534efb4042e4b68cb49f4005e1cec99e1939c32f907c13df0e93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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
        $__internal_91b31dff3068e207e0dc65d995044a61f95f78c51828d589e7bbcf646a7e42d9 = $this->env->getExtension("native_profiler");
        $__internal_91b31dff3068e207e0dc65d995044a61f95f78c51828d589e7bbcf646a7e42d9->enter($__internal_91b31dff3068e207e0dc65d995044a61f95f78c51828d589e7bbcf646a7e42d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91b31dff3068e207e0dc65d995044a61f95f78c51828d589e7bbcf646a7e42d9->leave($__internal_91b31dff3068e207e0dc65d995044a61f95f78c51828d589e7bbcf646a7e42d9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0f6680a4a248bd60bffed5ab72d1349a0f0e544c5d4a8bac1d4032036890276 = $this->env->getExtension("native_profiler");
        $__internal_d0f6680a4a248bd60bffed5ab72d1349a0f0e544c5d4a8bac1d4032036890276->enter($__internal_d0f6680a4a248bd60bffed5ab72d1349a0f0e544c5d4a8bac1d4032036890276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product list</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Sku</th>
                <th>Category</th>
                <th>Status</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "sku", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "category", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["product"], "status", array())) {
                echo "Active";
            } else {
                echo "Inactive";
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">View</a></td>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products_edit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Edit</a></td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("products_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_d0f6680a4a248bd60bffed5ab72d1349a0f0e544c5d4a8bac1d4032036890276->leave($__internal_d0f6680a4a248bd60bffed5ab72d1349a0f0e544c5d4a8bac1d4032036890276_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  101 => 30,  91 => 26,  87 => 25,  83 => 24,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Product list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <th>Sku</th>*/
/*                 <th>Category</th>*/
/*                 <th>Status</th>*/
/*                 <th>Price</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for product in products %}*/
/*             <tr>*/
/*                 <td>{{ product.name }}</td>*/
/*                 <td>{{ product.sku }}</td>*/
/*                 <td>{{ product.category }}</td>*/
/*                 <td>{% if product.status %}Active{% else %}Inactive{% endif %}</td>*/
/*                 <td>{{ product.price }}</td>*/
/*                 <td><a href="{{ path('products_show', { 'id': product.id }) }}" class="btn btn-primary btn-sm">View</a></td>*/
/*                 <td><a href="{{ path('products_edit', { 'id': product.id }) }}" class="btn btn-primary btn-sm">Edit</a></td>*/
/*                 */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('products_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
