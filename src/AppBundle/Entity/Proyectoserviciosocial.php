<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyectoserviciosocial
 *
 * @ORM\Table(name="proyectoserviciosocial")
 * @ORM\Entity
 */
class Proyectoserviciosocial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDPROYECTSERVISOCIAL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproyectservisocial;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBREPROYECTO", type="string", length=250, nullable=true)
     */
    private $nombreproyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONPROYECTO", type="string", length=250, nullable=true)
     */
    private $descripcionproyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="ENCARGADOPROYECTO", type="string", length=50, nullable=true)
     */
    private $encargadoproyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="LUGARPROYECTO", type="string", length=100, nullable=true)
     */
    private $lugarproyecto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOPROYECTO", type="boolean", nullable=true)
     */
    private $estadoproyecto;



    /**
     * Set nombreproyecto
     *
     * @param string $nombreproyecto
     *
     * @return Proyectoserviciosocial
     */
    public function setNombreproyecto($nombreproyecto)
    {
        $this->nombreproyecto = $nombreproyecto;

        return $this;
    }

    /**
     * Get nombreproyecto
     *
     * @return string
     */
    public function getNombreproyecto()
    {
        return $this->nombreproyecto;
    }

    /**
     * Set descripcionproyecto
     *
     * @param string $descripcionproyecto
     *
     * @return Proyectoserviciosocial
     */
    public function setDescripcionproyecto($descripcionproyecto)
    {
        $this->descripcionproyecto = $descripcionproyecto;

        return $this;
    }

    /**
     * Get descripcionproyecto
     *
     * @return string
     */
    public function getDescripcionproyecto()
    {
        return $this->descripcionproyecto;
    }

    /**
     * Set encargadoproyecto
     *
     * @param string $encargadoproyecto
     *
     * @return Proyectoserviciosocial
     */
    public function setEncargadoproyecto($encargadoproyecto)
    {
        $this->encargadoproyecto = $encargadoproyecto;

        return $this;
    }

    /**
     * Get encargadoproyecto
     *
     * @return string
     */
    public function getEncargadoproyecto()
    {
        return $this->encargadoproyecto;
    }

    /**
     * Set lugarproyecto
     *
     * @param string $lugarproyecto
     *
     * @return Proyectoserviciosocial
     */
    public function setLugarproyecto($lugarproyecto)
    {
        $this->lugarproyecto = $lugarproyecto;

        return $this;
    }

    /**
     * Get lugarproyecto
     *
     * @return string
     */
    public function getLugarproyecto()
    {
        return $this->lugarproyecto;
    }

    /**
     * Set estadoproyecto
     *
     * @param boolean $estadoproyecto
     *
     * @return Proyectoserviciosocial
     */
    public function setEstadoproyecto($estadoproyecto)
    {
        $this->estadoproyecto = $estadoproyecto;

        return $this;
    }

    /**
     * Get estadoproyecto
     *
     * @return boolean
     */
    public function getEstadoproyecto()
    {
        return $this->estadoproyecto;
    }

    /**
     * Get idproyectservisocial
     *
     * @return integer
     */
    public function getIdproyectservisocial()
    {
        return $this->idproyectservisocial;
    }
}
