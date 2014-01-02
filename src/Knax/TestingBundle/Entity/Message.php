<?php

namespace Knax\TestingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Entity(repositoryClass="Knax\TestingBundle\Entity\Repository\MessageRepository")
 * @ORM\Table(name="message", indexes={@ORM\Index(name="IDX_B6BD307FCD53EDB6", columns={"receiver_id"}), @ORM\Index(name="IDX_B6BD307FF624B39D", columns={"sender_id"}), @ORM\Index(name="sender_id", columns={"sender_id", "receiver_id"})})
 */
class Message
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
     * @ORM\Column(name="title", type="string", length=20, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var \Userdata
     *
     * @ORM\ManyToOne(targetEntity="Userdata")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sender_id", referencedColumnName="id")
     * })
     */
    private $sender;

    /**
     * @var \Userdata
     *
     * @ORM\ManyToOne(targetEntity="Userdata")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="receiver_id", referencedColumnName="id")
     * })
     */
    private $receiver;



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
     * Set title
     *
     * @param string $title
     * @return Message
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set sender
     *
     * @param \Knax\TestingBundle\Entity\Userdata $sender
     * @return Message
     */
    public function setSender(\Knax\TestingBundle\Entity\Userdata $sender = null)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return \Knax\TestingBundle\Entity\Userdata 
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set receiver
     *
     * @param \Knax\TestingBundle\Entity\Userdata $receiver
     * @return Message
     */
    public function setReceiver(\Knax\TestingBundle\Entity\Userdata $receiver = null)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return \Knax\TestingBundle\Entity\Userdata 
     */
    public function getReceiver()
    {
        return $this->receiver;
    }
}
