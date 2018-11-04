<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/article' => array(array('_route' => 'article_index', '_controller' => 'App\\Controller\\ArticleController::index'), null, array('GET' => 0), null),
                    '/article/selection' => array(array('_route' => 'article_selection', '_controller' => 'App\\Controller\\ArticleController::selection'), null, array('GET' => 0, 'POST' => 1), null),
                    '/article/new' => array(array('_route' => 'article_new', '_controller' => 'App\\Controller\\ArticleController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/delivery/bag/' => array(array('_route' => 'delivery_bag_index', '_controller' => 'App\\Controller\\DeliveryBagController::index'), null, array('GET' => 0), null),
                    '/delivery/bag/new' => array(array('_route' => 'delivery_bag_new', '_controller' => 'App\\Controller\\DeliveryBagController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/delivery/bag/showCart' => array(array('_route' => 'delivery_bag_showCart', '_controller' => 'App\\Controller\\DeliveryBagController::showCart'), null, array('GET' => 0), null),
                    '/delivery/bag/unsetCart' => array(array('_route' => 'delivery_bag_unsetCart', '_controller' => 'App\\Controller\\DeliveryBagController::unsetCart'), null, null, null),
                    '/delivery/bag/validateCart' => array(array('_route' => 'delivery_bag_validateCart', '_controller' => 'App\\Controller\\DeliveryBagController::validateCart'), null, array('GET' => 0, 'POST' => 1), null),
                    '/delivery/' => array(array('_route' => 'delivery_index', '_controller' => 'App\\Controller\\DeliveryController::index'), null, array('GET' => 0), null),
                    '/delivery/new' => array(array('_route' => 'delivery_new', '_controller' => 'App\\Controller\\DeliveryController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/donation/bag/' => array(array('_route' => 'donation_bag_index', '_controller' => 'App\\Controller\\DonationBagController::index'), null, array('GET' => 0), null),
                    '/donation/bag/new' => array(array('_route' => 'donation_bag_new', '_controller' => 'App\\Controller\\DonationBagController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/fabric/' => array(array('_route' => 'fabric_index', '_controller' => 'App\\Controller\\FabricController::index'), null, array('GET' => 0), null),
                    '/fabric/new' => array(array('_route' => 'fabric_new', '_controller' => 'App\\Controller\\FabricController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/' => array(array('_route' => 'home_show', '_controller' => 'App\\Controller\\HomeController::show'), null, null, null),
                    '/concept' => array(array('_route' => 'concept_show', '_controller' => 'App\\Controller\\HomeController::concept'), null, null, null),
                    '/kid/create' => array(array('_route' => 'kid_create', '_controller' => 'App\\Controller\\KidController::create'), null, null, null),
                    '/member' => array(array('_route' => 'member_index', '_controller' => 'App\\Controller\\MemberController::index'), null, array('GET' => 0), null),
                    '/member/admin' => array(array('_route' => 'member_admin', '_controller' => 'App\\Controller\\MemberController::admin'), null, null, null),
                    '/member/new' => array(array('_route' => 'member_new', '_controller' => 'App\\Controller\\MemberController::new'), null, null, null),
                    '/member/setSession' => array(array('_route' => 'member_setSession', '_controller' => 'App\\Controller\\MemberController::setSession'), null, null, null),
                    '/member/unsetSession' => array(array('_route' => 'member_unsetSession', '_controller' => 'App\\Controller\\MemberController::unsetSession'), null, null, null),
                    '/news/' => array(array('_route' => 'news_index', '_controller' => 'App\\Controller\\NewsController::index'), null, array('GET' => 0), null),
                    '/news/new' => array(array('_route' => 'news_new', '_controller' => 'App\\Controller\\NewsController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/school/' => array(array('_route' => 'school_index', '_controller' => 'App\\Controller\\SchoolController::index'), null, array('GET' => 0), null),
                    '/school/new' => array(array('_route' => 'school_new', '_controller' => 'App\\Controller\\SchoolController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/school/stop/' => array(array('_route' => 'school_stop_index', '_controller' => 'App\\Controller\\SchoolStopController::index'), null, array('GET' => 0), null),
                    '/school/stop/new' => array(array('_route' => 'school_stop_new', '_controller' => 'App\\Controller\\SchoolStopController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/registration' => array(array('_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'), null, null, null),
                    '/login' => array(array('_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null),
                    '/workshop/' => array(array('_route' => 'workshop_index', '_controller' => 'App\\Controller\\WorkshopController::index'), null, array('GET' => 0), null),
                    '/workshop/new' => array(array('_route' => 'workshop_new', '_controller' => 'App\\Controller\\WorkshopController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/workshop/create' => array(array('_route' => 'workshop_create', '_controller' => 'App\\Controller\\WorkshopController::create'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/article/(?'
                        .'|([^/]++)(?'
                            .'|(*:30)'
                            .'|/edit(*:42)'
                        .')'
                        .'|(\\d+)(*:55)'
                    .')'
                    .'|/d(?'
                        .'|elivery/(?'
                            .'|bag/(?'
                                .'|(\\d+)(*:91)'
                                .'|(\\d+)/edit(*:108)'
                                .'|(\\d+)(*:121)'
                                .'|(\\d+)/addToCart(*:144)'
                                .'|(\\d+)/removeFromCart(*:172)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:192)'
                                .'|/edit(*:205)'
                                .'|(*:213)'
                            .')'
                        .')'
                        .'|onation/bag/([^/]++)(?'
                            .'|(*:246)'
                            .'|/edit(*:259)'
                            .'|(*:267)'
                        .')'
                    .')'
                    .'|/fabric/([^/]++)(?'
                        .'|(*:296)'
                        .'|/edit(*:309)'
                        .'|(*:317)'
                    .')'
                    .'|/member/(?'
                        .'|([^/]++)(?'
                            .'|(*:348)'
                            .'|/edit(*:361)'
                        .')'
                        .'|delete/([^/]++)(*:385)'
                    .')'
                    .'|/news/([^/]++)(?'
                        .'|(*:411)'
                        .'|/edit(*:424)'
                        .'|(*:432)'
                    .')'
                    .'|/school/(?'
                        .'|([^/]++)(?'
                            .'|(*:463)'
                            .'|/edit(*:476)'
                            .'|(*:484)'
                        .')'
                        .'|stop/([^/]++)(?'
                            .'|(*:509)'
                            .'|/edit(*:522)'
                            .'|(*:530)'
                        .')'
                    .')'
                    .'|/workshop/(?'
                        .'|book/([^/]++)(*:566)'
                        .'|pay/([^/]++)(*:586)'
                        .'|([^/]++)(?'
                            .'|(*:605)'
                            .'|/edit(*:618)'
                            .'|(*:626)'
                        .')'
                    .')'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:664)'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            30 => array(array('_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'), array('id'), array('GET' => 0), null),
                            42 => array(array('_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            55 => array(array('_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'), array('id'), array('DELETE' => 0), null),
                            91 => array(array('_route' => 'delivery_bag_show', '_controller' => 'App\\Controller\\DeliveryBagController::show'), array('id'), array('GET' => 0), null),
                            108 => array(array('_route' => 'delivery_bag_edit', '_controller' => 'App\\Controller\\DeliveryBagController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            121 => array(array('_route' => 'delivery_bag_delete', '_controller' => 'App\\Controller\\DeliveryBagController::delete'), array('id'), array('DELETE' => 0), null),
                            144 => array(array('_route' => 'delivery_bag_addToCart', '_controller' => 'App\\Controller\\DeliveryBagController::addToCart'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            172 => array(array('_route' => 'article_removeFromCart', '_controller' => 'App\\Controller\\DeliveryBagController::removeFromCart'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            192 => array(array('_route' => 'delivery_show', '_controller' => 'App\\Controller\\DeliveryController::show'), array('id'), array('GET' => 0), null),
                            205 => array(array('_route' => 'delivery_edit', '_controller' => 'App\\Controller\\DeliveryController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            213 => array(array('_route' => 'delivery_delete', '_controller' => 'App\\Controller\\DeliveryController::delete'), array('id'), array('DELETE' => 0), null),
                            246 => array(array('_route' => 'donation_bag_show', '_controller' => 'App\\Controller\\DonationBagController::show'), array('id'), array('GET' => 0), null),
                            259 => array(array('_route' => 'donation_bag_edit', '_controller' => 'App\\Controller\\DonationBagController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            267 => array(array('_route' => 'donation_bag_delete', '_controller' => 'App\\Controller\\DonationBagController::delete'), array('id'), array('DELETE' => 0), null),
                            296 => array(array('_route' => 'fabric_show', '_controller' => 'App\\Controller\\FabricController::show'), array('id'), array('GET' => 0), null),
                            309 => array(array('_route' => 'fabric_edit', '_controller' => 'App\\Controller\\FabricController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            317 => array(array('_route' => 'fabric_delete', '_controller' => 'App\\Controller\\FabricController::delete'), array('id'), array('DELETE' => 0), null),
                            348 => array(array('_route' => 'member_show', '_controller' => 'App\\Controller\\MemberController::show'), array('id'), array('GET' => 0), null),
                            361 => array(array('_route' => 'member_edit', '_controller' => 'App\\Controller\\MemberController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            385 => array(array('_route' => 'member_delete', '_controller' => 'App\\Controller\\MemberController::delete'), array('id'), null, null),
                            411 => array(array('_route' => 'news_show', '_controller' => 'App\\Controller\\NewsController::show'), array('id'), array('GET' => 0), null),
                            424 => array(array('_route' => 'news_edit', '_controller' => 'App\\Controller\\NewsController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            432 => array(array('_route' => 'news_delete', '_controller' => 'App\\Controller\\NewsController::delete'), array('id'), array('DELETE' => 0), null),
                            463 => array(array('_route' => 'school_show', '_controller' => 'App\\Controller\\SchoolController::show'), array('id'), array('GET' => 0), null),
                            476 => array(array('_route' => 'school_edit', '_controller' => 'App\\Controller\\SchoolController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            484 => array(array('_route' => 'school_delete', '_controller' => 'App\\Controller\\SchoolController::delete'), array('id'), array('DELETE' => 0), null),
                            509 => array(array('_route' => 'school_stop_show', '_controller' => 'App\\Controller\\SchoolStopController::show'), array('id'), array('GET' => 0), null),
                            522 => array(array('_route' => 'school_stop_edit', '_controller' => 'App\\Controller\\SchoolStopController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            530 => array(array('_route' => 'school_stop_delete', '_controller' => 'App\\Controller\\SchoolStopController::delete'), array('id'), array('DELETE' => 0), null),
                            566 => array(array('_route' => 'workshop_book', '_controller' => 'App\\Controller\\WorkshopController::book'), array('id'), array('GET' => 0), null),
                            586 => array(array('_route' => 'workshop_pay', '_controller' => 'App\\Controller\\WorkshopController::pay'), array('id'), array('GET' => 0), null),
                            605 => array(array('_route' => 'workshop_show', '_controller' => 'App\\Controller\\WorkshopController::show'), array('id'), array('GET' => 0), null),
                            618 => array(array('_route' => 'workshop_edit', '_controller' => 'App\\Controller\\WorkshopController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            626 => array(array('_route' => 'workshop_delete', '_controller' => 'App\\Controller\\WorkshopController::delete'), array('id'), array('DELETE' => 0), null),
                            664 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (664 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
