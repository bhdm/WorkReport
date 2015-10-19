<?php
namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use
    Doctrine\ORM\Mapping as ORM,
    Symfony\Component\Validator\Constraints as Assert,
    Gedmo\Mapping\Annotation as Gedmo;


/**
 * Class BaseEntity
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table()
 */
class Project extends BaseEntity
{
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Название проекта обязательно для заполнения")
     */
    protected $title;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="myProjects")
     */
    protected $owner;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Milestone", mappedBy="project")
     */
    protected $milestones;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", inversedBy="projects")
     */
    protected $favorites;



    public function __construct(){
        $this->milestones = new ArrayCollection();
        $this->favorites = new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }



}