<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expedientepatrocinador
 *
 * @ORM\Table(name="expedientepatrocinador")
 * @ORM\Entity
 */
class Expedientepatrocinador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDEXPPATROCINADOR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexppatrocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="DOCIDENTIDADPATROCINADOR", type="string", length=20, nullable=true)
     */
    private $docidentidadpatrocinador;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAREGISTROPATROCINADOR", type="datetime", nullable=true)
     */
    private $fecharegistropatrocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTOAPORTARPRATOCINADOR", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $montoaportarpratocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONOPATROCINADOR", type="string", length=11, nullable=true)
     */
    private $telefonopatrocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCIONPATROCINADOR", type="string", length=500, nullable=true)
     */
    private $direccionpatrocinador;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOPATROCINADOR", type="boolean", nullable=true)
     */
    private $estadopatrocinador;



    /**
     * Set docidentidadpatrocinador
     *
     * @param string $docidentidadpatrocinador
     *
     * @return Expedientepatrocinador
     */
    public function setDocidentidadpatrocinador($docidentidadpatrocinador)
    {
        $this->docidentidadpatrocinador = $docidentidadpatrocinador;

        return $this;
    }

    /**
     * Get docidentidadpatrocinador
     *
     * @return string
     */
    public function getDocidentidadpatrocinador()
    {
        return $this->docidentidadpatrocinador;
    }

    /**
     * Set fecharegistropatrocinador
     *
     * @param \DateTime $fecharegistropatrocinador
     *
     * @return Expedientepatrocinador
     */
    public function setFecharegistropatrocinador($fecharegistropatrocinador)
    {
        $this->fecharegistropatrocinador = $fecharegistropatrocinador;

        return $this;
    }

    /**
     * Get fecharegistropatrocinador
     *
     * @return \DateTime
     */
    public function getFecharegistropatrocinador()
    {
        return $this->fecharegistropatrocinador;
    }

    /**
     * Set montoaportarpratocinador
     *
     * @param string $montoaportarpratocinador
     *
     * @return Expedientepatrocinador
     */
    public function setMontoaportarpratocinador($montoaportarpratocinador)
    {
        $this->montoaportarpratocinador = $montoaportarpratocinador;

        return $this;
    }

    /**
     * Get montoaportarpratocinador
     *
     * @return string
     */
    public function getMontoaportarpratocinador()
    {
        return $this->montoaportarpratocinador;
    }

    /**
     * Set telefonopatrocinador
     *
     * @param string $telefonopatrocinador
     *
     * @return Expedientepatrocinador
     */
    public function setTelefonopatrocinador($telefonopatrocinador)
    {
        $this->telefonopatrocinador = $telefonopatrocinador;

        return $this;
    }

    /**
     * Get telefonopatrocinador
     *
     * @return string
     */
    public function getTelefonopatrocinador()
    {
        return $this->telefonopatrocinador;
    }

    /**
     * Set direccionpatrocinador
     *
     * @param string $direccionpatrocinador
     *
     * @return Expedientepatrocinador
     */
    public function setDireccionpatrocinador($direccionpatrocinador)
    {
        $this->direccionpatrocinador = $direccionpatrocinador;

        return $this;
    }

    /**
     * Get direccionpatrocinador
     *
     * @return string
     */
    public function getDireccionpatrocinador()
    {
        return $this->direccionpatrocinador;
    }

    /**
     * Set estadopatrocinador
     *
     * @param boolean $estadopatrocinador
     *
     * @return Expedientepatrocinador
     */
    public function setEstadopatrocinador($estadopatrocinador)
    {
        $this->estadopatrocinador = $estadopatrocinador;

        return $this;
    }

    /**
     * Get estadopatrocinador
     *
     * @return boolean
     */
    public function getEstadopatrocinador()
    {
        return $this->estadopatrocinador;
    }

    /**
     * Get idexppatrocinador
     *
     * @return integer
     */
    public function getIdexppatrocinador()
    {
        return $this->idexppatrocinador;
    }
}
