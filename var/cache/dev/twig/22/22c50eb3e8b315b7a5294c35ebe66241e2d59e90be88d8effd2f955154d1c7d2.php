<?php

/* delivery_bag/cart.html.twig */
class __TwigTemplate_4e7476bf22ac62b7c25cb8660316a73ab9b5f7009162fd1445deef689c9ddaf4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "delivery_bag/cart.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "delivery_bag/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "delivery_bag/cart.html.twig"));

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

        echo "Panier";
        
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
        echo "<div class=\"container\">
    <h1>Panier</h1>

    <table class=\"table\" id='myTable'>
        <thead>
            <tr>
                <th>Sexe</th>
                <th>Catégorie</th>
                <th>Taille</th>
                <th>Photo</th>
                <th>Valeur (boutons ou euros)</th>
                <th>Frais (préparation)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deliveryBagList"]) || array_key_exists("deliveryBagList", $context) ? $context["deliveryBagList"] : (function () { throw new Twig_Error_Runtime('Variable "deliveryBagList" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "articleGender", array()), "GenderName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "articleType", array()), "TypeName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "articleSize", array()), "SizeName", array()), "html", null, true);
            echo "</td>
                <td style=\"height: 100px;\">
                    <img class=\"h-100 d-inline-block\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["article"], "articlePicture1", array()))), "html", null, true);
            echo "\" alt=\"Photo Recto\">
                </td>
                <td class='articleButtons' name=\"articleButtons\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "articleButtonValue", array()), "html", null, true);
            echo "
                </td>
                <td class='articleFee' name=\"articleFee\">1
                </td>
                <td>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))), "html", null, true);
            echo "\">voir la fiche</a>
                    <br>
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_removeFromCart", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))), "html", null, true);
            echo "\">supprimer du panier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "            <tr>
                <td colspan=\"6\">Aucun article trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            
        </tbody>
       
        <tfoot>
            <tr>
                <td colspan=\"4\"> TOTAL ARTICLES</td>
                <td id='totalButtons'></td>
                <td id='totalFees'></td>
            </tr>
            <tr>
                <td colspan=\"2\">
                    ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
            // line 57
            echo "                    <p> Vous avez ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 57, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "MemberButtonWallet", array()), "html", null, true);
            echo " boutons dans votre cagnotte</p>
                    ";
        } else {
            // line 59
            echo "                        <a href=\"/member/setSession\">Pour utiliser votre cagnotte en boutons, identifiez-vous !</a>
                    ";
        }
        // line 61
        echo "                </td>
                <td colspan=\"3\">
                    <label for=\"walletButtons\"> Combien souhaitez vous en utiliser ?
                    <input type=\"money\" name=\"walletButtons\" id=\"walletButtons\" placeholder=\"0\">
                    </label>
                </td>
                <td></td>
            </tr>
            <tr>
                <td colspan=\"2\"> FRAIS DE LIVRAISON</td>
                <td colspan=\"2\"> 
                    <select id=\"deliveryChoice\" >
                        <option value='0'>Choisissez votre livraison</option>
                        <option value='1'>Retrait en boutique / GRATUIT</option>
                        <option value='2'>Livraison sur le parking de l'école / 2€</option>
                        <option value='3'>Livraison par la poste / 10€</option>
                    </select>
                    <select id=\"stopChoice\">
                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolStops"]) || array_key_exists("schoolStops", $context) ? $context["schoolStops"] : (function () { throw new Twig_Error_Runtime('Variable "schoolStops" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stop"]) {
            // line 80
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stop"], "Id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stop"], "schoolStopDate", array()), "d-m-Y H:i"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stop"], "schoolStopSchool", array()), "schoolName", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                    </select>
                </td>
                <td><p id=\"deliveryFee\"></p></td>
            </tr>
            <tr>
                <td colspan=\"4\">TOTAL ARTICLES + LIVRAISON</td>
                <td></td>
                <td><p id=\"totalCart\"></p></td>
            </tr>
        </tfoot>
    </table>
    <br>
    <a id=\"validate\" class=\"btn btn-primary\" href=\"/delivery/bag/validateCart\">Payer avec LYF Pay</a>
    <br>
    <br>
    <a class=\"btn btn-secondary\" href=\"/delivery/bag/unsetCart\">Vider mon panier</a>
    <br>
    <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_selection");
        echo "\">Revenir au catalogue</a>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"assets/js/jquery-1.12.4.min.js\"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script type=\"text/javascript\" src=\"http://127.0.0.1:8000/vendor/jquery/jquery-3.3.1.min.js\"></script>
    <!--<![endif]-->

    <script>
   
    var deliveryFeeOptions = {
        0:\"0\",
        1:\"0\",
        2:\"2\",
        3:\"10\"
        }
    
     var totalCart = 0;

    function getWalletButtons() {
        var walletButtons = 0;
        walletButtons = \$('#walletButtons').val();
        console.log('wallet'+walletButtons);
        return walletButtons;
        }

    function getTotalButtons() {
        var totalButtons = 0;
        \$(\".articleButtons\").each(function() {
            totalButtons += parseFloat(\$(this).html());
        });
        return totalButtons;
        }
    function updateCartButtons() {
        \$(\"#totalButtons\").html( getTotalButtons() );
        }

    function getTotalFees() {
        var totalFees = 0;
        \$(\".articleFee\").each(function() {
            totalFees += parseFloat(\$(this).html());
        });
        return totalFees;
        }

    function updateCartFees() {
        \$(\"#totalFees\").html( getTotalFees() );
        console.log('totalFee'+getTotalFees());
        }

    function updateDeliveryFee(){
        \$('#deliveryFee').val(deliveryFeeOptions[\$('#deliveryChoice').val()]);
        \$('#deliveryFee').html(deliveryFeeOptions[\$('#deliveryChoice').val()]);
    }

    function getDeliveryFee(){
        var deliveryFee = parseFloat(\$('#deliveryFee').html());
        if(deliveryFee == NaN)
        {
            deliveryFee=0;
        }

        console.log('deliveryFee'+deliveryFee);
        return deliveryFee;
    }

    function getTotalCart() {
        console.log('B'+getTotalButtons());
        console.log('W'+getWalletButtons());
        console.log('TF'+getTotalFees());
        console.log('DF'+getDeliveryFee());
        totalCart = (getTotalButtons() - getWalletButtons()) + getTotalFees() + getDeliveryFee();
        return totalCart;
        }
    function updateTotalCart() {
        \$(\"#totalCart\").html( getTotalCart() );
        }

    function showSchoolStopslist(){
        \$('#stopChoice').show();
    }
    function hideSchoolStopsList(){
        \$('#stopChoice').hide();
    }
   
    \$(document).ready(function () {
        hideSchoolStopsList();
        updateCartButtons();
        updateCartFees();
        updateDeliveryFee();
        updateTotalCart();
        \$(\"#walletButtons\").keyup(function () {
            getWalletButtons();
            updateTotalCart();
        });
        \$('#deliveryChoice').change(function () {
            updateDeliveryFee();
            updateTotalCart();
            if(\$('#deliveryChoice').val() == '2')
           {
               showSchoolStopslist();
            }
           else
            {
               hideSchoolStopsList();
           }
            
        });
    });

    ";
        // line 254
        echo "    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "delivery_bag/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 254,  251 => 104,  242 => 103,  229 => 99,  210 => 82,  197 => 80,  193 => 79,  173 => 61,  169 => 59,  163 => 57,  161 => 56,  148 => 45,  139 => 41,  130 => 37,  125 => 35,  117 => 30,  112 => 28,  107 => 26,  103 => 25,  99 => 24,  96 => 23,  91 => 22,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}
