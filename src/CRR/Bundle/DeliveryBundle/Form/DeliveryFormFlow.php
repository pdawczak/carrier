<?php

namespace CRR\Bundle\DeliveryBundle\Form;

use Craue\FormFlowBundle\Form\FormFlow;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use CRR\Bundle\PersonBundle\Form\PersonType;
use CRR\Bundle\PackageBundle\Form\PackageType;

class DeliveryFormFlow extends FormFlow
{
    protected $maxSteps = 4;

    protected $allowDynamicStepNavigation = true;

    protected function loadStepDescriptions()
    {
        return array(
            'Nadawca',
            'Odbiorca',
            'Przesyłki',
            'Podsumowanie',
        );
    }
}
