<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cheque
 *
 * @ORM\Table(name="cheque", indexes={@ORM\Index(name="FK_RELATIONSHIP_17", columns={"IDEMISOR"})})
 * @ORM\Entity
 */
class Cheque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCHEQUE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcheque;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDEXPBECARIO", type="integer", nullable=true)
     */
    private $idexpbecario;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGOCHEQUE", type="string", length=25, nullable=true)
     */
    private $codigocheque;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTOCHEQUE", type="float", precision=10, scale=0, nullable=true)
     */
    private $montocheque;

    /**
     * @var string
     *
     * @ORM\Column(name="DESTINATARIOCHEQUE", type="string", length=50, nullable=true)
     */
    private $destinatariocheque;

    /**
     * @var string
     *
     * @ORM\Column(name="BANCOCHEQUE", type="string", length=250, nullable=true)
     */
    private $bancocheque;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHAEMISIONCHEQUE", type="date", nullable=true)
     */
    private $fechaemisioncheque;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADOCHEQUE", type="string", length=25, nullable=true)
     */
    private $estadocheque;

    /**
     * @var \Emisor
     *
     * @ORM\ManyToOne(targetEntity="Emisor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDEMISOR", referencedColumnName="IDEMISOR")
     * })
     */
    private $idemisor;



    /**
     * Set idexpbecario
     *
     * @param integer $idexpbecario
     *
     * @return Cheque
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
     * Set codigocheque
     *
     * @param string $codigocheque
     *
     * @return Cheque
     */
    public function setCodigocheque($codigocheque)
    {
        $this->codigocheque = $codigocheque;

        return $this;
    }

    /**
     * Get codigocheque
     *
     * @return string
     */
    public function getCodigocheque()
    {
        return $this->codigocheque;
    }

    /**
     * Set montocheque
     *
     * @param float $montocheque
     *
     * @return Cheque
     */
    public function setMontocheque($montocheque)
    {
        $this->montocheque = $montocheque;

        return $this;
    }

    /**
     * Get montocheque
     *
     * @return float
     */
    public function getMontocheque()
    {
        return $this->montocheque;
    }

    /**
     * Set destinatariocheque
     *
     * @param string $destinatariocheque
     *
     * @return Cheque
     */
    public function setDestinatariocheque($destinatariocheque)
    {
        $this->destinatariocheque = $destinatariocheque;

        return $this;
    }

    /**
     * Get destinatariocheque
     *
     * @return string
     */
    public function getDestinatariocheque()
    {
        return $this->destinatariocheque;
    }

    /**
     * Set bancocheque
     *
     * @param string $bancocheque
     *
     * @return Cheque
     */
    public function setBancocheque($bancocheque)
    {
        $this->bancocheque = $bancocheque;

        return $this;
    }

    /**
     * Get bancocheque
     *
     * @return string
     */
    public function getBancocheque()
    {
        return $this->bancocheque;
    }

    /**
     * Set fechaemisioncheque
     *
     * @param \DateTime $fechaemisioncheque
     *
     * @return Cheque
     */
    public function setFechaemisioncheque($fechaemisioncheque)
    {
        $this->fechaemisioncheque = $fechaemisioncheque;

        return $this;
    }

    /**
     * Get fechaemisioncheque
     *
     * @return \DateTime
     */
    public function getFechaemisioncheque()
    {
        return $this->fechaemisioncheque;
    }

    /**
     * Set estadocheque
     *
     * @param string $estadocheque
     *
     * @return Cheque
     */
    public function setEstadocheque($estadocheque)
    {
        $this->estadocheque = $estadocheque;

        return $this;
    }

    /**
     * Get estadocheque
     *
     * @return string
     */
    public function getEstadocheque()
    {
        return $this->estadocheque;
    }

    /**
     * Get idcheque
     *
     * @return integer
     */
    public function getIdcheque()
    {
        return $this->idcheque;
    }

    /**
     * Set idemisor
     *
     * @param \AppBundle\Entity\Emisor $idemisor
     *
     * @return Cheque
     */
    public function setIdemisor(\AppBundle\Entity\Emisor $idemisor = null)
    {
        $this->idemisor = $idemisor;

        return $this;
    }

    /**
     * Get idemisor
     *
     * @return \AppBundle\Entity\Emisor
     */
    public function getIdemisor()
    {
        return $this->idemisor;
    }
}
