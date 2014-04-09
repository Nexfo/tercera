<?php
namespace Bonsai\GestorBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

//use Bonsai\GestorBundle\Form\Type\ImagenType;
 
class BonsaiType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder
            ->add('nombre')
			->add('anio_adquisicion', 'text', array('label' => 'Año Adquisición'))
			->add('edad_adquisicion', 'text', array('label' => 'Edad Adquisición'))
			->add('estilo', 'entity', array('class' => 'BonsaiGestorBundle:Estilo',
							'property' => 'nombre',))
			->add('imagen', new ImagenType())
            ->add('guardar', 'submit');
    }
 
    public function getName()
    {
        return 'bonsai';
    }
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Bonsai\GestorBundle\Entity\Bonsai',
			'cascade_validation' => true,
		));
	}
}