<?php
namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use
    Doctrine\ORM\Mapping as ORM,
    Symfony\Component\Validator\Constraints as Assert,
    Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity()
 * @ORM\Table()
 * @UniqueEntity(fields={email}, message="Такой Email уже зарегистрирован в системе")
 */
class User extends BaseEntity
{
    /**
     * @ORM\Column(type="string", unique=true)
     * @Assert\Email(message="такой Email - не существует")
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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Project", mappedBy="owner")
     */
    protected $projects;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Milestone", mappedBy="owner")
     */
    protected $milestones;


    public function __construct(){
        $this->projects = new ArrayCollection();
        $this->milestones = new ArrayCollection();
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



}

