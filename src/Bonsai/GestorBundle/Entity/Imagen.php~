<?php

namespace Bonsai\GestorBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Imagen
 *
 * @ORM\Table(name="imagenes")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Imagen
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
     * @ORM\ManyToOne(targetEntity="Bonsai", inversedBy="imagenes")
     * @ORM\JoinColumn(name="bonsai_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $bonsai;
	
	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */
	private $principal;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $ruta;
	
	/**
     * @Assert\File(maxSize="6000000")
     */
	private $imagen;
	
	private $temp;
	
	public function getRutaAbsoluta()
    {
        return null === $this->ruta
            ? null
            : $this->getDirectorioRaizSubida().'/'.$this->ruta;
    }

    public function getRutaWeb()
    {
        return null === $this->ruta
            ? null
            : $this->getDirectorioRaizSubida().'/'.$this->ruta;
    }

    protected function getDirectorioRaizSubida()
    {
        // la ruta absoluta del directorio donde se deben
        // guardar los archivos cargados
        return __DIR__.'/../../../../web/'.$this->getDirectoriaSubida();
    }

    protected function getDirectoriaSubida()
    {
        // se deshace del __DIR__ para no meter la pata
        // al mostrar el documento/imagen cargada en la vista.
        return 'uploads/documents';
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
     * Set ruta
     *
     * @param string $ruta
     * @return Imagen
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string 
     */
    public function getRuta()
    {
        return $this->ruta;
    }
	
	    private $file;

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setImagen(UploadedFile $file = null)
    {
        $this->imagen = $file;
		// check if we have an old image path
        if (isset($this->ruta)) {
            // store the old name to delete after the update
            $this->temp = $this->ruta;
            $this->ruta = null;
        } else {
            $this->ruta = 'initial';
        }
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getImagen()
    {
        return $this->imagen;
    }
	
	/**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getImagen()) {
            // haz lo que quieras para generar un nombre único
            $filename = sha1(uniqid(mt_rand(), true));
            $this->ruta = $filename.'.'.$this->getImagen()->guessExtension();
        }
    }
	
	
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getImagen()) {
            return;
        }

        // si hay un error al mover el archivo, move() automáticamente
        // envía una excepción. This will properly prevent
        // the entity from being persisted to the database on error
        $this->getImagen()->move($this->getDirectorioRaizSubida(), $this->ruta);

        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->getDirectorioRaizSubida().'/'.$this->temp);
            // clear the temp image path
            $this->temp = null;
        }
        $this->imagen = null;
    }
	
	/**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getRutaAbsoluta()) {
            unlink($file);
        }
    }

    /**
     * Set bonsai
     *
     * @param \Bonsai\GestorBundle\Entity\Bonsai $bonsai
     * @return Imagen
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

    /**
     * Set principal
     *
     * @param boolean $principal
     * @return Imagen
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;

        return $this;
    }

    /**
     * Get principal
     *
     * @return boolean 
     */
    public function getPrincipal()
    {
        return $this->principal;
    }
}
