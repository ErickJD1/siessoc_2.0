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
 * Movimiento
 *
 * @ORM\Table(name="movimiento", indexes={@ORM\Index(name="FK_RELATIONSHIP_13", columns={"IDTIPOMOV"}), @ORM\Index(name="FK_RELATIONSHIP_15", columns={"IDCUENTA"})})
 * @ORM\Entity(repositoryClass="src\AppBundle\Repository\MovimientoRepository")
 * @ORM\HasLifecycleCallbacks
 * @Vich\Uploadable
 */
class Movimiento {

    /**
     * @var integer
     *
     * @ORM\Column(name="IDMOV", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmov;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONMOV", type="string", length=250, nullable=true)
     */
    private $descripcionmov;

    /**
     * @var float
     * @Assert\NotBlank()
     * @ORM\Column(name="MONTO", type="float", precision=20, scale=0, nullable=true)
     */
    private $monto;

    /**
     * @var boolean
     * @Assert\NotBlank()
     * @ORM\Column(name="ESTADOMOV", type="boolean", nullable=true)
     */
    private $estadomov;

    /**
     * @var \Tipomovimiento
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Tipomovimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDTIPOMOV", referencedColumnName="IDTIPOMOV")
     * })
     */
    private $idtipomov;

    /**
     * @var \Cuenta
     *
     * @ORM\ManyToOne(targetEntity="Cuenta")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="IDCUENTA", referencedColumnName="IDCUENTA")
     * })
     */
    private $idcuenta;

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
     * @var \idusuario
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="idusuario", referencedColumnName="id")
     * })
     */
    private $idusuario;
    
   /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="CREATED_AT", type="datetime")
     * @Assert\Type("\DateTime")
     * 
     */
    private $createdAt;
    
   /**
     * @var datetime $updateAt
     * 
     * @ORM\Column(name="UPDATED_AT", type="datetime", nullable = true)
     * @Assert\Type("\DateTime")
     * 
     */
    private $updateAt;
    
    
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
     * Get idusuario
     *
     * @return integer
     */
    public function getIdusuario() {
        return $this->idusuario;
    }

    /**
     * Set idusuario
     *
     * @param \SalexUserBundle\Entity\User $idusuario
     *
     * @return Movimiento
     */
    public function setIdusuario(\SalexUserBundle\Entity\User $idusuario = null) {
        $this->idusuario = $idusuario;
    }

    /**
     * Set comprobante
     *
     * @param string $comprobante
     *
     * @return Movimiento
     */
    public function setComprobante($comprobante) {
        $this->comprobante = $comprobante;
    }

    /**
     * Set descripcionmov
     *
     * @param string $descripcionmov
     *
     * @return Movimiento
     */
    public function setDescripcionmov($descripcionmov) {
        $this->descripcionmov = $descripcionmov;

        return $this;
    }

    /**
     * Get descripcionmov
     *
     * @return string
     */
    public function getDescripcionmov() {
        return $this->descripcionmov;
    }

    /**
     * Set monto
     *
     * @param float $monto
     *
     * @return Movimiento
     */
    public function setMonto($monto) {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return float
     */
    public function getMonto() {
        return $this->monto;
    }

    /**
     * Set estadomov
     *
     * @param boolean $estadomov
     *
     * @return Movimiento
     */
    public function setEstadomov($estadomov) {
        $this->estadomov = $estadomov;

        return $this;
    }

    /**
     * Get estadomov
     *
     * @return boolean
     */
    public function getEstadomov() {
        return $this->estadomov;
    }

    /**
     * Get idmov
     *
     * @return integer
     */
    public function getIdmov() {
        return $this->idmov;
    }

    /**
     * Set idcuenta
     *
     * @param \AppBundle\Entity\Cuenta $idcuenta
     *
     * @return Movimiento
     */
    public function setIdcuenta(\AppBundle\Entity\Cuenta $idcuenta = null) {
        $this->idcuenta = $idcuenta;

        return $this;
    }

    /**
     * Get idcuenta
     *
     * @return \AppBundle\Entity\Cuenta
     */
    public function getIdcuenta() {
        return $this->idcuenta;
    }

    /**
     * Set idtipomov
     *
     * @param \AppBundle\Entity\Tipomovimiento $idtipomov
     *
     * @return Movimiento
     */
    public function setIdtipomov(\AppBundle\Entity\Tipomovimiento $idtipomov = null) {
        $this->idtipomov = $idtipomov;

        return $this;
    }

    /**
     * Get idtipomov
     *
     * @return \AppBundle\Entity\Tipomovimiento
     */
    public function getIdtipomov() {
        return $this->idtipomov;
    }
    
    
   /**
     * Gets triggered only on insert

     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->createdAt = new Carbon();
    }

    /**
     * Gets triggered every time on update

     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updateAt = new Carbon();
    }


    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     *
     * @return User
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }



    /**
     * Set createAt
     *
     * @param \DateTime $createdAt
     *
     * @return Movimiento
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }


}
