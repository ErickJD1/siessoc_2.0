<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Carbon\Carbon;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Publicacioncontenido
 *
 * * @ORM\Table(name="publicacioncontenido", indexes={@ORM\Index(name="FK_RELATIONSHIP_12", columns={"IDPUBLICACION"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @Vich\Uploadable
 */
class Publicacioncontenido {

    /**
     * @var integer
     *
     * @ORM\Column(name="IDCONTENIDO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontenido;

    /**
     * @var string
     *
     * @ORM\Column(name="TITULO", type="string", length=250, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBTITULO", type="string", length=250, nullable=true)
     */
    private $subtitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONCONTENIDO", type="string", length=250, nullable=true)
     */
    private $descripcioncontenido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHACONTENIDO", type="datetime", nullable=true)
     */
    private $fechacontenido;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOCONTENIDO", type="boolean", nullable=true)
     */
    private $estadocontenido;

    /**
     * @Assert\Image(
     *     maxSize="5M",
     *     mimeTypes={"image/png", "image/jpeg", "image/pjpeg"},
     *     maxWidth=700,
     *     maxHeight=700
     * )
     * @Vich\UploadableField(mapping="profile_image", fileNameProperty="contenidoPicture")
     * @var [type]
     */
    private $contenido_picture_file;

    /**
     * @ORM\Column(name="contenidoPicture", type="string", nullable=true)
     * @var string
     */
    private $contenidoPicture;

   

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Publicacioncontenido
     */
    public function setTitulo($titulo) {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo() {
        return $this->titulo;
    }

    /**
     * Set subtitulo
     *
     * @param string $subtitulo
     *
     * @return Publicacioncontenido
     */
    public function setSubtitulo($subtitulo) {
        $this->subtitulo = $subtitulo;

        return $this;
    }

    /**
     * Gets the value of contenido_picture_file.
     *
     * @return string
     */
    public function getContenidoPictureFile() {
        return $this->contenido_picture_file;
    }

    /**
     * Sets the value of contenido_picture_file.
     *
     * @param File $contenido_picture_file
     *
     * @return self
     */
    public function setContenidoPictureFile(File $contenido_picture_file) {
        $this->contenido_picture_file = $contenido_picture_file;

        // Only change the updated af if the file is really uploaded to avoid database updates.
        // This is needed when the file should be set when loading the entity.
        if ($this->contenido_picture_file instanceof UploadedFile) {
            $this->setUpdateAt(new Carbon());
        }

        return $this;
    }

    /**
     * Gets the value of contenidoPicture.
     *
     * @return string
     */
    public function getContenidoPicture() {
        return $this->contenidoPicture;
    }

    /**
     * Sets the value of ContenidoPicture.
     *
     * @param string $ContenidoPicture 
     *
     * @return self
     */
    public function setContenidoPicture($contenidoPicture) {
        $this->contenidoPicture = $contenidoPicture;

        return $this;
    }

    /**
     * Get subtitulo
     *
     * @return string
     */
    public function getSubtitulo() {
        return $this->subtitulo;
    }

    /**
     * Set descripcioncontenido
     *
     * @param string $descripcioncontenido
     *
     * @return Publicacioncontenido
     */
    public function setDescripcioncontenido($descripcioncontenido) {
        $this->descripcioncontenido = $descripcioncontenido;

        return $this;
    }

    /**
     * Get descripcioncontenido
     *
     * @return string
     */
    public function getDescripcioncontenido() {
        return $this->descripcioncontenido;
    }

    /**
     * Set fechacontenido
     *
     * @param \DateTime $fechacontenido
     *
     * @return Publicacioncontenido
     */
    public function setFechacontenido($fechacontenido) {
        $this->fechacontenido = $fechacontenido;

        return $this;
    }

    /**
     * Get fechacontenido
     *
     * @return \DateTime
     */
    public function getFechacontenido() {
        return $this->fechacontenido;
    }

    /**
     * Set estadocontenido
     *
     * @param boolean $estadocontenido
     *
     * @return Publicacioncontenido
     */
    public function setEstadocontenido($estadocontenido) {
        $this->estadocontenido = $estadocontenido;

        return $this;
    }

    /**
     * Get estadocontenido
     *
     * @return boolean
     */
    public function getEstadocontenido() {
        return $this->estadocontenido;
    }

    /**
     * Get idcontenido
     *
     * @return integer
     */
    public function getIdcontenido() {
        return $this->idcontenido;
    }

    public function __toString() {
        return $this->getTitulo();
    }

}
