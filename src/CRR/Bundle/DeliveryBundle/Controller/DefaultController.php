<?php

namespace CRR\Bundle\DeliveryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use CRR\Bundle\DeliveryBundle\Form\DeliveryType;
use CRR\Bundle\DeliveryBundle\Entity\Delivery;

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
        $delivery = $this->get('crr_delivery.delivery.repository')->buildDelivery();

        $form = $this->createForm(new DeliveryType(), $delivery);

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
        $delivery = $this->get('crr_delivery.delivery.repository')->buildDelivery();

        $form = $this->createForm(new DeliveryType(), $delivery);

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
