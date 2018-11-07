<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrera
 *
 * @ORM\Table(name="carrera", indexes={@ORM\Index(name="FK_RELATIONSHIP_29", columns={"IDMATERIA"}), @ORM\Index(name="FK_RELATIONSHIP_38", columns={"IDUNIVERSIDAD"})})
 * @ORM\Entity
 */
class Carrera
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCARRERA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcarrera;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMCARRERA", type="string", length=100, nullable=true)
     */
    private $nomcarrera;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONCARRERA", type="string", length=250, nullable=true)
     */
    private $descripcioncarrera;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOCARRERA", type="boolean", nullable=true)
     */
    private $estadocarrera;

    /**
     * @var \Materia
     *
     * @ORM\ManyToOne(targetEntity="Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMATERIA", referencedColumnName="IDMATERIA")
     * })
     */
    private $idmateria;

    /**
     * @var \Universidad
     *
     * @ORM\ManyToOne(targetEntity="Universidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDUNIVERSIDAD", referencedColumnName="IDUNIVERSIDAD")
     * })
     */
    private $iduniversidad;



    /**
     * Set nomcarrera
     *
     * @param string $nomcarrera
     *
     * @return Carrera
     */
    public function setNomcarrera($nomcarrera)
    {
        $this->nomcarrera = $nomcarrera;

        return $this;
    }

    /**
     * Get nomcarrera
     *
     * @return string
     */
    public function getNomcarrera()
    {
        return $this->nomcarrera;
    }

    /**
     * Set descripcioncarrera
     *
     * @param string $descripcioncarrera
     *
     * @return Carrera
     */
    public function setDescripcioncarrera($descripcioncarrera)
    {
        $this->descripcioncarrera = $descripcioncarrera;

        return $this;
    }

    /**
     * Get descripcioncarrera
     *
     * @return string
     */
    public function getDescripcioncarrera()
    {
        return $this->descripcioncarrera;
    }

    /**
     * Set estadocarrera
     *
     * @param boolean $estadocarrera
     *
     * @return Carrera
     */
    public function setEstadocarrera($estadocarrera)
    {
        $this->estadocarrera = $estadocarrera;

        return $this;
    }

    /**
     * Get estadocarrera
     *
     * @return boolean
     */
    public function getEstadocarrera()
    {
        return $this->estadocarrera;
    }

    /**
     * Get idcarrera
     *
     * @return integer
     */
    public function getIdcarrera()
    {
        return $this->idcarrera;
    }

    /**
     * Set iduniversidad
     *
     * @param \AppBundle\Entity\Universidad $iduniversidad
     *
     * @return Carrera
     */
    public function setIduniversidad(\AppBundle\Entity\Universidad $iduniversidad = null)
    {
        $this->iduniversidad = $iduniversidad;

        return $this;
    }

    /**
     * Get iduniversidad
     *
     * @return \AppBundle\Entity\Universidad
     */
    public function getIduniversidad()
    {
        return $this->iduniversidad;
    }

    /**
     * Set idmateria
     *
     * @param \AppBundle\Entity\Materia $idmateria
     *
     * @return Carrera
     */
    public function setIdmateria(\AppBundle\Entity\Materia $idmateria = null)
    {
        $this->idmateria = $idmateria;

        return $this;
    }

    /**
     * Get idmateria
     *
     * @return \AppBundle\Entity\Materia
     */
    public function getIdmateria()
    {
        return $this->idmateria;
    }
}
