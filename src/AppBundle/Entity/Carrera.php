<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrera
 *
 * @ORM\Index(name="FK_RELATIONSHIP_38", columns={"IDUNIVERSIDAD"})})
 * @ORM\Entity
 */
class Carrera
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCARRERA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcarrera;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMCARRERA", type="string", length=100, nullable=true)
     */
    private $nomcarrera;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONCARRERA", type="string", length=250, nullable=true)
     */
    private $descripcioncarrera;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOCARRERA", type="boolean", nullable=true)
     */
    private $estadocarrera;

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
     * @var \Universidad
     *
     * @ORM\ManyToOne(targetEntity="Universidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDUNIVERSIDAD", referencedColumnName="IDUNIVERSIDAD")
     * })
     */
    private $iduniversidad;


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
//        if ($this->comprobante_file instanceof UploadedFile) {
//            $this->setUpdateAt(new Carbon());
//        }

        return $this;
    }

    /**
     * Set nomcarrera
     *
     * @param string $nomcarrera
     *
     * @return Carrera
     */
    public function setNomcarrera($nomcarrera)
    {
        $this->nomcarrera = $nomcarrera;

        return $this;
    }

    /**
     * Get nomcarrera
     *
     * @return string
     */
    public function getNomcarrera()
    {
        return $this->nomcarrera;
    }

    /**
     * Set descripcioncarrera
     *
     * @param string $descripcioncarrera
     *
     * @return Carrera
     */
    public function setDescripcioncarrera($descripcioncarrera)
    {
        $this->descripcioncarrera = $descripcioncarrera;

        return $this;
    }

    /**
     * Get descripcioncarrera
     *
     * @return string
     */
    public function getDescripcioncarrera()
    {
        return $this->descripcioncarrera;
    }

    /**
     * Set estadocarrera
     *
     * @param boolean $estadocarrera
     *
     * @return Carrera
     */
    public function setEstadocarrera($estadocarrera)
    {
        $this->estadocarrera = $estadocarrera;

        return $this;
    }

    /**
     * Get estadocarrera
     *
     * @return boolean
     */
    public function getEstadocarrera()
    {
        return $this->estadocarrera;
    }

    /**
     * Get idcarrera
     *
     * @return integer
     */
    public function getIdcarrera()
    {
        return $this->idcarrera;
    }

    /**
     * Set iduniversidad
     *
     * @param \AppBundle\Entity\Universidad $iduniversidad
     *
     * @return Carrera
     */
    public function setIduniversidad(\AppBundle\Entity\Universidad $iduniversidad = null)
    {
        $this->iduniversidad = $iduniversidad;

        return $this;
    }

    /**
     * Get iduniversidad
     *
     * @return \AppBundle\Entity\Universidad
     */
    public function getIduniversidad()
    {
        return $this->iduniversidad;
    }

 
}
