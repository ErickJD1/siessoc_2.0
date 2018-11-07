<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitudbecario
 *
 * @ORM\Table(name="solicitudbecario")
 * @ORM\Entity
 */
class Solicitudbecario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDSOLIBECARIO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsolibecario;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONOSOLIBECARIO", type="string", length=10, nullable=true)
     */
    private $telefonosolibecario;

    /**
     * @var string
     *
     * @ORM\Column(name="INGRESOSSOLIFAMILIABECARIO", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $ingresossolifamiliabecario;

    /**
     * @var integer
     *
     * @ORM\Column(name="MIEMBROSSOLIFAMILIABECARIO", type="integer", nullable=true)
     */
    private $miembrossolifamiliabecario;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPOSOLICASABECARIO", type="string", length=500, nullable=true)
     */
    private $tiposolicasabecario;

    /**
     * @var string
     *
     * @ORM\Column(name="CARRERASOLIESTUDIARBECARIO", type="string", length=256, nullable=true)
     */
    private $carrerasoliestudiarbecario;

    /**
     * @var string
     *
     * @ORM\Column(name="UNIVERSIDADSOLIBECARIO", type="string", length=100, nullable=true)
     */
    private $universidadsolibecario;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTOSOLIMATRICULABECARIO", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $montosolimatriculabecario;

    /**
     * @var string
     *
     * @ORM\Column(name="CUOTASOLIMENSUALBECARIO", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $cuotasolimensualbecario;

    /**
     * @var integer
     *
     * @ORM\Column(name="DURACIONSOLICARRERABECARIO", type="integer", nullable=true)
     */
    private $duracionsolicarrerabecario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="TRABAJOSOLIBECARIO", type="boolean", nullable=true)
     */
    private $trabajosolibecario;

    /**
     * @var string
     *
     * @ORM\Column(name="DOCSOLIIDENTIDADBECARIO", type="string", length=20, nullable=true)
     */
    private $docsoliidentidadbecario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ANIOSOLIINGRESOBECARIO", type="date", nullable=true)
     */
    private $aniosoliingresobecario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ANIOSOLIFINALIZACIONBECARIO", type="date", nullable=true)
     */
    private $aniosolifinalizacionbecario;

    /**
     * @var integer
     *
     * @ORM\Column(name="CANTSOLIHERMANOSBECARIO", type="integer", nullable=true)
     */
    private $cantsolihermanosbecario;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMSOLIPADREBECARIO", type="string", length=300, nullable=true)
     */
    private $nomsolipadrebecario;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMSOLIMADREBECARIO", type="string", length=300, nullable=true)
     */
    private $nomsolimadrebecario;

    /**
     * @var string
     *
     * @ORM\Column(name="TELSOLIEMERGENCIABECARIO", type="string", length=11, nullable=true)
     */
    private $telsoliemergenciabecario;

    /**
     * @var string
     *
     * @ORM\Column(name="TELSOLIPERSONALBECARIO", type="string", length=11, nullable=true)
     */
    private $telsolipersonalbecario;

    /**
     * @var integer
     *
     * @ORM\Column(name="MIEMBROSSOLIFAMILIBECARIO", type="integer", nullable=true)
     */
    private $miembrossolifamilibecario;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCIONSOLIBECARIO", type="string", length=500, nullable=true)
     */
    private $direccionsolibecario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOSOLIBECARIO", type="boolean", nullable=true)
     */
    private $estadosolibecario;



    /**
     * Set telefonosolibecario
     *
     * @param string $telefonosolibecario
     *
     * @return Solicitudbecario
     */
    public function setTelefonosolibecario($telefonosolibecario)
    {
        $this->telefonosolibecario = $telefonosolibecario;

        return $this;
    }

    /**
     * Get telefonosolibecario
     *
     * @return string
     */
    public function getTelefonosolibecario()
    {
        return $this->telefonosolibecario;
    }

    /**
     * Set ingresossolifamiliabecario
     *
     * @param string $ingresossolifamiliabecario
     *
     * @return Solicitudbecario
     */
    public function setIngresossolifamiliabecario($ingresossolifamiliabecario)
    {
        $this->ingresossolifamiliabecario = $ingresossolifamiliabecario;

        return $this;
    }

    /**
     * Get ingresossolifamiliabecario
     *
     * @return string
     */
    public function getIngresossolifamiliabecario()
    {
        return $this->ingresossolifamiliabecario;
    }

    /**
     * Set miembrossolifamiliabecario
     *
     * @param integer $miembrossolifamiliabecario
     *
     * @return Solicitudbecario
     */
    public function setMiembrossolifamiliabecario($miembrossolifamiliabecario)
    {
        $this->miembrossolifamiliabecario = $miembrossolifamiliabecario;

        return $this;
    }

    /**
     * Get miembrossolifamiliabecario
     *
     * @return integer
     */
    public function getMiembrossolifamiliabecario()
    {
        return $this->miembrossolifamiliabecario;
    }

    /**
     * Set tiposolicasabecario
     *
     * @param string $tiposolicasabecario
     *
     * @return Solicitudbecario
     */
    public function setTiposolicasabecario($tiposolicasabecario)
    {
        $this->tiposolicasabecario = $tiposolicasabecario;

        return $this;
    }

    /**
     * Get tiposolicasabecario
     *
     * @return string
     */
    public function getTiposolicasabecario()
    {
        return $this->tiposolicasabecario;
    }

    /**
     * Set carrerasoliestudiarbecario
     *
     * @param string $carrerasoliestudiarbecario
     *
     * @return Solicitudbecario
     */
    public function setCarrerasoliestudiarbecario($carrerasoliestudiarbecario)
    {
        $this->carrerasoliestudiarbecario = $carrerasoliestudiarbecario;

        return $this;
    }

    /**
     * Get carrerasoliestudiarbecario
     *
     * @return string
     */
    public function getCarrerasoliestudiarbecario()
    {
        return $this->carrerasoliestudiarbecario;
    }

    /**
     * Set universidadsolibecario
     *
     * @param string $universidadsolibecario
     *
     * @return Solicitudbecario
     */
    public function setUniversidadsolibecario($universidadsolibecario)
    {
        $this->universidadsolibecario = $universidadsolibecario;

        return $this;
    }

    /**
     * Get universidadsolibecario
     *
     * @return string
     */
    public function getUniversidadsolibecario()
    {
        return $this->universidadsolibecario;
    }

    /**
     * Set montosolimatriculabecario
     *
     * @param string $montosolimatriculabecario
     *
     * @return Solicitudbecario
     */
    public function setMontosolimatriculabecario($montosolimatriculabecario)
    {
        $this->montosolimatriculabecario = $montosolimatriculabecario;

        return $this;
    }

    /**
     * Get montosolimatriculabecario
     *
     * @return string
     */
    public function getMontosolimatriculabecario()
    {
        return $this->montosolimatriculabecario;
    }

    /**
     * Set cuotasolimensualbecario
     *
     * @param string $cuotasolimensualbecario
     *
     * @return Solicitudbecario
     */
    public function setCuotasolimensualbecario($cuotasolimensualbecario)
    {
        $this->cuotasolimensualbecario = $cuotasolimensualbecario;

        return $this;
    }

    /**
     * Get cuotasolimensualbecario
     *
     * @return string
     */
    public function getCuotasolimensualbecario()
    {
        return $this->cuotasolimensualbecario;
    }

    /**
     * Set duracionsolicarrerabecario
     *
     * @param integer $duracionsolicarrerabecario
     *
     * @return Solicitudbecario
     */
    public function setDuracionsolicarrerabecario($duracionsolicarrerabecario)
    {
        $this->duracionsolicarrerabecario = $duracionsolicarrerabecario;

        return $this;
    }

    /**
     * Get duracionsolicarrerabecario
     *
     * @return integer
     */
    public function getDuracionsolicarrerabecario()
    {
        return $this->duracionsolicarrerabecario;
    }

    /**
     * Set trabajosolibecario
     *
     * @param boolean $trabajosolibecario
     *
     * @return Solicitudbecario
     */
    public function setTrabajosolibecario($trabajosolibecario)
    {
        $this->trabajosolibecario = $trabajosolibecario;

        return $this;
    }

    /**
     * Get trabajosolibecario
     *
     * @return boolean
     */
    public function getTrabajosolibecario()
    {
        return $this->trabajosolibecario;
    }

    /**
     * Set docsoliidentidadbecario
     *
     * @param string $docsoliidentidadbecario
     *
     * @return Solicitudbecario
     */
    public function setDocsoliidentidadbecario($docsoliidentidadbecario)
    {
        $this->docsoliidentidadbecario = $docsoliidentidadbecario;

        return $this;
    }

    /**
     * Get docsoliidentidadbecario
     *
     * @return string
     */
    public function getDocsoliidentidadbecario()
    {
        return $this->docsoliidentidadbecario;
    }

    /**
     * Set aniosoliingresobecario
     *
     * @param \DateTime $aniosoliingresobecario
     *
     * @return Solicitudbecario
     */
    public function setAniosoliingresobecario($aniosoliingresobecario)
    {
        $this->aniosoliingresobecario = $aniosoliingresobecario;

        return $this;
    }

    /**
     * Get aniosoliingresobecario
     *
     * @return \DateTime
     */
    public function getAniosoliingresobecario()
    {
        return $this->aniosoliingresobecario;
    }

    /**
     * Set aniosolifinalizacionbecario
     *
     * @param \DateTime $aniosolifinalizacionbecario
     *
     * @return Solicitudbecario
     */
    public function setAniosolifinalizacionbecario($aniosolifinalizacionbecario)
    {
        $this->aniosolifinalizacionbecario = $aniosolifinalizacionbecario;

        return $this;
    }

    /**
     * Get aniosolifinalizacionbecario
     *
     * @return \DateTime
     */
    public function getAniosolifinalizacionbecario()
    {
        return $this->aniosolifinalizacionbecario;
    }

    /**
     * Set cantsolihermanosbecario
     *
     * @param integer $cantsolihermanosbecario
     *
     * @return Solicitudbecario
     */
    public function setCantsolihermanosbecario($cantsolihermanosbecario)
    {
        $this->cantsolihermanosbecario = $cantsolihermanosbecario;

        return $this;
    }

    /**
     * Get cantsolihermanosbecario
     *
     * @return integer
     */
    public function getCantsolihermanosbecario()
    {
        return $this->cantsolihermanosbecario;
    }

    /**
     * Set nomsolipadrebecario
     *
     * @param string $nomsolipadrebecario
     *
     * @return Solicitudbecario
     */
    public function setNomsolipadrebecario($nomsolipadrebecario)
    {
        $this->nomsolipadrebecario = $nomsolipadrebecario;

        return $this;
    }

    /**
     * Get nomsolipadrebecario
     *
     * @return string
     */
    public function getNomsolipadrebecario()
    {
        return $this->nomsolipadrebecario;
    }

    /**
     * Set nomsolimadrebecario
     *
     * @param string $nomsolimadrebecario
     *
     * @return Solicitudbecario
     */
    public function setNomsolimadrebecario($nomsolimadrebecario)
    {
        $this->nomsolimadrebecario = $nomsolimadrebecario;

        return $this;
    }

    /**
     * Get nomsolimadrebecario
     *
     * @return string
     */
    public function getNomsolimadrebecario()
    {
        return $this->nomsolimadrebecario;
    }

    /**
     * Set telsoliemergenciabecario
     *
     * @param string $telsoliemergenciabecario
     *
     * @return Solicitudbecario
     */
    public function setTelsoliemergenciabecario($telsoliemergenciabecario)
    {
        $this->telsoliemergenciabecario = $telsoliemergenciabecario;

        return $this;
    }

    /**
     * Get telsoliemergenciabecario
     *
     * @return string
     */
    public function getTelsoliemergenciabecario()
    {
        return $this->telsoliemergenciabecario;
    }

    /**
     * Set telsolipersonalbecario
     *
     * @param string $telsolipersonalbecario
     *
     * @return Solicitudbecario
     */
    public function setTelsolipersonalbecario($telsolipersonalbecario)
    {
        $this->telsolipersonalbecario = $telsolipersonalbecario;

        return $this;
    }

    /**
     * Get telsolipersonalbecario
     *
     * @return string
     */
    public function getTelsolipersonalbecario()
    {
        return $this->telsolipersonalbecario;
    }

    /**
     * Set miembrossolifamilibecario
     *
     * @param integer $miembrossolifamilibecario
     *
     * @return Solicitudbecario
     */
    public function setMiembrossolifamilibecario($miembrossolifamilibecario)
    {
        $this->miembrossolifamilibecario = $miembrossolifamilibecario;

        return $this;
    }

    /**
     * Get miembrossolifamilibecario
     *
     * @return integer
     */
    public function getMiembrossolifamilibecario()
    {
        return $this->miembrossolifamilibecario;
    }

    /**
     * Set direccionsolibecario
     *
     * @param string $direccionsolibecario
     *
     * @return Solicitudbecario
     */
    public function setDireccionsolibecario($direccionsolibecario)
    {
        $this->direccionsolibecario = $direccionsolibecario;

        return $this;
    }

    /**
     * Get direccionsolibecario
     *
     * @return string
     */
    public function getDireccionsolibecario()
    {
        return $this->direccionsolibecario;
    }

    /**
     * Set estadosolibecario
     *
     * @param boolean $estadosolibecario
     *
     * @return Solicitudbecario
     */
    public function setEstadosolibecario($estadosolibecario)
    {
        $this->estadosolibecario = $estadosolibecario;

        return $this;
    }

    /**
     * Get estadosolibecario
     *
     * @return boolean
     */
    public function getEstadosolibecario()
    {
        return $this->estadosolibecario;
    }

    /**
     * Get idsolibecario
     *
     * @return integer
     */
    public function getIdsolibecario()
    {
        return $this->idsolibecario;
    }
}
