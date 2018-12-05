<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Movimiento
 *
 * @ORM\Table(name="movimiento", indexes={@ORM\Index(name="FK_RELATIONSHIP_13", columns={"IDTIPOMOV"}), @ORM\Index(name="FK_RELATIONSHIP_15", columns={"IDCUENTA"})})
 * @ORM\Entity
 */
class Movimiento
{
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
     *   @ORM\JoinColumn(name="IDCUENTA", referencedColumnName="IDCUENTA")
     * })
     */
    private $idcuenta;


    /**
     * @var \idusuario
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuario", referencedColumnName="idusuario")
     * })
     */
    private $idusuario;
    
     /**
     * Get idusuario
     *
     * @return string
     */
    function getIdusuario() {
        return $this->idusuario;
    }
  /**
     * Set idusuario
     *
     * @param string $idusuario
     *
     * @return Movimiento
     */
    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    
    /**
     * Set descripcionmov
     *
     * @param string $descripcionmov
     *
     * @return Movimiento
     */
    public function setDescripcionmov($descripcionmov)
    {
        $this->descripcionmov = $descripcionmov;

        return $this;
    }

    /**
     * Get descripcionmov
     *
     * @return string
     */
    public function getDescripcionmov()
    {
        return $this->descripcionmov;
    }

    /**
     * Set monto
     *
     * @param float $monto
     *
     * @return Movimiento
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return float
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set estadomov
     *
     * @param boolean $estadomov
     *
     * @return Movimiento
     */
    public function setEstadomov($estadomov)
    {
        $this->estadomov = $estadomov;

        return $this;
    }

    /**
     * Get estadomov
     *
     * @return boolean
     */
    public function getEstadomov()
    {
        return $this->estadomov;
    }

    /**
     * Get idmov
     *
     * @return integer
     */
    public function getIdmov()
    {
        return $this->idmov;
    }

    /**
     * Set idcuenta
     *
     * @param \AppBundle\Entity\Cuenta $idcuenta
     *
     * @return Movimiento
     */
    public function setIdcuenta(\AppBundle\Entity\Cuenta $idcuenta = null)
    {
        $this->idcuenta = $idcuenta;

        return $this;
    }

    /**
     * Get idcuenta
     *
     * @return \AppBundle\Entity\Cuenta
     */
    public function getIdcuenta()
    {
        return $this->idcuenta;
    }

    /**
     * Set idtipomov
     *
     * @param \AppBundle\Entity\Tipomovimiento $idtipomov
     *
     * @return Movimiento
     */
    public function setIdtipomov(\AppBundle\Entity\Tipomovimiento $idtipomov = null)
    {
        $this->idtipomov = $idtipomov;

        return $this;
    }

    /**
     * Get idtipomov
     *
     * @return \AppBundle\Entity\Tipomovimiento
     */
    public function getIdtipomov()
    {
        return $this->idtipomov;
    }


}
