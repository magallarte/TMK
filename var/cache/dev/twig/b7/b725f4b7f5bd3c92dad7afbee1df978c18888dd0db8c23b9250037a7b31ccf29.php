<?php

/* news/index.html.twig */
class __TwigTemplate_9fa757a218ddd80f57ef4476ad0af458900c457446f20f7e6c7d980cebfd6022 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "news/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "news/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "news/index.html.twig"));

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

        echo "Je m'informe";
        
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
<div id=\"section1\" class=\"jeminforme-image section1-image\">
    <h3 class=\"white section1-itle\">Les dernières initiatives dans le domaine du recyclage textile ...</h3>
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
    <h2>Articles </h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Source</th>
                <th>Lien</th>
                <th>Contenu</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 77, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 78
            echo "            <tr>
                <td><img src=";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 79, $this->source); })()), "news_picture", array()))), "html", null, true);
            echo " height=\"50px\"/></td>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 80, $this->source); })()), "news_title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 81, $this->source); })()), "news_source", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 82, $this->source); })()), "news_url", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 83, $this->source); })()), "news_content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 84, $this->source); })()), "news_editDate", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 84, $this->source); })()), "news_editDate", array()), "Y-m-d")) : ("")), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_show", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 86, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">Voir la fiche</a>
                    ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 87, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
                // line 88
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 88, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "MemberRole", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 89
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["role"], "id", array()) == "6")) {
                        // line 90
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 90, $this->source); })()), "id", array()))), "html", null, true);
                        echo "\">Modifier la fiche</a>
                        ";
                    }
                    // line 92
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                ";
            }
            // line 94
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 97
            echo "            <tr>
                <td colspan=\"7\">Aucun article trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "        </tbody>
    </table>

    ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 104, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
            // line 105
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 105, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "MemberRole", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 106
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["role"], "id", array()) == "6")) {
                    // line 107
                    echo "                <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_new");
                    echo "\">Créer un nouvel article</a>
            ";
                }
                // line 109
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "    ";
        }
        // line 111
        echo "    
</div> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "news/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 111,  250 => 110,  244 => 109,  238 => 107,  235 => 106,  230 => 105,  228 => 104,  223 => 101,  214 => 97,  207 => 94,  204 => 93,  198 => 92,  192 => 90,  189 => 89,  184 => 88,  182 => 87,  178 => 86,  173 => 84,  169 => 83,  165 => 82,  161 => 81,  157 => 80,  153 => 79,  150 => 78,  145 => 77,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Je m'informe{% endblock %}

{% block body %}

<!-- Section 1 :  Photo + accroche -->
<div id=\"section1\" class=\"jeminforme-image section1-image\">
    <h3 class=\"white section1-itle\">Les dernières initiatives dans le domaine du recyclage textile ...</h3>
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
    <h2>Articles </h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Source</th>
                <th>Lien</th>
                <th>Contenu</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for new in news %}
            <tr>
                <td><img src={{ asset('images/' ~ news.news_picture)}} height=\"50px\"/></td>
                <td>{{ news.news_title }}</td>
                <td>{{ news.news_source }}</td>
                <td>{{ news.news_url }}</td>
                <td>{{ news.news_content }}</td>
                <td>{{ news.news_editDate ? news.news_editDate|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('news_show', {'id': news.id}) }}\">Voir la fiche</a>
                    {% if app.session.get('user') %}
                    {% for role in app.session.get('user').MemberRole %}
                        {% if role.id ==  \"6\" %}
                            <a href=\"{{ path('news_edit', {'id': news.id}) }}\">Modifier la fiche</a>
                        {% endif %}
                    {% endfor %}
                {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">Aucun article trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {% if app.session.get('user') %}
        {% for role in app.session.get('user').MemberRole %}
            {% if role.id ==  \"6\" %}
                <a href=\"{{ path('news_new') }}\">Créer un nouvel article</a>
            {% endif %}
        {% endfor %}
    {% endif %}
    
</div> 

{% endblock %}", "news/index.html.twig", "/Users/marie-aude/Desktop/Sauvegarde TMK 311018/templates/news/index.html.twig");
    }
}
