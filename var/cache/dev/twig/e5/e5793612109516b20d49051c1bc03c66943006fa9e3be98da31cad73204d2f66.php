<?php

/* article/show.html.twig */
class __TwigTemplate_e979665cf3f7739da01b16cceac4a70553033edac30feeb61895b03da3555218 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

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

        echo "Article";
        
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
        echo "    <!-- Page Content -->
    <div class=\"container\">

        <!-- Page Heading/Breadcrumbs -->
        ";
        // line 13
        echo "        <br>
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_show");
        echo "\">Accueil</a>
            </li>
            <li class=\"breadcrumb-item active\">
            <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_selection");
        echo "\">Ma sélection</a>
            </li>
        </ol>

        <!-- Portfolio Item Row -->
        <div class=\"row h-100\">
            <div class=\"col-md-6\">
                ";
        // line 29
        echo "                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                        <img class=\"d-block w-100 img-fluid\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 36, $this->source); })()), "articlePicture1", array()))), "html", null, true);
        echo "\" alt=\"First slide\">
                        </div>
                        <div class=\"carousel-item\">
                        <img class=\"d-block w-100 img-fluid\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 39, $this->source); })()), "articlePicture2", array()))), "html", null, true);
        echo "\" alt=\"Second slide\">
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <h2 class=\"my-3\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 53, $this->source); })()), "articleType", array()), "typeName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 53, $this->source); })()), "articleGender", array()), "genderName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 53, $this->source); })()), "articleSize", array()), "sizeName", array()), "html", null, true);
        echo "</h2>
                    <p>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 54, $this->source); })()), "articleComments", array()), "html", null, true);
        echo "</p>
                <h4 class=\"my-3\">Détails</h4>
                <table>
                    <tbody align=\"left\">
                        <tr>
                            <th>Marque</th>
                            <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 60, $this->source); })()), "articleBrand", array()), "brandName", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Saison</th>
                            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 64, $this->source); })()), "articleSeason", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["season"]) {
            // line 65
            echo "                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["season"], "seasonName", array()), "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['season'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                        </tr>
                        <tr>
                            <th>Couleur(s)</th>
                            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 70, $this->source); })()), "articleColor", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 71
            echo "                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "colorName", array()), "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                        </tr>
                        <tr>
                            <th>Valeur (boutons)</th>
                            <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 76, $this->source); })()), "articleButtonValue", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Valeur (euros)</th>
                            <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 80, $this->source); })()), "articleEurosValue", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
                ";
        // line 87
        echo "                <div class=\"row justify-content-center d-flex align-items-center\">
                        <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delivery_bag_addToCart", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 88, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"col-md-6 button h3\">Ajouter au panier</a>
                </div>
            </div>
      </div>
      <!-- /.row -->
        <br>
        <b>
    </div>
    <!-- /.container -->

    ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 98, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
            // line 99
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 99, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "MemberRole", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 100
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["role"], "id", array()) == "6")) {
                    // line 101
                    echo "                 <div display=\"inline-block\">
            <a href=\"";
                    // line 102
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
                    echo "\">Liste de tous les articles</a>
            <p> - </p>
            <a href=\"";
                    // line 104
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 104, $this->source); })()), "id", array()))), "html", null, true);
                    echo "\">Modifier</a>
            <p> - </p>
            <a href=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 106, $this->source); })()), "id", array()))), "html", null, true);
                    echo "\">Supprimer</a>
        </div>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 111,  256 => 110,  250 => 109,  244 => 106,  239 => 104,  234 => 102,  231 => 101,  228 => 100,  223 => 99,  221 => 98,  208 => 88,  205 => 87,  198 => 80,  191 => 76,  186 => 73,  177 => 71,  173 => 70,  168 => 67,  159 => 65,  155 => 64,  148 => 60,  139 => 54,  131 => 53,  114 => 39,  108 => 36,  99 => 29,  89 => 19,  83 => 16,  78 => 13,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Article{% endblock %}

{% block body %}
    <!-- Page Content -->
    <div class=\"container\">

        <!-- Page Heading/Breadcrumbs -->
        {# <h1 class=\"mt-4 mb-3\">Portfolio Item
            <small>Subheading</small>
        </h1> #}
        <br>
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">
            <a href=\"{{ path('home_show') }}\">Accueil</a>
            </li>
            <li class=\"breadcrumb-item active\">
            <a href=\"{{ path('article_selection') }}\">Ma sélection</a>
            </li>
        </ol>

        <!-- Portfolio Item Row -->
        <div class=\"row h-100\">
            <div class=\"col-md-6\">
                {# <div class=\"col-md-8\">
                <img class=\"img-fluid\" src=\"{{ asset('uploads/pictures/' ~ article.articlePicture1)}}\" alt=\"{{ article.articlePicture1 }}\">
                </div> #}
                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                        <img class=\"d-block w-100 img-fluid\" src=\"{{ asset('uploads/pictures/' ~ article.articlePicture1)}}\" alt=\"First slide\">
                        </div>
                        <div class=\"carousel-item\">
                        <img class=\"d-block w-100 img-fluid\" src=\"{{ asset('uploads/pictures/' ~ article.articlePicture2)}}\" alt=\"Second slide\">
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <h2 class=\"my-3\">{{ article.articleType.typeName }} {{ article.articleGender.genderName }} {{ article.articleSize.sizeName }}</h2>
                    <p>{{ article.articleComments }}</p>
                <h4 class=\"my-3\">Détails</h4>
                <table>
                    <tbody align=\"left\">
                        <tr>
                            <th>Marque</th>
                            <td>{{ article.articleBrand.brandName }}</td>
                        </tr>
                        <tr>
                            <th>Saison</th>
                            {% for season in article.articleSeason %}
                            <td>{{ season.seasonName }}</td>
                            {% endfor %}
                        </tr>
                        <tr>
                            <th>Couleur(s)</th>
                            {% for color in article.articleColor %}
                            <td>{{ color.colorName }}</td>
                            {% endfor %}
                        </tr>
                        <tr>
                            <th>Valeur (boutons)</th>
                            <td>{{ article.articleButtonValue }}</td>
                        </tr>
                        <tr>
                            <th>Valeur (euros)</th>
                            <td>{{ article.articleEurosValue }}</td>
                        </tr>
                    </tbody>
                </table>
                {# <div>
                    <a href=\"{{ path('delivery_bag_addToCart', {'id': article.id}) }}\" class=\"btn btn-primary\">Ajouter au panier</a>
                </div> #}
                <div class=\"row justify-content-center d-flex align-items-center\">
                        <a href=\"{{ path('delivery_bag_addToCart', {'id': article.id}) }}\" class=\"col-md-6 button h3\">Ajouter au panier</a>
                </div>
            </div>
      </div>
      <!-- /.row -->
        <br>
        <b>
    </div>
    <!-- /.container -->

    {% if app.session.get('user') %}
        {% for role in app.session.get('user').MemberRole %}
            {% if role.id ==  \"6\" %}
                 <div display=\"inline-block\">
            <a href=\"{{ path('article_index') }}\">Liste de tous les articles</a>
            <p> - </p>
            <a href=\"{{ path('article_edit', {'id': article.id}) }}\">Modifier</a>
            <p> - </p>
            <a href=\"{{ path('article_delete', {'id': article.id}) }}\">Supprimer</a>
        </div>
            {% endif %}
        {% endfor %}
    {% endif %}

{% endblock %}


    ", "article/show.html.twig", "/Users/marie-aude/Desktop/TMK/templates/article/show.html.twig");
    }
}
