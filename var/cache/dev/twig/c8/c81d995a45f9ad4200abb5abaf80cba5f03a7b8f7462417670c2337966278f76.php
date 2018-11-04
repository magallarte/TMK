<?php

/* Back up temp/Configuration sécurité controller */
class __TwigTemplate_456b52ef0d5ce7a15ea1212072134775e1ba1fe7929dd6baf625f93746cea2d5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Back up temp/Configuration sécurité controller"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Back up temp/Configuration sécurité controller"));

        // line 1
        echo "<?php

namespace App\\Controller;

use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils;


class SecurityController extends Controller
{
    /**
     * @Route(\"/login\", name=\"login\")
     */
    public function login(Request \$request, AuthenticationUtils \$authenticationUtils)
    {
        // get the login error if there is one
        \$error = \$authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        \$lastUsername = \$authenticationUtils->getLastUsername();

        return \$this->render('security/login.html.twig', array(
            'last_username' => \$lastUsername,
            'error'         => \$error,
        ));
    }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Back up temp/Configuration sécurité controller";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php

namespace App\\Controller;

use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils;


class SecurityController extends Controller
{
    /**
     * @Route(\"/login\", name=\"login\")
     */
    public function login(Request \$request, AuthenticationUtils \$authenticationUtils)
    {
        // get the login error if there is one
        \$error = \$authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        \$lastUsername = \$authenticationUtils->getLastUsername();

        return \$this->render('security/login.html.twig', array(
            'last_username' => \$lastUsername,
            'error'         => \$error,
        ));
    }
}", "Back up temp/Configuration sécurité controller", "/Users/marie-aude/Desktop/Sauvegarde TMK 311018/templates/Back up temp/Configuration sécurité controller");
    }
}
