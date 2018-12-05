<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bitacoraserviciosocial
 *
 * @ORM\Table(name="bitacoraserviciosocial", indexes={@ORM\Index(name="FK_RELATIONSHIP_34", columns={"IDSERVICIOSOCIAL"})})
 * @ORM\Entity
 */
class Bitacoraserviciosocial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDBITACORA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbitacora;

    /**
     * @var string
     *
     * @ORM\Column(name="DETALLEBITACORA", type="string", length=250, nullable=true)
     */
    private $detallebitacora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHABITACORA", type="datetime", nullable=true)
     */
    private $fechabitacora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HORAINICIOBITACORA", type="time", nullable=true)
     */
    private $horainiciobitacora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HORAFINBITACORA", type="time", nullable=true)
     */
    private $horafinbitacora;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONACTIVIDADBITACORA", type="string", length=250, nullable=true)
     */
    private $descripcionactividadbitacora;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOBITACORA", type="boolean", nullable=true)
     */
    private $estadobitacora;

    /**
     * @var \Serviciosocial
     *
     * @ORM\ManyToOne(targetEntity="Serviciosocial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDSERVICIOSOCIAL", referencedColumnName="IDSERVICIOSOCIAL")
     * })
     */
    private $idserviciosocial;



    /**
     * Set detallebitacora
     *
     * @param string $detallebitacora
     *
     * @return Bitacoraserviciosocial
     */
    public function setDetallebitacora($detallebitacora)
    {
        $this->detallebitacora = $detallebitacora;

        return $this;
    }

    /**
     * Get detallebitacora
     *
     * @return string
     */
    public function getDetallebitacora()
    {
        return $this->detallebitacora;
    }

    /**
     * Set fechabitacora
     *
     * @param \DateTime $fechabitacora
     *
     * @return Bitacoraserviciosocial
     */
    public function setFechabitacora($fechabitacora)
    {
        $this->fechabitacora = $fechabitacora;

        return $this;
    }

    /**
     * Get fechabitacora
     *
     * @return \DateTime
     */
    public function getFechabitacora()
    {
        return $this->fechabitacora;
    }

    /**
     * Set horainiciobitacora
     *
     * @param \DateTime $horainiciobitacora
     *
     * @return Bitacoraserviciosocial
     */
    public function setHorainiciobitacora($horainiciobitacora)
    {
        $this->horainiciobitacora = $horainiciobitacora;

        return $this;
    }

    /**
     * Get horainiciobitacora
     *
     * @return \DateTime
     */
    public function getHorainiciobitacora()
    {
        return $this->horainiciobitacora;
    }

    /**
     * Set horafinbitacora
     *
     * @param \DateTime $horafinbitacora
     *
     * @return Bitacoraserviciosocial
     */
    public function setHorafinbitacora($horafinbitacora)
    {
        $this->horafinbitacora = $horafinbitacora;

        return $this;
    }

    /**
     * Get horafinbitacora
     *
     * @return \DateTime
     */
    public function getHorafinbitacora()
    {
        return $this->horafinbitacora;
    }

    /**
     * Set descripcionactividadbitacora
     *
     * @param string $descripcionactividadbitacora
     *
     * @return Bitacoraserviciosocial
     */
    public function setDescripcionactividadbitacora($descripcionactividadbitacora)
    {
        $this->descripcionactividadbitacora = $descripcionactividadbitacora;

        return $this;
    }

    /**
     * Get descripcionactividadbitacora
     *
     * @return string
     */
    public function getDescripcionactividadbitacora()
    {
        return $this->descripcionactividadbitacora;
    }

    /**
     * Set estadobitacora
     *
     * @param boolean $estadobitacora
     *
     * @return Bitacoraserviciosocial
     */
    public function setEstadobitacora($estadobitacora)
    {
        $this->estadobitacora = $estadobitacora;

        return $this;
    }

    /**
     * Get estadobitacora
     *
     * @return boolean
     */
    public function getEstadobitacora()
    {
        return $this->estadobitacora;
    }

    /**
     * Get idbitacora
     *
     * @return integer
     */
    public function getIdbitacora()
    {
        return $this->idbitacora;
    }

    /**
     * Set idserviciosocial
     *
     * @param \AppBundle\Entity\Serviciosocial $idserviciosocial
     *
     * @return Bitacoraserviciosocial
     */
    public function setIdserviciosocial(\AppBundle\Entity\Serviciosocial $idserviciosocial = null)
    {
        $this->idserviciosocial = $idserviciosocial;

        return $this;
    }

    /**
     * Get idserviciosocial
     *
     * @return \AppBundle\Entity\Serviciosocial
     */
    public function getIdserviciosocial()
    {
        return $this->idserviciosocial;
    }
}
