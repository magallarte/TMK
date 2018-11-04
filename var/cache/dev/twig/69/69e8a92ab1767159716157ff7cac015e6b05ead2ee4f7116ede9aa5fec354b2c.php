<?php

/* member/memberCreate.html.twig */
class __TwigTemplate_fa82526e55c9a9f539e03275b48c6421198c795c66e2817e1ac7521761407585 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/memberCreate.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/memberCreate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/memberCreate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Troc&Mode Kids";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
    <h1>Créez votre profil</h1>

";
        // line 60
        echo "        <form class=\"form-group\" method=\"post\">
            ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), 'form_start');
        echo "
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), 'widget');
        echo "
            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/memberCreate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 63,  84 => 62,  80 => 61,  77 => 60,  72 => 5,  63 => 4,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig'%}
{% block title %}Troc&Mode Kids{% endblock %}

{% block body %}
<div class=\"container\">
    <h1>Créez votre profil</h1>

{# <form action=\"/member/create\" method=\"post\">

    <label for=\"memberName\">Nom</label>
    <input type=\"text\" id=\"memberName\" name=\"memberName\">
    <br>
    <label for=\"memberSurname\">Prénom</label>
    <input type=\"text\" id=\"memberSurname\" name=\"memberSurname\">
    <br>
    <label for=\"memberAddress1\">Adresse</label>
    <input type=\"text\" id=\"memberAddress1\" name=\"memberAddress1\">
    <br>
    <label for=\"memberAddress2\">Adresse (complément)</label>
    <input type=\"text\" id=\"memberAddress2\" name=\"memberAddress2\">
    <br>
    <label for=\"memberZipCode\">Code Postal</label>
    <input type=\"text\" id=\"memberZipCode\" name=\"memberZipCode\">
    <br>
    <label for=\"memberCity\">Ville</label>
    <input type=\"text\" id=\"memberCity\" name=\"memberCity\">
    <br>
    <label for=\"memberTel\">Téléphone</label>
    <input type=\"text\" id=\"memberTel\" name=\"memberTel\">
    <br>
    <label for=\"memberEmail\">Email</label>
    <input type=\"email\" id=\"memberEmail\" name=\"memberEmail\">
    <br>
    <label for=\"memberPassword\">Mot de passe</label>
    <input type=\"text\" id=\"memberPassword\" name=\"memberPassword\">
    <br>
    <label for=\"memberSubscription\">Souhaitez vous recevoir la newsletter ?</label>
    <input type=\"radio\" id=\"memberSubscription\" name=\"memberSubscription\" value=\"oui\">
    <input type=\"radio\" id=\"memberSubscription\" name=\"memberSubscription\" value=\"non\">
    <br>
    <label for=\"memberExpertise\">Compétence que vous pouriez apporter à l'association</label>
    <input type=\"text\" id=\"mmemberExpertise\" name=\"memberExpertise\">
    <br>
    <label for=\"memberLevel\">Niveau en couture</label>
    <input type=\"range\" id=\"memberLevel\" name=\"memberLevel\">
    <br>
    //rajouter une section KIDS 

    <input type=\"submit\" value=\"CREER MON PROFIL\">
    <br>
//VERIFIER SI ECRITURE TWIG EST CORRECTE/ Comment gérer le unset ?

{% for message in app.flashes('notice') %}
    <div class=\"flash-notice\">
        {{ message }}
    </div>
{% endfor %}
    
</form> #}
        <form class=\"form-group\" method=\"post\">
            {{ form_start(form) }}
            {{ form_widget(form) }}
            {{ form_end(form) }}
        </form>
    </div>
{% endblock %}
", "member/memberCreate.html.twig", "/Users/marie-aude/Desktop/Sauvegarde TMK 311018/templates/member/memberCreate.html.twig");
    }
}
