<?php

namespace InstitutAshariteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveau
 *
 * @ORM\Table(name="niveau")
 * @ORM\Entity(repositoryClass="InstitutAshariteBundle\Repository\NiveauRepository")
 */
class Niveau
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree_start", type="datetime")
     */
    private $dureeStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree_end", type="datetime")
     */
    private $dureeEnd;


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
     * Set name
     *
     * @param string $name
     * @return Niveau
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set dureeStart
     *
     * @param \DateTime $dureeStart
     * @return Niveau
     */
    public function setDureeStart($dureeStart)
    {
        $this->dureeStart = $dureeStart;

        return $this;
    }

    /**
     * Get dureeStart
     *
     * @return \DateTime 
     */
    public function getDureeStart()
    {
        return $this->dureeStart;
    }

    /**
     * Set dureeEnd
     *
     * @param \DateTime $dureeEnd
     * @return Niveau
     */
    public function setDureeEnd($dureeEnd)
    {
        $this->dureeEnd = $dureeEnd;

        return $this;
    }

    /**
     * Get dureeEnd
     *
     * @return \DateTime 
     */
    public function getDureeEnd()
    {
        return $this->dureeEnd;
    }
}
