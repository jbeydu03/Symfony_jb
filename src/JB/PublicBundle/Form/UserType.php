<?php

namespace JB\PublicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilite',EntityType::class, array(
                'class'=> 'JBPublicBundle:Civilite',
                'choice_label' => 'genre',
                'multiple'     => false,
                'expanded'     => false,
                'label' => 'Civilité'
            ))
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class,array('label' => 'Prénom'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JB\PublicBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'jb_publicbundle_user';
    }


}
