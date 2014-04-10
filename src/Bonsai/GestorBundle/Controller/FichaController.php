<?php

namespace Bonsai\GestorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*use Symfony\Component\HttpFoundation\Request;
use Bonsai\GestorBundle\Entity\Accion;
use Bonsai\GestorBundle\Form\Type\AccionType;*/

class FichaController extends Controller
{
    public function mostrarAction($id)
    {
		/*$user = $this->get('security.context')->getToken()->getUser();
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
		}*/
		
		/*$repository = $this->getDoctrine()->getRepository('BonsaiGestorBundle:Accion');
		$acciones = $repository->findBy(
			array('bonsai'  => $id)
		);*/
		
		$user = $this->get('security.context')->getToken()->getUser();
		$bonsais = $user->getBonsais();
		
		foreach ($bonsais as $bonsai) {
			if ($bonsai->getId() == $id) {
				return $this->render('BonsaiGestorBundle:Ficha:ficha.html.twig', array('bonsai' => $bonsai));
			}
		}

		return $this->redirect($this->generateUrl('bonsai_gestor_homepage'));
		
        //return $this->render('BonsaiGestorBundle:Ficha:ficha.html.twig', array('acciones' => $acciones));
    }
}
