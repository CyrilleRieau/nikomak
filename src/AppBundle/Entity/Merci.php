<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Merci
 *
 * @ORM\Table(name="merci")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MerciRepository")
 */
class Merci
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="emitter", type="string", length=255)
     */
    private $emitter;

    /**
     * @var string
     *
     * @ORM\Column(name="receiver", type="string", length=255)
     */
    private $receiver;

    /**
     * @var string
     *
     * @ORM\Column(name="why", type="string", length=255)
     */
    private $why;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Merci
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
     * Set emitter
     *
     * @param string $emitter
     *
     * @return Merci
     */
    public function setEmitter($emitter)
    {
        $this->emitter = $emitter;

        return $this;
    }

    /**
     * Get emitter
     *
     * @return string
     */
    public function getEmitter()
    {
        return $this->emitter;
    }

    /**
     * Set receiver
     *
     * @param string $receiver
     *
     * @return Merci
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return string
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set why
     *
     * @param string $why
     *
     * @return Merci
     */
    public function setWhy($why)
    {
        $this->why = $why;

        return $this;
    }

    /**
     * Get why
     *
     * @return string
     */
    public function getWhy()
    {
        return $this->why;
    }

     /**
         * @ORM\ManyToOne(targetEntity="User", inversedBy="thanks")
         * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
         */
        private $username;
        
            /**
             * Set username
             *
             * @param \AppBundle\Entity\User $username
             *
             * @return Merci
             */
            public function setUsername(\AppBundle\Entity\User $username = null)
            {
                $this->username = $username;
        
                return $this;
            }
        
            /**
             * Get username
             *
             * @return \AppBundle\Entity\User
             */
            public function getUsername()
            {
                return $this->username;
            }
}

