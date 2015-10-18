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
class Label extends BaseEntity
{
    /**
     * @ORM\Column(type="string")
     * @Assert\NotNull(message="Поле название тега обязательно для заполнения")
     */
    protected $title;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Task", mappedBy="labels")
     */
    protected $tasks;

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