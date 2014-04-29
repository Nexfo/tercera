<?php

namespace Hotel\HotelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Hotel\HotelBundle\Form\Type\ReservaType;

class DefaultController extends Controller
{
    public function indexAction()
    {
		//$form = $this->createForm(new ReservaType(), array());
		
		$defaultData = array('message' => 'Type your message here');
		$form = $this->createFormBuilder($defaultData)
		->add('fecha_llegada', 'date', array(
			'years' => range(date('Y'), date('Y')+5),
			/*'empty_value' => array('year' => 'Año', 'month' => 'Mes', 'day' => 'Día'),*/
			'data'  => date_create()
		))
		->add('fecha_salida', 'date')
		->add('startDate','datePicker',array())
		->add('endDate','datePicker')
        ->add('guardar', 'submit')
		->getForm();
		
        return $this->render('HotelBundle:Default:index.html.twig', array('form' => $form->createView()));
    }
}
