<?php
namespace ClientBundle\Entity;
use
	Doctrine\ORM\Mapping as ORM,
	Symfony\Component\Validator\Constraints as Assert,
	Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\MappedSuperclass
 */
abstract class BaseEntity
{
	/** @ORM\Column(type = "boolean") */
	protected $enabled = true;

	/**
	 * @ORM\Column(type = "datetime")
	 * @Gedmo\Timestampable(on = "create")
	 */
	protected $created;

	/**
	 * @ORM\Column(type = "datetime")
	 * @Gedmo\Timestampable(on = "update")
	 */
	protected $updated;
	/**
	 * @ORM\Id
	 * @ORM\Column(type = "integer")
	 * @ORM\GeneratedValue
	 */
	protected $id;

	/**
	 * @ORM\Column(type = "integer", nullable=true)
	 */
	protected $ord;
	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set created
	 *
	 * @param \DateTime $created
	 * @return This
	 */
	public function setCreated($created)
	{
		$this->created = $created;
		return $this;
	}

	public function getCreated()
	{
		return $this->created;
	}

	public function setUpdated($updated)
	{
		$this->updated = $updated;
		return $this;
	}

	public function getUpdated()
	{
		return $this->updated;
	}

	public function setEnabled($enabled)
	{
		$this->enabled = $enabled;
		return $this;
	}

	public function getEnabled()
	{
		return $this->enabled;
	}

	public function getEnabledStr(){
		if ($this->enabled == true){
			return 'Активна';
		}else{
			return 'Неактивна';
		}
	}

	/**
	 * @return mixed
	 */
	public function getOrd()
	{
		return $this->ord;
	}

	/**
	 * @param mixed $ord
	 */
	public function setOrd($ord)
	{
		$this->ord = $ord;
	}


}