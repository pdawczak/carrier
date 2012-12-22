<?php

namespace CRR\Bundle\DeliveryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use CRR\Bundle\PersonBundle\Form\PersonType;
use CRR\Bundle\PackageBundle\Form\PackageType;

class DeliveryFlowType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        switch ($options['flowStep']) {
            case 1:
                $builder->add('sender'  , new PersonType(), array('required' => true));
                break;
            case 2:
                $builder->add('receiver', new PersonType(), array('required' => true));
                break;
            case 3:
                $builder->add('packages', 'collection'    , array('type' => new PackageType()));
                break;
        }
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'flowStep'           => 1,
            'data_class'         => 'CRR\Bundle\DeliveryBundle\Entity\Delivery',
            'cascade_validation' => true,
        ));
    }

    public function getName()
    {
        return 'crr_bundle_deliverybundle_deliverytype';
    }
}
