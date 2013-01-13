<?php

namespace CRR\Bundle\DeliveryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use CRR\Bundle\DeliveryBundle\Entity\Delivery;

/**
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * @Route("/", name="crr_delivery_admin_index")
     * @Template
     */
    public function indexAction()
    {
        return array(
            'deliveries'    => $this->get('crr_delivery.delivery.repository')->findAll(),
        );
    }

    /**
     * @Route("/delivery/{deliveryId}", requirements={"deliveryId" = "\d+"}, name="crr_delivery_admin_show")
     * @Template
     * @ParamConverter("delivery", class="CRRDeliveryBundle:Delivery", options={"id" = "deliveryId"})
     */
    public function showAction(Delivery $delivery)
    {

    }

}
