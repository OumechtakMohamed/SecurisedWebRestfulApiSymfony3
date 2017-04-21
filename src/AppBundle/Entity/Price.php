<?php
namespace AppBundle\Entity;
use JMS\Serializer\Annotation as Serializer;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @Serializer\ExclusionPolicy("all")
 * @ORM\Table(name="prices",
 *      uniqueConstraints={@ORM\UniqueConstraint(name="prices_type_place_unique", columns={"type", "place_id"})}
 * )
 */
class Price
{
    /**
     * @ORM\Id
	 * @Serializer\Expose
     * @Serializer\Groups({"default"})
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
	 * @Serializer\Expose
     * @Serializer\Groups({"default"})
     * @ORM\Column(type="string")
     */
    protected $type;

    /**
	 * @Serializer\Expose
     * @Serializer\Groups({"default"})
     * @ORM\Column(type="float")
     */
    protected $value;

    /**
	 * @Serializer\Expose
     * @Serializer\Groups({"default"})
     * @ORM\ManyToOne(targetEntity="Place", inversedBy="prices")
     * @var Place
     */
    protected $place;

    // tous les getters et setters
	
	 public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
	
	 public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
	
	 public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
	
	 public function getPlace()
    {
        return $this->place;
    }

    public function setPlace($place)
    {
        $this->place = $place;
    }
}
	