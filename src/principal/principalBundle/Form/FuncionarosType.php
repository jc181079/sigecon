<?php

namespace principal\principalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FuncionarosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombrefun',TextType::class,array('attr' => array('class' => 'form-control'),'label'  => 'Nombre del funcionario:',))
        ->add('apellidofun',TextType::class,array('attr' => array('class' => 'form-control'),'label'  => 'Apellido del funcionario:',))
        ->add('telefonofun',TextType::class,array('attr' => array('class' => 'form-control'),'label'  => 'Numero telefonico del funcionario:',))
        ->add('correofun',TextType::class,array('attr' => array('class' => 'form-control'),'label'  => 'Correo del funcionario:',));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'principal\principalBundle\Entity\Funcionaros'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'principal_principalbundle_funcionaros';
    }


}
