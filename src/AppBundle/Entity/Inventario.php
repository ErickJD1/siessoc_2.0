<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Inventario
 *
 * @ORM\Table(name="inventario", indexes={@ORM\Index(name="FK_RELATIONSHIP_44", columns={"IDINSUMO"})})
 * @ORM\Entity
 */
class Inventario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDINVENTARIO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinventario;

    /**
     * @var integer
     *
     * @ORM\Column(name="CANTIDADINVENTARIO", type="integer", nullable=true)
     * @Assert\NotBlank()
     */
    private $cantidadinventario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAINVENTARIO", type="datetime", nullable=true)
     * @Assert\NotBlank()
     */
    private $fechainventario;


    /**
     * @var \Insumo
     *
     * @ORM\ManyToOne(targetEntity="Insumo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDINSUMO", referencedColumnName="IDINSUMO")
     * })
     * @Assert\NotBlank()
     */
    private $idinsumo;
    

        
    /**
     * Set cantidadinventario
     *
     * @param integer $cantidadinventario
     *
     * @return Inventario
     */
    public function setCantidadinventario($cantidadinventario)
    {
        $this->cantidadinventario = $cantidadinventario;

        return $this;
    }

    /**
     * Get cantidadinventario
     *
     * @return integer
     */
    public function getCantidadinventario()
    {
        return $this->cantidadinventario;
    }

    /**
     * Set fechainventario
     *
     * @param \DateTime $fechainventario
     *
     * @return Inventario
     */
    public function setFechainventario($fechainventario)
    {
        $this->fechainventario = $fechainventario;

        return $this;
    }

    /**
     * Get fechainventario
     *
     * @return \DateTime
     */
    public function getFechainventario()
    {
        return $this->fechainventario;
    }

    /**
     * Get idinventario
     *
     * @return integer
     */
    public function getIdinventario()
    {
        return $this->idinventario;
    }

    /**
     * Set idinsumo
     *
     * @param \AppBundle\Entity\Insumo $idinsumo
     *
     * @return Inventario
     */
    public function setIdinsumo(\AppBundle\Entity\Insumo $idinsumo = null)
    {
        $this->idinsumo = $idinsumo;

        return $this;
    }

    /**
     * Get idinsumo
     *
     * @return \AppBundle\Entity\Insumo
     */
    public function getIdinsumo()
    {
        return $this->idinsumo;
    }  
}
