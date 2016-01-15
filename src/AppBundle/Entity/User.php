<?php
namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use
    Doctrine\ORM\Mapping as ORM,
    Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * @ORM\Entity()
 * @ORM\Table(name="fos_user")
 * @UniqueEntity(fields={"email"}, message="Такой Email уже зарегистрирован в системе")
 */
class User extends BaseUser implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $lastname;

    /**
     * @ORM\Column(type="string")
     */
    protected $firstname;

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
        parent::__construct();
        $this->projects = new ArrayCollection();
        $this->myProjects = new ArrayCollection();
        $this->milestones = new ArrayCollection();
        $this->files = new ArrayCollection();
        $this->clients = new ArrayCollection();
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

