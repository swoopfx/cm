<?php

namespace DoctrineORMModule\Proxy\__CG__\CsnUser\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \CsnUser\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'username', 'email', 'password', 'role', 'language', 'state', '' . "\0" . 'CsnUser\\Entity\\User' . "\0" . 'question', 'answer', 'picture', 'registrationDate', 'registrationToken', 'emailConfirmed', 'friendsWithMe', 'myFriends', '' . "\0" . 'CsnUser\\Entity\\User' . "\0" . 'profiled', '' . "\0" . 'CsnUser\\Entity\\User' . "\0" . 'isProfiled', '' . "\0" . 'CsnUser\\Entity\\User' . "\0" . 'brokerChild', '' . "\0" . 'CsnUser\\Entity\\User' . "\0" . 'lastlogin', '' . "\0" . 'CsnUser\\Entity\\User' . "\0" . 'updatedOn'];
        }

        return ['__isInitialized__', 'id', 'username', 'email', 'password', 'role', 'language', 'state', '' . "\0" . 'CsnUser\\Entity\\User' . "\0" . 'question', 'answer', 'picture', 'registrationDate', 'registrationToken', 'emailConfirmed', 'friendsWithMe', 'myFriends', '' . "\0" . 'CsnUser\\Entity\\User' . "\0" . 'profiled', '' . "\0" . 'CsnUser\\Entity\\User' . "\0" . 'isProfiled', '' . "\0" . 'CsnUser\\Entity\\User' . "\0" . 'brokerChild', '' . "\0" . 'CsnUser\\Entity\\User' . "\0" . 'lastlogin', '' . "\0" . 'CsnUser\\Entity\\User' . "\0" . 'updatedOn'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
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
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguage($language)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguage', [$language]);

        return parent::setLanguage($language);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguage', []);

        return parent::getLanguage();
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
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', []);

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestion($question)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestion', [$question]);

        return parent::setQuestion($question);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestion', []);

        return parent::getQuestion();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnswer($answer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnswer', [$answer]);

        return parent::setAnswer($answer);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnswer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnswer', []);

        return parent::getAnswer();
    }

    /**
     * {@inheritDoc}
     */
    public function setPicture($picture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPicture', [$picture]);

        return parent::setPicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicture', []);

        return parent::getPicture();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegistrationDate($registrationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegistrationDate', [$registrationDate]);

        return parent::setRegistrationDate($registrationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegistrationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegistrationDate', []);

        return parent::getRegistrationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegistrationToken($registrationToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegistrationToken', [$registrationToken]);

        return parent::setRegistrationToken($registrationToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegistrationToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegistrationToken', []);

        return parent::getRegistrationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailConfirmed($emailConfirmed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailConfirmed', [$emailConfirmed]);

        return parent::setEmailConfirmed($emailConfirmed);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailConfirmed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailConfirmed', []);

        return parent::getEmailConfirmed();
    }

    /**
     * {@inheritDoc}
     */
    public function getMyFriends()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMyFriends', []);

        return parent::getMyFriends();
    }

    /**
     * {@inheritDoc}
     */
    public function addMyFriends(\Doctrine\Common\Collections\Collection $users)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMyFriends', [$users]);

        return parent::addMyFriends($users);
    }

    /**
     * {@inheritDoc}
     */
    public function addMyFriend(\CsnUser\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMyFriend', [$user]);

        return parent::addMyFriend($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMyFriends(\Doctrine\Common\Collections\Collection $users)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMyFriends', [$users]);

        return parent::removeMyFriends($users);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMyFriend(\CsnUser\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMyFriend', [$user]);

        return parent::removeMyFriend($user);
    }

    /**
     * {@inheritDoc}
     */
    public function addFriendWithMe(\CsnUser\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFriendWithMe', [$user]);

        return parent::addFriendWithMe($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFriendWithMe(\CsnUser\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFriendWithMe', [$user]);

        return parent::removeFriendWithMe($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getIndInfo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndInfo', []);

        return parent::getIndInfo();
    }

    /**
     * {@inheritDoc}
     */
    public function setIndInfo($info)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIndInfo', [$info]);

        return parent::setIndInfo($info);
    }

    /**
     * {@inheritDoc}
     */
    public function getComInfo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComInfo', []);

        return parent::getComInfo();
    }

    /**
     * {@inheritDoc}
     */
    public function setComInfo($info)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComInfo', [$info]);

        return parent::setComInfo($info);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsProfiled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsProfiled', []);

        return parent::getIsProfiled();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsProfiled($profile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsProfiled', [$profile]);

        return parent::setIsProfiled($profile);
    }

    /**
     * {@inheritDoc}
     */
    public function getBrokerChild()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrokerChild', []);

        return parent::getBrokerChild();
    }

    /**
     * {@inheritDoc}
     */
    public function setBrokerChild($broker)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrokerChild', [$broker]);

        return parent::setBrokerChild($broker);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastlogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastlogin', []);

        return parent::getLastlogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastlogin($log)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastlogin', [$log]);

        return parent::setLastlogin($log);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfiled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfiled', []);

        return parent::getProfiled();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfiled($pp = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfiled', [$pp]);

        return parent::setProfiled($pp);
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
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

}
