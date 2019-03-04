<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Carbon\Carbon;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * ExpedienteBecario
 *
 * @ORM\Table(name="Expedientebecario")
 * @ORM\Entity(repositoryClass="src\AppBundle\Repository\SolicitudesRepository")
 * @ORM\HasLifecycleCallbacks
 * @Vich\Uploadable
 * @UniqueEntity("docexpidentidadbecario")
 */
class Expedientebecario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDEXPBECARIO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexpbecario;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="TELEFONOEXPBECARIO", type="string", length=10, nullable=true)
     */
    private $telefonoexpbecario;

    /**
     * @var string
     *
     * @ORM\Column(name="INGRESOSEXPFAMILIABECARIO", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $ingresosexpfamiliabecario;

    /**
     * @var integer
     * @Assert\NotBlank()
     * @ORM\Column(name="MIEMBROSEXPFAMILIABECARIO", type="integer", nullable=true)
     */
    private $miembrosexpfamiliabecario;

    /**
     * @var string
     * @ORM\Column(name="TIPOEXPCASABECARIO", type="string", length=500, nullable=true)
     */
    private $tipoexpcasabecario;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="CARRERAEXPESTUDIARBECARIO", type="string", length=256, nullable=true)
     */
    private $carreraexpestudiarbecario;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="UNIVERSIDADEXPBECARIO", type="string", length=100, nullable=true)
     */
    private $universidadexpbecario;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="MONTOEXPMATRICULABECARIO", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $montoexpmatriculabecario;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="CUOTAEXPMENSUALBECARIO", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $cuotaexpmensualbecario;

    /**
     * @var integer
     * @Assert\NotBlank()
     * @ORM\Column(name="DURACIONEXPCARRERABECARIO", type="integer", nullable=true)
     */
    private $duracionexpcarrerabecario;

    /**
     * @var boolean
     
     * @ORM\Column(name="TRABAJOEXPBECARIO", type="boolean", nullable=true)
     */
    private $trabajoexpbecario;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="DOCEXPIDENTIDADBECARIO", type="string", length=20, nullable=true)
     */
    private $docexpidentidadbecario;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="ANIOEXPINGRESOBECARIO", type="date", nullable=true)
     */
    private $anioexpingresobecario;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="ANIOEXPFINALIZACIONBECARIO", type="date", nullable=true)
     */
    private $anioexpfinalizacionbecario;

    /**
     * @var integer
     *
     * @ORM\Column(name="CANTEXPHERMANOSBECARIO", type="integer", nullable=true)
     */
    private $cantexphermanosbecario;

        /**
     * @var string
     *
     * @ORM\Column(name="NOMEXPPADREBECARIO", type="string", length=300, nullable=true)
     */
    private $nomexppadrebecario;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMEXPMADREBECARIO", type="string", length=300, nullable=true)
     */
    private $nomexpmadrebecario;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="TELEXPEMERGENCIABECARIO", type="string", length=11, nullable=true)
     */
    private $telexpemergenciabecario;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="TELEXPPERSONALBECARIO", type="string", length=11, nullable=true)
     */
    private $telexppersonalbecario;

    /**
     * @var integer
     *
     * @ORM\Column(name="MIEMBROSEXPFAMILIBECARIO", type="integer", nullable=true)
     */
    private $miembrosexpfamilibecario;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="DIRECCIONEXPBECARIO", type="string", length=500, nullable=true)
     */
    private $direccionexpbecario;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADOEXPBECARIO", type="integer", nullable=true)
     */
    private $estadoexpbecario;

 /**
     * @var string
     *
     * @ORM\Column(name="RELIGION", type="string", length=250, nullable=true)
     */
    private $religion;
    
     /**
     * @var integer
     * @Assert\NotBlank()
     * @ORM\Column(name="FECHANACIMIENTO", type="date", nullable=true)
     */
    private $fechaNacimiento;
    
     /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="SEXO", type="string", length=10, nullable=true)
     */
    private $sexo;

    /**
     * @var float
     * @Assert\NotBlank()
     * @ORM\Column(name="PAES", type="float", precision=10, scale=0, nullable=true)
     */
    private $paes;
    
    /**
     * @var string
     *
     * @ORM\Column(name="OCUPACIONPADRE", type="string", length=250, nullable=true)
     */
    private $ocupacionpadre;
    
      /**
     * @var string
     *
     * @ORM\Column(name="OCUPACIONMADRE", type="string", length=250, nullable=true)
     */
    private $ocupacionmadre;
    
     /**
     * @var boolean
     *
     * @ORM\Column(name="OTRASBECAS", type="boolean", nullable=true)
     */
    private $otrasbecas;
    
     /**
     * @var float
     *
     * @ORM\Column(name="MONTOOTRASBECAS", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $montootrasbecas;
    
    /**
     * @var string
     *
     * @ORM\Column(name="ANTECEDENTES", type="string", length=250, nullable=true)
     */
    private $antecedentes;
   
    
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
     * @Assert\Image(
     *     maxSize="5M",
     *     mimeTypes={"image/png", "image/jpeg", "image/pjpeg","application/pdf","application/xls","application/docx","application/txt",}   
     * )
     * @Vich\UploadableField(mapping="document_file", fileNameProperty="comprobante")
     * @var [type]
     */
    private $comprobante_file;

    /**
     * @ORM\Column(name="comprobante", type="string", nullable=true)
     * @var string
     */
    private $comprobante;
    
    /**
     * Set telefonoexpbecario
     *
     * @param string $telefonoexpbecario
     *
     * @return Solicitudbecario
     */
    
    
       /**
     * @var string
     *
     * @ORM\Column(name="NOMBREBECARIO", type="string", length=300, nullable=true)
     */
    private $nombrebecario;
    
    
     /**
     * Gets the value of comprobante_file.
     *
     * @return string
     */
    public function getComprobanteFile() {
        return $this->comprobante_file;
    }

    /**
     * Sets the value of comprobante_file.
     *
     * @param File $comprobante_file
     *
     * @return self
     */
    public function setComprobanteFile(File $comprobante_file) {
        $this->comprobante_file = $comprobante_file;

        // Only change the updated af if the file is really uploaded to avoid database updates.
        // This is needed when the file should be set when loading the entity.

        return $this;
    }

    /**
     * Get comprobante
     *
     * @return string
     */
    function getComprobante() {
        return $this->comprobante;
    }
    
    
    function setComprobante($comprobante) {
        $this->comprobante = $comprobante;
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
    public function setIdusuario(\SalexUserBundle\Entity\User $idusuario=null) {
        $this->idusuario = $idusuario;
    }
    
    public function setTelefonoexpbecario($telefonoexpbecario)
    {
        $this->telefonoexpbecario = $telefonoexpbecario;

        return $this;
    }

    function getMiembrosexpfamilibecario() {
        return $this->miembrosexpfamilibecario;
    }

    function getReligion() {
        return $this->religion;
    }

    function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getPaes() {
        return $this->paes;
    }

    function getOcupacionpadre() {
        return $this->ocupacionpadre;
    }

    function getOcupacionmadre() {
        return $this->ocupacionmadre;
    }

    function getOtrasbecas() {
        return $this->otrasbecas;
    }

    function getMontootrasbecas() {
        return $this->montootrasbecas;
    }

    function getAntecedentes() {
        return $this->antecedentes;
    }

    function setMiembrosexpfamilibecario($miembrosexpfamilibecario) {
        $this->miembrosexpfamilibecario = $miembrosexpfamilibecario;
    }

    function setReligion($religion) {
        $this->religion = $religion;
    }

    function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setPaes($paes) {
        $this->paes = $paes;
    }

    function setOcupacionpadre($ocupacionpadre) {
        $this->ocupacionpadre = $ocupacionpadre;
    }

    function setOcupacionmadre($ocupacionmadre) {
        $this->ocupacionmadre = $ocupacionmadre;
    }

    function setOtrasbecas($otrasbecas) {
        $this->otrasbecas = $otrasbecas;
    }

    function setMontootrasbecas($montootrasbecas) {
        $this->montootrasbecas = $montootrasbecas;
    }

    function setAntecedentes($antecedentes) {
        $this->antecedentes = $antecedentes;
    }

    
    function getNombrebecario() {
        return $this->nombrebecario;
    }

    function setNombrebecario($nombrebecario) {
        $this->nombrebecario = $nombrebecario;
    }
    
    
        /**
     * Get telefonoexpbecario
     *
     * @return string
     */
    public function getTelefonoExpbecario()
    {
        return $this->telefonoexpbecario;
    }

    /**
     * Set ingresosexpfamiliabecario
     *
     * @param string $ingresosexpfamiliabecario
     *
     * @return Solicitudbecario
     */
    public function setIngresosExpfamiliabecario($ingresosexpfamiliabecario)
    {
        $this->ingresosexpfamiliabecario = $ingresosexpfamiliabecario;

        return $this;
    }

    /**
     * Get ingresosexpfamiliabecario
     *
     * @return string
     */
    public function getIngresosExpfamiliabecario()
    {
        return $this->ingresosexpfamiliabecario;
    }

    /**
     * Set miembrosexpfamiliabecario
     *
     * @param integer $miembrosexpfamiliabecario
     *
     * @return Solicitudbecario
     */
    public function setMiembrosExpfamiliabecario($miembrosexpfamiliabecario)
    {
        $this->miembrosexpfamiliabecario = $miembrosexpfamiliabecario;

        return $this;
    }

    /**
     * Get miembrosexpfamiliabecario
     *
     * @return integer
     */
    public function getMiembrosExpfamiliabecario()
    {
        return $this->miembrosexpfamiliabecario;
    }

    /**
     * Set tipoexpcasabecario
     *
     * @param string $tipoexpcasabecario
     *
     * @return Solicitudbecario
     */
    public function setTipoExpcasabecario($tipoexpcasabecario)
    {
        $this->tipoexpcasabecario = $tipoexpcasabecario;

        return $this;
    }

    /**
     * Get tipoexpcasabecario
     *
     * @return string
     */
    public function getTipoExpcasabecario()
    {
        return $this->tipoexpcasabecario;
    }

    /**
     * Set carreraexpestudiarbecario
     *
     * @param string $carreraexpestudiarbecario
     *
     * @return Solicitudbecario
     */
    public function setCarreraExpestudiarbecario($carreraexpestudiarbecario)
    {
        $this->carreraexpestudiarbecario = $carreraexpestudiarbecario;

        return $this;
    }

    /**
     * Get carreraexpestudiarbecario
     *
     * @return string
     */
    public function getCarreraExpestudiarbecario()
    {
        return $this->carreraexpestudiarbecario;
    }

    /**
     * Set universidadexpbecario
     *
     * @param string $universidadexpbecario
     *
     * @return Solicitudbecario
     */
    public function setUniversidadExpbecario($universidadexpbecario)
    {
        $this->universidadexpbecario = $universidadexpbecario;

        return $this;
    }

    /**
     * Get universidadexpbecario
     *
     * @return string
     */
    public function getUniversidadExpbecario()
    {
        return $this->universidadexpbecario;
    }

    /**
     * Set montoexpmatriculabecario
     *
     * @param string $montoexpmatriculabecario
     *
     * @return Solicitudbecario
     */
    public function setMontoExpmatriculabecario($montoexpmatriculabecario)
    {
        $this->montoexpmatriculabecario = $montoexpmatriculabecario;

        return $this;
    }

    /**
     * Get montoexpmatriculabecario
     *
     * @return string
     */
    public function getMontoExpmatriculabecario()
    {
        return $this->montoexpmatriculabecario;
    }

    /**
     * Set cuotaexpmensualbecario
     *
     * @param string $cuotaexpmensualbecario
     *
     * @return Solicitudbecario
     */
    public function setCuotaExpmensualbecario($cuotaexpmensualbecario)
    {
        $this->cuotaexpmensualbecario = $cuotaexpmensualbecario;

        return $this;
    }

    /**
     * Get cuotaexpmensualbecario
     *
     * @return string
     */
    public function getCuotaExpmensualbecario()
    {
        return $this->cuotaexpmensualbecario;
    }

    /**
     * Set duracionexpcarrerabecario
     *
     * @param integer $duracionexpcarrerabecario
     *
     * @return Solicitudbecario
     */
    public function setDuracionExpcarrerabecario($duracionexpcarrerabecario)
    {
        $this->duracionexpcarrerabecario = $duracionexpcarrerabecario;

        return $this;
    }

    /**
     * Get duracionexpcarrerabecario
     *
     * @return integer
     */
    public function getDuracionExpcarrerabecario()
    {
        return $this->duracionexpcarrerabecario;
    }

    /**
     * Set trabajoexpbecario
     *
     * @param boolean $trabajoexpbecario
     *
     * @return Solicitudbecario
     */
    public function setTrabajoExpbecario($trabajoexpbecario)
    {
        $this->trabajoexpbecario = $trabajoexpbecario;

        return $this;
    }

    /**
     * Get trabajoexpbecario
     *
     * @return boolean
     */
    public function getTrabajoExpbecario()
    {
        return $this->trabajoexpbecario;
    }

    /**
     * Set docexpidentidadbecario
     *
     * @param string $docexpidentidadbecario
     *
     * @return Solicitudbecario
     */
    public function setDocExpidentidadbecario($docexpidentidadbecario)
    {
        $this->docexpidentidadbecario = $docexpidentidadbecario;

        return $this;
    }

    /**
     * Get docexpidentidadbecario
     *
     * @return string
     */
    public function getDocExpidentidadbecario()
    {
        return $this->docexpidentidadbecario;
    }

    /**
     * Set anioexpingresobecario
     *
     * @param \DateTime $anioexpingresobecario
     *
     * @return Solicitudbecario
     */
    public function setAnioExpingresobecario($anioexpingresobecario)
    {
        $this->anioexpingresobecario = $anioexpingresobecario;

        return $this;
    }

    /**
     * Get anioexpingresobecario
     *
     * @return \DateTime
     */
    public function getAnioExpingresobecario()
    {
        return $this->anioexpingresobecario;
    }

    /**
     * Set anioexpfinalizacionbecario
     *
     * @param \DateTime $anioexpfinalizacionbecario
     *
     * @return Solicitudbecario
     */
    public function setAnioExpfinalizacionbecario($anioexpfinalizacionbecario)
    {
        $this->anioexpfinalizacionbecario = $anioexpfinalizacionbecario;

        return $this;
    }

    /**
     * Get anioexpfinalizacionbecario
     *
     * @return \DateTime
     */
    public function getAnioExpfinalizacionbecario()
    {
        return $this->anioexpfinalizacionbecario;
    }

    /**
     * Set cantexphermanosbecario
     *
     * @param integer $cantexphermanosbecario
     *
     * @return Solicitudbecario
     */
    public function setCantExphermanosbecario($cantexphermanosbecario)
    {
        $this->cantexphermanosbecario = $cantexphermanosbecario;

        return $this;
    }

    /**
     * Get cantexphermanosbecario
     *
     * @return integer
     */
    public function getCantExphermanosbecario()
    {
        return $this->cantexphermanosbecario;
    }

    /**
     * Set nomexppadrebecario
     *
     * @param string $nomexppadrebecario
     *
     * @return Solicitudbecario
     */
    public function setNomExppadrebecario($nomexppadrebecario)
    {
        $this->nomexppadrebecario = $nomexppadrebecario;

        return $this;
    }

   
    /**
     * Get nomexppadrebecario
     *
     * @return string
     */
    public function getNomExppadrebecario()
    {
        return $this->nomexppadrebecario;
    }
    
    
    

    /**
     * Set nomexpmadrebecario
     *
     * @param string $nomexpmadrebecario
     *
     * @return Solicitudbecario
     */
    public function setNomExpmadrebecario($nomexpmadrebecario)
    {
        $this->nomexpmadrebecario = $nomexpmadrebecario;

        return $this;
    }

    /**
     * Get nomexpmadrebecario
     *
     * @return string
     */
    public function getNomExpmadrebecario()
    {
        return $this->nomexpmadrebecario;
    }

    /**
     * Set telexpemergenciabecario
     *
     * @param string $telexpemergenciabecario
     *
     * @return Solicitudbecario
     */
    public function setTelExpemergenciabecario($telexpemergenciabecario)
    {
        $this->telexpemergenciabecario = $telexpemergenciabecario;

        return $this;
    }

    /**
     * Get telexpemergenciabecario
     *
     * @return string
     */
    public function getTelExpemergenciabecario()
    {
        return $this->telexpemergenciabecario;
    }

    /**
     * Set telexppersonalbecario
     *
     * @param string $telexppersonalbecario
     *
     * @return Solicitudbecario
     */
    public function setTelExppersonalbecario($telexppersonalbecario)
    {
        $this->telexppersonalbecario = $telexppersonalbecario;

        return $this;
    }

    /**
     * Get telexppersonalbecario
     *
     * @return string
     */
    public function getTelExppersonalbecario()
    {
        return $this->telexppersonalbecario;
    }

    /**
     * Set direccionexpbecario
     *
     * @param string $direccionexpbecario
     *
     * @return Solicitudbecario
     */
    public function setDireccionExpbecario($direccionexpbecario)
    {
        $this->direccionexpbecario = $direccionexpbecario;

        return $this;
    }

    /**
     * Get direccionexpbecario
     *
     * @return string
     */
    public function getDireccionExpbecario()
    {
        return $this->direccionexpbecario;
    }

    /**
     * Set estadoexpbecario
     *
     * @param integer $estadoexpbecario
     *
     * @return Solicitudbecario
     */
    public function setEstadoExpbecario($estadoexpbecario)
    {
        $this->estadoexpbecario = $estadoexpbecario;

        return $this;
    }

    /**
     * Get estadoexpbecario
     *
     * @return integer
     */
    public function getEstadoExpbecario()
    {
        return $this->estadoexpbecario;
    }

    
    
    /**
     * Get idexpbecario
     *
     * @return integer
     */
    public function getIdExpbecario()
    {
        return $this->idexpbecario;
    }
    
    public function __toString() {
        return (String) $this->getNombrebecario();
    }

    
   
    
}

