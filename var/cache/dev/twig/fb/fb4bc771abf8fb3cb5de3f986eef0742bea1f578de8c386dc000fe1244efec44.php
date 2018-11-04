<?php

/* workshop/book.html.twig */
class __TwigTemplate_dc0b625f9aa7681331e58fa6f29a8215189b647ac17a35d04671dfe7fe8aa6e1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "workshop/book.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "workshop/book.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "workshop/book.html.twig"));

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

        echo "Réservation Atelier";
        
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
        echo "    <h1>Je réserve un atelier</h1>

    <table class=\"table\">
        <tbody>
            ";
        // line 14
        echo "            <tr>
                <th>Date / Heure </th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new Twig_Error_Runtime('Variable "workshop" does not exist.', 16, $this->source); })()), "workshopDate", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new Twig_Error_Runtime('Variable "workshop" does not exist.', 16, $this->source); })()), "workshopDate", array()), "m-d-Y H:i:s")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Thème</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new Twig_Error_Runtime('Variable "workshop" does not exist.', 20, $this->source); })()), "workshopTheme", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Coût</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new Twig_Error_Runtime('Variable "workshop" does not exist.', 24, $this->source); })()), "workshopFee", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new Twig_Error_Runtime('Variable "workshop" does not exist.', 28, $this->source); })()), "workshopPlace", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new Twig_Error_Runtime('Variable "workshop" does not exist.', 32, $this->source); })()), "workshopPicture", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Formateur</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new Twig_Error_Runtime('Variable "workshop" does not exist.', 36, $this->source); })()), "workshopTrainer", array()), "MemberSurname", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new Twig_Error_Runtime('Variable "workshop" does not exist.', 36, $this->source); })()), "workshopTrainer", array()), "MemberName", array()), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 44
        echo "        </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_pay", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new Twig_Error_Runtime('Variable "workshop" does not exist.', 47, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Je paye</a>
    <br>
    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_index");
        echo "\">Retour à la liste</a>
    <br>
    
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "workshop/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 49,  129 => 47,  124 => 44,  117 => 36,  110 => 32,  103 => 28,  96 => 24,  89 => 20,  82 => 16,  78 => 14,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Réservation Atelier{% endblock %}

{% block body %}
    <h1>Je réserve un atelier</h1>

    <table class=\"table\">
        <tbody>
            {# <tr>
                <th>Id</th>
                <td>{{ workshop.id }}</td>
            </tr> #}
            <tr>
                <th>Date / Heure </th>
                <td>{{ workshop.workshopDate ? workshop.workshopDate|date('m-d-Y H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Thème</th>
                <td>{{ workshop.workshopTheme }}</td>
            </tr>
            <tr>
                <th>Coût</th>
                <td>{{ workshop.workshopFee }}</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>{{ workshop.workshopPlace }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ workshop.workshopPicture }}</td>
            </tr>
            <tr>
                <th>Formateur</th>
                <td>{{ workshop.workshopTrainer.MemberSurname }}  {{ workshop.workshopTrainer.MemberName }}</td>
            </tr>
            {# <tr>
                <th>Workshop_trainees</th>
                {% for trainee in workshop.workshopTraineesList %}
                <td>{{trainee.MemberSurname}} {{trainee.MemberName}}</td>
                {% endfor %}
            </tr> #}
        </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"{{ path('workshop_pay', {'id': workshop.id}) }}\">Je paye</a>
    <br>
    <a href=\"{{ path('workshop_index') }}\">Retour à la liste</a>
    <br>
    
    

{% endblock %}", "workshop/book.html.twig", "/Users/marie-aude/Desktop/Sauvegarde TMK 311018/templates/workshop/book.html.twig");
    }
}
