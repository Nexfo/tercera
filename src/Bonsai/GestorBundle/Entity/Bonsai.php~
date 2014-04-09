<?php

namespace Bonsai\GestorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bonsai
 *
 * @ORM\Table(name="bonsais")
 * @ORM\Entity
 */
class Bonsai
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
	
	/**
	 * @var string
	 * 
	 * @ORM\Column(type="string", length=100)
	 */
	private $nombre;
	 
	/**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="bonsais")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	 */
	private $usuario;
	
	/**
	 * @ORM\Column(name="anio_adquisicion", type="integer", length=4)
	*/
	private $anio_adquisicion;
	
	/**
	 * @ORM\Column(name="edad_adquisicion", type="integer", length=4)
	*/
	private $edad_adquisicion;
	
	/**
     * @ORM\ManyToOne(targetEntity="Estilo")
     * @ORM\JoinColumn(name="estilo_id", referencedColumnName="id")
    */
    private $estilo;

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Bonsai
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set usuario
     *
     * @param \Bonsai\GestorBundle\Entity\User $usuario
     * @return Bonsai
     */
    public function setUsuario(\Bonsai\GestorBundle\Entity\User $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Bonsai\GestorBundle\Entity\User 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set anio_adquisicion
     *
     * @param integer $anioAdquisicion
     * @return Bonsai
     */
    public function setAnioAdquisicion($anioAdquisicion)
    {
        $this->anio_adquisicion = $anioAdquisicion;

        return $this;
    }

    /**
     * Get anio_adquisicion
     *
     * @return integer 
     */
    public function getAnioAdquisicion()
    {
        return $this->anio_adquisicion;
    }

    /**
     * Set edad_adquisicion
     *
     * @param integer $edadAdquisicion
     * @return Bonsai
     */
    public function setEdadAdquisicion($edadAdquisicion)
    {
        $this->edad_adquisicion = $edadAdquisicion;

        return $this;
    }

    /**
     * Get edad_adquisicion
     *
     * @return integer 
     */
    public function getEdadAdquisicion()
    {
        return $this->edad_adquisicion;
    }

    /**
     * Set estilo
     *
     * @param \Bonsai\GestorBundle\Entity\Estilo $estilo
     * @return Bonsai
     */
    public function setEstilo(\Bonsai\GestorBundle\Entity\Estilo $estilo = null)
    {
        $this->estilo = $estilo;

        return $this;
    }

    /**
     * Get estilo
     *
     * @return \Bonsai\GestorBundle\Entity\Estilo 
     */
    public function getEstilo()
    {
        return $this->estilo;
    }
}
