<?php
namespace Bonsai\GestorBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
 
class AccionType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder
            ->add('accion', 'textarea', array('label' => 'Acción', 'attr' => array('style' => 'height: 70px')))
			->add('bonsai', 'entity', array('class' => 'BonsaiGestorBundle:Bonsai',
							'property' => 'nombre',
							'query_builder' => function(EntityRepository $er) {
								return $er->createQueryBuilder('a')
								->orderBy('a.nombre', 'ASC');
							}))
            ->add('enviar', 'submit', array('attr' => array('style' => 'margin: 10px auto; display: block')));
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