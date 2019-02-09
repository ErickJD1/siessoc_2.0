<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use SalexUserBundle\Entity\User;

/**
 * Solicitudpatrocinador
 *
 * @ORM\Table(name="solicitudpatrocinador")
 * @ORM\Entity
 * @UniqueEntity("docidentidadsolipatrocinador")
 */
class Solicitudpatrocinador {

    /**
     * @var integer
     *
     * @ORM\Column(name="IDSOLIPATROCINADOR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsolipatrocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="DOCIDENTIDADSOLIPATROCINADOR", type="string", length=20, nullable=true)
     */
    private $docidentidadsolipatrocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTOAPORTARSOLIPATROCINADOR", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $montoaportarsolipatrocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONOSOLIPATROCINADOR", type="string", length=256, nullable=true)
     */
    private $telefonosolipatrocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCIONSOLIPATROCINADOR", type="string", length=256, nullable=true)
     */
    private $direccionsolipatrocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONPATROCINADOR", type="string", length=500, nullable=true)
     */
    private $observacionpatrocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADOSOLIPATROCINADOR", type="string", length=1, nullable=true)
     */
    private $estadosolipatrocinador;

    /**
     * @var \DateTime
     * @ORM\Column(name="FECHACREACION", type="datetime", nullable=true)
     * @Assert\Type("\DateTime")
     */
    private $fechacreacion;

    /**
     * @var \idusuario
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="idusuario", referencedColumnName="id")
     * })
     */
    private $idusuario;

    
    function getObservacionpatrocinador() {
        return $this->observacionpatrocinador;
    }

    function setObservacionpatrocinador($observacionpatrocinador) {
        $this->observacionpatrocinador = $observacionpatrocinador;
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
     * Set fechacreacion
     *
     * @param \DateTime $fechacreacion
     *
     * @return Solicitudpatrocinador
     */
    public function setFechaapertura($fechacreacion) {
        $this->fechaapertura = $fechacreacion;

        return $this;
    }

    /**
     * Get fechacreacion
     *
     * @return \DateTime
     */
    public function getFechaapertura() {
        return $this->fechacreacion;
    }

    /**
     * Set docidentidadsolipatrocinador
     *
     * @param string $docidentidadsolipatrocinador
     *
     * @return Solicitudpatrocinador
     */
    public function setDocidentidadsolipatrocinador($docidentidadsolipatrocinador) {
        $this->docidentidadsolipatrocinador = $docidentidadsolipatrocinador;

        return $this;
    }

    /**
     * Get docidentidadsolipatrocinador
     *
     * @return string
     */
    public function getDocidentidadsolipatrocinador() {
        return $this->docidentidadsolipatrocinador;
    }

    /**
     * Set montoaportarsolipatrocinador
     *
     * @param string $montoaportarsolipatrocinador
     *
     * @return Solicitudpatrocinador
     */
    public function setMontoaportarsolipatrocinador($montoaportarsolipatrocinador) {
        $this->montoaportarsolipatrocinador = $montoaportarsolipatrocinador;

        return $this;
    }

    /**
     * Get montoaportarsolipatrocinador
     *
     * @return string
     */
    public function getMontoaportarsolipatrocinador() {
        return $this->montoaportarsolipatrocinador;
    }

    /**
     * Set telefonosolipatrocinador
     *
     * @param string $telefonosolipatrocinador
     *
     * @return Solicitudpatrocinador
     */
    public function setTelefonosolipatrocinador($telefonosolipatrocinador) {
        $this->telefonosolipatrocinador = $telefonosolipatrocinador;

        return $this;
    }

    /**
     * Get telefonosolipatrocinador
     *
     * @return string
     */
    public function getTelefonosolipatrocinador() {
        return $this->telefonosolipatrocinador;
    }

    /**
     * Set direccionsolipatrocinador
     *
     * @param string $direccionsolipatrocinador
     *
     * @return Solicitudpatrocinador
     */
    public function setDireccionsolipatrocinador($direccionsolipatrocinador) {
        $this->direccionsolipatrocinador = $direccionsolipatrocinador;

        return $this;
    }

    /**
     * Get direccionsolipatrocinador
     *
     * @return string
     */
    public function getDireccionsolipatrocinador() {
        return $this->direccionsolipatrocinador;
    }

    /**
     * Set estadosolipatrocinador
     *
     * @param string $estadosolipatrocinador
     *
     * @return Solicitudpatrocinador
     */
    public function setEstadosolipatrocinador($estadosolipatrocinador) {
        $this->estadosolipatrocinador = $estadosolipatrocinador;

        return $this;
    }

    /**
     * Get estadosolipatrocinador
     *
     * @return string
     */
    public function getEstadosolipatrocinador() {
        return $this->estadosolipatrocinador;
    }

    /**
     * Get idsolipatrocinador
     *
     * @return integer
     */
    public function getIdsolipatrocinador() {
        return $this->idsolipatrocinador;
    }

    /**
     * Set fechacreacion
     *
     * @param \DateTime $fechacreacion
     *
     * @return Solicitudpatrocinador
     */
    public function setFechacreacion($fechacreacion) {
        $this->fechacreacion = $fechacreacion;

        return $this;
    }

    /**
     * Get fechacreacion
     *
     * @return \DateTime
     */
    public function getFechacreacion() {
        return $this->fechacreacion;
    }

}
