<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RoleRepository")
 */
class Role
{
    /**
     * @var string
     *
     * @ORM\Column(name="IDROLE", type="string", nullable=false)
     * @ORM\Id
     *
     */
    private $idrole;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMROLE", type="string", length=25, nullable=true)
     */
    private $nomrole;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCIONROLE", type="string", length=100, nullable=true)
     */
    private $descripcionrole;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESTADOROLE", type="boolean", nullable=true)
     */
    private $estadorole;



    /**
     * Set nomrole
     *
     * @param string $nomrole
     *
     * @return Role
     */
    public function setNomrole($nomrole)
    {
        $this->nomrole = $nomrole;

        return $this;
    }

    /**
     * Get nomrole
     *
     * @return string
     */
    public function getNomrole()
    {
        return $this->nomrole;
    }

    /**
     * Set descripcionrole
     *
     * @param string $descripcionrole
     *
     * @return Role
     */
    public function setDescripcionrole($descripcionrole)
    {
        $this->descripcionrole = $descripcionrole;

        return $this;
    }

    /**
     * Get descripcionrole
     *
     * @return string
     */
    public function getDescripcionrole()
    {
        return $this->descripcionrole;
    }

    /**
     * Set estadorole
     *
     * @param boolean $estadorole
     *
     * @return Role
     */
    public function setEstadorole($estadorole)
    {
        $this->estadorole = $estadorole;

        return $this;
    }

    /**
     * Get estadorole
     *
     * @return boolean
     */
    public function getEstadorole()
    {
        return $this->estadorole;
    }

    /**
     * Get idrole
     *
     * @return integer
     */
    public function getIdrole()
    {
        return $this->idrole;
    }


    /**
     * @return string
     */
    public function __toString() {
        return $this->getDescripcionrole();
    }


    /**
     * Set idrole
     *
     * @param string $idrole
     *
     * @return Role
     */
    public function setIdrole($idrole)
    {
        $this->idrole = $idrole;

        return $this;
    }
}
