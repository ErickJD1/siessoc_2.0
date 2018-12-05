<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Colaboracionmonetaria
 *
 * @ORM\Table(name="colaboracionmonetaria")
 * @ORM\Entity
 */
class Colaboracionmonetaria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCOLABORACION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcolaboracion;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTOMESCOLABORACION", type="decimal", precision=10, scale=0, nullable=true)
     * @Assert\NotNull
     * @Assert\Type(
     * type="numeric",
     * message="El valor {{ value }} no es del tipo {{ type }}."
     *)
     */
    private $montomescolaboracion;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONCOLABORACION", type="string", length=100, nullable=true)
     */
    private $descripcioncolaboracion;

    /**
     * @var string
     *
     * @ORM\Column(name="SALDOCOLABORACION", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $saldocolaboracion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOCOLABORACION", type="boolean", nullable=true)
     */
    private $estadocolaboracion;



    /**
     * Set montomescolaboracion
     *
     * @param string $montomescolaboracion
     *
     * @return Colaboracionmonetaria
     */
    public function setMontomescolaboracion($montomescolaboracion)
    {
        $this->montomescolaboracion = $montomescolaboracion;

        return $this;
    }

    /**
     * Get montomescolaboracion
     *
     * @return string
     */
    public function getMontomescolaboracion()
    {
        return $this->montomescolaboracion;
    }

    /**
     * Set descripcioncolaboracion
     *
     * @param string $descripcioncolaboracion
     *
     * @return Colaboracionmonetaria
     */
    public function setDescripcioncolaboracion($descripcioncolaboracion)
    {
        $this->descripcioncolaboracion = $descripcioncolaboracion;

        return $this;
    }

    /**
     * Get descripcioncolaboracion
     *
     * @return string
     */
    public function getDescripcioncolaboracion()
    {
        return $this->descripcioncolaboracion;
    }

    /**
     * Set saldocolaboracion
     *
     * @param string $saldocolaboracion
     *
     * @return Colaboracionmonetaria
     */
    public function setSaldocolaboracion($saldocolaboracion)
    {
        $this->saldocolaboracion = $saldocolaboracion;

        return $this;
    }

    /**
     * Get saldocolaboracion
     *
     * @return string
     */
    public function getSaldocolaboracion()
    {
        return $this->saldocolaboracion;
    }

    /**
     * Set estadocolaboracion
     *
     * @param boolean $estadocolaboracion
     *
     * @return Colaboracionmonetaria
     */
    public function setEstadocolaboracion($estadocolaboracion)
    {
        $this->estadocolaboracion = $estadocolaboracion;

        return $this;
    }

    /**
     * Get estadocolaboracion
     *
     * @return boolean
     */
    public function getEstadocolaboracion()
    {
        return $this->estadocolaboracion;
    }

    /**
     * Get idcolaboracion
     *
     * @return integer
     */
    public function getIdcolaboracion()
    {
        return $this->idcolaboracion;
    }
}
