<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitudpatrocinador
 *
 * @ORM\Table(name="solicitudpatrocinador")
 * @ORM\Entity
 */
class Solicitudpatrocinador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDSOLIPATROCINADOR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsolipatrocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="DOCIDENTIDADSOLIPATROCINADOR", type="string", length=20, nullable=true)
     */
    private $docidentidadsolipatrocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTOAPORTARSOLIPATROCINADOR", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $montoaportarsolipatrocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONOSOLIPATROCINADOR", type="string", length=256, nullable=true)
     */
    private $telefonosolipatrocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCIONSOLIPATROCINADOR", type="string", length=256, nullable=true)
     */
    private $direccionsolipatrocinador;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADOSOLIPATROCINADOR", type="string", length=1, nullable=true)
     */
    private $estadosolipatrocinador;



    /**
     * Set docidentidadsolipatrocinador
     *
     * @param string $docidentidadsolipatrocinador
     *
     * @return Solicitudpatrocinador
     */
    public function setDocidentidadsolipatrocinador($docidentidadsolipatrocinador)
    {
        $this->docidentidadsolipatrocinador = $docidentidadsolipatrocinador;

        return $this;
    }

    /**
     * Get docidentidadsolipatrocinador
     *
     * @return string
     */
    public function getDocidentidadsolipatrocinador()
    {
        return $this->docidentidadsolipatrocinador;
    }

    /**
     * Set montoaportarsolipatrocinador
     *
     * @param string $montoaportarsolipatrocinador
     *
     * @return Solicitudpatrocinador
     */
    public function setMontoaportarsolipatrocinador($montoaportarsolipatrocinador)
    {
        $this->montoaportarsolipatrocinador = $montoaportarsolipatrocinador;

        return $this;
    }

    /**
     * Get montoaportarsolipatrocinador
     *
     * @return string
     */
    public function getMontoaportarsolipatrocinador()
    {
        return $this->montoaportarsolipatrocinador;
    }

    /**
     * Set telefonosolipatrocinador
     *
     * @param string $telefonosolipatrocinador
     *
     * @return Solicitudpatrocinador
     */
    public function setTelefonosolipatrocinador($telefonosolipatrocinador)
    {
        $this->telefonosolipatrocinador = $telefonosolipatrocinador;

        return $this;
    }

    /**
     * Get telefonosolipatrocinador
     *
     * @return string
     */
    public function getTelefonosolipatrocinador()
    {
        return $this->telefonosolipatrocinador;
    }

    /**
     * Set direccionsolipatrocinador
     *
     * @param string $direccionsolipatrocinador
     *
     * @return Solicitudpatrocinador
     */
    public function setDireccionsolipatrocinador($direccionsolipatrocinador)
    {
        $this->direccionsolipatrocinador = $direccionsolipatrocinador;

        return $this;
    }

    /**
     * Get direccionsolipatrocinador
     *
     * @return string
     */
    public function getDireccionsolipatrocinador()
    {
        return $this->direccionsolipatrocinador;
    }

    /**
     * Set estadosolipatrocinador
     *
     * @param string $estadosolipatrocinador
     *
     * @return Solicitudpatrocinador
     */
    public function setEstadosolipatrocinador($estadosolipatrocinador)
    {
        $this->estadosolipatrocinador = $estadosolipatrocinador;

        return $this;
    }

    /**
     * Get estadosolipatrocinador
     *
     * @return string
     */
    public function getEstadosolipatrocinador()
    {
        return $this->estadosolipatrocinador;
    }

    /**
     * Get idsolipatrocinador
     *
     * @return integer
     */
    public function getIdsolipatrocinador()
    {
        return $this->idsolipatrocinador;
    }
}
