<?php
namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use
    Doctrine\ORM\Mapping as ORM,
    Symfony\Component\Validator\Constraints as Assert,
    Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator;


/**
 * @ORM\Entity()
 * @ORM\Table()
 * @UniqueEntity(fields={"email"}, message="Такой Email уже зарегистрирован в системе")
 */
class User extends BaseEntity
{
    /**
     * @ORM\Column(type="string", unique=true)
     * @Assert\NotNull(message="Поле Email обязательно для заполнения")
     */
    protected $email;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotNull(message="Поле имя обязательно для заполнения")
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotNull(message="Поле пароль обязательно для заполнения")
     */
    protected $password;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Project", mappedBy="owner")
     */
    protected $projects;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Project", mappedBy="owner")
     */
    protected $myProjects;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Milestone", mappedBy="owner")
     */
    protected $milestones;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\File", mappedBy="owner")
     */
    protected $files;

    /**
     * @ORM\OneToMany(targetEntity="ClientBundle\Entity\Client", mappedBy="owner")
     */
    protected $clients;


    public function __construct(){
        $this->projects = new ArrayCollection();
        $this->myProjects = new ArrayCollection();
        $this->milestones = new ArrayCollection();
        $this->files = new ArrayCollection();
        $this->clients = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * @param mixed $projects
     */
    public function setProjects($projects)
    {
        $this->projects = $projects;
    }

    /**
     * @return mixed
     */
    public function getMyProjects()
    {
        return $this->myProjects;
    }

    /**
     * @param mixed $myProjects
     */
    public function setMyProjects($myProjects)
    {
        $this->myProjects = $myProjects;
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
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * @param mixed $clients
     */
    public function setClients($clients)
    {
        $this->clients = $clients;
    }



}

