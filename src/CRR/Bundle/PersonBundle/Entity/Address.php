<?php

namespace CRR\Bundle\PersonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="addresses")
 * @ORM\Entity
 */
class Address
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
     * @var string $city
     *
     * @ORM\Column(type="string")
     */
    private $address;

    /**
     * @var string $city
     *
     * @ORM\Column(type="string", length=30)
     */
    private $city;

    /**
     * @var string $postCity
     *
     * @ORM\Column(name="post_code", type="string", length=10)
     */
    private $postCode;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", precision=16, scale=14, nullable=true)
     */
    private $lat;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", precision=16, scale=14, nullable=true)
     */
    private $lng;

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
     * Set address
     *
     * @param string $address
     * @return Address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set postCode
     *
     * @param string $postCode
     * @return Address
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    
        return $this;
    }

    /**
     * Get postCode
     *
     * @return string 
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Set lat
     *
     * @param float $lat
     * @return Address
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    
        return $this;
    }

    /**
     * Get lat
     *
     * @return float 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param float $lng
     * @return Address
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    
        return $this;
    }

    /**
     * Get lng
     *
     * @return float 
     */
    public function getLng()
    {
        return $this->lng;
    }
}