<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Ville extends \App\Entity\Ville implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'label', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'clients', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'region', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'site', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'biens', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'lat', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'lon'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'label', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'clients', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'region', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'site', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'biens', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'lat', '' . "\0" . 'App\\Entity\\Ville' . "\0" . 'lon'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Ville $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', []);

        return parent::getLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabel(string $label): \App\Entity\Ville
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabel', [$label]);

        return parent::setLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function getClients(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClients', []);

        return parent::getClients();
    }

    /**
     * {@inheritDoc}
     */
    public function addClient(\App\Entity\Client $client): \App\Entity\Ville
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addClient', [$client]);

        return parent::addClient($client);
    }

    /**
     * {@inheritDoc}
     */
    public function removeClient(\App\Entity\Client $client): \App\Entity\Ville
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeClient', [$client]);

        return parent::removeClient($client);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegion(): ?\App\Entity\Region
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegion', []);

        return parent::getRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegion(?\App\Entity\Region $region): \App\Entity\Ville
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegion', [$region]);

        return parent::setRegion($region);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getSite(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSite', []);

        return parent::getSite();
    }

    /**
     * {@inheritDoc}
     */
    public function addSite(\App\Entity\Site $site): \App\Entity\Ville
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSite', [$site]);

        return parent::addSite($site);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSite(\App\Entity\Site $site): \App\Entity\Ville
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSite', [$site]);

        return parent::removeSite($site);
    }

    /**
     * {@inheritDoc}
     */
    public function getBiens(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBiens', []);

        return parent::getBiens();
    }

    /**
     * {@inheritDoc}
     */
    public function addBien(\App\Entity\Bien $bien): \App\Entity\Ville
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBien', [$bien]);

        return parent::addBien($bien);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBien(\App\Entity\Bien $bien): \App\Entity\Ville
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBien', [$bien]);

        return parent::removeBien($bien);
    }

    /**
     * {@inheritDoc}
     */
    public function getLat(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLat', []);

        return parent::getLat();
    }

    /**
     * {@inheritDoc}
     */
    public function setLat(string $lat): \App\Entity\Ville
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLat', [$lat]);

        return parent::setLat($lat);
    }

    /**
     * {@inheritDoc}
     */
    public function getLon(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLon', []);

        return parent::getLon();
    }

    /**
     * {@inheritDoc}
     */
    public function setLon(string $lon): \App\Entity\Ville
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLon', [$lon]);

        return parent::setLon($lon);
    }

}