<div class=\"container\">
    <h1>Panier</h1>

    <table class=\"table\" id='myTable'>
        <thead>
            <tr>
                <th>Sexe</th>
                <th>Catégorie</th>
                <th>Taille</th>
                <th>Photo</th>
                <th>Valeur (boutons ou euros)</th>
                <th>Frais (préparation)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for article in deliveryBagList %}
            <tr>
                <td>{{ article.articleGender.GenderName }}</td>
                <td>{{ article.articleType.TypeName }}</td>
                <td>{{ article.articleSize.SizeName }}</td>
                <td style=\"height: 100px;\">
                    <img class=\"h-100 d-inline-block\" src=\"{{ asset('uploads/pictures/' ~ article.articlePicture1)}}\" alt=\"Photo Recto\">
                </td>
                <td class='articleButtons' name=\"articleButtons\">{{ article.articleButtonValue }}
                </td>
                <td class='articleFee' name=\"articleFee\">1
                </td>
                <td>
                    <a href=\"{{ path('article_show', {'id': article.id}) }}\">voir la fiche</a>
                    <br>
                    <a href=\"{{ path('article_removeFromCart', {'id': article.id}) }}\">supprimer du panier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">Aucun article trouvé</td>
            </tr>
        {% endfor %}
            
        </tbody>
       
        <tfoot>
            <tr>
                <td colspan=\"4\"> TOTAL ARTICLES</td>
                <td id='totalButtons'></td>
                <td id='totalFees'></td>
            </tr>
            <tr>
                <td colspan=\"2\">
                    {% if app.session.get('user') %}
                    <p> Vous avez {{ app.session.get('user').MemberButtonWallet }} boutons dans votre cagnotte</p>
                    {% else %}
                        <a href=\"/member/setSession\">Pour utiliser votre cagnotte en boutons, identifiez-vous !</a>
                    {% endif %}
                </td>
                <td colspan=\"3\">
                    <label for=\"walletButtons\"> Combien souhaitez vous en utiliser ?
                    <input type=\"money\" name=\"walletButtons\" id=\"walletButtons\" placeholder=\"0\">
                    </label>
                </td>
                <td></td>
            </tr>
            <tr>
                <td colspan=\"2\"> FRAIS DE LIVRAISON</td>
                <td colspan=\"2\"> 
                    <select id=\"deliveryChoice\" >
                        <option value='0'>Choisissez votre livraison</option>
                        <option value='1'>Retrait en boutique / GRATUIT</option>
                        <option value='2'>Livraison sur le parking de l'école / 2€</option>
                        <option value='3'>Livraison par la poste / 10€</option>
                    </select>
                    <select id=\"stopChoice\">
                        {% for stop in schoolStops %}
                        <option value=\"{{stop.Id}}\">{{stop.schoolStopDate|date(\"d-m-Y H:i\")}} / {{stop.schoolStopSchool.schoolName}}</option>
                        {% endfor %}
                    </select>
                </td>
                <td><p id=\"deliveryFee\"></p></td>
            </tr>
            <tr>
                <td colspan=\"4\">TOTAL ARTICLES + LIVRAISON</td>
                <td></td>
                <td><p id=\"totalCart\"></p></td>
            </tr>
        </tfoot>
    </table>
    <br>
    <a id=\"validate\" class=\"btn btn-primary\" href=\"/delivery/bag/validateCart\">Payer avec LYF Pay</a>
    <br>
    <br>
    <a class=\"btn btn-secondary\" href=\"/delivery/bag/unsetCart\">Vider mon panier</a>
    <br>
    <a href=\"{{ path('article_selection') }}\">Revenir au catalogue</a>
