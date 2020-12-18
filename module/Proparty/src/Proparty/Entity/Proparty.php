<?php
namespace Proparty\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use GeneralServicer\Entity\Document;
use Settings\Entity\Currency;
use Customer\Entity\Customer;
use Doctrine\Common\Collections\Collection;
use Customer\Entity\CustomerPackage;
use IMServices\Entity\ContractAllRisk;
//use Settings\Entity\BusinessEquipments;

/**
 * Proparty
 *
 * This defines a group of objects
 *
 * @ORM\Table(name="objects")
 * @ORM\Entity(repositoryClass="Proparty\Entity\Repository\ObjectRepository")
 */
class Proparty
{

    /**
     *
     * @var integer @ORM\Column(name="id", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Customer\Entity\Customer")
     * @ORM\JoinColumn(name="customer", referencedColumnName="id")
     *
     * @var Customer
     */
    private $customer;

    /**
     *
     * @var string @ORM\Column(name="object_name", type="string", length=500, nullable=true)
     */
    private $objectName;

    /**
     *
     * @var \DateTime @ORM\Column(name="created_on", type="datetime", nullable=true)
     */
    private $createdOn;

    /**
     *
     * @var \DateTime @ORM\Column(name="update_on", type="datetime", nullable=true)
     */
    private $updateOn;

    // @ORM\Column(name="object_value", type="decimal", precision=15, scale=4, nullable=false)
    
    /**
     *
     * @var boolean @ORM\Column(name="is_hidden", type="boolean", nullable=true, options={"default"=false})
     */
    private $isHidden;

    /**
     *
     * @var \Settings\Entity\ObjectType @ORM\ManyToOne(targetEntity="Settings\Entity\ObjectType")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="object_type_id", referencedColumnName="id")
     *      })
     */
    private $objectType;
    
    /**
     * These are types that are not specififed it the object type list
     * 
     * @ORM\Column(name="other_type", type="string", nullable=true)
     * @var string
     */
    private $otherType;

    /**
     *
     * @var PropartyStatus @ORM\ManyToOne(targetEntity="Proparty\Entity\PropartyStatus")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="object_status", referencedColumnName="id")
     *      })
     */
    private $objectStatus;

   
    // /**
    // *
    // * @var \Doctrine\Common\Collections\Collection @ORM\ManyToMany(targetEntity="Offer\Entity\Offer", mappedBy="object")
    // */
    // private $offer;
    
    /**
     *
     * @var \Doctrine\Common\Collections\Collection @ORM\ManyToMany(targetEntity="GeneralServicer\Entity\Document")
     *      @ORM\JoinTable(name="object_doc",
     *      joinColumns={
     *      @ORM\JoinColumn(name="object_id", referencedColumnName="id")
     *      },
     *      inverseJoinColumns={
     *      @ORM\JoinColumn(name="doc_id", referencedColumnName="id")
     *      }
     *      )
     */
    private $document;

    // /**
    // * Remove this , as it is already mapped to a customer in customerBroker
    // * @ORM\OneToOne(targetEntity="Proparty\Entity\ObjectBroker", mappedBy="object", cascade={"persist", "remove"} )
    // *
    // * @var ObjectBroker
    // */
    // private $objectBroker;
    
    /**
     * This is the value of the object
     *
     * @var string @ORM\Column(name="value", type="string", nullable=false,  options={"default" : 0})
     */
    private $value;

    /**
     *
     * @var Currency @ORM\ManyToOne(targetEntity="Settings\Entity\Currency")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="currency", referencedColumnName="id")
     *      })
     */
    private $currency;

    /**
     * @ORM\Column(name="value_locked", type="boolean", nullable=true)
     *
     * @var boolean
     */
    private $valueLocked;
    
   

    /**
     *
     * @var string @ORM\Column(name="object_uid", type="string", length=100, nullable=false)
     */
    private $objectUid;

    /**
     * @ORM\ManyToOne(targetEntity="Customer\Entity\CustomerPackage", inversedBy="object")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="customer_package", referencedColumnName="id")
     * })
     *
     * @var CustomerPackage;
     */
    private $customerPackage;
    
    /**
     *
     * @var PropartyMotorData
     * @ORM\OneToOne(targetEntity="Proparty\Entity\PropartyMotorData", mappedBy="proparty")
     *
     */
    private $objectMotor;
    
