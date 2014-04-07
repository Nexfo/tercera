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
        $context = $this->context;
        $request = $this->request;

        // bonsai_gestor_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'bonsai_gestor_homepage');
            }

            return array (  '_controller' => 'Bonsai\\GestorBundle\\Controller\\GestorController::indexAction',  '_route' => 'bonsai_gestor_homepage',);
        }

        // bonsai_gestor_registro
        if ($pathinfo === '/registrar') {
            return array (  '_controller' => 'Bonsai\\GestorBundle\\Controller\\UsuariosController::registrarAction',  '_route' => 'bonsai_gestor_registro',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}