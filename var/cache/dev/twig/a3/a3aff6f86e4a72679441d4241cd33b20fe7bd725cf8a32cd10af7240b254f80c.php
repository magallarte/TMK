<?php

/* Back up temp/Configuration sécurité */
class __TwigTemplate_458a0ee3b088a451c954767f1f66aa78f4f7d8d9bd1880bdd71bf91c9d4905ec extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Back up temp/Configuration sécurité"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Back up temp/Configuration sécurité"));

        // line 1
        echo "# security:
#     encoders:
#         App\\Entity\\Member:
#             algorithm: bcrypt
#     # https://symfony.com/doc/current/security.html#where-do-users-come-from-user-providers
#     providers:
#         # in_memory: { memory: ~ }
#         our_db_provider:
#             entity:
#                 class: App\\Entity\\Member
#                 property: member_email
#                 # if you're using multiple entity managers
#                 # manager_name: customer
#     firewalls:
#         dev:
#             pattern: ^/(_(profiler|wdt)|css|images|js)/
#             security: false
#         main:
#             pattern:    ^/
#             http_basic: ~
#             provider: our_db_provider
#             anonymous: ~
#             form_login:
#                 login_path: login
#                 check_path: login

#             # activate different ways to authenticate

#             # http_basic: true
#             # https://symfony.com/doc/current/security.html#a-configuring-how-your-users-will-authenticate

#             # form_login: true
#             # https://symfony.com/doc/current/security/form_login_setup.html

#     # Easy way to control access for large sections of your site
#     # Note: Only the *first* access control that matches will be used
#     access_control:
#     - { path: ^/login, roles: IS_AUTHENTICATED_ANONYMOUSLY }
#     - { path: ^/, roles: ROLE_ADMIN }

    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Back up temp/Configuration sécurité";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# security:
#     encoders:
#         App\\Entity\\Member:
#             algorithm: bcrypt
#     # https://symfony.com/doc/current/security.html#where-do-users-come-from-user-providers
#     providers:
#         # in_memory: { memory: ~ }
#         our_db_provider:
#             entity:
#                 class: App\\Entity\\Member
#                 property: member_email
#                 # if you're using multiple entity managers
#                 # manager_name: customer
#     firewalls:
#         dev:
#             pattern: ^/(_(profiler|wdt)|css|images|js)/
#             security: false
#         main:
#             pattern:    ^/
#             http_basic: ~
#             provider: our_db_provider
#             anonymous: ~
#             form_login:
#                 login_path: login
#                 check_path: login

#             # activate different ways to authenticate

#             # http_basic: true
#             # https://symfony.com/doc/current/security.html#a-configuring-how-your-users-will-authenticate

#             # form_login: true
#             # https://symfony.com/doc/current/security/form_login_setup.html

#     # Easy way to control access for large sections of your site
#     # Note: Only the *first* access control that matches will be used
#     access_control:
#     - { path: ^/login, roles: IS_AUTHENTICATED_ANONYMOUSLY }
#     - { path: ^/, roles: ROLE_ADMIN }

    ", "Back up temp/Configuration sécurité", "/Users/marie-aude/Desktop/Sauvegarde TMK 311018/templates/Back up temp/Configuration sécurité");
    }
}
