<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materia
 *
 * @ORM\Table(name="materia")
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
     * @var string
     *
     * @ORM\Column(name="ESTADOMATERIA", type="string", length=1, nullable=true)
     */
    private $estadomateria;



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

  
}
