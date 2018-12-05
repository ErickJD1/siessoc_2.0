<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materia
 *
 * @ORM\Table(name="materia", indexes={@ORM\Index(name="FK_RELATIONSHIP_39", columns={"IDINSCRIPCION"})})
 * @ORM\Entity
 */
class Materia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDMATERIA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmateria;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBREMATERIA", type="string", length=50, nullable=true)
     */
    private $nombremateria;

    /**
     * @var integer
     *
     * @ORM\Column(name="UNIDADESVALORATIVASMATERIA", type="integer", nullable=true)
     */
    private $unidadesvalorativasmateria;

    /**
     * @var float
     *
     * @ORM\Column(name="NOTAMATERIA", type="float", precision=10, scale=0, nullable=true)
     */
    private $notamateria;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ANIOMATERIA", type="date", nullable=true)
     */
    private $aniomateria;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMCICLOMATERIA", type="integer", nullable=true)
     */
    private $numciclomateria;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADOMATERIA", type="string", length=1, nullable=true)
     */
    private $estadomateria;

    /**
     * @var \Inscripcion
     *
     * @ORM\ManyToOne(targetEntity="Inscripcion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDINSCRIPCION", referencedColumnName="IDINSCRIPCION")
     * })
     */
    private $idinscripcion;



    /**
     * Set nombremateria
     *
     * @param string $nombremateria
     *
     * @return Materia
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
     * Set unidadesvalorativasmateria
     *
     * @param integer $unidadesvalorativasmateria
     *
     * @return Materia
     */
    public function setUnidadesvalorativasmateria($unidadesvalorativasmateria)
    {
        $this->unidadesvalorativasmateria = $unidadesvalorativasmateria;

        return $this;
    }

    /**
     * Get unidadesvalorativasmateria
     *
     * @return integer
     */
    public function getUnidadesvalorativasmateria()
    {
        return $this->unidadesvalorativasmateria;
    }

    /**
     * Set notamateria
     *
     * @param float $notamateria
     *
     * @return Materia
     */
    public function setNotamateria($notamateria)
    {
        $this->notamateria = $notamateria;

        return $this;
    }

    /**
     * Get notamateria
     *
     * @return float
     */
    public function getNotamateria()
    {
        return $this->notamateria;
    }

    /**
     * Set aniomateria
     *
     * @param \DateTime $aniomateria
     *
     * @return Materia
     */
    public function setAniomateria($aniomateria)
    {
        $this->aniomateria = $aniomateria;

        return $this;
    }

    /**
     * Get aniomateria
     *
     * @return \DateTime
     */
    public function getAniomateria()
    {
        return $this->aniomateria;
    }

    /**
     * Set numciclomateria
     *
     * @param integer $numciclomateria
     *
     * @return Materia
     */
    public function setNumciclomateria($numciclomateria)
    {
        $this->numciclomateria = $numciclomateria;

        return $this;
    }

    /**
     * Get numciclomateria
     *
     * @return integer
     */
    public function getNumciclomateria()
    {
        return $this->numciclomateria;
    }

    /**
     * Set estadomateria
     *
     * @param string $estadomateria
     *
     * @return Materia
     */
    public function setEstadomateria($estadomateria)
    {
        $this->estadomateria = $estadomateria;

        return $this;
    }

    /**
     * Get estadomateria
     *
     * @return string
     */
    public function getEstadomateria()
    {
        return $this->estadomateria;
    }

    /**
     * Get idmateria
     *
     * @return integer
     */
    public function getIdmateria()
    {
        return $this->idmateria;
    }

    /**
     * Set idinscripcion
     *
     * @param \AppBundle\Entity\Inscripcion $idinscripcion
     *
     * @return Materia
     */
    public function setIdinscripcion(\AppBundle\Entity\Inscripcion $idinscripcion = null)
    {
        $this->idinscripcion = $idinscripcion;

        return $this;
    }

    /**
     * Get idinscripcion
     *
     * @return \AppBundle\Entity\Inscripcion
     */
    public function getIdinscripcion()
    {
        return $this->idinscripcion;
    }
}
