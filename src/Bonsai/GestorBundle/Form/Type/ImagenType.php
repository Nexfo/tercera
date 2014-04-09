<?php
namespace Bonsai\GestorBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
 
class ImagenType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder
			->add('imagen', null, array('label' => false));
    }
 
    public function getName()
    {
        return 'imagen';
    }
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Bonsai\GestorBundle\Entity\Imagen',
		));
	}
}