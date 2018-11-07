<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividad
 *
 * @ORM\Table(name="actividad")
 * @ORM\Entity
 */
class Actividad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDACTIVIDAD", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactividad;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMACTIVIDAD", type="string", length=100, nullable=true)
     */
    private $nomactividad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAACTIVIDAD", type="date", nullable=true)
     */
    private $fechaactividad;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONACTIVIDAD", type="string", length=250, nullable=true)
     */
    private $descripcionactividad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOACTIVIDAD", type="boolean", nullable=true)
     */
    private $estadoactividad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="REQUISITO", type="boolean", nullable=true)
     */
    private $requisito;



    /**
     * Set nomactividad
     *
     * @param string $nomactividad
     *
     * @return Actividad
     */
    public function setNomactividad($nomactividad)
    {
        $this->nomactividad = $nomactividad;

        return $this;
    }

    /**
     * Get nomactividad
     *
     * @return string
     */
    public function getNomactividad()
    {
        return $this->nomactividad;
    }

    /**
     * Set fechaactividad
     *
     * @param \DateTime $fechaactividad
     *
     * @return Actividad
     */
    public function setFechaactividad($fechaactividad)
    {
        $this->fechaactividad = $fechaactividad;

        return $this;
    }

    /**
     * Get fechaactividad
     *
     * @return \DateTime
     */
    public function getFechaactividad()
    {
        return $this->fechaactividad;
    }

    /**
     * Set descripcionactividad
     *
     * @param string $descripcionactividad
     *
     * @return Actividad
     */
    public function setDescripcionactividad($descripcionactividad)
    {
        $this->descripcionactividad = $descripcionactividad;

        return $this;
    }

    /**
     * Get descripcionactividad
     *
     * @return string
     */
    public function getDescripcionactividad()
    {
        return $this->descripcionactividad;
    }

    /**
     * Set estadoactividad
     *
     * @param boolean $estadoactividad
     *
     * @return Actividad
     */
    public function setEstadoactividad($estadoactividad)
    {
        $this->estadoactividad = $estadoactividad;

        return $this;
    }

    /**
     * Get estadoactividad
     *
     * @return boolean
     */
    public function getEstadoactividad()
    {
        return $this->estadoactividad;
    }

    /**
     * Set requisito
     *
     * @param boolean $requisito
     *
     * @return Actividad
     */
    public function setRequisito($requisito)
    {
        $this->requisito = $requisito;

        return $this;
    }

    /**
     * Get requisito
     *
     * @return boolean
     */
    public function getRequisito()
    {
        return $this->requisito;
    }

    /**
     * Get idactividad
     *
     * @return integer
     */
    public function getIdactividad()
    {
        return $this->idactividad;
    }
}
