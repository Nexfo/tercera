<?php

namespace Bonsai\GestorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bonsai\GestorBundle\Entity\Accion;
use Bonsai\GestorBundle\Form\Type\AccionType;

class GestorController extends Controller
{
    public function indexAction(Request $request)
    {
		$user = $this->get('security.context')->getToken()->getUser();
		$bonsais = $user->getBonsais();
		
		$accion = new Accion();
		$form = $this->createForm(new AccionType(), $accion);
		
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			
			$accion->setFecha(new \DateTime("now"));
			
			$em->persist($accion);
			$em->flush();

			return $this->redirect($this->generateUrl('bonsai_gestor_homepage'));
		}
		
        return $this->render('BonsaiGestorBundle:Gestor:index.html.twig',
							array('bonsais' => $bonsais,
								  'form' => $form->createView()
								)
		);
    }
}
