<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tipomovimiento extends \AppBundle\Entity\Tipomovimiento implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Tipomovimiento' . "\0" . 'idtipomov', '' . "\0" . 'AppBundle\\Entity\\Tipomovimiento' . "\0" . 'nombretipo', '' . "\0" . 'AppBundle\\Entity\\Tipomovimiento' . "\0" . 'descripciontipomov', '' . "\0" . 'AppBundle\\Entity\\Tipomovimiento' . "\0" . 'clasificacion', '' . "\0" . 'AppBundle\\Entity\\Tipomovimiento' . "\0" . 'estadotipomov'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Tipomovimiento' . "\0" . 'idtipomov', '' . "\0" . 'AppBundle\\Entity\\Tipomovimiento' . "\0" . 'nombretipo', '' . "\0" . 'AppBundle\\Entity\\Tipomovimiento' . "\0" . 'descripciontipomov', '' . "\0" . 'AppBundle\\Entity\\Tipomovimiento' . "\0" . 'clasificacion', '' . "\0" . 'AppBundle\\Entity\\Tipomovimiento' . "\0" . 'estadotipomov'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tipomovimiento $proxy) {
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
    public function setNombretipo($nombretipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombretipo', [$nombretipo]);

        return parent::setNombretipo($nombretipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombretipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombretipo', []);

        return parent::getNombretipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripciontipomov($descripciontipomov)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripciontipomov', [$descripciontipomov]);

        return parent::setDescripciontipomov($descripciontipomov);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripciontipomov()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripciontipomov', []);

        return parent::getDescripciontipomov();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstadotipomov($estadotipomov)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstadotipomov', [$estadotipomov]);

        return parent::setEstadotipomov($estadotipomov);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstadotipomov()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstadotipomov', []);

        return parent::getEstadotipomov();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdtipomov()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdtipomov();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtipomov', []);

        return parent::getIdtipomov();
    }

    /**
     * {@inheritDoc}
     */
    public function setClasificacion($clasificacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClasificacion', [$clasificacion]);

        return parent::setClasificacion($clasificacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getClasificacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClasificacion', []);

        return parent::getClasificacion();
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
