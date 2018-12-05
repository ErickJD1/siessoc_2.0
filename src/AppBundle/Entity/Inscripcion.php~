<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscripcion
 *
 * @ORM\Table(name="inscripcion")
 * @ORM\Entity
 */
class Inscripcion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDINSCRIPCION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinscripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDEXPBECARIO", type="integer", nullable=true)
     */
    private $idexpbecario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ANIOINSCRIPCION", type="date", nullable=true)
     */
    private $anioinscripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMCICLOINSCRIPCION", type="integer", nullable=true)
     */
    private $numcicloinscripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTOMATRICULAINSCRIPCION", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $montomatriculainscripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTOMENSUALIDAD", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $montomensualidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOINSCRIPCION", type="boolean", nullable=true)
     */
    private $estadoinscripcion;



    /**
     * Set idexpbecario
     *
     * @param integer $idexpbecario
     *
     * @return Inscripcion
     */
    public function setIdexpbecario($idexpbecario)
    {
        $this->idexpbecario = $idexpbecario;

        return $this;
    }

    /**
     * Get idexpbecario
     *
     * @return integer
     */
    public function getIdexpbecario()
    {
        return $this->idexpbecario;
    }

    /**
     * Set anioinscripcion
     *
     * @param \DateTime $anioinscripcion
     *
     * @return Inscripcion
     */
    public function setAnioinscripcion($anioinscripcion)
    {
        $this->anioinscripcion = $anioinscripcion;

        return $this;
    }

    /**
     * Get anioinscripcion
     *
     * @return \DateTime
     */
    public function getAnioinscripcion()
    {
        return $this->anioinscripcion;
    }

    /**
     * Set numcicloinscripcion
     *
     * @param integer $numcicloinscripcion
     *
     * @return Inscripcion
     */
    public function setNumcicloinscripcion($numcicloinscripcion)
    {
        $this->numcicloinscripcion = $numcicloinscripcion;

        return $this;
    }

    /**
     * Get numcicloinscripcion
     *
     * @return integer
     */
    public function getNumcicloinscripcion()
    {
        return $this->numcicloinscripcion;
    }

    /**
     * Set montomatriculainscripcion
     *
     * @param string $montomatriculainscripcion
     *
     * @return Inscripcion
     */
    public function setMontomatriculainscripcion($montomatriculainscripcion)
    {
        $this->montomatriculainscripcion = $montomatriculainscripcion;

        return $this;
    }

    /**
     * Get montomatriculainscripcion
     *
     * @return string
     */
    public function getMontomatriculainscripcion()
    {
        return $this->montomatriculainscripcion;
    }

    /**
     * Set montomensualidad
     *
     * @param string $montomensualidad
     *
     * @return Inscripcion
     */
    public function setMontomensualidad($montomensualidad)
    {
        $this->montomensualidad = $montomensualidad;

        return $this;
    }

    /**
     * Get montomensualidad
     *
     * @return string
     */
    public function getMontomensualidad()
    {
        return $this->montomensualidad;
    }

    /**
     * Set estadoinscripcion
     *
     * @param boolean $estadoinscripcion
     *
     * @return Inscripcion
     */
    public function setEstadoinscripcion($estadoinscripcion)
    {
        $this->estadoinscripcion = $estadoinscripcion;

        return $this;
    }

    /**
     * Get estadoinscripcion
     *
     * @return boolean
     */
    public function getEstadoinscripcion()
    {
        return $this->estadoinscripcion;
    }

    /**
     * Get idinscripcion
     *
     * @return integer
     */
    public function getIdinscripcion()
    {
        return $this->idinscripcion;
    }
}
