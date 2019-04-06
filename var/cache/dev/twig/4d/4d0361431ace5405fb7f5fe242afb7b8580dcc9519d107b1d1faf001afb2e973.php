<?php

/* article/_form.html.twig */
class __TwigTemplate_bede9f51d4ec7fb2a4f0be38f25731eb71769e350d3d2a39daf4f9872ee0c16b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/_form.html.twig"));

        // line 1
        echo "

";
        // line 5
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

";
        // line 8
        echo "<script type=\"text/javascript\">
  \$(document).ready(function() {
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var \$container = \$('div#article_article_fabric');

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = \$container.find(':input').length;

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    \$('#add_fabric').click(function(e) {
      addFabric(\$container);

      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addFabric(\$container);
    } else {
      // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }

    // La fonction qui ajoute un formulaire CategoryType
    function addFabric(\$container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte \"__name__label__\" qu'il contient par le label du champ
      // - le texte \"__name__\" qu'il contient par le numéro du champ
      var template = \$container.attr('data-prototype')
        .replace(/__name__label__/g, 'Tissu n°' + (index+1))
        .replace(/__name__/g,        index)
      ;

      // On crée un objet jquery qui contient ce template
      var \$prototype = \$(template);

      ";
        // line 49
        echo "
      // On ajoute le prototype modifié à la fin de la balise <div>
      \$container.append(\$prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }

    ";
        // line 73
        echo "  });
</script>


";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), 'form_start');
        echo "
    ";
        // line 79
        echo "    <div class=\"row justify-content-center\">
        <div class=\"pola-body col-lg-5 my-3 mx-4\">
      ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), "article_picture1", array()), 'row');
        echo "
      ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "article_picture2", array()), 'row');
        echo "
        </div>
          <div class=\"col-lg-5 my-3 mx-4\">
                <div class=\"row justify-content-center d-flex align-items-top\">
                    <div class=\"col-lg-3\">
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "article_gender", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-6\">
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->source); })()), "article_type", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-3\">
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->source); })()), "article_size", array()), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row justify-content-center d-flex align-items-top\">
                    <div class=\"col-lg-4\">
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->source); })()), "article_brand", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-4\">
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->source); })()), "article_color", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-4\">
                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 104, $this->source); })()), "article_wearStatus", array()), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row justify-content-center d-flex align-items-top\">                  
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->source); })()), "article_season", array()), 'row');
        echo "
                </div>
                <div class=\"row justify-content-center d-flex align-items-top\">
                    <div class=\"col-lg-4\">
                      ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->source); })()), "article_processStatus", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-4\">
                      ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->source); })()), "article_eurosValue", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-4\">
                      ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->source); })()), "article_buttonValue", array()), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row justify-content-center d-flex align-items-top\">
                    <div class=\"col-lg-6\">
                      ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->source); })()), "article_comments", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-6\">
                      ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 126, $this->source); })()), "article_fabric", array()), 'row');
        echo "
                       <a href=\"#\" id=\"add_fabric\" class=\"btn btn-secondary\">Ajouter un tissu</a> 
                    </div>
                </div>
            </div>
        </div>
  <br>
  <button class=\"btn btn-primary\">";
        // line 133
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 133, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        echo "</button>
";
        // line 134
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 134,  196 => 133,  186 => 126,  180 => 123,  172 => 118,  166 => 115,  160 => 112,  153 => 108,  146 => 104,  140 => 101,  134 => 98,  126 => 93,  120 => 90,  114 => 87,  106 => 82,  102 => 81,  98 => 79,  94 => 77,  88 => 73,  78 => 49,  37 => 8,  33 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{# On charge la bibliothèque jQuery. Ici, je la prends depuis le CDN google
   mais si vous l'avez en local, changez simplement l'adresse. #}
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

{# Voici le script en question : #}
<script type=\"text/javascript\">
  \$(document).ready(function() {
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var \$container = \$('div#article_article_fabric');

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = \$container.find(':input').length;

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    \$('#add_fabric').click(function(e) {
      addFabric(\$container);

      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addFabric(\$container);
    } else {
      // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }

    // La fonction qui ajoute un formulaire CategoryType
    function addFabric(\$container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte \"__name__label__\" qu'il contient par le label du champ
      // - le texte \"__name__\" qu'il contient par le numéro du champ
      var template = \$container.attr('data-prototype')
        .replace(/__name__label__/g, 'Tissu n°' + (index+1))
        .replace(/__name__/g,        index)
      ;

      // On crée un objet jquery qui contient ce template
      var \$prototype = \$(template);

      {# // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      addDeleteLink(\$prototype); #}

      // On ajoute le prototype modifié à la fin de la balise <div>
      \$container.append(\$prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }

    {# // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink(\$prototype) {
      // Création du lien
      var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

      // Ajout du lien
      \$prototype.append(\$deleteLink);

      // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
      \$deleteLink.click(function(e) {
        \$prototype.remove();

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    } #}
  });
</script>


{{ form_start(form) }}
    {# {{ form_widget(form) }} #}
    <div class=\"row justify-content-center\">
        <div class=\"pola-body col-lg-5 my-3 mx-4\">
      {{ form_row(form.article_picture1) }}
      {{ form_row(form.article_picture2) }}
        </div>
          <div class=\"col-lg-5 my-3 mx-4\">
                <div class=\"row justify-content-center d-flex align-items-top\">
                    <div class=\"col-lg-3\">
                        {{ form_row(form.article_gender) }}
                    </div>
                    <div class=\"col-lg-6\">
                        {{ form_row(form.article_type) }}
                    </div>
                    <div class=\"col-lg-3\">
                        {{ form_row(form.article_size) }}
                    </div>
                </div>
                <div class=\"row justify-content-center d-flex align-items-top\">
                    <div class=\"col-lg-4\">
                        {{ form_row(form.article_brand) }}
                    </div>
                    <div class=\"col-lg-4\">
                    {{ form_row(form.article_color) }}
                    </div>
                    <div class=\"col-lg-4\">
                    {{ form_row(form.article_wearStatus) }}
                    </div>
                </div>
                <div class=\"row justify-content-center d-flex align-items-top\">                  
                    {{ form_row(form.article_season) }}
                </div>
                <div class=\"row justify-content-center d-flex align-items-top\">
                    <div class=\"col-lg-4\">
                      {{ form_row(form.article_processStatus) }}
                    </div>
                    <div class=\"col-lg-4\">
                      {{ form_row(form.article_eurosValue) }}
                    </div>
                    <div class=\"col-lg-4\">
                      {{ form_row(form.article_buttonValue) }}
                    </div>
                </div>
                <div class=\"row justify-content-center d-flex align-items-top\">
                    <div class=\"col-lg-6\">
                      {{ form_row(form.article_comments) }}
                    </div>
                    <div class=\"col-lg-6\">
                      {{ form_row(form.article_fabric) }}
                       <a href=\"#\" id=\"add_fabric\" class=\"btn btn-secondary\">Ajouter un tissu</a> 
                    </div>
                </div>
            </div>
        </div>
  <br>
  <button class=\"btn btn-primary\">{{ button_label|default('Sauvegarder') }}</button>
{{ form_end(form) }}", "article/_form.html.twig", "/Users/marie-aude/Desktop/TMK/templates/article/_form.html.twig");
    }
}
