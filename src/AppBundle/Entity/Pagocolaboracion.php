<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use AppBundle\Entity\Colaboracionmonetaria;

/**
 * Colaboracionmonetaria
 *
 * @ORM\Table(name="colaboracionmonetaria")
 * @ORM\Entity
 */
class Pagocolaboracion
{
    
      /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

     /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="apellido", type="string", length=50, nullable=true)
     */
    private $apellido;
    
      /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="telefono", type="string", length=10, nullable=true)
     */
    private $telefono;
    
      /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=180, nullable=false)
     */
    private $email;
    
      /**
     * @var float
     * @Assert\NotBlank()
     * @ORM\Column(name="monto", type="float", precision=10, scale=0, nullable=true)
     */
    private $monto;
    
     /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="pago", type="string", length=100, nullable=true)
     */
    private $pago;
    
      /**
     * @var \DateTime
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     * @Assert\Type("\DateTime")
     */
    private $fecha;
    
      /**
     * @var integer
     *
     * @ORM\Column(name="idpagocolaboracion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpagocolaboracion;
    
     /**
     * @var string
     *
     * @ORM\Column(name="descripcionpago", type="string", length=250, nullable=true)
     */
    private $descripcionpago;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="descripcioncolaboracion", type="string", length=100, nullable=true)
     */
    private $descripcioncolaboracion;
    
      /**
     * @var string
     *
     * @ORM\Column(name="pagorealizado", type="string", length=2, nullable=true)
     */
    private $pagorealizado;
    
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
    public function setIdusuario(\SalexUserBundle\Entity\User $idusuario=null) {
        $this->idusuario = $idusuario;
    }
    
    
    function getIdpagocolaboracion() {
        return $this->idpagocolaboracion;
    }

    function getDescripcionpago() {
        return $this->descripcionpago;
    }

    function setIdpagocolaboracion($idpagocolaboracion) {
        $this->idpagocolaboracion = $idpagocolaboracion;
    }

    function setDescripcionpago($descripcionpago) {
        $this->descripcionpago = $descripcionpago;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function getMonto() {
        return $this->monto;
    }

    function getPago() {
        return $this->pago;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setMonto($monto) {
        $this->monto = $monto;
    }

    function setPago($pago) {
        $this->pago = $pago;
    }

    function setFecha(\DateTime $fecha) {
        $this->fecha = $fecha;
    }

    function getDescripcioncolaboracion() {
        return $this->descripcioncolaboracion;
    }

    function setDescripcioncolaboracion($descripcioncolaboracion) {
        $this->descripcioncolaboracion = $descripcioncolaboracion;
    }

    function getPagorealizado() {
        return $this->pagorealizado;
    }

    function setPagorealizado($pagorealizado) {
        $this->pagorealizado = $pagorealizado;
    }



}