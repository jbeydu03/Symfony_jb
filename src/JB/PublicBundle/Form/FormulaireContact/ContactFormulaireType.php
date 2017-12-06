<?php

namespace JB\PublicBundle\Form\FormulaireContact;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use JB\PublicBundle\Form\FormulaireContact\UserFormulaireType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;




class ContactFormulaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', UserFormulaireType::class)
            ->add('message',TextareaType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JB\PublicBundle\Entity\Contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'jb_publicbundle_contact';
    }


}