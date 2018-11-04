<?php

/* workshop/index.html.twig */
class __TwigTemplate_ff83282357e2ea6b182ad0235b788bcea965994a53add13c14d89d41984c01f4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "workshop/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "workshop/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "workshop/index.html.twig"));

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

        echo "Je participe";
        
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
<!-- Section 1 :  Photo + accroche -->
<div id=\"section1\" class=\"jeparticipe-image section1-image\">
    <h3 class=\"blue section1-title\">Découvrer ou partager une passion ...</h3>
    <a href=\"#section2\"><img src=\"http://127.0.0.1:8000/images/Icone_Chevron.png\"></a>
</div>
<br>

<div class=\"container\">

    <!-- Section 2 :  2 arguments -->
        <div id=\"section2\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-5 m-3\">
                    <img src=\"http://127.0.0.1:8000/images/Icone_CAFE_134x74.png\" class=\"mb-2\">
                    <h3 class=\"orange mb-2\">Café \"Couture\"</h3>
                    <p>Vous êtes une passionnée de couture et avez envie de partager vos connaissances et vos astuces ? Le local de Troc & Mode est à votre disposition pour vous accueillir (vous et votre machine !) et coudre avec d'autres passionnées !<br> Autour d'un café ...</p>
                </div>
                <div class=\"col-lg-5 m-3\">
                    <img src=\"http://127.0.0.1:8000/images/Icone_MACHINE_133x74.png\" class=\"mb-2\">
                        <h3 class=\"orange mb-2\">Atelier \"couture\"</h3>
                        <p>Vous êtes couturière débutante et vous avez envie d'aprrendre quelques techniques de couture ? Inscrivez vous à un des ateliers et découvrer comment réparer, transformer ou donner une 2ème vie à vos vêtements ! <br> Ou bien créer des accessoires à partir de tissus recyclés !</p>
                </div>
            </div>
            <br>
            <a href=\"#section3\"><img src=\"http://127.0.0.1:8000/images/Icone_Chevron.png\"></a>
            <br>
            <br>
        </div>
    
      <!-- Section 3 : Où et quand -->
      <div class=\"row justify-content-center\">
        <div class=\"col-lg-5 my-3 mx-4\">
          <div class=\"row justify-content-center d-flex align-items-center\">
            <div class=\"col-lg-4\">
             <img src=\"http://127.0.0.1:8000/images/Icone_LIEU_46x74.png\">
            </div>
            <div class=\"col-lg-8\">
                <p>L'adresse de du local sera communiqué début 2019.</p>
            </div>  
          </div>
        </div>
        <div class=\"col-lg-5 my-3 mx-4\">
          <div class=\"row justify-content-center d-flex align-items-center\">
            <div class=\"col-lg-4\">
                <img src=\"http://127.0.0.1:8000/images/Icone_CALENDRIER_78x74.png\">
            </div>
            <div class=\"col-lg-8\">
                <p>Les jours des ateliers seront communiqués début 2019</p>
            </div>
          </div>
        </div>
      </div>
      <br>


    <br>
    <h2>Ateliers \"Couture\" à venir </h2>
    <table class=\"table\">
        <thead>
            <tr>
                ";
        // line 68
        echo "                <th>Date / Heure</th>
                <th>Thème</th>
                <th>Prix</th>
                <th>Lieu</th>
                <th>Image</th>
                <th>Formateur</th>
                    ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 74, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
            // line 75
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 75, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "MemberRole", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 76
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["role"], "id", array()) == "6")) {
                    // line 77
                    echo "                            <th>Personnes inscrites</th>
                            ";
                }
                // line 79
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                    ";
        }
        // line 81
        echo "                <th>Inscription</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workshops"]) || array_key_exists("workshops", $context) ? $context["workshops"] : (function () { throw new Twig_Error_Runtime('Variable "workshops" does not exist.', 85, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["workshop"]) {
            // line 86
            echo "            <tr>
                ";
            // line 88
            echo "                <td>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["workshop"], "workshopDate", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "workshopDate", array()), "Y-m-d H:i")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "workshopTheme", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "workshopFee", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workshop"], "workshopPlace", array()), "html", null, true);
            echo "</td>
                <td><img src=";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["workshop"], "workshopPicture", array()))), "html", null, true);
            echo " height=\"50px\"/></td>
                 ";
            // line 94
            echo "                        </div>
                ";
            // line 96
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["workshop"], "workshopTrainer", array()), "MemberSurname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["workshop"], "workshopTrainer", array()), "MemberName", array()), "html", null, true);
            echo "</td>
                ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 97, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
                // line 98
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 98, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "MemberRole", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 99
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["role"], "id", array()) == "6")) {
                        // line 100
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["workshop"], "workshopTraineesList", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["trainee"]) {
                            // line 101
                            echo "                            <td>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainee"], "MemberSurname", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trainee"], "MemberName", array()), "html", null, true);
                            echo "</td>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trainee'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 103
                        echo "                        ";
                    }
                    // line 104
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "                ";
            }
            // line 106
            echo "                <td>
                    <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_book", array("id" => twig_get_attribute($this->env, $this->source, $context["workshop"], "id", array()))), "html", null, true);
            echo "\">S'inscrire</a>
                ";
            // line 108
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 108, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
                // line 109
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "MemberRole", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 110
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["role"], "id", array()) == "6")) {
                        // line 111
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["workshop"], "id", array()))), "html", null, true);
                        echo "\">Modifier la fiche</a>
                        ";
                    }
                    // line 113
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "                ";
            }
            // line 115
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 118
            echo "            <tr>
                <td colspan=\"7\">Aucun atelier trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workshop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "        </tbody>
    </table>

    ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 125, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
            // line 126
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 126, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "MemberRole", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 127
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["role"], "id", array()) == "6")) {
                    // line 128
                    echo "                <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_new");
                    echo "\">Créer un nouvel atelier</a>
            ";
                }
                // line 130
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "    ";
        }
        // line 132
        echo "    
