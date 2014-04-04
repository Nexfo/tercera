<?php

namespace Bonsai\GestorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 */
class Usuario
{
    /**
     * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="text", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="text", length=50)
     */
    private $pass;


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
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set pass
     *
     * @param string $pass
     * @return Usuario
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string 
     */
    public function getPass()
    {
        return $this->pass;
    }
}
