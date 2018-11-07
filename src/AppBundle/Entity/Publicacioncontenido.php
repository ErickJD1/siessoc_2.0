<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publicacioncontenido
 *
 * @ORM\Table(name="publicacioncontenido")
 * @ORM\Entity
 */
class Publicacioncontenido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCONTENIDO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontenido;

    /**
     * @var string
     *
     * @ORM\Column(name="TITULO", type="string", length=250, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBTITULO", type="string", length=250, nullable=true)
     */
    private $subtitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONCONTENIDO", type="string", length=250, nullable=true)
     */
    private $descripcioncontenido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHACONTENIDO", type="datetime", nullable=true)
     */
    private $fechacontenido;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOCONTENIDO", type="boolean", nullable=true)
     */
    private $estadocontenido;



    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Publicacioncontenido
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set subtitulo
     *
     * @param string $subtitulo
     *
     * @return Publicacioncontenido
     */
    public function setSubtitulo($subtitulo)
    {
        $this->subtitulo = $subtitulo;

        return $this;
    }

    /**
     * Get subtitulo
     *
     * @return string
     */
    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    /**
     * Set descripcioncontenido
     *
     * @param string $descripcioncontenido
     *
     * @return Publicacioncontenido
     */
    public function setDescripcioncontenido($descripcioncontenido)
    {
        $this->descripcioncontenido = $descripcioncontenido;

        return $this;
    }

    /**
     * Get descripcioncontenido
     *
     * @return string
     */
    public function getDescripcioncontenido()
    {
        return $this->descripcioncontenido;
    }

    /**
     * Set fechacontenido
     *
     * @param \DateTime $fechacontenido
     *
     * @return Publicacioncontenido
     */
    public function setFechacontenido($fechacontenido)
    {
        $this->fechacontenido = $fechacontenido;

        return $this;
    }

    /**
     * Get fechacontenido
     *
     * @return \DateTime
     */
    public function getFechacontenido()
    {
        return $this->fechacontenido;
    }

    /**
     * Set estadocontenido
     *
     * @param boolean $estadocontenido
     *
     * @return Publicacioncontenido
     */
    public function setEstadocontenido($estadocontenido)
    {
        $this->estadocontenido = $estadocontenido;

        return $this;
    }

    /**
     * Get estadocontenido
     *
     * @return boolean
     */
    public function getEstadocontenido()
    {
        return $this->estadocontenido;
    }

    /**
     * Get idcontenido
     *
     * @return integer
     */
    public function getIdcontenido()
    {
        return $this->idcontenido;
    }
}
