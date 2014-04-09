<?php

namespace Paginas\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('PaginasPrincipalBundle:Index:index.html.twig');
    }
}
