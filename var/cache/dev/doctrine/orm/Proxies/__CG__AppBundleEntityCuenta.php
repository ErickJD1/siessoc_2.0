<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cuenta extends \AppBundle\Entity\Cuenta implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'idcuenta', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'numcuenta', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'nomcuenta', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'descripcioncuenta', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'fechaapertura', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'saldocuenta', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'estadocuenta', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'idtipocuenta', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'idbanco', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'idusuario'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'idcuenta', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'numcuenta', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'nomcuenta', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'descripcioncuenta', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'fechaapertura', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'saldocuenta', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'estadocuenta', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'idtipocuenta', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'idbanco', '' . "\0" . 'AppBundle\\Entity\\Cuenta' . "\0" . 'idusuario'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cuenta $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdusuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdusuario', []);

        return parent::getIdusuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdusuario(\SalexUserBundle\Entity\User $idusuario = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdusuario', [$idusuario]);

        return parent::setIdusuario($idusuario);
    }

    /**
     * {@inheritDoc}
     */
    public function setNumcuenta($numcuenta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumcuenta', [$numcuenta]);

        return parent::setNumcuenta($numcuenta);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumcuenta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumcuenta', []);

        return parent::getNumcuenta();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomcuenta($nomcuenta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomcuenta', [$nomcuenta]);

        return parent::setNomcuenta($nomcuenta);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomcuenta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomcuenta', []);

        return parent::getNomcuenta();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcioncuenta($descripcioncuenta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcioncuenta', [$descripcioncuenta]);

        return parent::setDescripcioncuenta($descripcioncuenta);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcioncuenta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcioncuenta', []);

        return parent::getDescripcioncuenta();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaapertura($fechaapertura)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaapertura', [$fechaapertura]);

        return parent::setFechaapertura($fechaapertura);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaapertura()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaapertura', []);

        return parent::getFechaapertura();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldocuenta($saldocuenta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldocuenta', [$saldocuenta]);

        return parent::setSaldocuenta($saldocuenta);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldocuenta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldocuenta', []);

        return parent::getSaldocuenta();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstadocuenta($estadocuenta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstadocuenta', [$estadocuenta]);

        return parent::setEstadocuenta($estadocuenta);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstadocuenta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstadocuenta', []);

        return parent::getEstadocuenta();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdcuenta()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdcuenta();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcuenta', []);

        return parent::getIdcuenta();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdbanco(\AppBundle\Entity\Banco $idbanco = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdbanco', [$idbanco]);

        return parent::setIdbanco($idbanco);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdbanco()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdbanco', []);

        return parent::getIdbanco();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdtipocuenta(\AppBundle\Entity\Tipocuenta $idtipocuenta = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdtipocuenta', [$idtipocuenta]);

        return parent::setIdtipocuenta($idtipocuenta);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdtipocuenta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtipocuenta', []);

        return parent::getIdtipocuenta();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
