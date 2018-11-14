<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Tipocuenta
 *
 * @ORM\Table(name="tipocuenta")
 * @ORM\Entity
 * @UniqueEntity("nombrecuenta")
 */
class Tipocuenta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDTIPOCUENTA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipocuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRECUENTA", type="string", length=50, nullable=true)
     * @Assert\NotBlank()
     */
    private $nombrecuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=250, nullable=true)
     * @Assert\NotBlank()
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOTIPOCUENTA", type="boolean", nullable=true)
     */
    private $estadotipocuenta;



    /**
     * Set nombrecuenta
     *
     * @param string $nombrecuenta
     *
     * @return Tipocuenta
     */
    public function setNombrecuenta($nombrecuenta)
    {
        $this->nombrecuenta = $nombrecuenta;

        return $this;
    }

    /**
     * Get nombrecuenta
     *
     * @return string
     */
    public function getNombrecuenta()
    {
        return $this->nombrecuenta;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Tipocuenta
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set estadotipocuenta
     *
     * @param boolean $estadotipocuenta
     *
     * @return Tipocuenta
     */
    public function setEstadotipocuenta($estadotipocuenta)
    {
        $this->estadotipocuenta = $estadotipocuenta;

        return $this;
    }

    /**
     * Get estadotipocuenta
     *
     * @return boolean
     */
    public function getEstadotipocuenta()
    {
        return $this->estadotipocuenta;
    }

    /**
     * Get idtipocuenta
     *
     * @return integer
     */
    public function getIdtipocuenta()
    {
        return $this->idtipocuenta;
    }

    public function __toString(){
          return $this->getNombrecuenta();
    }
}
