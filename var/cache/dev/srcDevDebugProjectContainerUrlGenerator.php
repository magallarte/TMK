<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'article_index' => array(array(), array('_controller' => 'App\\Controller\\ArticleController::index'), array(), array(array('text', '/article')), array(), array()),
        'article_selection' => array(array(), array('_controller' => 'App\\Controller\\ArticleController::selection'), array(), array(array('text', '/article/selection')), array(), array()),
        'article_new' => array(array(), array('_controller' => 'App\\Controller\\ArticleController::new'), array(), array(array('text', '/article/new')), array(), array()),
        'article_show' => array(array('id'), array('_controller' => 'App\\Controller\\ArticleController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/article')), array(), array()),
        'article_edit' => array(array('id'), array('_controller' => 'App\\Controller\\ArticleController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/article')), array(), array()),
        'article_delete' => array(array('id'), array('_controller' => 'App\\Controller\\ArticleController::delete'), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/article')), array(), array()),
        'delivery_bag_index' => array(array(), array('_controller' => 'App\\Controller\\DeliveryBagController::index'), array(), array(array('text', '/delivery/bag/')), array(), array()),
        'delivery_bag_new' => array(array(), array('_controller' => 'App\\Controller\\DeliveryBagController::new'), array(), array(array('text', '/delivery/bag/new')), array(), array()),
        'delivery_bag_show' => array(array('id'), array('_controller' => 'App\\Controller\\DeliveryBagController::show'), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/delivery/bag')), array(), array()),
        'delivery_bag_edit' => array(array('id'), array('_controller' => 'App\\Controller\\DeliveryBagController::edit'), array('id' => '\\d+'), array(array('text', '/edit'), array('variable', '/', '\\d+', 'id'), array('text', '/delivery/bag')), array(), array()),
        'delivery_bag_delete' => array(array('id'), array('_controller' => 'App\\Controller\\DeliveryBagController::delete'), array('id' => '\\d+'), array(array('variable', '/', '\\d+', 'id'), array('text', '/delivery/bag')), array(), array()),
        'delivery_bag_showCart' => array(array(), array('_controller' => 'App\\Controller\\DeliveryBagController::showCart'), array(), array(array('text', '/delivery/bag/showCart')), array(), array()),
        'delivery_bag_addToCart' => array(array('id'), array('_controller' => 'App\\Controller\\DeliveryBagController::addToCart'), array('id' => '\\d+'), array(array('text', '/addToCart'), array('variable', '/', '\\d+', 'id'), array('text', '/delivery/bag')), array(), array()),
        'article_removeFromCart' => array(array('id'), array('_controller' => 'App\\Controller\\DeliveryBagController::removeFromCart'), array('id' => '\\d+'), array(array('text', '/removeFromCart'), array('variable', '/', '\\d+', 'id'), array('text', '/delivery/bag')), array(), array()),
        'delivery_bag_unsetCart' => array(array(), array('_controller' => 'App\\Controller\\DeliveryBagController::unsetCart'), array(), array(array('text', '/delivery/bag/unsetCart')), array(), array()),
        'delivery_bag_validateCart' => array(array(), array('_controller' => 'App\\Controller\\DeliveryBagController::validateCart'), array(), array(array('text', '/delivery/bag/validateCart')), array(), array()),
        'delivery_index' => array(array(), array('_controller' => 'App\\Controller\\DeliveryController::index'), array(), array(array('text', '/delivery/')), array(), array()),
        'delivery_new' => array(array(), array('_controller' => 'App\\Controller\\DeliveryController::new'), array(), array(array('text', '/delivery/new')), array(), array()),
        'delivery_show' => array(array('id'), array('_controller' => 'App\\Controller\\DeliveryController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/delivery')), array(), array()),
        'delivery_edit' => array(array('id'), array('_controller' => 'App\\Controller\\DeliveryController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/delivery')), array(), array()),
        'delivery_delete' => array(array('id'), array('_controller' => 'App\\Controller\\DeliveryController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/delivery')), array(), array()),
        'donation_bag_index' => array(array(), array('_controller' => 'App\\Controller\\DonationBagController::index'), array(), array(array('text', '/donation/bag/')), array(), array()),
        'donation_bag_new' => array(array(), array('_controller' => 'App\\Controller\\DonationBagController::new'), array(), array(array('text', '/donation/bag/new')), array(), array()),
        'donation_bag_show' => array(array('id'), array('_controller' => 'App\\Controller\\DonationBagController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/donation/bag')), array(), array()),
        'donation_bag_edit' => array(array('id'), array('_controller' => 'App\\Controller\\DonationBagController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/donation/bag')), array(), array()),
        'donation_bag_delete' => array(array('id'), array('_controller' => 'App\\Controller\\DonationBagController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/donation/bag')), array(), array()),
        'fabric_index' => array(array(), array('_controller' => 'App\\Controller\\FabricController::index'), array(), array(array('text', '/fabric/')), array(), array()),
        'fabric_new' => array(array(), array('_controller' => 'App\\Controller\\FabricController::new'), array(), array(array('text', '/fabric/new')), array(), array()),
        'fabric_show' => array(array('id'), array('_controller' => 'App\\Controller\\FabricController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/fabric')), array(), array()),
        'fabric_edit' => array(array('id'), array('_controller' => 'App\\Controller\\FabricController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/fabric')), array(), array()),
        'fabric_delete' => array(array('id'), array('_controller' => 'App\\Controller\\FabricController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/fabric')), array(), array()),
        'home_show' => array(array(), array('_controller' => 'App\\Controller\\HomeController::show'), array(), array(array('text', '/')), array(), array()),
        'concept_show' => array(array(), array('_controller' => 'App\\Controller\\HomeController::concept'), array(), array(array('text', '/concept')), array(), array()),
        'kid_create' => array(array(), array('_controller' => 'App\\Controller\\KidController::create'), array(), array(array('text', '/kid/create')), array(), array()),
        'member_index' => array(array(), array('_controller' => 'App\\Controller\\MemberController::index'), array(), array(array('text', '/member')), array(), array()),
        'member_admin' => array(array(), array('_controller' => 'App\\Controller\\MemberController::admin'), array(), array(array('text', '/member/admin')), array(), array()),
        'member_new' => array(array(), array('_controller' => 'App\\Controller\\MemberController::new'), array(), array(array('text', '/member/new')), array(), array()),
        'member_setSession' => array(array(), array('_controller' => 'App\\Controller\\MemberController::setSession'), array(), array(array('text', '/member/setSession')), array(), array()),
        'member_unsetSession' => array(array(), array('_controller' => 'App\\Controller\\MemberController::unsetSession'), array(), array(array('text', '/member/unsetSession')), array(), array()),
        'member_show' => array(array('id'), array('_controller' => 'App\\Controller\\MemberController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/member')), array(), array()),
        'member_edit' => array(array('id'), array('_controller' => 'App\\Controller\\MemberController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/member')), array(), array()),
        'member_delete' => array(array('id'), array('_controller' => 'App\\Controller\\MemberController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/member/delete')), array(), array()),
        'news_index' => array(array(), array('_controller' => 'App\\Controller\\NewsController::index'), array(), array(array('text', '/news/')), array(), array()),
        'news_new' => array(array(), array('_controller' => 'App\\Controller\\NewsController::new'), array(), array(array('text', '/news/new')), array(), array()),
        'news_show' => array(array('id'), array('_controller' => 'App\\Controller\\NewsController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/news')), array(), array()),
        'news_edit' => array(array('id'), array('_controller' => 'App\\Controller\\NewsController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/news')), array(), array()),
        'news_delete' => array(array('id'), array('_controller' => 'App\\Controller\\NewsController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/news')), array(), array()),
        'school_index' => array(array(), array('_controller' => 'App\\Controller\\SchoolController::index'), array(), array(array('text', '/school/')), array(), array()),
        'school_new' => array(array(), array('_controller' => 'App\\Controller\\SchoolController::new'), array(), array(array('text', '/school/new')), array(), array()),
        'school_show' => array(array('id'), array('_controller' => 'App\\Controller\\SchoolController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/school')), array(), array()),
        'school_edit' => array(array('id'), array('_controller' => 'App\\Controller\\SchoolController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/school')), array(), array()),
        'school_delete' => array(array('id'), array('_controller' => 'App\\Controller\\SchoolController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/school')), array(), array()),
        'school_stop_index' => array(array(), array('_controller' => 'App\\Controller\\SchoolStopController::index'), array(), array(array('text', '/school/stop/')), array(), array()),
        'school_stop_new' => array(array(), array('_controller' => 'App\\Controller\\SchoolStopController::new'), array(), array(array('text', '/school/stop/new')), array(), array()),
        'school_stop_show' => array(array('id'), array('_controller' => 'App\\Controller\\SchoolStopController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/school/stop')), array(), array()),
        'school_stop_edit' => array(array('id'), array('_controller' => 'App\\Controller\\SchoolStopController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/school/stop')), array(), array()),
        'school_stop_delete' => array(array('id'), array('_controller' => 'App\\Controller\\SchoolStopController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/school/stop')), array(), array()),
        'security_registration' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::registration'), array(), array(array('text', '/registration')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'workshop_index' => array(array(), array('_controller' => 'App\\Controller\\WorkshopController::index'), array(), array(array('text', '/workshop/')), array(), array()),
        'workshop_new' => array(array(), array('_controller' => 'App\\Controller\\WorkshopController::new'), array(), array(array('text', '/workshop/new')), array(), array()),
        'workshop_create' => array(array(), array('_controller' => 'App\\Controller\\WorkshopController::create'), array(), array(array('text', '/workshop/create')), array(), array()),
        'workshop_book' => array(array('id'), array('_controller' => 'App\\Controller\\WorkshopController::book'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/workshop/book')), array(), array()),
        'workshop_pay' => array(array('id'), array('_controller' => 'App\\Controller\\WorkshopController::pay'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/workshop/pay')), array(), array()),
        'workshop_show' => array(array('id'), array('_controller' => 'App\\Controller\\WorkshopController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/workshop')), array(), array()),
        'workshop_edit' => array(array('id'), array('_controller' => 'App\\Controller\\WorkshopController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/workshop')), array(), array()),
        'workshop_delete' => array(array('id'), array('_controller' => 'App\\Controller\\WorkshopController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/workshop')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
