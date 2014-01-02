<?php

namespace Knax\TestingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mark
 *
 * @ORM\Entity(repositoryClass="Knax\TestingBundle\Entity\Repository\MarkRepository")
 * @ORM\Table(name="mark", indexes={@ORM\Index(name="IDX_6674F271CB944F1A", columns={"student_id"}), @ORM\Index(name="IDX_6674F27141807E1D", columns={"teacher_id"})})
 */
class Mark
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
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=false)
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="given_date", type="datetime", nullable=false)
     */
    private $givenDate;

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
     * @var \Student
     *
     * @ORM\ManyToOne(targetEntity="Student")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="student_id", referencedColumnName="userdata_id")
     * })
     */
    private $student;



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
     * Set score
     *
     * @param integer $score
     * @return Mark
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Mark
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set givenDate
     *
     * @param \DateTime $givenDate
     * @return Mark
     */
    public function setGivenDate($givenDate)
    {
        $this->givenDate = $givenDate;

        return $this;
    }

    /**
     * Get givenDate
     *
     * @return \DateTime 
     */
    public function getGivenDate()
    {
        return $this->givenDate;
    }

    /**
     * Set teacher
     *
     * @param \Knax\TestingBundle\Entity\Teacher $teacher
     * @return Mark
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
     * Set student
     *
     * @param \Knax\TestingBundle\Entity\Student $student
     * @return Mark
     */
    public function setStudent(\Knax\TestingBundle\Entity\Student $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \Knax\TestingBundle\Entity\Student 
     */
    public function getStudent()
    {
        return $this->student;
    }
}
