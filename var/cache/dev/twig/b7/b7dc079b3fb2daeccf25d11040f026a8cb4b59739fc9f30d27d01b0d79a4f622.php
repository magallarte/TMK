<?php

/* member/memberAdmin.html.twig */
class __TwigTemplate_54bddc04d3b3113234c2fd472015d8a4484785ce95e5ecf072e860bf6eb40309 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/memberAdmin.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/memberAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/memberAdmin.html.twig"));

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
        echo "

<h1>Menu ADMIN </h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Données :</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Articles</td>
                <td>
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\">voir la liste</a> 
                </td>
            </tr>
            <tr>
                <td>Membres</td>
                <td>
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_index");
        echo "\">voir la liste</a>
                </td>
            </tr>
            <tr>
                <td>Sacs de dons</td>
                <td>
                    <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("donation_bag_index");
        echo "\">voir la liste</a>
                </td>
            </tr>
            <tr>
                <td>Sacs de livraison</td>
                <td>
                    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delivery_bag_index");
        echo "\">voir la liste</a>  
                </td>
            </tr>
            <tr>
                <td>Tournées des écoles</td>
                <td>
                    <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("school_stop_index");
        echo "\">voir la liste</a> 
                </td>
            </tr>
            <tr>
                <td>News</td>
                <td>
                    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_index");
        echo "\">voir la liste</a> 
                </td>
            </tr>
            <tr>
                <td>Ateliers</td>
                <td>
                    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_index");
        echo "\">voir la liste</a> 
                </td>
            </tr>
        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/memberAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 55,  115 => 49,  106 => 43,  97 => 37,  88 => 31,  79 => 25,  70 => 19,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig'%}

{% block body %}


<h1>Menu ADMIN </h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Données :</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Articles</td>
                <td>
                    <a href=\"{{ path('article_index') }}\">voir la liste</a> 
                </td>
            </tr>
            <tr>
                <td>Membres</td>
                <td>
                    <a href=\"{{ path('member_index') }}\">voir la liste</a>
                </td>
            </tr>
            <tr>
                <td>Sacs de dons</td>
                <td>
                    <a href=\"{{ path('donation_bag_index') }}\">voir la liste</a>
                </td>
            </tr>
            <tr>
                <td>Sacs de livraison</td>
                <td>
                    <a href=\"{{ path('delivery_bag_index') }}\">voir la liste</a>  
                </td>
            </tr>
            <tr>
                <td>Tournées des écoles</td>
                <td>
                    <a href=\"{{ path('school_stop_index') }}\">voir la liste</a> 
                </td>
            </tr>
            <tr>
                <td>News</td>
                <td>
                    <a href=\"{{ path('news_index') }}\">voir la liste</a> 
                </td>
            </tr>
            <tr>
                <td>Ateliers</td>
                <td>
                    <a href=\"{{ path('workshop_index') }}\">voir la liste</a> 
                </td>
            </tr>
        </tbody>
    </table>

{% endblock %}", "member/memberAdmin.html.twig", "/Users/marie-aude/Desktop/Sauvegarde TMK 311018/templates/member/memberAdmin.html.twig");
    }
}
