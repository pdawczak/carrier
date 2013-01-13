<?php

namespace CRR\Bundle\DeliveryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use CRR\Bundle\PersonBundle\Form\PersonType;
use CRR\Bundle\PackageBundle\Form\PackageType;

class DeliveryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sender'  , new PersonType(), array('required' => true))
            ->add('receiver', new PersonType(), array('required' => true))
            ->add('packages', 'collection'    , array('type' => new PackageType()))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'         => 'CRR\Bundle\DeliveryBundle\Entity\Delivery',
            'cascade_validation' => true,
        ));
    }

    public function getName()
    {
        return 'crr_bundle_deliverybundle_deliverytype';
    }
}