</div> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "workshop/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 132,  324 => 131,  318 => 130,  312 => 128,  309 => 127,  304 => 126,  302 => 125,  297 => 122,  288 => 118,  281 => 115,  278 => 114,  272 => 113,  266 => 111,  263 => 110,  258 => 109,  256 => 108,  252 => 107,  249 => 106,  246 => 105,  240 => 104,  237 => 103,  226 => 101,  221 => 100,  218 => 99,  213 => 98,  211 => 97,  204 => 96,  201 => 94,  197 => 92,  193 => 91,  189 => 90,  185 => 89,  180 => 88,  177 => 86,  172 => 85,  166 => 81,  163 => 80,  157 => 79,  153 => 77,  150 => 76,  145 => 75,  143 => 74,  135 => 68,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Je participe{% endblock %}

{% block body %}

<!-- Section 1 :  Photo + accroche -->
<div id=\"section1\" class=\"jeparticipe-image section1-image\">
    <h3 class=\"blue section1-title\">Découvrer ou partager une passion ...</h3>
    <a href=\"#section2\"><img src=\"http://127.0.0.1:8000/images/Icone_Chevron.png\"></a>
</div>
<br>

<div class=\"container\">

    <!-- Section 2 :  2 arguments -->
        <div id=\"section2\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-5 m-3\">
                    <img src=\"http://127.0.0.1:8000/images/Icone_CAFE_134x74.png\" class=\"mb-2\">
                    <h3 class=\"orange mb-2\">Café \"Couture\"</h3>
                    <p>Vous êtes une passionnée de couture et avez envie de partager vos connaissances et vos astuces ? Le local de Troc & Mode est à votre disposition pour vous accueillir (vous et votre machine !) et coudre avec d'autres passionnées !<br> Autour d'un café ...</p>
                </div>
                <div class=\"col-lg-5 m-3\">
                    <img src=\"http://127.0.0.1:8000/images/Icone_MACHINE_133x74.png\" class=\"mb-2\">
                        <h3 class=\"orange mb-2\">Atelier \"couture\"</h3>
                        <p>Vous êtes couturière débutante et vous avez envie d'aprrendre quelques techniques de couture ? Inscrivez vous à un des ateliers et découvrer comment réparer, transformer ou donner une 2ème vie à vos vêtements ! <br> Ou bien créer des accessoires à partir de tissus recyclés !</p>
                </div>
            </div>
            <br>
            <a href=\"#section3\"><img src=\"http://127.0.0.1:8000/images/Icone_Chevron.png\"></a>
            <br>
            <br>
        </div>
    
      <!-- Section 3 : Où et quand -->
      <div class=\"row justify-content-center\">
        <div class=\"col-lg-5 my-3 mx-4\">
          <div class=\"row justify-content-center d-flex align-items-center\">
            <div class=\"col-lg-4\">
             <img src=\"http://127.0.0.1:8000/images/Icone_LIEU_46x74.png\">
            </div>
            <div class=\"col-lg-8\">
                <p>L'adresse de du local sera communiqué début 2019.</p>
            </div>  
          </div>
        </div>
        <div class=\"col-lg-5 my-3 mx-4\">
          <div class=\"row justify-content-center d-flex align-items-center\">
            <div class=\"col-lg-4\">
                <img src=\"http://127.0.0.1:8000/images/Icone_CALENDRIER_78x74.png\">
            </div>
            <div class=\"col-lg-8\">
                <p>Les jours des ateliers seront communiqués début 2019</p>
            </div>
          </div>
        </div>
      </div>
      <br>


    <br>
    <h2>Ateliers \"Couture\" à venir </h2>
    <table class=\"table\">
        <thead>
            <tr>
                {# <th>Id</th> #}
                <th>Date / Heure</th>
                <th>Thème</th>
                <th>Prix</th>
                <th>Lieu</th>
                <th>Image</th>
                <th>Formateur</th>
                    {% if app.session.get('user') %}
                        {% for role in app.session.get('user').MemberRole %}
                            {% if role.id ==  \"6\" %}
                            <th>Personnes inscrites</th>
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                <th>Inscription</th>
            </tr>
        </thead>
        <tbody>
        {% for workshop in workshops %}
            <tr>
                {# <td>{{ workshop.id }}</td> #}
                <td>{{ workshop.workshopDate ? workshop.workshopDate|date('Y-m-d H:i') : '' }}</td>
                <td>{{ workshop.workshopTheme }}</td>
                <td>{{ workshop.workshopFee }}</td>
                <td>{{ workshop.workshopPlace }}</td>
                <td><img src={{ asset('images/' ~ workshop.workshopPicture)}} height=\"50px\"/></td>
                 {# <img class=\"d-block w-100 img-fluid\" src=\"{{ asset('uploads/pictures/' ~ article.articlePicture1)}}\" alt=\"First slide\"> #}
                        </div>
                {# <td>{{ workshop.workshopPicture }}</td> #}
                <td>{{ workshop.workshopTrainer.MemberSurname }} {{ workshop.workshopTrainer.MemberName }}</td>
                {% if app.session.get('user') %}
                    {% for role in app.session.get('user').MemberRole %}
                        {% if role.id ==  \"6\" %}
                            {% for trainee in workshop.workshopTraineesList %}
                            <td>{{trainee.MemberSurname}} {{trainee.MemberName}}</td>
                            {% endfor %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
                <td>
                    <a href=\"{{ path('workshop_book', {'id': workshop.id}) }}\">S'inscrire</a>
                {% if app.session.get('user') %}
                    {% for role in app.session.get('user').MemberRole %}
                        {% if role.id ==  \"6\" %}
                            <a href=\"{{ path('workshop_edit', {'id': workshop.id}) }}\">Modifier la fiche</a>
                        {% endif %}
                    {% endfor %}
                {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">Aucun atelier trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {% if app.session.get('user') %}
        {% for role in app.session.get('user').MemberRole %}
            {% if role.id ==  \"6\" %}
                <a href=\"{{ path('workshop_new') }}\">Créer un nouvel atelier</a>
            {% endif %}
        {% endfor %}
    {% endif %}
    
</div> 
{% endblock %}", "workshop/index.html.twig", "/Users/marie-aude/Desktop/Sauvegarde TMK 311018/templates/workshop/index.html.twig");
    }
}