</div>
{% endblock %}

{% block javascripts %}
     {{ parent() }}

    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"assets/js/jquery-1.12.4.min.js\"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script type=\"text/javascript\" src=\"http://127.0.0.1:8000/vendor/jquery/jquery-3.3.1.min.js\"></script>
    <!--<![endif]-->

    <script>
   
    var deliveryFeeOptions = {
        0:\"0\",
        1:\"0\",
        2:\"2\",
        3:\"10\"
        }
    
     var totalCart = 0;

    function getWalletButtons() {
        var walletButtons = 0;
        walletButtons = \$('#walletButtons').val();
        console.log('wallet'+walletButtons);
        return walletButtons;
        }

    function getTotalButtons() {
        var totalButtons = 0;
        \$(\".articleButtons\").each(function() {
            totalButtons += parseFloat(\$(this).html());
        });
        return totalButtons;
        }
    function updateCartButtons() {
        \$(\"#totalButtons\").html( getTotalButtons() );
        }

    function getTotalFees() {
        var totalFees = 0;
        \$(\".articleFee\").each(function() {
            totalFees += parseFloat(\$(this).html());
        });
        return totalFees;
        }

    function updateCartFees() {
        \$(\"#totalFees\").html( getTotalFees() );
        console.log('totalFee'+getTotalFees());
        }

    function updateDeliveryFee(){
        \$('#deliveryFee').val(deliveryFeeOptions[\$('#deliveryChoice').val()]);
        \$('#deliveryFee').html(deliveryFeeOptions[\$('#deliveryChoice').val()]);
    }

    function getDeliveryFee(){
        var deliveryFee = parseFloat(\$('#deliveryFee').html());
        if(deliveryFee == NaN)
        {
            deliveryFee=0;
        }

        console.log('deliveryFee'+deliveryFee);
        return deliveryFee;
    }

    function getTotalCart() {
        console.log('B'+getTotalButtons());
        console.log('W'+getWalletButtons());
        console.log('TF'+getTotalFees());
        console.log('DF'+getDeliveryFee());
        totalCart = (getTotalButtons() - getWalletButtons()) + getTotalFees() + getDeliveryFee();
        return totalCart;
        }
    function updateTotalCart() {
        \$(\"#totalCart\").html( getTotalCart() );
        }

    function showSchoolStopslist(){
        \$('#stopChoice').show();
    }
    function hideSchoolStopsList(){
        \$('#stopChoice').hide();
    }
   
    \$(document).ready(function () {
        hideSchoolStopsList();
        updateCartButtons();
        updateCartFees();
        updateDeliveryFee();
        updateTotalCart();
        \$(\"#walletButtons\").keyup(function () {
            getWalletButtons();
            updateTotalCart();
        });
        \$('#deliveryChoice').change(function () {
            updateDeliveryFee();
            updateTotalCart();
            if(\$('#deliveryChoice').val() == '2')
           {
               showSchoolStopslist();
            }
           else
            {
               hideSchoolStopsList();
           }
            
        });
    });

    {# function validateCart(){
        \$('#validate').submit(function( event ) {
            alert( \"Handler for .submit() called.\" );
            event.preventDefault();

            if(\$('#deliveryChoice').val() == '1'){
                var deliverySchoolStop = null;
                var deliveryType =\"boutique\"
            }

            else if(\$('#deliveryChoice').val() == '2'){
                var deliverySchoolStop = \$('#stopChoice').val();
                var deliveryType =\"école\"
            }

            else if(\$('#deliveryChoice').val() == '3'){
                var deliverySchoolStop = null;
                var deliveryType =\"envoi\"
            }

            \$.post(
                {# '{{path('delivery_bag_validateCart')}}', // Le fichier cible côté serveur.
                'http://127.0.0.1:8000/delivery/bag/validateCar',
                {
                    serviceFee : \$(\"#totalFees\").val(),
                    walletAmount : \$(\"#walletButton\").val(),
                    schoolStopId : \$('#stopChoice').val(),
                    deliveryType : deliveryType
                },
                success, // Nous renseignons uniquement le nom de la fonction de retour.
                'text' // Format des données reçues.
            );

            function success(response){
                // Du code pour gérer le retour de l'appel AJAX.
                alert( \"ca marche.\" );
            }
        }); 
    } #}
    </script>
{% endblock %}


", "delivery_bag/cart.html.twig", "/Users/marie-aude/Desktop/Sauvegarde TMK 311018/templates/delivery_bag/cart.html.twig");
    }
}
