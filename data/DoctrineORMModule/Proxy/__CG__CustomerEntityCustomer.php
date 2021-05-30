<?php

namespace DoctrineORMModule\Proxy\__CG__\Customer\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Customer extends \Customer\Entity\Customer implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'id', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'customerImage', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'user', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'name', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'customerCategory', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'address1', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'address2', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'city', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'state', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'country', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'dob', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'createdOn', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'updateOn', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'accountId', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'administrator', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'customerBroker', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'assignedChildBroker', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'proposal', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'recommendedPackages', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'isHidden', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'messages'];
        }

        return ['__isInitialized__', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'id', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'customerImage', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'user', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'name', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'customerCategory', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'address1', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'address2', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'city', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'state', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'country', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'dob', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'createdOn', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'updateOn', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'accountId', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'administrator', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'customerBroker', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'assignedChildBroker', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'proposal', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'recommendedPackages', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'isHidden', '' . "\0" . 'Customer\\Entity\\Customer' . "\0" . 'messages'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Customer $proxy) {
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
    public function getId()
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
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerImage', []);

        return parent::getCustomerImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomerImage($img)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomerImage', [$img]);

        return parent::setCustomerImage($img);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerCategory', []);

        return parent::getCustomerCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomerCategory($cat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomerCategory', [$cat]);

        return parent::setCustomerCategory($cat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getFullAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullAddress', []);

        return parent::getFullAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress1', []);

        return parent::getAddress1();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress1($add)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress1', [$add]);

        return parent::setAddress1($add);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress2', []);

        return parent::getAddress2();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress2($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress2', [$address]);

        return parent::setAddress2($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', []);

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', [$state]);

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($count)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$count]);

        return parent::setCountry($count);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function getDob()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDob', []);

        return parent::getDob();
    }

    /**
     * {@inheritDoc}
     */
    public function setDob($dob)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDob', [$dob]);

        return parent::setDob($dob);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedOn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedOn', []);

        return parent::getCreatedOn();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedOn($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedOn', [$date]);

        return parent::setCreatedOn($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedOn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedOn', []);

        return parent::getUpdatedOn();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedOn($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedOn', [$date]);

        return parent::setUpdatedOn($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getBroker()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBroker', []);

        return parent::getBroker();
    }

    /**
     * {@inheritDoc}
     */
    public function setBroker($broker)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBroker', [$broker]);

        return parent::setBroker($broker);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgent', []);

        return parent::getAgent();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgent($agent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgent', [$agent]);

        return parent::setAgent($agent);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountId', []);

        return parent::getAccountId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountId($acc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountId', [$acc]);

        return parent::setAccountId($acc);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerToken', []);

        return parent::getCustomerToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomerToken($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomerToken', [$token]);

        return parent::setCustomerToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdministrator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdministrator', []);

        return parent::getAdministrator();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdministrator($admin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdministrator', [$admin]);

        return parent::setAdministrator($admin);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerBroker()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerBroker', []);

        return parent::getCustomerBroker();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomerBroker($broker)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomerBroker', [$broker]);

        return parent::setCustomerBroker($broker);
    }

    /**
     * {@inheritDoc}
     */
    public function getProposal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProposal', []);

        return parent::getProposal();
    }

    /**
     * {@inheritDoc}
     */
    public function addProposal($prop)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProposal', [$prop]);

        return parent::addProposal($prop);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssignedChildBroker()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssignedChildBroker', []);

        return parent::getAssignedChildBroker();
    }

    /**
     * {@inheritDoc}
     */
    public function addAssignedChildBroker(\GeneralServicer\Entity\BrokerChild $broker)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAssignedChildBroker', [$broker]);

        return parent::addAssignedChildBroker($broker);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAssignedChildBroker($element)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAssignedChildBroker', [$element]);

        return parent::removeAssignedChildBroker($element);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecommendedPackages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecommendedPackages', []);

        return parent::getRecommendedPackages();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecommendedPackages($pack)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecommendedPackages', [$pack]);

        return parent::setRecommendedPackages($pack);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsHidden()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsHidden', []);

        return parent::getIsHidden();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsHidden($hide)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsHidden', [$hide]);

        return parent::setIsHidden($hide);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessages', []);

        return parent::getMessages();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessages($mess)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessages', [$mess]);

        return parent::setMessages($mess);
    }

}
