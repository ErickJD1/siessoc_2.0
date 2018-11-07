<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Universidad
 *
 * @ORM\Table(name="universidad", indexes={@ORM\Index(name="FK_RELATIONSHIP_37", columns={"IDCARRERA"}), @ORM\Index(name="FK_RELATIONSHIP_47", columns={"CAR_IDCARRERA"})})
 * @ORM\Entity
 */
class Universidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDUNIVERSIDAD", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniversidad;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBREUNIVERSIDAD", type="string", length=256, nullable=true)
     */
    private $nombreuniversidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOUNIVERSIDAD", type="boolean", nullable=true)
     */
    private $estadouniversidad;

    /**
     * @var \Carrera
     *
     * @ORM\ManyToOne(targetEntity="Carrera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCARRERA", referencedColumnName="IDCARRERA")
     * })
     */
    private $idcarrera;

    /**
     * @var \Carrera
     *
     * @ORM\ManyToOne(targetEntity="Carrera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CAR_IDCARRERA", referencedColumnName="IDCARRERA")
     * })
     */
    private $carcarrera;



    /**
     * Set nombreuniversidad
     *
     * @param string $nombreuniversidad
     *
     * @return Universidad
     */
    public function setNombreuniversidad($nombreuniversidad)
    {
        $this->nombreuniversidad = $nombreuniversidad;

        return $this;
    }

    /**
     * Get nombreuniversidad
     *
     * @return string
     */
    public function getNombreuniversidad()
    {
        return $this->nombreuniversidad;
    }

    /**
     * Set estadouniversidad
     *
     * @param boolean $estadouniversidad
     *
     * @return Universidad
     */
    public function setEstadouniversidad($estadouniversidad)
    {
        $this->estadouniversidad = $estadouniversidad;

        return $this;
    }

    /**
     * Get estadouniversidad
     *
     * @return boolean
     */
    public function getEstadouniversidad()
    {
        return $this->estadouniversidad;
    }

    /**
     * Get iduniversidad
     *
     * @return integer
     */
    public function getIduniversidad()
    {
        return $this->iduniversidad;
    }

    /**
     * Set carcarrera
     *
     * @param \AppBundle\Entity\Carrera $carcarrera
     *
     * @return Universidad
     */
    public function setCarcarrera(\AppBundle\Entity\Carrera $carcarrera = null)
    {
        $this->carcarrera = $carcarrera;

        return $this;
    }

    /**
     * Get carcarrera
     *
     * @return \AppBundle\Entity\Carrera
     */
    public function getCarcarrera()
    {
        return $this->carcarrera;
    }

    /**
     * Set idcarrera
     *
     * @param \AppBundle\Entity\Carrera $idcarrera
     *
     * @return Universidad
     */
    public function setIdcarrera(\AppBundle\Entity\Carrera $idcarrera = null)
    {
        $this->idcarrera = $idcarrera;

        return $this;
    }

    /**
     * Get idcarrera
     *
     * @return \AppBundle\Entity\Carrera
     */
    public function getIdcarrera()
    {
        return $this->idcarrera;
    }
}
