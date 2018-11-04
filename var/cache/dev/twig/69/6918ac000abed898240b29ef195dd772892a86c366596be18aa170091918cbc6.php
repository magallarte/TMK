<?php

/* school/show.html.twig */
class __TwigTemplate_9243867c4842a8933677b5fb29a7a829b3de88fdcb14ef21691cde054238ed0c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "school/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "school/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "school/show.html.twig"));

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

        echo "School";
        
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
        echo "    <h1>School</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["school"]) || array_key_exists("school", $context) ? $context["school"] : (function () { throw new Twig_Error_Runtime('Variable "school" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom de l'école</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["school"]) || array_key_exists("school", $context) ? $context["school"] : (function () { throw new Twig_Error_Runtime('Variable "school" does not exist.', 16, $this->source); })()), "schoolName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse </th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["school"]) || array_key_exists("school", $context) ? $context["school"] : (function () { throw new Twig_Error_Runtime('Variable "school" does not exist.', 20, $this->source); })()), "schoolAddress1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse (complément)</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["school"]) || array_key_exists("school", $context) ? $context["school"] : (function () { throw new Twig_Error_Runtime('Variable "school" does not exist.', 24, $this->source); })()), "schoolAddress2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code Postal</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["school"]) || array_key_exists("school", $context) ? $context["school"] : (function () { throw new Twig_Error_Runtime('Variable "school" does not exist.', 28, $this->source); })()), "schoolZipCode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["school"]) || array_key_exists("school", $context) ? $context["school"] : (function () { throw new Twig_Error_Runtime('Variable "school" does not exist.', 32, $this->source); })()), "schoolCity", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Directeur/Directrice</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["school"]) || array_key_exists("school", $context) ? $context["school"] : (function () { throw new Twig_Error_Runtime('Variable "school" does not exist.', 36, $this->source); })()), "schoolDirectorGender", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom du directeur/directrice</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["school"]) || array_key_exists("school", $context) ? $context["school"] : (function () { throw new Twig_Error_Runtime('Variable "school" does not exist.', 40, $this->source); })()), "schoolDirectorName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["school"]) || array_key_exists("school", $context) ? $context["school"] : (function () { throw new Twig_Error_Runtime('Variable "school" does not exist.', 44, $this->source); })()), "schoolDirectorTel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["school"]) || array_key_exists("school", $context) ? $context["school"] : (function () { throw new Twig_Error_Runtime('Variable "school" does not exist.', 48, $this->source); })()), "schoolDirectorEmail", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("school_index");
        echo "\">Retour à la liste</a>

    <br>
    ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
            // line 57
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 57, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "MemberRole", array()));
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
                // line 58
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["role"], "id", array()) == "6")) {
                    // line 59
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("school_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["school"]) || array_key_exists("school", $context) ? $context["school"] : (function () { throw new Twig_Error_Runtime('Variable "school" does not exist.', 59, $this->source); })()), "id", array()))), "html", null, true);
                    echo "\">Modifier</a>
            <br>
            ";
                    // line 61
                    echo twig_include($this->env, $context, "school/_delete_form.html.twig");
                    echo "
            ";
                }
                // line 63
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
            // line 64
            echo "    ";
        }
        // line 65
        echo "    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "school/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 65,  205 => 64,  191 => 63,  186 => 61,  180 => 59,  177 => 58,  159 => 57,  157 => 56,  151 => 53,  143 => 48,  136 => 44,  129 => 40,  122 => 36,  115 => 32,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}School{% endblock %}

{% block body %}
    <h1>School</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ school.id }}</td>
            </tr>
            <tr>
                <th>Nom de l'école</th>
                <td>{{ school.schoolName }}</td>
            </tr>
            <tr>
                <th>Adresse </th>
                <td>{{ school.schoolAddress1 }}</td>
            </tr>
            <tr>
                <th>Adresse (complément)</th>
                <td>{{ school.schoolAddress2 }}</td>
            </tr>
            <tr>
                <th>Code Postal</th>
                <td>{{ school.schoolZipCode }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ school.schoolCity }}</td>
            </tr>
            <tr>
                <th>Directeur/Directrice</th>
                <td>{{ school.schoolDirectorGender }}</td>
            </tr>
            <tr>
                <th>Nom du directeur/directrice</th>
                <td>{{ school.schoolDirectorName }}</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>{{ school.schoolDirectorTel }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ school.schoolDirectorEmail }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('school_index') }}\">Retour à la liste</a>

    <br>
    {% if app.session.get('user') %}
        {% for role in app.session.get('user').MemberRole %}
            {% if role.id ==  \"6\" %}
            <a href=\"{{ path('school_edit', {'id': school.id}) }}\">Modifier</a>
            <br>
            {{ include('school/_delete_form.html.twig') }}
            {% endif %}
        {% endfor %}
    {% endif %}
    

{% endblock %}", "school/show.html.twig", "/Users/marie-aude/Desktop/Sauvegarde TMK 311018/templates/school/show.html.twig");
    }
}