    /**
     *
     * @var PropartyBuildingData @ORM\OneToOne(targetEntity="Proparty\Entity\PropartyBuildingData", mappedBy="object")
     *
     */
    private $objectBuilding;
    

    /**
     * @ORM\OneToOne(targetEntity="Proparty\Entity\PropartyBusinessEquipment", mappedBy="proparty")
     * 
     * @var PropartyBusinessEquipment
     */
    private $businessEquipment;
    
    /**
     * @ORM\OneToOne(targetEntity="Proparty\Entity\PropartyNonBusinessEquipment", mappedBy="proparty")
     *
     * @var PropartyNonBusinessEquipment
     */
    private $objectNonBusinessEquipment;

    /**
     * @ORM\OneToOne(targetEntity="Proparty\Entity\PropartyTravel", mappedBy="proparty")
     * 
     * @var PropartyTravel
     */
    private $objectTravel;
    
    /**
     * @ORM\OneToOne(targetEntity="PropartySports",  mappedBy="proparty")
     * @var PropartySports
     */
    private $objectSport;
    
    /**
     * @ORM\OneToOne(targetEntity="PropartyLifeStyle",  mappedBy="proparty")
     * @var PropartyLifeStyle
     * 
     */
    private $objectLifeStyle;
    
    /**
     * @ORM\OneToOne(targetEntity="PropartyPersonData", mappedBy="proparty")
     * @var PropartyPersonData
     */
    private $objectLife;
    
    /**
     * @ORM\OneToOne(targetEntity="PropartyBusiness", mappedBy="proparty")
     * @var PropartyBusiness
     */
    private $objectBusiness;
    
    /**
     * @ORM\OneToOne(targetEntity="PropartyOthers",  mappedBy="object")
     * @var PropartyOthers
     */
    private $objectOthers;
    
    /**
     * @ORM\OneToOne(targetEntity="PropartyPersonData")
     * @var PropartyPersonData
     */
    private $objectPerson;
    
//     /**
//      * @ORM\OneToOne(targetEntity="IMServices\Entity\ContractAllRisk")
//      * @var ContractAllRisk
//      */
//     private $objectContractAllRisk;

    // /**
    // * Constructor
    // */
    // public function getArrayCopy()
    // {
    // return get_object_vars($this);
    // }
    public function getCustomerPackage()
    {
        return $this->customerPackage;
    }

    public function setCustomerPackage(CustomerPackage $customerPackage)
    {
        $this->customerPackage = $customerPackage;
        return $this;
    }

