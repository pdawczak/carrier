<?php

namespace CRR\Bundle\DeliveryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
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
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $form = $this->createForm(new DeliveryType());

        return array(
            'form'  => $form->createView(),
        );
    }

    /**
     * @Route("/new", name="crr_delivery_create")
     * @Method("POST")
     * @Template("CRRDeliveryBundle:Default:new.html.twig")
     */
    public function createAction()
    {
        $form = $this->createForm(new DeliveryType());

        if ($this->get('utils.form.persist')->process($form)) {
            $this->get('session')->getFlashBag()->add('success', 'Dziękujemy za złożenie zamówienia!');
            return $this->redirect(
                $this->generateUrl('homepage')
            );
        }

        return array(
            'form'  => $form->createView(),
        );
    }
}
