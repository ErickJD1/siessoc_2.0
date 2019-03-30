<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materia
 *
 * @ORM\Table(name="materia", indexes={@ORM\Index(name="FK_RELATIONSHIP_I", columns={"IDINSCRIPCION"})})
 *
 * @ORM\Entity
 */
class MateriaInscripcion {

    /**
     * @var integer
     *
     * @ORM\Column(name="IDMATERIAINSCRIPCION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmateriainscripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOMBREMATERIA", type="string", nullable=false)
     * 
     */
    private $nombremateria;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDINSCRIPCION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * 
     */
    private $idinscripcion;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="NUMINSCRIPCION", type="integer", nullable=false)
     */
    private $numinscripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="NOTA", type="float", precision=10, scale=0, nullable=true)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO", type="string", length=1, nullable=true)
     */
    private $estado;

    /**
     * Set nota
     *
     * @param float $nota
     *
     * @return Materia
     */
    public function setNota($nota) {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return float
     */
    public function getNota() {
        return $this->nota;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Materia
     */
    public function setEstado($estado) {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado() {
        return $this->estado;
    }


    /**
     * Get idinscripcion
     *
     * @return integer
     */
    public function getIdinscripcion() {
        return $this->idinscripcion;
    }

    /**
     * Set idinscripcion
     *
     * @return integer
     */
    public function setIdinscripcion($id) {
        $this->idinscripcion=$id;
        return $this->idinscripcion;
    }

    
    /**
     * Get idinscripcion
     *
     * @return integer
     */
    public function getMateriaIdinscripcion() {
        return $this->idmateriainscripcion;
    }

    /**
     * Set idinscripcion
     *
     * @return integer
     */
    public function setMateriaIdinscripcion() {
        return $this->idmateriainscripcion;
    }    

    /**
     * Set nombremateria
     *
     * @param string $nombremateria
     *
     * @return MateriaInscripcion
     */
    public function setNombremateria($nombremateria)
    {
        $this->nombremateria = $nombremateria;

        return $this;
    }

    /**
     * Get nombremateria
     *
     * @return string
     */
    public function getNombremateria()
    {
        return $this->nombremateria;
    }

    /**
     * Get idmateriainscripcion
     *
     * @return integer
     */
    public function getIdmateriainscripcion()
    {
        return $this->idmateriainscripcion;
    }
    
    public function getNuminscripcion() {
        return $this->numinscripcion;
    }

    public function setNuminscripcion($numinscripcion) {
        $this->numinscripcion = $numinscripcion;
    }


}
