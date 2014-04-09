<?php
namespace Bonsai\GestorBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
 
class AccionType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder
            ->add('accion', 'textarea', array('label' => 'Acción'))
			->add('bonsai', 'entity', array('class' => 'BonsaiGestorBundle:Bonsai',
							'property' => 'nombre',))
            ->add('enviar', 'submit');
    }
 
    public function getName()
    {
        return 'accion';
    }
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Bonsai\GestorBundle\Entity\Accion',
		));
	}
}