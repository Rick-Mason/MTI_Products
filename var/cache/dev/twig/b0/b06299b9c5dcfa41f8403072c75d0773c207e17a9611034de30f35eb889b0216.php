<?php

/* referralpartner/index.html.twig */
class __TwigTemplate_58135931b91f587b20846b4148dc45838be652b49a2a755419b3bb09998bbcca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "referralpartner/index.html.twig", 1);
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
        $__internal_07fb825626b37506d45c94b6bde7f1d8d9a92506b08d31090f07447099727669 = $this->env->getExtension("native_profiler");
        $__internal_07fb825626b37506d45c94b6bde7f1d8d9a92506b08d31090f07447099727669->enter($__internal_07fb825626b37506d45c94b6bde7f1d8d9a92506b08d31090f07447099727669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "referralpartner/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07fb825626b37506d45c94b6bde7f1d8d9a92506b08d31090f07447099727669->leave($__internal_07fb825626b37506d45c94b6bde7f1d8d9a92506b08d31090f07447099727669_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfe42892a14e653b18b1822e9ca3a2c256f7656e1e2e53e4c5b38d1123625446 = $this->env->getExtension("native_profiler");
        $__internal_cfe42892a14e653b18b1822e9ca3a2c256f7656e1e2e53e4c5b38d1123625446->enter($__internal_cfe42892a14e653b18b1822e9ca3a2c256f7656e1e2e53e4c5b38d1123625446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ReferralPartner list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Referralpartnername</th>
                <th>Referralpartnercode</th>
                <th>Infusionsoftcontactid</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["referralPartners"]) ? $context["referralPartners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["referralPartner"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("referralpartner_show", array("id" => $this->getAttribute($context["referralPartner"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["referralPartner"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["referralPartner"], "referralPartnerName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["referralPartner"], "referralPartnerCode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["referralPartner"], "infusionSoftContactId", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("referralpartner_show", array("id" => $this->getAttribute($context["referralPartner"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("referralpartner_edit", array("id" => $this->getAttribute($context["referralPartner"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['referralPartner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("referralpartner_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_cfe42892a14e653b18b1822e9ca3a2c256f7656e1e2e53e4c5b38d1123625446->leave($__internal_cfe42892a14e653b18b1822e9ca3a2c256f7656e1e2e53e4c5b38d1123625446_prof);

    }

    public function getTemplateName()
    {
        return "referralpartner/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>ReferralPartner list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Referralpartnername</th>*/
/*                 <th>Referralpartnercode</th>*/
/*                 <th>Infusionsoftcontactid</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for referralPartner in referralPartners %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('referralpartner_show', { 'id': referralPartner.id }) }}">{{ referralPartner.id }}</a></td>*/
/*                 <td>{{ referralPartner.referralPartnerName }}</td>*/
/*                 <td>{{ referralPartner.referralPartnerCode }}</td>*/
/*                 <td>{{ referralPartner.infusionSoftContactId }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('referralpartner_show', { 'id': referralPartner.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('referralpartner_edit', { 'id': referralPartner.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('referralpartner_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
