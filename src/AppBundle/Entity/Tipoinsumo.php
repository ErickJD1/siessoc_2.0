<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Tipoinsumo
 *
 * @ORM\Table(name="tipoinsumo")
 * @ORM\Entity
 * @UniqueEntity("tipoinsumo")
 */
class Tipoinsumo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDTIPOINSUMO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipoinsumo;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPOINSUMO", type="string", length=200, nullable=true)
     * @Assert\NotBlank()
     */
    private $tipoinsumo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOTIPOINSUMO", type="boolean", nullable=true)
     */
    private $estadotipoinsumo;



    /**
     * Set tipoinsumo
     *
     * @param string $tipoinsumo
     *
     * @return Tipoinsumo
     */
    public function setTipoinsumo($tipoinsumo)
    {
        $this->tipoinsumo = $tipoinsumo;

        return $this;
    }

    /**
     * Get tipoinsumo
     *
     * @return string
     */
    public function getTipoinsumo()
    {
        return $this->tipoinsumo;
    }

    /**
     * Set estadotipoinsumo
     *
     * @param boolean $estadotipoinsumo
     *
     * @return Tipoinsumo
     */
    public function setEstadotipoinsumo($estadotipoinsumo)
    {
        $this->estadotipoinsumo = $estadotipoinsumo;

        return $this;
    }

    /**
     * Get estadotipoinsumo
     *
     * @return boolean
     */
    public function getEstadotipoinsumo()
    {
        return $this->estadotipoinsumo;
    }

    /**
     * Get idtipoinsumo
     *
     * @return integer
     */
    public function getIdtipoinsumo()
    {
        return $this->idtipoinsumo;
    }
    
    public function __toString() {
        return $this->getTipoinsumo();
    }
}
