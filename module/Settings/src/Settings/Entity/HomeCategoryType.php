<?php
namespace Settings\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Owner Occupier
 * Tenant
 * Holiday Home
 * Domestic Office
 * Others
 * @ORM\Entity
 * @ORM\Table(name="home_category_type")
 * 
 * @author otaba
 *        
 */
class HomeCategoryType
{

    /**
     *
     * @var integer @ORM\Column(name="id", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\Column(name="typee", type="string", nullable=true)
     * 
     * @var string
     */
    private $type;

    /**
     */
    public function __construct()
    {
        
        // TODO - Insert your code here
    }
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param number $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

}

