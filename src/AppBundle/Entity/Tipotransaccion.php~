<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Tipotransaccion
 *
 * @ORM\Table(name="tipotransaccion")
 * @ORM\Entity
 */
class Tipotransaccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDTIPOTRANSACCION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipotransaccion;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRETIPOTRANSAC", type="string", length=256, nullable=true)
     * @Assert\NotBlank()
     */
    private $nombretipotransac;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOTIPOTRANSAC", type="boolean", nullable=true)
     */
    private $estadotipotransac;



    /**
     * Set nombretipotransac
     *
     * @param string $nombretipotransac
     *
     * @return Tipotransaccion
     */
    public function setNombretipotransac($nombretipotransac)
    {
        $this->nombretipotransac = $nombretipotransac;

        return $this;
    }

    /**
     * Get nombretipotransac
     *
     * @return string
     */
    public function getNombretipotransac()
    {
        return $this->nombretipotransac;
    }

    /**
     * Set estadotipotransac
     *
     * @param boolean $estadotipotransac
     *
     * @return Tipotransaccion
     */
    public function setEstadotipotransac($estadotipotransac)
    {
        $this->estadotipotransac = $estadotipotransac;

        return $this;
    }

    /**
     * Get estadotipotransac
     *
     * @return boolean
     */
    public function getEstadotipotransac()
    {
        return $this->estadotipotransac;
    }

    /**
     * Get idtipotransaccion
     *
     * @return integer
     */
    public function getIdtipotransaccion()
    {
        return $this->idtipotransaccion;
    }
}
