<?php

namespace Knax\TestingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeMapping
 *
 * @ORM\Entity(repositoryClass="Knax\TestingBundle\Entity\Repository\TimeMappingRepository")
 * @ORM\Table(name="time_mapping")
 */
class TimeMapping
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
     * @ORM\Column(name="time", type="string", length=11, nullable=false)
     */
    private $time;



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
     * Set time
     *
     * @param string $time
     * @return TimeMapping
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string 
     */
    public function getTime()
    {
        return $this->time;
    }
}
