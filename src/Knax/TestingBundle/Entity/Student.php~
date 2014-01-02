<?php

namespace Knax\TestingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 *
 * @ORM\Entity(repositoryClass="Knax\TestingBundle\Entity\Repository\StudentRepository")
 * @ORM\Table(name="student", indexes={@ORM\Index(name="IDX_B723AF336278D5A8", columns={"classroom_id"})})
 */
class Student
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
     * @var \Classroom
     *
     * @ORM\ManyToOne(targetEntity="Classroom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="classroom_id", referencedColumnName="id")
     * })
     */
    private $classroom;



    /**
     * Set userdata
     *
     * @param \Knax\TestingBundle\Entity\Userdata $userdata
     * @return Student
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
     * Set classroom
     *
     * @param \Knax\TestingBundle\Entity\Classroom $classroom
     * @return Student
     */
    public function setClassroom(\Knax\TestingBundle\Entity\Classroom $classroom = null)
    {
        $this->classroom = $classroom;

        return $this;
    }

    /**
     * Get classroom
     *
     * @return \Knax\TestingBundle\Entity\Classroom 
     */
    public function getClassroom()
    {
        return $this->classroom;
    }
}
