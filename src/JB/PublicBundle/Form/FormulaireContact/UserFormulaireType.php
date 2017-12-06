<?php

namespace JB\PublicBundle\Form\FormulaireContact;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use JB\PublicBundle\Form\UserType;
use JB\PublicBundle\Form\FormulaireContact\CoordonneeFormulaireType;

class UserFormulaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('coordonnee', CoordonneeFormulaireType::class);
    }
    
    public function getParent()
    {
    return UserType::class;
    }


}
