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
			
			if ($bonsai->getImagen()->getRuta() != "") {
				$imagen = $bonsai->getImagen();
				$imagen->setBonsai($bonsai);
				$imagen->setPrincipal(1);
				$em->persist($imagen);
			}
			
			$em->flush();

			return $this->redirect($this->generateUrl('bonsai_gestor_homepage'));
		}
		
        return $this->render('BonsaiGestorBundle:Agregar:agregar.html.twig', array(
            'form' => $form->createView(),
        ));
    }
	
	public function editarAction(Request $request, $id)
    {
		$user = $this->get('security.context')->getToken()->getUser();
		$bonsais = $user->getBonsais();
		
		$bonsaiEditar = null;
		
		foreach ($bonsais as $bonsai) {
			if ($bonsai->getId() == $id) {
				$bonsaiEditar = $bonsai;
			}
		}
	
		$form = $this->createForm(new BonsaiType(), $bonsai);
		
		$form->handleRequest($request);

		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			
			$user = $this->get('security.context')->getToken()->getUser();
			$bonsai->setUsuario($user);
			
			$em->persist($bonsai);
			
			if ($bonsai->getImagen()->getRuta() != "") {
				$imagen = $bonsai->getImagen();
				$imagen->setBonsai($bonsai);
				
				foreach ($bonsai->getImagenes() as $img) {
					$img->setPrincipal(0);
				}
				
				$imagen->setPrincipal(1);
				$em->persist($imagen);
			}
			
			$em->flush();

			return $this->redirect($this->generateUrl('bonsai_gestor_homepage'));
		}
		
        return $this->render('BonsaiGestorBundle:Agregar:agregar.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
