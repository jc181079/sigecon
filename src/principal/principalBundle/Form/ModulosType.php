<?php

namespace principal\principalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ModulosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nommodulo',TextType::class,array('attr' => array('class' => 'form-control'),'label'  => 'Nombre del modulo:',))
        ->add('observacionmod',TextareaType::class,array('attr' => array('class' => 'form-control'),'label'  => 'Observacion del modulo:',))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'principal\principalBundle\Entity\Modulos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'principal_principalbundle_modulos';
    }


}
