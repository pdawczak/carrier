<?php

namespace CRR\Bundle\PackageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Package
 *
 * @ORM\Table(name="packages")
 * @ORM\Entity
 */
class Package
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
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $count;

    /**
     * @var PackageType $packageType
     *
     * @ORM\ManyToOne(targetEntity="PackageType", cascade={"persist"})
     * @ORM\JoinColumn(name="package_type_id", referencedColumnName="id")
     */
    private $packageType;

    public function __construct(PackageType $type = null)
    {
        $this->packageType = $type;
    }

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
     * Set count
     *
     * @param integer $count
     * @return Package
     */
    public function setCount($count)
    {
        $this->count = $count;
    
        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set packageType
     *
     * @param \CRR\Bundle\PackageBundle\Entity\PackageType $packageType
     * @return Package
     */
    public function setPackageType(PackageType $packageType = null)
    {
        $this->packageType = $packageType;
    
        return $this;
    }

    /**
     * Get packageType
     *
     * @return \CRR\Bundle\PackageBundle\Entity\PackageType 
     */
    public function getPackageType()
    {
        return $this->packageType;
    }
}
