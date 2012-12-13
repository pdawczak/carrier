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
            ->add('firstName')
            ->add('lastName')
            ->add('companyName')
            ->add('email')
            ->add('phone')
            ->add('address', new AddressType(), array('required' => true))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CRR\Bundle\PersonBundle\Entity\Person'
        ));
    }

    public function getName()
    {
        return 'crr_bundle_personbundle_persontype';
    }
}
