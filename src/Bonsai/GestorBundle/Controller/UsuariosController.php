<?php

namespace Bonsai\GestorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bonsai\GestorBundle\Entity\Usuario;
use Bonsai\GestorBundle\Form\Type\RegistroType;
use Symfony\Component\HttpFoundation\Request;

class UsuariosController extends Controller
{
    public function registrarAction(Request $request)
    {
		$usuario = new Usuario();
		$form = $this->createForm(new RegistroType(), $usuario);
		
		$form->handleRequest($request);
 
		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($usuario);
			$em->flush();
	 
			return $this->redirect($this->generateUrl('bonsai_gestor_homepage'));
		}
		
        return $this->render('BonsaiGestorBundle:Gestor:registrar.html.twig', array('form' => $form->createView(),));
    }
}