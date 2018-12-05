<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventario
 *
 * @ORM\Table(name="inventario", indexes={@ORM\Index(name="FK_RELATIONSHIP_42", columns={"IDMOVINV"}), @ORM\Index(name="FK_RELATIONSHIP_44", columns={"IDINSUMO"})})
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
     * @ORM\Column(name="IDEXPBECARIO", type="integer", nullable=true)
     */
    private $idexpbecario;

    /**
     * @var integer
     *
     * @ORM\Column(name="CANTIDADINVENTARIO", type="integer", nullable=true)
     */
    private $cantidadinventario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAINVENTARIO", type="datetime", nullable=true)
     */
    private $fechainventario;

    /**
     * @var \Movimientoinventario
     *
     * @ORM\ManyToOne(targetEntity="Movimientoinventario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMOVINV", referencedColumnName="IDMOVINV")
     * })
     */
    private $idmovinv;

    /**
     * @var \Insumo
     *
     * @ORM\ManyToOne(targetEntity="Insumo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDINSUMO", referencedColumnName="IDINSUMO")
     * })
     */
    private $idinsumo;



    /**
     * Set idexpbecario
     *
     * @param integer $idexpbecario
     *
     * @return Inventario
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

    /**
     * Set idmovinv
     *
     * @param \AppBundle\Entity\Movimientoinventario $idmovinv
     *
     * @return Inventario
     */
    public function setIdmovinv(\AppBundle\Entity\Movimientoinventario $idmovinv = null)
    {
        $this->idmovinv = $idmovinv;

        return $this;
    }

    /**
     * Get idmovinv
     *
     * @return \AppBundle\Entity\Movimientoinventario
     */
    public function getIdmovinv()
    {
        return $this->idmovinv;
    }
}
