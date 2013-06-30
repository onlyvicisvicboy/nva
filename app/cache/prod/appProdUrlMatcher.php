<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Nva\\FontBundle\\Controller\\DefaultController::welcomeAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/h')) {
            // nva_client_home
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'Nva\\FontBundle\\Controller\\DefaultController::homeAction',  '_route' => 'nva_client_home',);
            }

            // nva_font_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nva_font_homepage')), array (  '_controller' => 'Nva\\FontBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // nva_font_metro
        if (0 === strpos($pathinfo, '/metro') && preg_match('#^/metro/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nva_font_metro')), array (  '_controller' => 'Nva\\FontBundle\\Controller\\DefaultController::metroAction',));
        }

        // nva_font_demohomepage
        if (0 === strpos($pathinfo, '/demohello') && preg_match('#^/demohello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nva_font_demohomepage')), array (  '_controller' => 'Nva\\FontBundle\\Controller\\DemoController::indexDemoAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
