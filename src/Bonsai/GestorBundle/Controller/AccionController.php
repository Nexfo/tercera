<?php

namespace Bonsai\GestorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bonsai\GestorBundle\Entity\Accion;
use Bonsai\GestorBundle\Form\Type\AccionType;

class AccionController extends Controller
{
    public function editarAction(Request $request, $idBonsai, $idAccion)
    {
		$user = $this->get('security.context')->getToken()->getUser();
		$bonsais = $user->getBonsais();
		
		$accionEditar = null;
		$bonsaiEditado = null;
		
		foreach ($bonsais as $bonsai) {
			if ($bonsai->getId() == $idBonsai) {
				$bonsaiEditado = $bonsai;
				foreach ($bonsai->getAcciones() as $accion) {
					if ($accion->getId() == $idAccion) {
						$accionEditar = $accion;
					}
				}
			}
		}
		
		$form = $this->createForm(new AccionType(), $accionEditar);
		$form->remove('bonsai');
		
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($accionEditar);
			$em->flush();

			return $this->redirect(
				$this->generateUrl(
					'bonsai_gestor_ficha',
					array('id' => $idBonsai)
				)
			);
		}
		
        return $this->render(
			'BonsaiGestorBundle:Accion:accion.html.twig',
			array(
				'form' => $form->createView(),
				'bonsai' => $bonsaiEditado
			)
		);
    }
}