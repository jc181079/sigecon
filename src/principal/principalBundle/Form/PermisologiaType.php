<?php

namespace principal\principalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class PermisologiaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('incluir',CheckboxType::class,array('attr' => array('class' => 'form-control'),'label'  => 'Incluir:',))
        ->add('consultar',CheckboxType::class,array('attr' => array('class' => 'form-control'),'label'  => 'Consultar:',))
        ->add('modificar',CheckboxType::class,array('attr' => array('class' => 'form-control'),'label'  => 'Modificar:',))
        ->add('eliminar',CheckboxType::class,array('attr' => array('class' => 'form-control'),'label'  => 'Eliminar:',))
        ->add('idmodulos',EntityType::class,array(
                // query choices from this entity
                'class' => 'principalBundle:Modulos',
                'placeholder'=>'Seleccione',
                // use the User.username property as the visible option string
                'choice_label' => 'getNommodulo',
                // se coloca el label del objeto
                'label'=> 'Modulo',
                'attr'=> ['class' =>'form-control', 'data-live-search'=>'true'], //manera correcta de colocar 
                ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'principal\principalBundle\Entity\Permisologia'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'principal_principalbundle_permisologia';
    }


}
