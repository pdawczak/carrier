<?php

namespace CRR\Bundle\DeliveryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use CRR\Bundle\DeliveryBundle\Form\DeliveryType;

/**
 * @Route("/deliveries")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="crr_delivery_index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/new", name="crr_delivery_new")
     * @Template()
     */
    public function newAction()
    {
        $form = $this->createForm(new DeliveryType());

        return array(
            'form'  => $form->createView(),
        );
    }
}
