<?php

/* delivery_bag/show.html.twig */
class __TwigTemplate_c5c9a15e067c224f05586ffce65d334dcb57b62f6468cdd236589302968b4117 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "delivery_bag/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "delivery_bag/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "delivery_bag/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sac de livraison";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Sac de livraison</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_bag"]) || array_key_exists("delivery_bag", $context) ? $context["delivery_bag"] : (function () { throw new Twig_Error_Runtime('Variable "delivery_bag" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Frais de service</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_bag"]) || array_key_exists("delivery_bag", $context) ? $context["delivery_bag"] : (function () { throw new Twig_Error_Runtime('Variable "delivery_bag" does not exist.', 16, $this->source); })()), "deliveryBagServiceFee", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Frais de livraison</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_bag"]) || array_key_exists("delivery_bag", $context) ? $context["delivery_bag"] : (function () { throw new Twig_Error_Runtime('Variable "delivery_bag" does not exist.', 20, $this->source); })()), "deliveryBagDeliveryFee", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Montant cagnotte (boutons)</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_bag"]) || array_key_exists("delivery_bag", $context) ? $context["delivery_bag"] : (function () { throw new Twig_Error_Runtime('Variable "delivery_bag" does not exist.', 24, $this->source); })()), "deliveryBagButtonAmount", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date d'achat</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["delivery_bag"]) || array_key_exists("delivery_bag", $context) ? $context["delivery_bag"] : (function () { throw new Twig_Error_Runtime('Variable "delivery_bag" does not exist.', 28, $this->source); })()), "deliveryBagBuyDate", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_bag"]) || array_key_exists("delivery_bag", $context) ? $context["delivery_bag"] : (function () { throw new Twig_Error_Runtime('Variable "delivery_bag" does not exist.', 28, $this->source); })()), "deliveryBagBuyDate", array()), "m-d-Y")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date et heure de livraison</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["delivery_bag"]) || array_key_exists("delivery_bag", $context) ? $context["delivery_bag"] : (function () { throw new Twig_Error_Runtime('Variable "delivery_bag" does not exist.', 32, $this->source); })()), "deliveryBagDeliveryDate", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_bag"]) || array_key_exists("delivery_bag", $context) ? $context["delivery_bag"] : (function () { throw new Twig_Error_Runtime('Variable "delivery_bag" does not exist.', 32, $this->source); })()), "deliveryBagDeliveryDate", array()), "m-d-Y H:i:s")) : ("")), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delivery_bag_index");
        echo "\">Retour à la liste</a>

    <br>
    ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
            // line 41
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "MemberRole", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 42
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["role"], "id", array()) == "6")) {
                    // line 43
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delivery_bag_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["delivery_bag"]) || array_key_exists("delivery_bag", $context) ? $context["delivery_bag"] : (function () { throw new Twig_Error_Runtime('Variable "delivery_bag" does not exist.', 43, $this->source); })()), "id", array()))), "html", null, true);
                    echo "\">Modifier</a>
            <br>
            ";
                    // line 45
                    echo twig_include($this->env, $context, "delivery_bag/_delete_form.html.twig");
                    echo "
            ";
                }
                // line 47
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    ";
        }
        // line 49
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "delivery_bag/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 49,  177 => 48,  163 => 47,  158 => 45,  152 => 43,  149 => 42,  131 => 41,  129 => 40,  123 => 37,  115 => 32,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Sac de livraison{% endblock %}

{% block body %}
    <h1>Sac de livraison</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ delivery_bag.id }}</td>
            </tr>
            <tr>
                <th>Frais de service</th>
                <td>{{ delivery_bag.deliveryBagServiceFee }}</td>
            </tr>
            <tr>
                <th>Frais de livraison</th>
                <td>{{ delivery_bag.deliveryBagDeliveryFee }}</td>
            </tr>
            <tr>
                <th>Montant cagnotte (boutons)</th>
                <td>{{ delivery_bag.deliveryBagButtonAmount }}</td>
            </tr>
            <tr>
                <th>Date d'achat</th>
                <td>{{ delivery_bag.deliveryBagBuyDate ? delivery_bag.deliveryBagBuyDate|date('m-d-Y') : '' }}</td>
            </tr>
            <tr>
                <th>Date et heure de livraison</th>
                <td>{{ delivery_bag.deliveryBagDeliveryDate ? delivery_bag.deliveryBagDeliveryDate|date('m-d-Y H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('delivery_bag_index') }}\">Retour à la liste</a>

    <br>
    {% if app.session.get('user') %}
        {% for role in app.session.get('user').MemberRole %}
            {% if role.id ==  \"6\" %}
            <a href=\"{{ path('delivery_bag_edit', {'id': delivery_bag.id}) }}\">Modifier</a>
            <br>
            {{ include('delivery_bag/_delete_form.html.twig') }}
            {% endif %}
        {% endfor %}
    {% endif %}
    
{% endblock %}", "delivery_bag/show.html.twig", "/Users/marie-aude/Desktop/Sauvegarde TMK 311018/templates/delivery_bag/show.html.twig");
    }
}
