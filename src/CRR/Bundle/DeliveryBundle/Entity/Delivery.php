<?php

namespace CRR\Bundle\DeliveryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use CRR\Bundle\PersonBundle\Entity\Person;

/**
 * Delivery
 *
 * @ORM\Table(name="deliveries")
 * @ORM\Entity(repositoryClass="CRR\Bundle\DeliveryBundle\Entity\DeliveryRepository")
 */
class Delivery
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Person $sender
     *
     * @ORM\ManyToOne(targetEntity="CRR\Bundle\PersonBundle\Entity\Person", cascade={"persist"})
     */
    protected $sender;

    /**
     * @var Person $receiver
     *
     * @ORM\ManyToOne(targetEntity="CRR\Bundle\PersonBundle\Entity\Person", cascade={"persist"})
     */
    protected $receiver;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sender
     *
     * @param \CRR\Bundle\PersonBundle\Entity\Person $sender
     * @return Delivery
     */
    public function setSender(Person $sender = null)
    {
        $this->sender = $sender;
    
        return $this;
    }

    /**
     * Get sender
     *
     * @return \CRR\Bundle\PersonBundle\Entity\Person 
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set receiver
     *
     * @param \CRR\Bundle\PersonBundle\Entity\Person $receiver
     * @return Delivery
     */
    public function setReceiver(Person $receiver = null)
    {
        $this->receiver = $receiver;
    
        return $this;
    }

    /**
     * Get receiver
     *
     * @return \CRR\Bundle\PersonBundle\Entity\Person 
     */
    public function getReceiver()
    {
        return $this->receiver;
    }
}
