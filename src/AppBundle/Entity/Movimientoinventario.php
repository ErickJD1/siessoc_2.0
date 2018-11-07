<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movimientoinventario
 *
 * @ORM\Table(name="movimientoinventario")
 * @ORM\Entity
 */
class Movimientoinventario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDMOVINV", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmovinv;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBREMOVINV", type="string", length=250, nullable=true)
     */
    private $nombremovinv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOMOVINV", type="boolean", nullable=true)
     */
    private $estadomovinv;



    /**
     * Set nombremovinv
     *
     * @param string $nombremovinv
     *
     * @return Movimientoinventario
     */
    public function setNombremovinv($nombremovinv)
    {
        $this->nombremovinv = $nombremovinv;

        return $this;
    }

    /**
     * Get nombremovinv
     *
     * @return string
     */
    public function getNombremovinv()
    {
        return $this->nombremovinv;
    }

    /**
     * Set estadomovinv
     *
     * @param boolean $estadomovinv
     *
     * @return Movimientoinventario
     */
    public function setEstadomovinv($estadomovinv)
    {
        $this->estadomovinv = $estadomovinv;

        return $this;
    }

    /**
     * Get estadomovinv
     *
     * @return boolean
     */
    public function getEstadomovinv()
    {
        return $this->estadomovinv;
    }

    /**
     * Get idmovinv
     *
     * @return integer
     */
    public function getIdmovinv()
    {
        return $this->idmovinv;
    }
}
