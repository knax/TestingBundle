<?php

namespace Knax\TestingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teacher
 *
 * @ORM\Entity(repositoryClass="Knax\TestingBundle\Entity\Repository\TeacherRepository")
 * @ORM\Table(name="teacher", indexes={@ORM\Index(name="IDX_B0F6A6D5565186C9", columns={"studies_id"})})
 */
class Teacher
{
    /**
     * @var \Userdata
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Userdata")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userdata_id", referencedColumnName="id")
     * })
     */
    private $userdata;

    /**
     * @var \Studies
     *
     * @ORM\ManyToOne(targetEntity="Studies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="studies_id", referencedColumnName="id")
     * })
     */
    private $studies;



    /**
     * Set userdata
     *
     * @param \Knax\TestingBundle\Entity\Userdata $userdata
     * @return Teacher
     */
    public function setUserdata(\Knax\TestingBundle\Entity\Userdata $userdata)
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

    /**
     * Set studies
     *
     * @param \Knax\TestingBundle\Entity\Studies $studies
     * @return Teacher
     */
    public function setStudies(\Knax\TestingBundle\Entity\Studies $studies = null)
    {
        $this->studies = $studies;

        return $this;
    }

    /**
     * Get studies
     *
     * @return \Knax\TestingBundle\Entity\Studies 
     */
    public function getStudies()
    {
        return $this->studies;
    }
}
