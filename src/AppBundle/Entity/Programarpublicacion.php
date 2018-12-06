<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Programarpublicacion
 *
 * @ORM\Table(name="programarpublicacion", indexes={@ORM\Index(name="FK_RELATIONSHIP_12", columns={"IDCONTENIDO"})})
 * * @ORM\Entity
 */
class Programarpublicacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDPUBLICACION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpublicacion;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="FECHAPUBLICACION", type="date", nullable=true)
     */
    private $fechapublicacion;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="HORAPUBLICACION", type="time", nullable=true)
     */
    private $horapublicacion;

    /**
     * @var integer
     * @Assert\NotBlank()
     * @ORM\Column(name="ESTADOPULICACION", type="integer", nullable=true)
     */
    private $estadopulicacion;

    /**
     * @var \Publicacioncontenido
     *
     * @ORM\ManyToOne(targetEntity="Publicacioncontenido")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="IDCONTENIDO", referencedColumnName="IDCONTENIDO")
     * })
     * @Assert\NotBlank()
     */
    private $idcontenido;



    /**
     * Set fechapublicacion
     *
     * @param \DateTime $fechapublicacion
     *
     * @return Programarpublicacion
     */
    public function setFechapublicacion($fechapublicacion)
    {
        $this->fechapublicacion = $fechapublicacion;

        return $this;
    }

    /**
     * Get fechapublicacion
     *
     * @return \DateTime
     */
    public function getFechapublicacion()
    {
        return $this->fechapublicacion;
    }

    /**
     * Set horapublicacion
     *
     * @param \DateTime $horapublicacion
     *
     * @return Programarpublicacion
     */
    public function setHorapublicacion($horapublicacion)
    {
        $this->horapublicacion = $horapublicacion;

        return $this;
    }

    /**
     * Get horapublicacion
     *
     * @return \DateTime
     */
    public function getHorapublicacion()
    {
        return $this->horapublicacion;
    }

    /**
     * Set estadopulicacion
     *
     * @param integer $estadopulicacion
     *
     * @return Programarpublicacion
     */
    public function setEstadopulicacion($estadopulicacion)
    {
        $this->estadopulicacion = $estadopulicacion;

        return $this;
    }

    /**
     * Get estadopulicacion
     *
     * @return integer
     */
    public function getEstadopulicacion()
    {
        return $this->estadopulicacion;
    }

    /**
     * Get idpublicacion
     *
     * @return integer
     */
    public function getIdpublicacion()
    {
        return $this->idpublicacion;
    }

    /**
     * Set idcontenido
     *
     * @param \AppBundle\Entity\Publicacioncontenido $idcontenido
     *
     * @return Programarpublicacion
     */
    public function setIdcontenido(\AppBundle\Entity\Publicacioncontenido $idcontenido = null)
    {
        $this->idcontenido = $idcontenido;

        return $this;
    }

    /**
     * Get idcontenido
     *
     * @return \AppBundle\Entity\Publicacioncontenido
     */
    public function getIdcontenido()
    {
        return $this->idpublicacion;
    }  
    
       public function __toString(){
          return $this->getIdpublicacion();
    }
    
}
