<?php
namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use
    Doctrine\ORM\Mapping as ORM,
    Symfony\Component\Validator\Constraints as Assert,
    Gedmo\Mapping\Annotation as Gedmo;


/**
 *
 * @ORM\Entity()
 * @ORM\Table()
 */
class Status extends BaseEntity
{
    /**
     * @ORM\Column(type="string")
     * @Assert\NotNull(message="Название статуса обязательно для заполнения")
     */
    protected $title;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $type;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $body;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $color = 'default';

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Milestone", mappedBy="status")
     */
    protected $milestones;

    protected $tasks;

    public function __construct(){
        $this->color = 'default';
        $this->milestones = new ArrayCollection();
        $this->type = 'open';
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getMilestones()
    {
        return $this->milestones;
    }

    /**
     * @param mixed $milestones
     */
    public function setMilestones($milestones)
    {
        $this->milestones = $milestones;
    }

    /**
     * @return mixed
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * @param mixed $tasks
     */
    public function setTasks($tasks)
    {
        $this->tasks = $tasks;
    }


}