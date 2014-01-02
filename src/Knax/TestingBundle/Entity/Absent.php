<?php

namespace Knax\TestingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Absent
 *
 * @ORM\Entity(repositoryClass="Knax\TestingBundle\Entity\Repository\AbsentRepository")
 * @ORM\Table(name="absent", indexes={@ORM\Index(name="IDX_A18ACC4AB945D82", columns={"userdata_id"})})
 */
class Absent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \Userdata
     *
     * @ORM\ManyToOne(targetEntity="Userdata")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userdata_id", referencedColumnName="id")
     * })
     */
    private $userdata;



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
     * Set type
     *
     * @param string $type
     * @return Absent
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Absent
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set userdata
     *
     * @param \Knax\TestingBundle\Entity\Userdata $userdata
     * @return Absent
     */
    public function setUserdata(\Knax\TestingBundle\Entity\Userdata $userdata = null)
    {
        $this->userdata = $userdata;

        return $this;
    }

    /**
     * Get userdata
     *
     * @return \Knax\TestingBundle\Entity\Userdata 
     */
    public function getUserdata()
    {
        return $this->userdata;
    }
}
