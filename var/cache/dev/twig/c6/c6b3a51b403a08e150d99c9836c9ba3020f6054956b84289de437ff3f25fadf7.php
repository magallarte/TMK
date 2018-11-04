<?php

/* member/memberShow.html.twig */
class __TwigTemplate_f0339760a117a3854d73a5e6202d16a4d49aa84dda138c9b613d943736d46842 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/memberShow.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/memberShow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/memberShow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1>Votre profil</h1>

<div class=\"row\">
    <div class = \"col-lg-6 mb-6\">
        <table class=\"table\">
            <thead>
                <th> Vous
                </th>
            </thead>
            <tbody>
                <tr>
                    <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 16, $this->source); })()), "memberSurname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 16, $this->source); })()), "memberName", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 19, $this->source); })()), "memberAddress1", array()), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 19, $this->source); })()), "memberAddress2", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 22, $this->source); })()), "memberZipCode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 22, $this->source); })()), "memberCity", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Tel : ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 25, $this->source); })()), "memberTel", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Email : ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 28, $this->source); })()), "memberEmail", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td> Abonnement à la newsletter :
                    ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 32, $this->source); })()), "memberSubscription", array()) == true)) {
            // line 33
            echo "                        <p>oui</p>
                    ";
        } else {
            // line 35
            echo "                        <p>non</p>
                    ";
        }
        // line 37
        echo "                    </td>
                </tr>
                <tr>
                    <td> Niveau de couture :";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 40, $this->source); })()), "memberLevel", array()), "html", null, true);
        echo "/100
                    </td>
                </tr>
                <tr>
                    <td>Cagnotte : ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 44, $this->source); })()), "memberButtonWallet", array()), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class = \"col-lg-6 mb-6\">
        ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 50, $this->source); })()), "memberKidList", array())) {
            // line 51
            echo "            <table>
                <tbody>
                    <thead>
                        <th> Votre(vos) enfant(s)</th>
                    </thead>
                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 56, $this->source); })()), "memberKidList", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["kid"]) {
                // line 57
                echo "                    <tr>
                        <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kid"], "kidSurname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kid"], "kidName", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kid"], "kidGender", array()), "GenderName", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                        <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kid"], "kidBirthday", array()), "d-m-Y"), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                        <td>Ecole : ";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kid"], "kidSchoolId", array()), "SchoolName", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kid'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                </tbody>
            </table>
        ";
        }
        // line 76
        echo "    </div>

</div>

        ";
        // line 86
        echo "
<div class=\"row\" style=\"text-align:justify\">
    
        <a class=\"btn btn-secondary\" href=\"/member/unsetSession\">Me déconnecter</a>
        <p>             </p>
        <a class=\"btn btn-secondary\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 91, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Modifier mon profil</a>
        <p>   </p>
        <a class=\"btn btn-secondary\" href=\"/donationBag/show\">Voir mes derniers dons</a>
        <p>   </p>
        <a class=\"btn btn-secondary\" href=\"/deliveryBag/show\">Voir mes dernières trouvailles</a>
    
</div>
        <br>
        ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 99, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
            // line 100
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 100, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "MemberRole", array()));
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
                // line 101
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["role"], "id", array()) == "6")) {
                    // line 102
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new Twig_Error_Runtime('Variable "member" does not exist.', 102, $this->source); })()), "id", array()))), "html", null, true);
                    echo "\">Modifier</a>
                <br>
                ";
                    // line 104
                    echo twig_include($this->env, $context, "member/_delete_form.html.twig");
                    echo "
                ";
                }
                // line 106
                echo "            ";
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
            // line 107
            echo "        ";
        }
        echo " 

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/memberShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 107,  246 => 106,  241 => 104,  235 => 102,  232 => 101,  214 => 100,  212 => 99,  201 => 91,  194 => 86,  188 => 76,  183 => 73,  174 => 70,  168 => 67,  162 => 64,  151 => 58,  148 => 57,  144 => 56,  137 => 51,  135 => 50,  126 => 44,  119 => 40,  114 => 37,  110 => 35,  106 => 33,  104 => 32,  97 => 28,  91 => 25,  83 => 22,  75 => 19,  67 => 16,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig'%}

{% block body %}
<div class=\"container\">
    <h1>Votre profil</h1>

<div class=\"row\">
    <div class = \"col-lg-6 mb-6\">
        <table class=\"table\">
            <thead>
                <th> Vous
                </th>
            </thead>
            <tbody>
                <tr>
                    <td>{{member.memberSurname}} {{member.memberName}}</td>
                </tr>
                <tr>
                    <td>{{member.memberAddress1}}<br>{{member.memberAddress2}}</td>
                </tr>
                <tr>
                    <td>{{member.memberZipCode}} {{member.memberCity}}</td>
                </tr>
                <tr>
                    <td>Tel : {{member.memberTel}}</td>
                </tr>
                <tr>
                    <td>Email : {{member.memberEmail}}</td>
                </tr>
                <tr>
                    <td> Abonnement à la newsletter :
                    {% if member.memberSubscription == true %}
                        <p>oui</p>
                    {% else %}
                        <p>non</p>
                    {% endif %}
                    </td>
                </tr>
                <tr>
                    <td> Niveau de couture :{{member.memberLevel}}/100
                    </td>
                </tr>
                <tr>
                    <td>Cagnotte : {{member.memberButtonWallet}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class = \"col-lg-6 mb-6\">
        {% if member.memberKidList %}
            <table>
                <tbody>
                    <thead>
                        <th> Votre(vos) enfant(s)</th>
                    </thead>
                {% for kid in member.memberKidList %}
                    <tr>
                        <td>{{kid.kidSurname}} {{kid.kidName}}</td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{kid.kidGender.GenderName}}</td>
                    </tr>
                    <tr>
                        <td>{{kid.kidBirthday | date ('d-m-Y')}}</td>
                    </tr>
                    <tr>
                        <td>Ecole : {{kid.kidSchoolId.SchoolName}}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>

</div>

        {# <form class=\"form-group\" method=\"post\">
        {{ include('member/_form.html.twig') }}
        </form>
        <a href=\"{{ path('home_index') }}\">Retour à l'accueil</a>
        <br>
        {{ include('member/_delete_form.html.twig') }} #}

<div class=\"row\" style=\"text-align:justify\">
    
        <a class=\"btn btn-secondary\" href=\"/member/unsetSession\">Me déconnecter</a>
        <p>             </p>
        <a class=\"btn btn-secondary\" href=\"{{ path('member_edit', {'id': member.id})}}\">Modifier mon profil</a>
        <p>   </p>
        <a class=\"btn btn-secondary\" href=\"/donationBag/show\">Voir mes derniers dons</a>
        <p>   </p>
        <a class=\"btn btn-secondary\" href=\"/deliveryBag/show\">Voir mes dernières trouvailles</a>
    
</div>
        <br>
        {% if app.session.get('user') %}
            {% for role in app.session.get('user').MemberRole %}
                {% if role.id ==  \"6\" %}
                <a href=\"{{ path('member_edit', {'id': member.id}) }}\">Modifier</a>
                <br>
                {{ include('member/_delete_form.html.twig') }}
                {% endif %}
            {% endfor %}
        {% endif %} 

    </div>
{% endblock %}", "member/memberShow.html.twig", "/Users/marie-aude/Desktop/Sauvegarde TMK 311018/templates/member/memberShow.html.twig");
    }
}
