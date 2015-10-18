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
class Task extends BaseEntity
{
    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $body;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $end;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="tasks")
     */
    protected $owner;

//    protected $type;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="myTasks")
     */
    protected $contractor;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Status", inversedBy="tasks")
     */
    protected $status;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\File", mappedBy="task")
     */
    protected $files;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Milestone", inversedBy="tasks")
     */
    protected $milestone;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Label", mappedBy="tasks")
     */
    protected $labels;

    public function __construct(){
        $this->labels = new ArrayCollection();
        $this->files = new ArrayCollection();

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
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param mixed $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
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

    /**
     * @return mixed
     */
    public function getContractor()
    {
        return $this->contractor;
    }

    /**
     * @param mixed $contractor
     */
    public function setContractor($contractor)
    {
        $this->contractor = $contractor;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param mixed $files
     */
    public function setFiles($files)
    {
        $this->files = $files;
    }

    /**
     * @return mixed
     */
    public function getMilestone()
    {
        return $this->milestone;
    }

    /**
     * @param mixed $milestone
     */
    public function setMilestone($milestone)
    {
        $this->milestone = $milestone;
    }

    /**
     * @return mixed
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param mixed $labels
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }



}