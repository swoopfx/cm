<?php
namespace Proparty\Entity;

use Doctrine\ORM\Mapping as ORM;
use Settings\Entity\SportsType;

/**
 * @ORM\Entity
 * @ORM\Table(name="object_sports")
 *
 * @author otaba
 *        
 */
class PropartySports
{

    /**
     *
     * @var integer @ORM\Column(name="id", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Settings\Entity\SportsType")
     *
     * @var SportsType
     */
    private $sport;

    /**
     * @ORM\Column(name="details", type="text", nullable=true)
     *
     * @var text
     */
    private $details;

    /**
     * @ORM\OneToOne(targetEntity="Proparty", inversedBy="objectSport")
     *
     * @var Proparty
     */
    private $proparty;

    public function __construct()
    {}

    public function getId()
    {
        return $this->id;
    }

    public function setSport($sport)
    {
        return $this->sport;
    }

    public function getSport()
    {
        return $this->sport;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails($det)
    {
        $this->details = $det;
        return $this;
    }

    public function getObject()
    {
        return $this->object;
    }

    public function setObject($ob)
    {
        $this->object = $ob;
        return $this;
    }
}

