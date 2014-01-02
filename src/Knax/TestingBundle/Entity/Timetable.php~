<?php

namespace Knax\TestingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timetable
 *
 * @ORM\Entity(repositoryClass="Knax\TestingBundle\Entity\Repository\TimetableRepository")
 * @ORM\Table(name="timetable", indexes={@ORM\Index(name="IDX_6B1F67041807E1D", columns={"teacher_id"}), @ORM\Index(name="IDX_6B1F67072215B21", columns={"time_mapping_id"}), @ORM\Index(name="classroom_id", columns={"classroom_id"})})
 */
class Timetable
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
     * @ORM\Column(name="day", type="string", length=10, nullable=false)
     */
    private $day;

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
     * @var \Teacher
     *
     * @ORM\ManyToOne(targetEntity="Teacher")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="teacher_id", referencedColumnName="userdata_id")
     * })
     */
    private $teacher;

    /**
     * @var \TimeMapping
     *
     * @ORM\ManyToOne(targetEntity="TimeMapping")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="time_mapping_id", referencedColumnName="id")
     * })
     */
    private $timeMapping;



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
     * Set day
     *
     * @param string $day
     * @return Timetable
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string 
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set classroom
     *
     * @param \Knax\TestingBundle\Entity\Classroom $classroom
     * @return Timetable
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

    /**
     * Set teacher
     *
     * @param \Knax\TestingBundle\Entity\Teacher $teacher
     * @return Timetable
     */
    public function setTeacher(\Knax\TestingBundle\Entity\Teacher $teacher = null)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return \Knax\TestingBundle\Entity\Teacher 
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * Set timeMapping
     *
     * @param \Knax\TestingBundle\Entity\TimeMapping $timeMapping
     * @return Timetable
     */
    public function setTimeMapping(\Knax\TestingBundle\Entity\TimeMapping $timeMapping = null)
    {
        $this->timeMapping = $timeMapping;

        return $this;
    }

    /**
     * Get timeMapping
     *
     * @return \Knax\TestingBundle\Entity\TimeMapping 
     */
    public function getTimeMapping()
    {
        return $this->timeMapping;
    }
}
