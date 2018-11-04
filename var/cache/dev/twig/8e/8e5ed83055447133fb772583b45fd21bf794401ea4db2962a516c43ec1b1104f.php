<?php

/* delivery_bag/index.html.twig */
class __TwigTemplate_84b6ac9064e7dc500b237cecd626f7335d1a00e7549444a98dcab62089e180a4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "delivery_bag/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "delivery_bag/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "delivery_bag/index.html.twig"));

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

        echo "Liste des sacs de livraison";
        
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
        echo "    <h1>Liste des sacs de livraison</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Date de livraison</th>
                <th>Ecole</th>
                <th>Ville</th>
                <th>Acheteur</th>
                <th>Date d'achat</th>
                <th>Préparation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["delivery_bags"]) || array_key_exists("delivery_bags", $context) ? $context["delivery_bags"] : (function () { throw new Twig_Error_Runtime('Variable "delivery_bags" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["delivery_bag"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["delivery_bag"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["delivery_bag"], "deliveryBagDeliveryDate", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["delivery_bag"], "deliveryBagDeliveryDate", array()), "d-m-Y H:i:s")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["delivery_bag"], "deliveryBag_delivery", array()), "school", array()), "schoolName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["delivery_bag"], "deliveryBag_delivery", array()), "school", array()), "schoolCity", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["delivery_bag"], "deliveryBag_buyer", array()), "memberName", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["delivery_bag"], "deliveryBag_buyer", array()), "memberSurname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["delivery_bag"], "deliveryBagBuyDate", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["delivery_bag"], "deliveryBagBuyDate", array()), "d-m-Y")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["delivery_bag"], "deliveryBag_processStatus", array()), "processStatusName", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delivery_bag_show", array("id" => twig_get_attribute($this->env, $this->source, $context["delivery_bag"], "id", array()))), "html", null, true);
            echo "\">voir - </a>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delivery_bag_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["delivery_bag"], "id", array()))), "html", null, true);
            echo "\">modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"8\">pas de sac de livraison trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delivery_bag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delivery_bag_new");
        echo "\">Créer un nouveau sac de livraison</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "delivery_bag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 44,  151 => 41,  142 => 37,  133 => 33,  129 => 32,  124 => 30,  120 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  95 => 23,  90 => 22,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Liste des sacs de livraison{% endblock %}

{% block body %}
    <h1>Liste des sacs de livraison</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Date de livraison</th>
                <th>Ecole</th>
                <th>Ville</th>
                <th>Acheteur</th>
                <th>Date d'achat</th>
                <th>Préparation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for delivery_bag in delivery_bags %}
            <tr>
                <td>{{ delivery_bag.id }}</td>
                <td>{{ delivery_bag.deliveryBagDeliveryDate ? delivery_bag.deliveryBagDeliveryDate|date('d-m-Y H:i:s') : '' }}</td>
                <td>{{ delivery_bag.deliveryBag_delivery.school.schoolName }}</td>
                <td>{{ delivery_bag.deliveryBag_delivery.school.schoolCity }}</td>
                <td>{{ delivery_bag.deliveryBag_buyer.memberName }}  {{delivery_bag.deliveryBag_buyer.memberSurname }}</td>
                <td>{{ delivery_bag.deliveryBagBuyDate ? delivery_bag.deliveryBagBuyDate|date('d-m-Y') : '' }}</td>
                <td>{{ delivery_bag.deliveryBag_processStatus.processStatusName }}</td>
                <td>
                    <a href=\"{{ path('delivery_bag_show', {'id': delivery_bag.id}) }}\">voir - </a>
                    <a href=\"{{ path('delivery_bag_edit', {'id': delivery_bag.id}) }}\">modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">pas de sac de livraison trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('delivery_bag_new') }}\">Créer un nouveau sac de livraison</a>
{% endblock %}
", "delivery_bag/index.html.twig", "/Users/marie-aude/Desktop/Sauvegarde TMK 311018/templates/delivery_bag/index.html.twig");
    }
}
