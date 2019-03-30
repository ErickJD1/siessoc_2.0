<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use SalexUserBundle\Entity\User;
use Carbon\Carbon;

/**
 * Carrera
 *
 * @ORM\Table(name="carrera")
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Carrera {

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
     * Set nomcarrera
     *
     * @param string $nomcarrera
     *
     * @return Carrera
     */
    public function setNomcarrera($nomcarrera) {
        $this->nomcarrera = $nomcarrera;

        return $this;
    }

    /**
     * Get nomcarrera
     *
     * @return string
     */
    public function getNomcarrera() {
        return $this->nomcarrera;
    }

    /**
     * Set descripcioncarrera
     *
     * @param string $descripcioncarrera
     *
     * @return Carrera
     */
    public function setDescripcioncarrera($descripcioncarrera) {
        $this->descripcioncarrera = $descripcioncarrera;

        return $this;
    }

    /**
     * Get descripcioncarrera
     *
     * @return string
     */
    public function getDescripcioncarrera() {
        return $this->descripcioncarrera;
    }

    /**
     * Set estadocarrera
     *
     * @param boolean $estadocarrera
     *
     * @return Carrera
     */
    public function setEstadocarrera($estadocarrera) {
        $this->estadocarrera = $estadocarrera;

        return $this;
    }

    /**
     * Get estadocarrera
     *
     * @return boolean
     */
    public function getEstadocarrera() {
        return $this->estadocarrera;
    }

    /**
     * Get idcarrera
     *
     * @return integer
     */
    public function getIdcarrera() {
        return $this->idcarrera;
    }

    public function __toString() {
                return $this->nomcarrera;

        
    }

}
