<?php

/* base.html.twig */
class __TwigTemplate_aebd0cf33a469cbd8e4b212ef5fbc283537b99b7244b6a5dcc182937b36fa602 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"Marie-Aude LENOIR\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "        
    </head>

    <body>
        <div id=\"navigation\">
        ";
        // line 50
        $this->displayBlock('navigation', $context, $blocks);
        // line 109
        echo "        </div>

        <div id=\"content\">
            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 112, $this->source); })()), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 113
            echo "            <div class=\"flash-notice\">
                ";
            // line 114
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "        </div>

        <div>
        
        ";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 122
        echo "        </div>

        <footer class=\"py-2 bg-blue\">
            <div class=\"container\">
                <div class=\"row justify-content-around\">
                    <div class=\"col-lg-6 text-center mx-2 my-1 text-white \">
                        <div class=\"row justify-content-around\">
                            <a href=\"#\"><p>CONTACT</p></a>
                            <a href=\"#\"><p>CGU</p></a>
                            <a href=\"#\"><p>MENTIONS LEGALES</p></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 mx-2 my-1 justify-content-around\">
                        <a href=\"#\"><img src=\"http://127.0.0.1:8000/images/Icone_FACEBOOK.png\"</a>
                        <a href=\"#\"><img src=\"http://127.0.0.1:8000/images/Icone_INSTAGRAM.png\"</a>
                        <a href=\"#\"><img src=\"http://127.0.0.1:8000/images/Icone_PINTEREST.png\"</a>
                    </div>
                    <p class=\"m-2 text-white\">Copyright &copy; Troc&Mode Kids 2018</p>
                </div>
            </div>
            <!-- /.container -->
        </footer>


    </body>


