<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Cuenta
 *
 * @ORM\Table(name="cuenta", indexes={@ORM\Index(name="FK_RELATIONSHIP_14", columns={"IDTIPOCUENTA"}), @ORM\Index(name="FK_RELATIONSHIP_33", columns={"IDBANCO"})})
 * @ORM\Entity
 */
class Cuenta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCUENTA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMCUENTA", type="string", length=10, nullable=true)
     */
    private $numcuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMCUENTA", type="string", length=100, nullable=true)
     */
    private $nomcuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONCUENTA", type="string", length=250, nullable=true)
     */
    private $descripcioncuenta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAAPERTURA", type="datetime", nullable=true)
     * @Assert\Type("\DateTime")
     */
    private $fechaapertura;

    /**
     * @var float
     *
     * @ORM\Column(name="SALDOCUENTA", type="float", precision=10, scale=0, nullable=true)
     */
    private $saldocuenta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOCUENTA", type="boolean", nullable=true)
     */
    private $estadocuenta;

    /**
     * @var \Tipocuenta
     *
     * @ORM\ManyToOne(targetEntity="Tipocuenta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDTIPOCUENTA", referencedColumnName="IDTIPOCUENTA")
     * })
     */
    private $idtipocuenta;

    /**
     * @var \Banco
     *
     * @ORM\ManyToOne(targetEntity="Banco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDBANCO", referencedColumnName="IDBANCO")
     * })
     */
    private $idbanco;

    public function __construct(){
    $this->fechaapertura= new \DateTime("now");
    }

    /**
     * Set numcuenta
     *
     * @param string $numcuenta
     *
     * @return Cuenta
     */
    public function setNumcuenta($numcuenta)
    {
        $this->numcuenta = $numcuenta;

        return $this;
    }

    /**
     * Get numcuenta
     *
     * @return string
     */
    public function getNumcuenta()
    {
        return $this->numcuenta;
    }

    /**
     * Set nomcuenta
     *
     * @param string $nomcuenta
     *
     * @return Cuenta
     */
    public function setNomcuenta($nomcuenta)
    {
        $this->nomcuenta = $nomcuenta;

        return $this;
    }

    /**
     * Get nomcuenta
     *
     * @return string
     */
    public function getNomcuenta()
    {
        return $this->nomcuenta;
    }

    /**
     * Set descripcioncuenta
     *
     * @param string $descripcioncuenta
     *
     * @return Cuenta
     */
    public function setDescripcioncuenta($descripcioncuenta)
    {
        $this->descripcioncuenta = $descripcioncuenta;

        return $this;
    }

    /**
     * Get descripcioncuenta
     *
     * @return string
     */
    public function getDescripcioncuenta()
    {
        return $this->descripcioncuenta;
    }

    /**
     * Set fechaapertura
     *
     * @param \DateTime $fechaapertura
     *
     * @return Cuenta
     */
    public function setFechaapertura($fechaapertura)
    {
        $this->fechaapertura = $fechaapertura;

        return $this;
    }

    /**
     * Get fechaapertura
     *
     * @return \DateTime
     */
    public function getFechaapertura()
    {
        return $this->fechaapertura;
    }

    /**
     * Set saldocuenta
     *
     * @param float $saldocuenta
     *
     * @return Cuenta
     */
    public function setSaldocuenta($saldocuenta)
    {
        $this->saldocuenta = $saldocuenta;

        return $this;
    }

    /**
     * Get saldocuenta
     *
     * @return float
     */
    public function getSaldocuenta()
    {
        return $this->saldocuenta;
    }

    /**
     * Set estadocuenta
     *
     * @param boolean $estadocuenta
     *
     * @return Cuenta
     */
    public function setEstadocuenta($estadocuenta)
    {
        $this->estadocuenta = $estadocuenta;

        return $this;
    }

    /**
     * Get estadocuenta
     *
     * @return boolean
     */
    public function getEstadocuenta()
    {
        return $this->estadocuenta;
    }

    /**
     * Get idcuenta
     *
     * @return integer
     */
    public function getIdcuenta()
    {
        return $this->idcuenta;
    }

    /**
     * Set idbanco
     *
     * @param \AppBundle\Entity\Banco $idbanco
     *
     * @return Cuenta
     */
    public function setIdbanco(\AppBundle\Entity\Banco $idbanco = null)
    {
        $this->idbanco = $idbanco;

        return $this;
    }

    /**
     * Get idbanco
     *
     * @return \AppBundle\Entity\Banco
     */
    public function getIdbanco()
    {
        return $this->idbanco;
    }

    /**
     * Set idtipocuenta
     *
     * @param \AppBundle\Entity\Tipocuenta $idtipocuenta
     *
     * @return Cuenta
     */
    public function setIdtipocuenta(\AppBundle\Entity\Tipocuenta $idtipocuenta = null)
    {
        $this->idtipocuenta = $idtipocuenta;

        return $this;
    }

    /**
     * Get idtipocuenta
     *
     * @return \AppBundle\Entity\Tipocuenta
     */
    public function getIdtipocuenta()
    {
        return $this->idtipocuenta;
    }

    public function __toString(){
          return $this->getNomcuenta();
    }

}
