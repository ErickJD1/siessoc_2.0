<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Insumo
 *
 * @ORM\Table(name="insumo", indexes={@ORM\Index(name="FK_RELATIONSHIP_45", columns={"IDTIPOINSUMO"})})
 * @ORM\Entity
 */
class Insumo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDINSUMO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinsumo;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBREINSUMO", type="string", length=250, nullable=true)
     */
    private $nombreinsumo;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONINSUMO", type="string", length=250, nullable=true)
     */
    private $descripcioninsumo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOINSUMO", type="boolean", nullable=true)
     */
    private $estadoinsumo;

    /**
     * @var \Tipoinsumo
     *
     * @ORM\ManyToOne(targetEntity="Tipoinsumo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDTIPOINSUMO", referencedColumnName="IDTIPOINSUMO")
     * })
     */
    private $idtipoinsumo;



    /**
     * Set nombreinsumo
     *
     * @param string $nombreinsumo
     *
     * @return Insumo
     */
    public function setNombreinsumo($nombreinsumo)
    {
        $this->nombreinsumo = $nombreinsumo;

        return $this;
    }

    /**
     * Get nombreinsumo
     *
     * @return string
     */
    public function getNombreinsumo()
    {
        return $this->nombreinsumo;
    }

    /**
     * Set descripcioninsumo
     *
     * @param string $descripcioninsumo
     *
     * @return Insumo
     */
    public function setDescripcioninsumo($descripcioninsumo)
    {
        $this->descripcioninsumo = $descripcioninsumo;

        return $this;
    }

    /**
     * Get descripcioninsumo
     *
     * @return string
     */
    public function getDescripcioninsumo()
    {
        return $this->descripcioninsumo;
    }

    /**
     * Set estadoinsumo
     *
     * @param boolean $estadoinsumo
     *
     * @return Insumo
     */
    public function setEstadoinsumo($estadoinsumo)
    {
        $this->estadoinsumo = $estadoinsumo;

        return $this;
    }

    /**
     * Get estadoinsumo
     *
     * @return boolean
     */
    public function getEstadoinsumo()
    {
        return $this->estadoinsumo;
    }

    /**
     * Get idinsumo
     *
     * @return integer
     */
    public function getIdinsumo()
    {
        return $this->idinsumo;
    }

    /**
     * Set idtipoinsumo
     *
     * @param \AppBundle\Entity\Tipoinsumo $idtipoinsumo
     *
     * @return Insumo
     */
    public function setIdtipoinsumo(\AppBundle\Entity\Tipoinsumo $idtipoinsumo = null)
    {
        $this->idtipoinsumo = $idtipoinsumo;

        return $this;
    }

    /**
     * Get idtipoinsumo
     *
     * @return \AppBundle\Entity\Tipoinsumo
     */
    public function getIdtipoinsumo()
    {
        return $this->idtipoinsumo;
    }
    
    public function __toString() {
        return $this->getNombreinsumo();
    }
}
