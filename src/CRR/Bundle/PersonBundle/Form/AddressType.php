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
            ->add('address' , null, array(
                'label'     => 'Adres',
                'attr'      => array(
                    'class' => 'input-xxlarge'
                )
            ))
            ->add('city'    , null, array(
                'label'     => 'Miasto',
                'attr'      => array(
//                    'class' => 'input-mini'
                )
            ))
            ->add('postCode', null, array(
                'label'     => 'Kod pocztowy',
                'attr'      => array(
                    'class' => 'input-mini'
                )
            ))
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
