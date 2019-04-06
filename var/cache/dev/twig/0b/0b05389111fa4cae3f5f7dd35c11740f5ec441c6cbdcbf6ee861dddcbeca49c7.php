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
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "        
    </head>

    <body>
        <div id=\"navigation\">
        ";
        // line 54
        $this->displayBlock('navigation', $context, $blocks);
        // line 136
        echo "        </div>

        <div id=\"content\">
            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 139, $this->source); })()), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 140
            echo "            <div class=\"flash-notice\">
                ";
            // line 141
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "        </div>

        <div>
        
        ";
        // line 148
        $this->displayBlock('body', $context, $blocks);
        // line 149
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
        ";
        // line 14
        echo "        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
        <!-- Bootstrap 4 CSS -->
        ";
        // line 17
        echo "        <!-- Custom styles for this template -->
        <link href=\"http://127.0.0.1:8000/css/trocmodekids.css\" rel=\"stylesheet\">
        <!-- Chosen CSS for form selects -->
        ";
        // line 21
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "        <!-- Bootstrap core JavaScript -->
        ";
        // line 26
        echo "        ";
        // line 27
        echo "        ";
        // line 28
        echo "        <!-- Bootstrap 4 JavaScript -->
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
        ";
        // line 33
        echo "        ";
        // line 34
        echo "        <!--[if lt IE 9]>
        <script type=\"text/javascript\" src=\"assets/js/jquery-1.12.4.min.js\"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script type=\"text/javascript\" src=\"http://127.0.0.1:8000/vendor/jquery/jquery-3.3.1.min.js\"></script>
        <!--<![endif]-->
        ";
        // line 41
        echo "        ";
        // line 42
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

    // line 54
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 55
        echo "            <nav class=\"navbar fixed-top navbar-expand-md navbar-light bg-white\">
                <div class=\"container\">
                    <a class=\"navbar-brand\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_show");
        echo "\"><img src=\"http://127.0.0.1:8000/images/Logo_troc_mode_kids.png\" height=\"100px\" alt=\"Troc&amp;Mode Kids\"></a>
                    <h3 class=\"blue text-left navbarline\">Donnez utile <br> Achetez raisonné <br> Devenez \"surcycleur\"</h3>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>                   
                    <div class=\"collapse navbar-collapse navbarline navbarline-right\" id=\"navbarResponsive\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item\">
                            ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 65, $this->source); })()), "user", array())) {
            // line 66
            echo "                                ";
            // line 67
            echo "                                <a class=\"nav-link d-none d-md-inline-block\" href=\"/member/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 67, $this->source); })()), "user", array()), "id", array()), "html", null, true);
            echo "\">
                                    <img class=\"\" src=\"http://127.0.0.1:8000/images/Icone_PROFIL.png\" height=\"30px\">
                                    <p>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 69, $this->source); })()), "user", array()), "MemberSurname", array()), "html", null, true);
            echo "</p>
                                    <br>
                                 </a>
                            ";
        } else {
            // line 73
            echo "                                <a class=\"nav-link d-none d-md-inline-block\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_setSession");
            echo "\">
                                    <img class=\"\" src=\"http://127.0.0.1:8000/images/Icone_PROFIL.png\" height=\"30px\">
                                    <p>Je m'identifie</p>
                                    <br>
                                </a>
                            ";
        }
        // line 79
        echo "                            </li>
                            <li class=\"nav-item\">
                            ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 81, $this->source); })()), "user", array())) {
            // line 82
            echo "                                <a class=\"nav-link d-none d-md-inline-block\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">
                                    <img class=\"\" src=\"http://127.0.0.1:8000/images/Icone_DECONNEXION.png\" height=\"30px\">
                                    <p>Je me déconnecte</p>
                                    <br>
                                </a>
                            ";
        }
        // line 88
        echo "                            </li>
                            <li class=\"nav-item\">
                            ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 90, $this->source); })()), "session", array()), "get", array(0 => "cart"), "method")) {
            // line 91
            echo "                                <a class=\"nav-link d-none d-md-inline-block\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delivery_bag_showCart");
            echo "\">
                                    <img class=\"\" src=\"http://127.0.0.1:8000/images/Icone_SAC_134x115.png\" height=\"30px\">
                                    <p>Mon sac</p>
                                    <br>
                                </a>
                            ";
        }
        // line 97
        echo "                            </li>
                            <li class=\"nav-item dropdown\">
                                <img class=\"d-none d-md-inline-block\" src=\"http://127.0.0.1:8000/images/Icone_MENU.png\" height=\"30px\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Menu</a>
                                <div class=\"dropdown-menu dropdown-menu\" aria-labelledby=\"navbarDropdownPortfolio\">
                                    <a class=\"dropdown-item d-block d-md-none d-lg-none d-xl-none\" href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_setSession");
        echo "\">
                                    ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 104, $this->source); })()), "user", array())) {
            // line 105
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 105, $this->source); })()), "user", array()), "MemberSurname", array()), "html", null, true);
            echo "
                                    ";
        } else {
            // line 107
            echo "                                        Je m'identifie
                                    ";
        }
        // line 109
        echo "                                    </a>
                                    <a class=\"dropdown-item d-block d-md-none d-lg-none d-xl-none\" href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\">Je me déconnecte</a>
                                    ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 111, $this->source); })()), "session", array()), "get", array(0 => "cart"), "method")) {
            // line 112
            echo "                                    <a class=\"dropdown-item d-block d-md-none d-lg-none d-xl-none\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delivery_bag_showCart");
            echo "\">Mon sac</a>
                                    ";
        }
        // line 114
        echo "                                    <a class=\"dropdown-item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("concept_show");
        echo "\">Le concept</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_new");
        echo "\">Je m'inscris</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("school_stop_index");
        echo "\">Je donne</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_selection");
        echo "\">Je trouve</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_index");
        echo "\">Je participe</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_index");
        echo "\">Je m'informe</a>
                                    ";
        // line 121
        echo "                                    ";
        // line 122
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 122, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
            // line 123
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 123, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "MemberRole", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 124
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["role"], "id", array()) == "6")) {
                    // line 125
                    echo "                                            <a class=\"dropdown-item\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_admin");
                    echo "\">Admin</a>
                                            ";
                }
                // line 127
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                                    ";
        }
        // line 129
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

    // line 148
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
        return array (  421 => 148,  405 => 129,  402 => 128,  396 => 127,  390 => 125,  387 => 124,  382 => 123,  379 => 122,  377 => 121,  373 => 119,  369 => 118,  365 => 117,  361 => 116,  357 => 115,  352 => 114,  346 => 112,  344 => 111,  340 => 110,  337 => 109,  333 => 107,  327 => 105,  325 => 104,  321 => 103,  313 => 97,  303 => 91,  301 => 90,  297 => 88,  287 => 82,  285 => 81,  281 => 79,  271 => 73,  264 => 69,  258 => 67,  256 => 66,  254 => 65,  243 => 57,  239 => 55,  230 => 54,  214 => 42,  212 => 41,  204 => 34,  202 => 33,  196 => 28,  194 => 27,  192 => 26,  189 => 24,  180 => 23,  170 => 21,  165 => 17,  161 => 14,  158 => 12,  149 => 11,  132 => 8,  94 => 149,  92 => 148,  86 => 144,  77 => 141,  74 => 140,  70 => 139,  65 => 136,  63 => 54,  56 => 49,  54 => 23,  51 => 22,  49 => 11,  43 => 8,  34 => 1,);
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
        {# <link href=\"http://127.0.0.1:8000/vendor/bootstrap/css/bootstrap.css\" rel=\"stylesheet\"> #}
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
        <!-- Bootstrap 4 CSS -->
        {# <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\"> #}
        <!-- Custom styles for this template -->
        <link href=\"http://127.0.0.1:8000/css/trocmodekids.css\" rel=\"stylesheet\">
        <!-- Chosen CSS for form selects -->
        {# <link type=\"text/css\" href=\"http://127.0.0.1:8000/vendor/jquery/chosen_v1.8.5/chosen.min.css\" rel=\"stylesheet\">       #}
        {% endblock %}

        {% block javascripts %}
        <!-- Bootstrap core JavaScript -->
        {# <script src=\"http://127.0.0.1:8000/vendor/jquery/jquery.min.js\"></script> #}
        {# <script src=\"http://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script> #}
        {# <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script> #}
        <!-- Bootstrap 4 JavaScript -->
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
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
                    <div class=\"collapse navbar-collapse navbarline navbarline-right\" id=\"navbarResponsive\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item\">
                            {% if app.user %}
                                {# <a class=\"nav-link\" href=\"{{ path('member_show', {'id': app.session.get('user').id}) }}\"> {{ app.session.get('user').MemberSurname }}</a> #}
                                <a class=\"nav-link d-none d-md-inline-block\" href=\"/member/{{app.user.id}}\">
                                    <img class=\"\" src=\"http://127.0.0.1:8000/images/Icone_PROFIL.png\" height=\"30px\">
                                    <p>{{ app.user.MemberSurname }}</p>
                                    <br>
                                 </a>
                            {% else %}
                                <a class=\"nav-link d-none d-md-inline-block\" href=\"{{ path('member_setSession') }}\">
                                    <img class=\"\" src=\"http://127.0.0.1:8000/images/Icone_PROFIL.png\" height=\"30px\">
                                    <p>Je m'identifie</p>
                                    <br>
                                </a>
                            {% endif %}
                            </li>
                            <li class=\"nav-item\">
                            {% if app.user %}
                                <a class=\"nav-link d-none d-md-inline-block\" href=\"{{ path('security_logout') }}\">
                                    <img class=\"\" src=\"http://127.0.0.1:8000/images/Icone_DECONNEXION.png\" height=\"30px\">
                                    <p>Je me déconnecte</p>
                                    <br>
                                </a>
                            {% endif %}
                            </li>
                            <li class=\"nav-item\">
                            {% if app.session.get('cart') %}
                                <a class=\"nav-link d-none d-md-inline-block\" href=\"{{ path('delivery_bag_showCart') }}\">
                                    <img class=\"\" src=\"http://127.0.0.1:8000/images/Icone_SAC_134x115.png\" height=\"30px\">
                                    <p>Mon sac</p>
                                    <br>
                                </a>
                            {% endif %}
                            </li>
                            <li class=\"nav-item dropdown\">
                                <img class=\"d-none d-md-inline-block\" src=\"http://127.0.0.1:8000/images/Icone_MENU.png\" height=\"30px\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Menu</a>
                                <div class=\"dropdown-menu dropdown-menu\" aria-labelledby=\"navbarDropdownPortfolio\">
                                    <a class=\"dropdown-item d-block d-md-none d-lg-none d-xl-none\" href=\"{{ path('member_setSession') }}\">
                                    {% if app.user %}
                                        {{ app.user.MemberSurname }}
                                    {% else %}
                                        Je m'identifie
                                    {% endif %}
                                    </a>
                                    <a class=\"dropdown-item d-block d-md-none d-lg-none d-xl-none\" href=\"{{ path('security_logout') }}\">Je me déconnecte</a>
                                    {% if app.session.get('cart') %}
                                    <a class=\"dropdown-item d-block d-md-none d-lg-none d-xl-none\" href=\"{{ path('delivery_bag_showCart') }}\">Mon sac</a>
                                    {% endif %}
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
", "base.html.twig", "/Users/marie-aude/Desktop/TMK/templates/base.html.twig");
    }
}
