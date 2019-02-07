<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use SalexUserBundle\Entity\User;

/**
 * Colaboracionmonetaria
 *
 * @ORM\Table(name="colaboracionmonetaria")
 * @ORM\Entity
 * @UniqueEntity("descripcioncolaboracion")
 */
class Colaboracionmonetaria
{
    /**
     * @var string
     *
     * @ORM\Column(name="MONTOMESCOLABORACION", type="decimal", precision=10, scale=0, nullable=true)
     */
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
     * @var integer
     *
     * @ORM\Column(name="IDCOLABORACION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcolaboracion;
    
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
    
    

    
    private $montomescolaboracion;
    function getMontomescolaboracion() {
        return $this->montomescolaboracion;
    }

    function getDescripcioncolaboracion() {
        return $this->descripcioncolaboracion;
    }

    function getSaldocolaboracion() {
        return $this->saldocolaboracion;
    }

    function getEstadocolaboracion() {
        return $this->estadocolaboracion;
    }

    function setMontomescolaboracion($montomescolaboracion) {
        $this->montomescolaboracion = $montomescolaboracion;
    }

    function setDescripcioncolaboracion($descripcioncolaboracion) {
        $this->descripcioncolaboracion = $descripcioncolaboracion;
    }

    function setSaldocolaboracion($saldocolaboracion) {
        $this->saldocolaboracion = $saldocolaboracion;
    }

    function setEstadocolaboracion($estadocolaboracion) {
        $this->estadocolaboracion = $estadocolaboracion;
    }
    
    
    
      
    /**
     * Get idcolaboracion
     *
     * @return integer
     */
    public function getIdColaboracion()
    {
        return $this->idcolaboracion;
    }
    
     public function __toString(){
          return $this->getDescripcioncolaboracion();
    }


}
