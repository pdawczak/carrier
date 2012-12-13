<?php

namespace CRR\Bundle\DeliveryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DeliveryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sender', null, array('required' => true))
            ->add('receiver', null, array('required' => true))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CRR\Bundle\DeliveryBundle\Entity\Delivery'
        ));
    }

    public function getName()
    {
        return 'crr_bundle_deliverybundle_deliverytype';
    }
}
