<?php

/* donation_bag/index.html.twig */
class __TwigTemplate_1e284a45dde656cd7d4db80fafb182380c1f363ffcd69f1f1423442c45608424 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "donation_bag/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "donation_bag/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "donation_bag/index.html.twig"));

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

        echo "Liste des sacs de dons";
        
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
        echo "
    <h2>Liste des sacs de dons</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Donnateur</th>
                <th>Date du don</th>
                <th>Ecole du don</th>
                <th>Ville</th>
                <th>Etape de préparation</th>
                <th>Liste des articles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["donation_bags"]) || array_key_exists("donation_bags", $context) ? $context["donation_bags"] : (function () { throw new Twig_Error_Runtime('Variable "donation_bags" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["donation_bag"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["donation_bag"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["donation_bag"], "donationBag_donator", array()), "memberName", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["donation_bag"], "donationBag_donator", array()), "memberSurName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["donation_bag"], "donationBagDate", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["donation_bag"], "donationBagDate", array()), "d-m-Y")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["donation_bag"], "donationBag_schoolStop", array()), "schoolName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["donation_bag"], "donationBag_schoolStop", array()), "schoolCity", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["donation_bag"], "donationBag_processStatus", array()), "processStatusName", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["donation_bag"], "donationBag_article_list", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 33
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "articleCode", array()), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                    </ul>
                </td>
                <td>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("donation_bag_show", array("id" => twig_get_attribute($this->env, $this->source, $context["donation_bag"], "id", array()))), "html", null, true);
            echo "\">voir - </a>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("donation_bag_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["donation_bag"], "id", array()))), "html", null, true);
            echo "\">modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "            <tr>
                <td colspan=\"7\">Pas de sac de don trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['donation_bag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("donation_bag_new");
        echo "\">Créer un nouveau sac de don</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "donation_bag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 50,  168 => 47,  159 => 43,  150 => 39,  146 => 38,  141 => 35,  130 => 33,  126 => 32,  120 => 29,  116 => 28,  112 => 27,  108 => 26,  102 => 25,  98 => 24,  95 => 23,  90 => 22,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Liste des sacs de dons{% endblock %}

{% block body %}

    <h2>Liste des sacs de dons</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Donnateur</th>
                <th>Date du don</th>
                <th>Ecole du don</th>
                <th>Ville</th>
                <th>Etape de préparation</th>
                <th>Liste des articles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for donation_bag in donation_bags %}
            <tr>
                <td>{{ donation_bag.id }}</td>
                <td>{{ donation_bag.donationBag_donator.memberName }}  {{ donation_bag.donationBag_donator.memberSurName }}</td>
                <td>{{ donation_bag.donationBagDate ? donation_bag.donationBagDate|date('d-m-Y') : '' }}</td>
                <td>{{ donation_bag.donationBag_schoolStop.schoolName }}</td>
                <td>{{ donation_bag.donationBag_schoolStop.schoolCity }}</td>
                <td>{{ donation_bag.donationBag_processStatus.processStatusName }}</td>
                <td>
                    <ul>
                    {% for article in donation_bag.donationBag_article_list %}
                    <li><a href=\"{{ path('article_show', {'id': article.id}) }}\">{{ article.articleCode}}</a></li>
                    {% endfor %}
                    </ul>
                </td>
                <td>
                    <a href=\"{{ path('donation_bag_show', {'id': donation_bag.id}) }}\">voir - </a>
                    <a href=\"{{ path('donation_bag_edit', {'id': donation_bag.id}) }}\">modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">Pas de sac de don trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('donation_bag_new') }}\">Créer un nouveau sac de don</a>
{% endblock %}", "donation_bag/index.html.twig", "/Users/marie-aude/Desktop/Sauvegarde TMK 311018/templates/donation_bag/index.html.twig");
    }
}
