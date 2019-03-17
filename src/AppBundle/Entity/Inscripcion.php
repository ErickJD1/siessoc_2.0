<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use SalexUserBundle\Entity\User;
use Carbon\Carbon;

/**
 * Inscripcion
 *
 * @ORM\Table(name="inscripcion", indexes={@ORM\Index(name="FK_RELATIONSHIP_XB", columns={"IDEXPBECARIO"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @Vich\Uploadable
 * 
 */
class Inscripcion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDINSCRIPCION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Vich\Uploadable
     */
    private $idinscripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDEXPBECARIO", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexpbecario;

    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ANIOINSCRIPCION", type="date", nullable=true)
     */
    private $anioinscripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMCICLOINSCRIPCION", type="integer", nullable=true)
     */
    private $numcicloinscripcion;


    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOINSCRIPCION", type="boolean", nullable=true)
     */
    private $estadoinscripcion;

    /**
     * @Assert\Image(
     *     maxSize="5M",
     *     mimeTypes={"image/png", "image/jpeg", "image/pjpeg","application/pdf","application/xls","application/docx","application/txt",}   
     * )
     * @Vich\UploadableField(mapping="document_file", fileNameProperty="comprobante")
     * @var [type]
     */
    private $comprobante_file;

    /**
     * @ORM\Column(name="comprobante", type="string", nullable=true)
     * @var string
     */
    private $comprobante;
    
    
    /**
     * @Assert\Image(
     *     maxSize="5M",
     *     mimeTypes={"image/png", "image/jpeg", "image/pjpeg","application/pdf","application/xls","application/docx","application/txt",}   
     * )
     * @Vich\UploadableField(mapping="document_file", fileNameProperty="comprobantenotas")
     * @var [type]
     */
    private $comprobante_file_notas;

    /**
     * @ORM\Column(name="comprobantenotas", type="string", nullable=true)
     * @var string
     */
    private $comprobantenotas;
    
    
    /**
     * Gets the value of comprobante_file.
     *
     * @return string
     */
    public function getComprobanteFile() {
        return $this->comprobante_file;
    }

    /**
     * Sets the value of comprobante_file.
     *
     * @param File $comprobante_file
     *
     * @return self
     */
    public function setComprobanteFile(File $comprobante_file) {
        $this->comprobante_file = $comprobante_file;

        // Only change the updated af if the file is really uploaded to avoid database updates.
        // This is needed when the file should be set when loading the entity.
      if ($this->comprobante_file instanceof UploadedFile) {
            $this->setUpdateAt(new Carbon());
        }

        return $this;
    }

    /**
     * Get comprobante
     *
     * @return string
     */
    function getComprobante() {
        return $this->comprobante;
    }
    
    
    /**
     * Gets the value of comprobante_file_notas.
     *
     * @return string
     */
    public function getComprobanteFileNotas() {
        return $this->comprobante_file_notas;
    }

    /**
     * Sets the value of comprobante_file_notas.
     *
     * @param File $comprobante_file_notas
     *
     * @return self
     */
    public function setComprobanteFileNotas(File $comprobante_file_notas) {
        $this->comprobante_file_notas = $comprobante_file_notas;

        // Only change the updated af if the file is really uploaded to avoid database updates.
        // This is needed when the file should be set when loading the entity.
      if ($this->comprobante_file_notas instanceof UploadedFile) {
            $this->setUpdateAt(new Carbon());
        }

        return $this;
    }

    /**
     * Get comprobantenotas
     *
     * @return string
     */
    function getComprobanteNotas() {
        return $this->comprobantenotas;
    }


    /**
     * Set idexpbecario
     *
     * @param integer $idexpbecario
     *
     * @return Inscripcion
     */
    public function setIdexpbecario($idexpbecario)
    {
        $this->idexpbecario = $idexpbecario;

        return $this;
    }

    /**
     * Get idexpbecario
     *
     * @return integer
     */
    public function getIdexpbecario()
    {
        return $this->idexpbecario;
    }

    /**
     * Set anioinscripcion
     *
     * @param \DateTime $anioinscripcion
     *
     * @return Inscripcion
     */
    public function setAnioinscripcion($anioinscripcion)
    {
        $this->anioinscripcion = $anioinscripcion;

        return $this;
    }

    /**
     * Get anioinscripcion
     *
     * @return \DateTime
     */
    public function getAnioinscripcion()
    {
        return $this->anioinscripcion;
    }

    /**
     * Set numcicloinscripcion
     *
     * @param integer $numcicloinscripcion
     *
     * @return Inscripcion
     */
    public function setNumcicloinscripcion($numcicloinscripcion)
    {
        $this->numcicloinscripcion = $numcicloinscripcion;

        return $this;
    }

    /**
     * Get numcicloinscripcion
     *
     * @return integer
     */
    public function getNumcicloinscripcion()
    {
        return $this->numcicloinscripcion;
    }

    /**
   

    /**
     * Set estadoinscripcion
     *
     * @param boolean $estadoinscripcion
     *
     * @return Inscripcion
     */
    public function setEstadoinscripcion($estadoinscripcion)
    {
        $this->estadoinscripcion = $estadoinscripcion;

        return $this;
    }

    /**
     * Get estadoinscripcion
     *
     * @return boolean
     */
    public function getEstadoinscripcion()
    {
        return $this->estadoinscripcion;
    }

    /**
     * Get idinscripcion
     *
     * @return integer
     */
    public function getIdinscripcion()
    {
        return $this->idinscripcion;
    }

    /**
     * Set comprobante
     *
     * @param string $comprobante
     *
     * @return Inscripcion
     */
    public function setComprobante($comprobante)
    {
        $this->comprobante = $comprobante;

        return $this;
    }
    
    
    /**
     * Set comprobantenotas
     *
     * @param string $comprobantenotas
     *
     * @return Inscripcion
     */
    public function setComprobanteNotas($comprobantenotas)
    {
        $this->comprobantenotas = $comprobantenotas;

        return $this;
    }
}
