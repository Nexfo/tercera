<?php
namespace Hotel\HotelBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
 
class ReservaType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder
            ->add('fecha_llegada', 'date')
			->add('fecha_salida', 'date')
            ->add('guardar', 'submit');
    }
 
    public function getName()
    {
        return 'reserva';
    }
	
	/*public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Bonsai\GestorBundle\Entity\Bonsai',
			'cascade_validation' => true,
		));
	}*/
}