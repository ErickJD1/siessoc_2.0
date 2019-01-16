<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use SalexUserBundle\Entity\User;

/**
 * Transaccioncolaboracion
 *
 * @ORM\Table(name="transaccioncolaboracion", indexes={@ORM\Index(name="FK_RELATIONSHIP_18", columns={"IDTIPOTRANSACCION"}), @ORM\Index(name="FK_RELATIONSHIP_19", columns={"IDCOLABORACION"})})
 * @ORM\Entity
 */
class Transaccioncolaboracion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDTRANSACCOLABORACION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtransaccolaboracion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHATRANSACCOLABORA", type="datetime", nullable=true)
     */
    private $fechatransaccolabora;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONTRANSACCOLABORA", type="string", length=200, nullable=true)
     */
    private $descripciontransaccolabora;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPOTRANSACCOLABORA", type="string", length=200, nullable=true)
     */
    private $tipotransaccolabora;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTOTRASACCOLABORA", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $montotrasaccolabora;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADOTRANSACCOLABORA", type="integer", nullable=true)
     */
    private $estadotransaccolabora;

    /**
     * @var string
     *
     * @ORM\Column(name="MESPAGOTRANSACCOLABORA", type="string", length=25, nullable=true)
     */
    private $mespagotransaccolabora;

    /**
     * @var \Tipotransaccion
     *
     * @ORM\ManyToOne(targetEntity="Tipotransaccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDTIPOTRANSACCION", referencedColumnName="IDTIPOTRANSACCION")
     * })
     */
    private $idtipotransaccion;

    /**
     * @var \Colaboracionmonetaria
     *
     * @ORM\ManyToOne(targetEntity="Colaboracionmonetaria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCOLABORACION", referencedColumnName="IDCOLABORACION")
     * })
     */
    private $idcolaboracion;



    /**
     * Set fechatransaccolabora
     *
     * @param \DateTime $fechatransaccolabora
     *
     * @return Transaccioncolaboracion
     */
    public function setFechatransaccolabora($fechatransaccolabora)
    {
        $this->fechatransaccolabora = $fechatransaccolabora;

        return $this;
    }

    /**
     * Get fechatransaccolabora
     *
     * @return \DateTime
     */
    public function getFechatransaccolabora()
    {
        return $this->fechatransaccolabora;
    }

    /**
     * Set descripciontransaccolabora
     *
     * @param string $descripciontransaccolabora
     *
     * @return Transaccioncolaboracion
     */
    public function setDescripciontransaccolabora($descripciontransaccolabora)
    {
        $this->descripciontransaccolabora = $descripciontransaccolabora;

        return $this;
    }

    /**
     * Get descripciontransaccolabora
     *
     * @return string
     */
    public function getDescripciontransaccolabora()
    {
        return $this->descripciontransaccolabora;
    }

    /**
     * Set tipotransaccolabora
     *
     * @param string $tipotransaccolabora
     *
     * @return Transaccioncolaboracion
     */
    public function setTipotransaccolabora($tipotransaccolabora)
    {
        $this->tipotransaccolabora = $tipotransaccolabora;

        return $this;
    }

    /**
     * Get tipotransaccolabora
     *
     * @return string
     */
    public function getTipotransaccolabora()
    {
        return $this->tipotransaccolabora;
    }

    /**
     * Set montotrasaccolabora
     *
     * @param string $montotrasaccolabora
     *
     * @return Transaccioncolaboracion
     */
    public function setMontotrasaccolabora($montotrasaccolabora)
    {
        $this->montotrasaccolabora = $montotrasaccolabora;

        return $this;
    }

    /**
     * Get montotrasaccolabora
     *
     * @return string
     */
    public function getMontotrasaccolabora()
    {
        return $this->montotrasaccolabora;
    }

    /**
     * Set estadotransaccolabora
     *
     * @param integer $estadotransaccolabora
     *
     * @return Transaccioncolaboracion
     */
    public function setEstadotransaccolabora($estadotransaccolabora)
    {
        $this->estadotransaccolabora = $estadotransaccolabora;

        return $this;
    }

    /**
     * Get estadotransaccolabora
     *
     * @return integer
     */
    public function getEstadotransaccolabora()
    {
        return $this->estadotransaccolabora;
    }

    /**
     * Set mespagotransaccolabora
     *
     * @param string $mespagotransaccolabora
     *
     * @return Transaccioncolaboracion
     */
    public function setMespagotransaccolabora($mespagotransaccolabora)
    {
        $this->mespagotransaccolabora = $mespagotransaccolabora;

        return $this;
    }

    /**
     * Get mespagotransaccolabora
     *
     * @return string
     */
    public function getMespagotransaccolabora()
    {
        return $this->mespagotransaccolabora;
    }

    /**
     * Get idtransaccolaboracion
     *
     * @return integer
     */
    public function getIdtransaccolaboracion()
    {
        return $this->idtransaccolaboracion;
    }

    /**
     * Set idcolaboracion
     *
     * @param \AppBundle\Entity\Colaboracionmonetaria $idcolaboracion
     *
     * @return Transaccioncolaboracion
     */
    public function setIdcolaboracion(\AppBundle\Entity\Colaboracionmonetaria $idcolaboracion = null)
    {
        $this->idcolaboracion = $idcolaboracion;

        return $this;
    }

    /**
     * Get idcolaboracion
     *
     * @return \AppBundle\Entity\Colaboracionmonetaria
     */
    public function getIdcolaboracion()
    {
        return $this->idcolaboracion;
    }

    /**
     * Set idtipotransaccion
     *
     * @param \AppBundle\Entity\Tipotransaccion $idtipotransaccion
     *
     * @return Transaccioncolaboracion
     */
    public function setIdtipotransaccion(\AppBundle\Entity\Tipotransaccion $idtipotransaccion = null)
    {
        $this->idtipotransaccion = $idtipotransaccion;

        return $this;
    }

    /**
     * Get idtipotransaccion
     *
     * @return \AppBundle\Entity\Tipotransaccion
     */
    public function getIdtipotransaccion()
    {
        return $this->idtipotransaccion;
    }
    
    public function __toString(){
          return $this->getIdtipotransaccion();
    }
    

    
}
