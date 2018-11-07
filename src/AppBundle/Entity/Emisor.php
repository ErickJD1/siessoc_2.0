<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emisor
 *
 * @ORM\Table(name="emisor")
 * @ORM\Entity
 */
class Emisor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDEMISOR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idemisor;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBREEMISOR", type="string", length=25, nullable=true)
     */
    private $nombreemisor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOEMISOR", type="boolean", nullable=true)
     */
    private $estadoemisor;



    /**
     * Set nombreemisor
     *
     * @param string $nombreemisor
     *
     * @return Emisor
     */
    public function setNombreemisor($nombreemisor)
    {
        $this->nombreemisor = $nombreemisor;

        return $this;
    }

    /**
     * Get nombreemisor
     *
     * @return string
     */
    public function getNombreemisor()
    {
        return $this->nombreemisor;
    }

    /**
     * Set estadoemisor
     *
     * @param boolean $estadoemisor
     *
     * @return Emisor
     */
    public function setEstadoemisor($estadoemisor)
    {
        $this->estadoemisor = $estadoemisor;

        return $this;
    }

    /**
     * Get estadoemisor
     *
     * @return boolean
     */
    public function getEstadoemisor()
    {
        return $this->estadoemisor;
    }

    /**
     * Get idemisor
     *
     * @return integer
     */
    public function getIdemisor()
    {
        return $this->idemisor;
    }
}
