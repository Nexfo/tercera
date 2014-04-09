<?php

namespace Bonsai\GestorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bonsai\GestorBundle\Entity\Bonsai;
use Bonsai\GestorBundle\Form\Type\BonsaiType;

class AgregarController extends Controller
{
    public function agregarAction(Request $request)
    {
		$bonsai = new Bonsai();
		$form = $this->createForm(new BonsaiType(), $bonsai);
		
		$form->handleRequest($request);

		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			
			$user = $this->get('security.context')->getToken()->getUser();
			$bonsai->setUsuario($user);
			
			$em->persist($bonsai);
			$em->flush();

			return $this->redirect($this->generateUrl('bonsai_gestor_homepage'));
		}
		
        return $this->render('BonsaiGestorBundle:Agregar:agregar.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
