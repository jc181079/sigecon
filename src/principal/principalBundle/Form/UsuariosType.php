<?php

namespace principal\principalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UsuariosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('login',TextType::class,array('attr' => array('class' => 'form-control'),'label'  => 'Login:',))
        ->add('clave',PasswordType::class,array('attr' => array('class' => 'form-control')))
        ->add('idperfil',EntityType::class,array(
                // query choices from this entity
                'class' => 'principalBundle:Perfil',
                'placeholder'=>'Seleccione',
                // use the User.username property as the visible option string
                'choice_label' => 'getNombreper',
                // se coloca el label del objeto
                'label'=> 'Perfil',
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
            'data_class' => 'principal\principalBundle\Entity\Usuarios'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'principal_principalbundle_usuarios';
    }


}
