<?php

namespace JB\PublicBundle\Form\FormulaireContact;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use JB\PublicBundle\Form\CoordonneeType;


class CoordonneeFormulaireType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('telephone');
    }
    
    public function getParent()
    {
    return CoordonneeType::class;
    }
    
}
