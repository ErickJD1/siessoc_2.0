<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Universidad
 *
 * @ORM\Table(name="universidad")
 * @ORM\Entity
 */
class Universidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDUNIVERSIDAD", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniversidad;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBREUNIVERSIDAD", type="string", length=256, nullable=true)
     */
    private $nombreuniversidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOUNIVERSIDAD", type="boolean", nullable=true)
     */
    private $estadouniversidad;

    /**
     * @var string
     *
     * @ORM\Column(name="SIGLAS", type="string", length=256, nullable=true)
     */
    private $siglas;



    /**
     * Set nombreuniversidad
     *
     * @param string $nombreuniversidad
     *
     * @return Universidad
     */
    public function setNombreuniversidad($nombreuniversidad)
    {
        $this->nombreuniversidad = $nombreuniversidad;

        return $this;
    }

    /**
     * Get nombreuniversidad
     *
     * @return string
     */
    public function getNombreuniversidad()
    {
        return $this->nombreuniversidad;
    }

    /**
     * Set estadouniversidad
     *
     * @param boolean $estadouniversidad
     *
     * @return Universidad
     */
    public function setEstadouniversidad($estadouniversidad)
    {
        $this->estadouniversidad = $estadouniversidad;

        return $this;
    }

    /**
     * Get estadouniversidad
     *
     * @return boolean
     */
    public function getEstadouniversidad()
    {
        return $this->estadouniversidad;
    }

    /**
     * Get iduniversidad
     *
     * @return integer
     */
    public function getIduniversidad()
    {
        return $this->iduniversidad;
    }

    
    function getSiglas() {
        return $this->siglas;
    }

    function setSiglas($siglas) {
        $this->siglas = $siglas;
    }

    
    public function __toString() {
        return $this->getNombreuniversidad();
    }


}