</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <!-- Bootstrap core CSS -->
        <link href=\"http://127.0.0.1:8000/vendor/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">
        <!-- Bootstrap 4 CSS -->
        ";
        // line 16
        echo "        <!-- Custom styles for this template -->
        <link href=\"http://127.0.0.1:8000/css/trocmodekids.css\" rel=\"stylesheet\">
        <!-- Chosen CSS for form selects -->
        ";
        // line 20
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "        <!-- Bootstrap core JavaScript -->
        <script src=\"http://127.0.0.1:8000/vendor/jquery/jquery.min.js\"></script>
        <script src=\"http://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
        ";
        // line 27
        echo "        <!-- Bootstrap 4 JavaScript -->
        ";
        // line 29
        echo "        ";
        // line 30
        echo "        <!--[if lt IE 9]>
        <script type=\"text/javascript\" src=\"assets/js/jquery-1.12.4.min.js\"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script type=\"text/javascript\" src=\"http://127.0.0.1:8000/vendor/jquery/jquery-3.3.1.min.js\"></script>
        <!--<![endif]-->
        ";
        // line 37
        echo "        ";
        // line 38
        echo "        <!-- Anchor Script -->
        <script>
            var shiftWindow = function() { scrollBy(0, -135) };
            window.addEventListener(\"hashchange\", shiftWindow);
            function load() { if (window.location.hash) shiftWindow(); }
        </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 51
        echo "            <nav class=\"navbar fixed-top navbar-expand-md navbar-light bg-white\">
                <div class=\"container\">
                    <a class=\"navbar-brand\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_show");
        echo "\"><img src=\"http://127.0.0.1:8000/images/Logo_troc_mode_kids.png\" height=\"100px\" alt=\"Troc&amp;Mode Kids\"></a>
                    <h3 class=\"blue text-left navbarline\">Donnez utile <br> Achetez raisonné <br> Devenez \"surcycleur\"</h3>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>                   
                    <div class=\"collapse navbar-collapse navbarline\" id=\"navbarResponsive\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item\">
                            ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 61, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
            // line 62
            echo "                                ";
            // line 63
            echo "                                <a class=\"nav-link\" href=\"/member/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 63, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "id", array()), "html", null, true);
            echo "\">
                                    <img class=\"d-none d-md-inline-block\" src=\"http://127.0.0.1:8000/images/Icone_PROFIL.png\" height=\"30px\">
                                    <p>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 65, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "MemberSurname", array()), "html", null, true);
            echo "</p>
                                 </a>
                            ";
        } else {
            // line 68
            echo "                                <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_setSession");
            echo "\">
                                    <img class=\"d-none d-md-inline-block\" src=\"http://127.0.0.1:8000/images/Icone_PROFIL.png\" height=\"30px\">
                                    <p>Je m'identifie</p>
                                </a>
                            ";
        }
        // line 73
        echo "                            </li>
                            <li class=\"nav-item\">
                            ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 75, $this->source); })()), "session", array()), "get", array(0 => "cart"), "method")) {
            // line 76
            echo "                                <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delivery_bag_showCart");
            echo "\">
                                    <img class=\"d-none d-md-inline-block\" src=\"http://127.0.0.1:8000/images/Icone_SAC_134x115.png\" height=\"30px\">
                                    <p>Mon sac</p>
                                </a>
                            ";
        }
        // line 81
        echo "                            </li>
                            <li class=\"nav-item dropdown\">
                                <img class=\"d-none d-md-inline-block\" src=\"http://127.0.0.1:8000/images/Icone_MENU.png\" height=\"30px\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Menu</a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concept_show");
        echo "\">Le concept</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_new");
        echo "\">Je m'inscris</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("school_stop_index");
        echo "\">Je donne</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_selection");
        echo "\">Je trouve</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_index");
        echo "\">Je participe</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_index");
        echo "\">Je m'informe</a>
                                    ";
        // line 94
        echo "                                    ";
        // line 95
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 95, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
            // line 96
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 96, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "MemberRole", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 97
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["role"], "id", array()) == "6")) {
                    // line 98
                    echo "                                            <a class=\"dropdown-item\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_admin");
                    echo "\">Admin</a>
                                            ";
                }
                // line 100
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                                    ";
        }
        // line 102
        echo "                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 121,  347 => 102,  344 => 101,  338 => 100,  332 => 98,  329 => 97,  324 => 96,  321 => 95,  319 => 94,  315 => 92,  311 => 91,  307 => 90,  303 => 89,  299 => 88,  295 => 87,  287 => 81,  278 => 76,  276 => 75,  272 => 73,  263 => 68,  257 => 65,  251 => 63,  249 => 62,  247 => 61,  236 => 53,  232 => 51,  223 => 50,  207 => 38,  205 => 37,  197 => 30,  195 => 29,  192 => 27,  187 => 23,  178 => 22,  168 => 20,  163 => 16,  158 => 12,  149 => 11,  132 => 8,  94 => 122,  92 => 121,  86 => 117,  77 => 114,  74 => 113,  70 => 112,  65 => 109,  63 => 50,  56 => 45,  54 => 22,  51 => 21,  49 => 11,  43 => 8,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"Marie-Aude LENOIR\">
        <title>{% block title %}{% endblock %}</title>


        {% block stylesheets %}
        <!-- Bootstrap core CSS -->
        <link href=\"http://127.0.0.1:8000/vendor/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">
        <!-- Bootstrap 4 CSS -->
        {# <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\"> #}
        <!-- Custom styles for this template -->
        <link href=\"http://127.0.0.1:8000/css/trocmodekids.css\" rel=\"stylesheet\">
        <!-- Chosen CSS for form selects -->
        {# <link type=\"text/css\" href=\"http://127.0.0.1:8000/vendor/jquery/chosen_v1.8.5/chosen.min.css\" rel=\"stylesheet\">       #}
        {% endblock %}

        {% block javascripts %}
        <!-- Bootstrap core JavaScript -->
        <script src=\"http://127.0.0.1:8000/vendor/jquery/jquery.min.js\"></script>
        <script src=\"http://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
        {# <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script> #}
        <!-- Bootstrap 4 JavaScript -->
        {# <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script> #}
        {# <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh3U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script> #}
        <!--[if lt IE 9]>
        <script type=\"text/javascript\" src=\"assets/js/jquery-1.12.4.min.js\"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script type=\"text/javascript\" src=\"http://127.0.0.1:8000/vendor/jquery/jquery-3.3.1.min.js\"></script>
        <!--<![endif]-->
        {# script for form selects #}
        {# <script type=\"text/javascript\" src=\"http://127.0.0.1:8000/vendor/jquery/chosen_v1.8.5/chosen.jquery.min.js\"></script> #}
        <!-- Anchor Script -->
        <script>
            var shiftWindow = function() { scrollBy(0, -135) };
            window.addEventListener(\"hashchange\", shiftWindow);
            function load() { if (window.location.hash) shiftWindow(); }
        </script>
        {% endblock %}
        
    </head>

    <body>
        <div id=\"navigation\">
        {% block navigation %}
            <nav class=\"navbar fixed-top navbar-expand-md navbar-light bg-white\">
                <div class=\"container\">
                    <a class=\"navbar-brand\" href=\"{{ path('home_show') }}\"><img src=\"http://127.0.0.1:8000/images/Logo_troc_mode_kids.png\" height=\"100px\" alt=\"Troc&amp;Mode Kids\"></a>
                    <h3 class=\"blue text-left navbarline\">Donnez utile <br> Achetez raisonné <br> Devenez \"surcycleur\"</h3>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>                   
                    <div class=\"collapse navbar-collapse navbarline\" id=\"navbarResponsive\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item\">
                            {% if app.session.get('user') %}
                                {# <a class=\"nav-link\" href=\"{{ path('member_show', {'id': app.session.get('user').id}) }}\"> {{ app.session.get('user').MemberSurname }}</a> #}
                                <a class=\"nav-link\" href=\"/member/{{app.session.get('user').id}}\">
                                    <img class=\"d-none d-md-inline-block\" src=\"http://127.0.0.1:8000/images/Icone_PROFIL.png\" height=\"30px\">
                                    <p>{{ app.session.get('user').MemberSurname }}</p>
                                 </a>
                            {% else %}
                                <a class=\"nav-link\" href=\"{{ path('member_setSession') }}\">
                                    <img class=\"d-none d-md-inline-block\" src=\"http://127.0.0.1:8000/images/Icone_PROFIL.png\" height=\"30px\">
                                    <p>Je m'identifie</p>
                                </a>
                            {% endif %}
                            </li>
                            <li class=\"nav-item\">
                            {% if app.session.get('cart') %}
                                <a class=\"nav-link\" href=\"{{ path('delivery_bag_showCart') }}\">
                                    <img class=\"d-none d-md-inline-block\" src=\"http://127.0.0.1:8000/images/Icone_SAC_134x115.png\" height=\"30px\">
                                    <p>Mon sac</p>
                                </a>
                            {% endif %}
                            </li>
                            <li class=\"nav-item dropdown\">
                                <img class=\"d-none d-md-inline-block\" src=\"http://127.0.0.1:8000/images/Icone_MENU.png\" height=\"30px\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Menu</a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                                    <a class=\"dropdown-item\" href=\"{{ path('concept_show') }}\">Le concept</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('member_new') }}\">Je m'inscris</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('school_stop_index') }}\">Je donne</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('article_selection') }}\">Je trouve</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('workshop_index') }}\">Je participe</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('news_index') }}\">Je m'informe</a>
                                    {# A FAIRE #}
                                    {# <a class=\"dropdown-item\" href=\"{{ path('member_contact') }}\">Contact</a> #}
                                    {% if app.session.get('user') %}
                                        {% for role in app.session.get('user').MemberRole %}
                                            {% if role.id ==  \"6\" %}
                                            <a class=\"dropdown-item\" href=\"{{ path('member_admin') }}\">Admin</a>
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        {% endblock %}
        </div>

        <div id=\"content\">
            {% for message in app.flashes('notice') %}
            <div class=\"flash-notice\">
                {{ message }}
            </div>
            {% endfor %}
        </div>

        <div>
        
        {% block body %} {% endblock %}
        </div>

        <footer class=\"py-2 bg-blue\">
            <div class=\"container\">
                <div class=\"row justify-content-around\">
                    <div class=\"col-lg-6 text-center mx-2 my-1 text-white \">
                        <div class=\"row justify-content-around\">
                            <a href=\"#\"><p>CONTACT</p></a>
                            <a href=\"#\"><p>CGU</p></a>
                            <a href=\"#\"><p>MENTIONS LEGALES</p></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 mx-2 my-1 justify-content-around\">
                        <a href=\"#\"><img src=\"http://127.0.0.1:8000/images/Icone_FACEBOOK.png\"</a>
                        <a href=\"#\"><img src=\"http://127.0.0.1:8000/images/Icone_INSTAGRAM.png\"</a>
                        <a href=\"#\"><img src=\"http://127.0.0.1:8000/images/Icone_PINTEREST.png\"</a>
                    </div>
                    <p class=\"m-2 text-white\">Copyright &copy; Troc&Mode Kids 2018</p>
                </div>
            </div>
            <!-- /.container -->
        </footer>


    </body>


</html>
", "base.html.twig", "/Users/marie-aude/Desktop/Sauvegarde TMK 311018/templates/base.html.twig");
    }
}
