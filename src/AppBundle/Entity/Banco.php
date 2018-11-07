<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banco
 *
 * @ORM\Table(name="banco", indexes={@ORM\Index(name="FK_RELATIONSHIP_36", columns={"IDCUENTA"})})
 * @ORM\Entity
 */
class Banco
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDBANCO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbanco;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBANCO", type="string", length=200, nullable=true)
     */
    private $nombanco;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOBANCO", type="boolean", nullable=true)
     */
    private $estadobanco;

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
     * Set nombanco
     *
     * @param string $nombanco
     *
     * @return Banco
     */
    public function setNombanco($nombanco)
    {
        $this->nombanco = $nombanco;

        return $this;
    }

    /**
     * Get nombanco
     *
     * @return string
     */
    public function getNombanco()
    {
        return $this->nombanco;
    }

    /**
     * Set estadobanco
     *
     * @param boolean $estadobanco
     *
     * @return Banco
     */
    public function setEstadobanco($estadobanco)
    {
        $this->estadobanco = $estadobanco;

        return $this;
    }

    /**
     * Get estadobanco
     *
     * @return boolean
     */
    public function getEstadobanco()
    {
        return $this->estadobanco;
    }

    /**
     * Get idbanco
     *
     * @return integer
     */
    public function getIdbanco()
    {
        return $this->idbanco;
    }

    /**
     * Set idcuenta
     *
     * @param \AppBundle\Entity\Cuenta $idcuenta
     *
     * @return Banco
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
}
