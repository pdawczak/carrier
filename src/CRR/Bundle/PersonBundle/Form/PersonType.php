<?php

namespace CRR\Bundle\PersonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use CRR\Bundle\PersonBundle\Form\AddressType;

class PersonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName'   , null, array('label' => 'Imię'))
            ->add('lastName'    , null, array('label' => 'Nazwisko'))
            ->add('companyName' , null, array('label' => 'Nazwa firmy'))
            ->add('email'       , null, array('label' => 'Email'))
            ->add('phone'       , null, array('label' => 'Telefon'))
            ->add('address'     , new AddressType(), array('required' => true))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'         => 'CRR\Bundle\PersonBundle\Entity\Person',
            'cascade_validation' => true,
        ));
    }

    public function getName()
    {
        return 'crr_bundle_personbundle_persontype';
    }
}
