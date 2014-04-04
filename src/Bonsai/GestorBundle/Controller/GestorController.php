<?php

namespace Bonsai\GestorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GestorController extends Controller
{
    public function indexAction()
    {
        return $this->render('BonsaiGestorBundle:Gestor:index.html.twig');
    }
}
