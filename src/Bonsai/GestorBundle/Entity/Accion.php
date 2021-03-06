<?php

namespace Bonsai\GestorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Accion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="accion", type="string", length=500)
     */
    private $accion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;
	
	
	/**
     * @ORM\ManyToOne(targetEntity="Bonsai", inversedBy="acciones")
     * @ORM\JoinColumn(name="bonsai_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $bonsai;


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
     * Set accion
     *
     * @param string $accion
     * @return Accion
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;

        return $this;
    }

    /**
     * Get accion
     *
     * @return string 
     */
    public function getAccion()
    {
        return $this->accion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Accion
     */
    public function setFecha(\DateTime $fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set bonsai
     *
     * @param \Bonsai\GestorBundle\Entity\Bonsai $bonsai
     * @return Accion
     */
    public function setBonsai(\Bonsai\GestorBundle\Entity\Bonsai $bonsai = null)
    {
        $this->bonsai = $bonsai;

        return $this;
    }

    /**
     * Get bonsai
     *
     * @return \Bonsai\GestorBundle\Entity\Bonsai 
     */
    public function getBonsai()
    {
        return $this->bonsai;
    }
}
