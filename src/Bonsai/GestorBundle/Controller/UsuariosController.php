<?php

namespace Bonsai\GestorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsuariosController extends Controller
{
    public function registrarAction()
    {
        return $this->render('BonsaiGestorBundle:Gestor:registrar.html.twig');
    }
}