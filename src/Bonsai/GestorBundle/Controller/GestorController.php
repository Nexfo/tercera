<?php

namespace Bonsai\GestorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bonsai\GestorBundle\Entity\Accion;
use Bonsai\GestorBundle\Form\Type\AccionType;

use Bonsai\GestorBundle\Entity\Imagen;
use Bonsai\GestorBundle\Form\Type\ImagenType;

use Symfony\Component\HttpFoundation\Response;

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
	
	public function borrarAction($id) {
		$user = $this->get('security.context')->getToken()->getUser();
		$bonsais = $user->getBonsais();
		
		foreach ($bonsais as $bonsai) {
			if ($bonsai->getId() == $id) {
				$em = $this->getDoctrine()->getManager();
				
				/*foreach ($bonsai->getImagenes() as $imagen) {
					$em->remove($imagen);
				}
				
				foreach ($bonsai->getAcciones() as $accion) {
					$em->remove($accion);
				}*/
				
				$em->remove($bonsai);
				$em->flush();
				
				return $this->redirect($this->generateUrl('bonsai_gestor_homepage'));
			}
		}
		
		return new Response('<html><body>no se ha borrao ná</body></html>');
	}
	
	/*public function imagenAction(Request $request)
	{
		$imagen = new Imagen();
		$form = $this->createForm(new ImagenType(), $imagen);
		
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			
			//$imagen->upload();
			
			$em->persist($imagen);
			$em->flush();

			return $this->redirect($this->generateUrl('bonsai_gestor_imagen'));
		}
		
		return $this->render('BonsaiGestorBundle:Imagen:imagen.html.twig',
							array('form' => $form->createView())
		);
	}*/
}