    public function __construct()
    {
        // $this->offer = new \Doctrine\Common\Collections\ArrayCollection();
        // $this->objectMotor = new ArrayCollection();
        // $this->objectValue = new ArrayCollection();
        // $this->idPersonCategory = new \Doctrine\Common\Collections\ArrayCollection();
        // $this->idPropertyCategory = new \Doctrine\Common\Collections\ArrayCollection();
        $this->document = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function getObjectName()
    {
        return $this->objectName;
    }

    public function setObjectName($name)
    {
        $this->objectName = $name;
        return $this;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn            
     *
     * @return Proparty
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
        $this->updateOn = $createdOn;
        
        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set updateOn
     *
     * @param \DateTime $updateOn            
     *
     * @return Proparty
     */
    public function setUpdateOn($updateOn)
    {
        $this->updateOn = $updateOn;
        
        return $this;
    }

    /**
     * Get updateOn
     *
     * @return \DateTime
     */
    public function getUpdateOn()
    {
        return $this->updateOn;
    }

    /**
     * Set isHidden
     *
     * @param boolean $isHidden            
     *
     * @return Proparty
     */
    public function setIsHidden($isHidden = FALSE)
    {
        $this->isHidden = $isHidden;
        
        return $this;
    }

    /**
     * Get isHidden
     *
     * @return boolean
     */
    public function getIsHidden()
    {
        return $this->isHidden;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomer($cust)
    {
        $this->customer = $cust;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($val)
    {
        $this->value = $val;
        return $this;
    }

    /**
     * Set objectType
     *
     * @param \All\Entity\ObjectType $objectType            
     *
     * @return Proparty
     */
    public function setObjectType(\Settings\Entity\ObjectType $objectType = null)
    {
        $this->objectType = $objectType;
        
        return $this;
    }

    /**
     * Get objectType
     *
     * @return \All\Entity\ObjectType
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * Set objectStatus
     *
     * @param \All\Entity\ObjectStatus $objectStatus            
     *
     * @return Proparty
     */
    public function setObjectStatus(\Object\Entity\ObjectStatus $objectStatus = null)
    {
        $this->objectStatus = $objectStatus;
        
        return $this;
    }

    /**
     * Get objectStatus
     *
     * @return \All\Entity\ObjectStatus
     */
    public function getObjectStatus()
    {
        return $this->objectStatus;
    }

    /**
     * Add idDoc
     *
     * @param \All\Entity\Document $idDoc            
     *
     * @return Proparty
     */
    public function addIdDoc(\GeneralServicer\Entity\Document $idDoc)
    {
        $this->idDoc[] = $idDoc;
        
        return $this;
    }

    /**
     * Remove idDoc
     *
     * @param \All\Entity\Document $idDoc            
     */
    public function removeIdDoc(\GeneralServicer\Entity\Document $idDoc)
    {
        $this->idDoc->removeElement($idDoc);
    }

    /**
     * Get idDoc
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }

    /**
     * Add offer
     *
     * @param \All\Entity\Offer $offer            
     *
     * @return Proparty
     */
    public function addOffer(\Offer\Entity\Offer $offer)
    {
        $this->offer[] = $offer;
        
        return $this;
    }

    /**
     * Remove offer
     *
     * @param \All\Entity\Offer $offer            
     */
    public function removeOffer(\Offer\Entity\Offer $offer)
    {
        $this->offer->removeElement($offer);
    }

    /**
     * Get offer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOffer()
    {
        return $this->offer;
    }

    // /**
    // * Add idPersonCategory
    // *
    // * @param \All\Entity\PersonCategory $idPersonCategory
    // *
    // * @return Proparty
    // */
    // public function addIdPersonCategory(\Settings\Entity\PersonCategory $idPersonCategory)
    // {
    // $this->idPersonCategory[] = $idPersonCategory;
    
    // return $this;
    // }
    
    // /**
    // * Remove idPersonCategory
    // *
    // * @param \All\Entity\PersonCategory $idPersonCategory
    // */
    // public function removeIdPersonCategory(\All\Entity\PersonCategory $idPersonCategory)
    // {
    // $this->idPersonCategory->removeElement($idPersonCategory);
    // }
    
    /**
     * Get idPersonCategory
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdPersonCategory()
    {
        return $this->idPersonCategory;
    }

    /**
     * Add idPropertyCategory
     *
     * @param \All\Entity\PropertyCategory $idPropertyCategory            
     *
     * @return Proparty
     */
    public function addIdPropertyCategory(\All\Entity\PropertyCategory $idPropertyCategory)
    {
        $this->idPropertyCategory[] = $idPropertyCategory;
        
        return $this;
    }

    /**
     * Remove idPropertyCategory
     *
     * @param \All\Entity\PropertyCategory $idPropertyCategory            
     */
    public function removeIdPropertyCategory(\All\Entity\PropertyCategory $idPropertyCategory)
    {
        $this->idPropertyCategory->removeElement($idPropertyCategory);
    }

    /**
     * Get idPropertyCategory
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdPropertyCategory()
    {
        return $this->idPropertyCategory;
    }

    /**
     */
    public function getObjectMotor()
    {
        return $this->objectMotor;
    }

    public function setObjectMotor($motor)
    {
        $this->objectMotor = $motor;
        return $this;
    }
    
    public function getObjectBuilding(){
        return $this->objectBuilding;
    }
    
    public function setObjectBuilding($bu){
        $this->objectBuilding = $bu;
        return $this;
    }
    
    public function getBusinessEquipment(){
        return $this->businessEquipment;
    }
    
    public function setBusinessEquipment($eq){
        $this->businessEquipment = $eq;
        return $this;
    }
    
    public function getObjectTravel(){
        return $this->objectTravel;
    }
    
    public function setObjectTravel($trav){
        $this->objectTravel = $trav;
        return $this;
    }
    
    public function getObjectSport(){
        return $this->objectSport;
    }
    
    public function setObjectSport($sport){
        $this->objectSport = $sport;
        return $this;
    }
    public function getObjectLifeStyle(){
        return $this->objectLifeStyle;
    }
    
    public function setObjectLifeStyle($life){
        $this->objectLifeStyle = $life;
        return $this;
    }
    
    public function getObjectLife(){
        return $this->objectLife;
    }
    
    public function setObjectLife($life){
        $this->objectLife = $life;
        return $this;
    }
    
    public function getObjectBusiness(){
        return $this->objectBusiness;
    }
    
    public function setObjectBusiness($bus){
        $this->objectBusiness = $bus;
        return $this;
    }
    
    public function getObjectOthers(){
        return $this->objectOthers;
    }
    
    public function setObjectOthers($ths){
        $this->objectOthers = $ths;
        return $this;
    }
    
    public function getObjectNonBusinessEquipment(){
        return $this->objectNonBusinessEquipment;
    }
    
    public function setObjectNonBusinessEquipment($se){
        $this->objectNonBusinessEquipment = $se;
        return $this;
    }

    // public function addObjectMotor($motors)
    // {
    // foreach ($motors as $motor) {
    // $motor->setObject($this);
    // $this->objectMotor[] = $motor;
    // }
    // return $this;
    // }
    
    // public function removeObjectMotor($motors)
    // {
    // foreach ($motors as $motor) {
    // $motor->setObject(NULL);
    // $this->objectMotor->removeElelent($motor);
    // }
    // return $this;
    // }
    
    // public function setObjectMotor($ob)
    // {
    // $this->objectMotor = $ob;
    // return $this;
    // }
    public function getStatus()
    {
        $this->objectStatus->getObjectStatus()->getStatusWord();
    }

    // public function getObjectMotor(){
    // return $this->objectMotor;
    // }
    
    /**
     * Add idObject
     *
     * @param \All\Entity\Proparty $idObject            
     *
     * @return Document
     */
    public function addDocument(Document $document)
    {
        if(!$this->document->contains($document)){
            $this->document->add($document);
        }
        //$this->document[] = $document;
        
        return $this;
    }

    /**
     * Remove idObject
     *
     * @param \All\Entity\Proparty $idObject            
     */
    public function removeDocument(Document $document)
    {
        if($this->document->contains($document)){
            $this->document->removeElement($document);
        }
        return $this;
        
    }

    /**
     * Get idObject
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     *
     * @return \Settings\Entity\Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     *
     * @param Currency $cur            
     * @return \Proparty\Entity\Proparty
     */
    public function setCurrency($cur)
    {
        $this->currency = $cur;
        
        return $this;
    }

    /**
     *
     * @return boolean
     */
    public function getValueLocked()
    {
        return $this->valueLocked;
    }

    /**
     *
     * @param boolean $locked            
     * @return \Proparty\Entity\Proparty
     */
    public function setValueLocked($locked = FAlSE)
    {
        $this->valueLocked = $locked;
        
        return $this;
    }
    
   

    public function setObjectUid($uid)
    {
        $this->objectUid = $uid;
        return $this;
    }

    public function getObjectUid()
    {
        return $this->objectUid;
    }
    
    public function getObjectPerson(){
        return $this->objectPerson;
    }
    
    public function setObjectPerson($person){
        $this->objectPerson = $person;
        return $this;
    }
    
    // public function getObjectBroker()
    // {
    // return $this->objectBroker;
    // }
    
    // public function setObjectBroker($object)
    // {
    // $this->objectBroker = $object;
    // return $this;
    // }
    // , uniqueConstraints={@ORM\UniqueConstraint(name="object_uid_UNIQUE", columns={"object_uid"})}, indexes={@ORM\Index(name="FK_object_obType_idx", columns={"object_type_id"}), @ORM\Index(name="FK_object_user_id_idx", columns={"user_id"}), @ORM\Index(name="FK_object_object_status_idx", columns={"object_status"})}

    /**
     * @return the $otherType
     */
    public function getOtherType()
    {
        return $this->otherType;
    }

    /**
     * @param string $otherType
     */
    public function setOtherType($otherType)
    {
        $this->otherType = $otherType;
    }
}
