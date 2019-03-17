<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Serviciosocial
 *
 * @ORM\Table(name="serviciosocial", indexes={@ORM\Index(name="FK_RELATIONSHIP_35", columns={"IDPROYECTSERVISOCIAL"})})
 * @ORM\Entity
 */
class Serviciosocial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDSERVICIOSOCIAL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idserviciosocial;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDEXPBECARIO", type="integer", nullable=true)
     */
    private $idexpbecario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAAPROVACIONSERVICIO", type="date", nullable=true)
     */
    private $fechaaprovacionservicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAINICIOSERVICIO", type="date", nullable=true)
     */
    private $fechainicioservicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAFINSERVICIO", type="date", nullable=true)
     */
    private $fechafinservicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADOSERVICIO", type="integer", nullable=true)
     */
    private $estadoservicio;

    /**
     * @var \Proyectoserviciosocial
     *
     * @ORM\ManyToOne(targetEntity="Proyectoserviciosocial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDPROYECTSERVISOCIAL", referencedColumnName="IDPROYECTSERVISOCIAL")
     * })
     */
    private $idproyectservisocial;
  
 
    /**
     * @var \idusuario
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="idusuario", referencedColumnName="id")
     * })
     */
    private $idusuario;
    
    
        /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="ESTADOPROYECTO", type="string", length=10, nullable=true)
     */
    private $estadoproyecto;
    
         /**
     * @var string
     *
     * @ORM\Column(name="NOMBREBECARIO", type="string", length=300, nullable=true)
     */
    private $nombrebecario;
    
    
    function getNombrebecario() {
        return $this->nombrebecario;
    }

    function setNombrebecario($nombrebecario) {
        $this->nombrebecario = $nombrebecario;
    }
    
    
      /**
     * Get idusuario
     *
     * @return integer
     */
    public function getIdusuario() {
        return $this->idusuario;
    }

    
    /**
     * Set idusuario
     *
     * @param \SalexUserBundle\Entity\User $idusuario
     *
     * @return Movimiento
     */
    public function setIdusuario(\SalexUserBundle\Entity\User $idusuario = null) {
        $this->idusuario = $idusuario;
    }
    
    
    /**
     * Set idexpbecario
     *
     * @param integer $idexpbecario
     *
     * @return Serviciosocial
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
     * Set fechaaprovacionservicio
     *
     * @param \DateTime $fechaaprovacionservicio
     *
     * @return Serviciosocial
     */
    public function setFechaaprovacionservicio($fechaaprovacionservicio)
    {
        $this->fechaaprovacionservicio = $fechaaprovacionservicio;

        return $this;
    }

    /**
     * Get fechaaprovacionservicio
     *
     * @return \DateTime
     */
    public function getFechaaprovacionservicio()
    {
        return $this->fechaaprovacionservicio;
    }

    /**
     * Set fechainicioservicio
     *
     * @param \DateTime $fechainicioservicio
     *
     * @return Serviciosocial
     */
    public function setFechainicioservicio($fechainicioservicio)
    {
        $this->fechainicioservicio = $fechainicioservicio;

        return $this;
    }

    /**
     * Get fechainicioservicio
     *
     * @return \DateTime
     */
    public function getFechainicioservicio()
    {
        return $this->fechainicioservicio;
    }

    /**
     * Set fechafinservicio
     *
     * @param \DateTime $fechafinservicio
     *
     * @return Serviciosocial
     */
    public function setFechafinservicio($fechafinservicio)
    {
        $this->fechafinservicio = $fechafinservicio;

        return $this;
    }

    /**
     * Get fechafinservicio
     *
     * @return \DateTime
     */
    public function getFechafinservicio()
    {
        return $this->fechafinservicio;
    }

    /**
     * Set estadoservicio
     *
     * @param integer $estadoservicio
     *
     * @return Serviciosocial
     */
    public function setEstadoservicio($estadoservicio)
    {
        $this->estadoservicio = $estadoservicio;

        return $this;
    }

    /**
     * Get estadoservicio
     *
     * @return integer
     */
    public function getEstadoservicio()
    {
        return $this->estadoservicio;
    }

    /**
     * Get idserviciosocial
     *
     * @return integer
     */
    public function getIdserviciosocial()
    {
        return $this->idserviciosocial;
    }

    /**
     * Set idproyectservisocial
     *
     * @param \AppBundle\Entity\Proyectoserviciosocial $idproyectservisocial
     *
     * @return Serviciosocial
     */
    public function setIdproyectservisocial(\AppBundle\Entity\Proyectoserviciosocial $idproyectservisocial = null)
    {
        $this->idproyectservisocial = $idproyectservisocial;

        return $this;
    }

    /**
     * Get idproyectservisocial
     *
     * @return \AppBundle\Entity\Proyectoserviciosocial
     */
    public function getIdproyectservisocial()
    {
        return $this->idproyectservisocial;
    }
    
    function getEstadoproyecto() {
        return $this->estadoproyecto;
    }

    function setEstadoproyecto($estadoproyecto) {
        $this->estadoproyecto = $estadoproyecto;
    }


}
