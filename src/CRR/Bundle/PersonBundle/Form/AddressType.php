<?php

namespace CRR\Bundle\PersonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address' , null, array('label' => 'Adres'))
            ->add('city'    , null, array('label' => 'Miasto'))
            ->add('postCode', null, array('label' => 'Kod pocztowy'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CRR\Bundle\PersonBundle\Entity\Address'
        ));
    }

    public function getName()
    {
        return 'crr_bundle_personbundle_addresstype';
    }
}
