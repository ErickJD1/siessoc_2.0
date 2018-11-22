<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Tipomovimiento
 *
 * @ORM\Table(name="tipomovimiento")
 * @ORM\Entity
 * @UniqueEntity("nombretipo")
 */
class Tipomovimiento
{
    /**
     * @var integer
     * @Assert\NotBlank()
     * @ORM\Column(name="IDTIPOMOV", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipomov;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="NOMBRETIPO", type="string", length=50, nullable=true)
     */
    private $nombretipo;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="DESCRIPCIONTIPOMOV", type="string", length=250, nullable=true)
     */
    private $descripciontipomov;

    /**
     * @var boolean
     * @Assert\NotBlank()
     * @ORM\Column(name="ESTADOTIPOMOV", type="boolean", nullable=true)
     */
    private $estadotipomov;



    /**
     * Set nombretipo
     *
     * @param string $nombretipo
     *
     * @return Tipomovimiento
     */
    public function setNombretipo($nombretipo)
    {
        $this->nombretipo = $nombretipo;

        return $this;
    }

    /**
     * Get nombretipo
     *
     * @return string
     */
    public function getNombretipo()
    {
        return $this->nombretipo;
    }

    /**
     * Set descripciontipomov
     *
     * @param string $descripciontipomov
     *
     * @return Tipomovimiento
     */
    public function setDescripciontipomov($descripciontipomov)
    {
        $this->descripciontipomov = $descripciontipomov;

        return $this;
    }

    /**
     * Get descripciontipomov
     *
     * @return string
     */
    public function getDescripciontipomov()
    {
        return $this->descripciontipomov;
    }

    /**
     * Set estadotipomov
     *
     * @param boolean $estadotipomov
     *
     * @return Tipomovimiento
     */
    public function setEstadotipomov($estadotipomov)
    {
        $this->estadotipomov = $estadotipomov;

        return $this;
    }

    /**
     * Get estadotipomov
     *
     * @return boolean
     */
    public function getEstadotipomov()
    {
        return $this->estadotipomov;
    }

    /**
     * Get idtipomov
     *
     * @return integer
     */
    public function getIdtipomov()
    {
        return $this->idtipomov;
    }

    public function __toString(){
          return $this->getNombretipo();
    }

}
