<?php

namespace Bonsai\GestorBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
    /**
     * @ORM\OneToMany(targetEntity="Bonsai", mappedBy="usuario")
     */
	protected $bonsais;

    public function __construct()
    {
        parent::__construct();
        $this->bonsais = new ArrayCollection();
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
     * Add bonsais
     *
     * @param \Bonsai\GestorBundle\Entity\Bonsai $bonsais
     * @return User
     */
    public function addBonsai(\Bonsai\GestorBundle\Entity\Bonsai $bonsais)
    {
        $this->bonsais[] = $bonsais;

        return $this;
    }

    /**
     * Remove bonsais
     *
     * @param \Bonsai\GestorBundle\Entity\Bonsai $bonsais
     */
    public function removeBonsai(\Bonsai\GestorBundle\Entity\Bonsai $bonsais)
    {
        $this->bonsais->removeElement($bonsais);
    }

    /**
     * Get bonsais
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBonsais()
    {
        return $this->bonsais;
    }
}
