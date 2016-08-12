<?php

namespace InstitutAshariteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planning
 *
 * @ORM\Table(name="planning")
 * @ORM\Entity(repositoryClass="InstitutAshariteBundle\Repository\PlanningRepository")
 */
class Planning
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
     * @ORM\Column(name="day", type="string", length=255)
     */
    private $day;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hour_start", type="time")
     */
    private $hourStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hour_end", type="time")
     */
    private $hourEnd;

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
     * Set day
     *
     * @param string $day
     * @return Planning
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string 
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set hourStart
     *
     * @param \DateTime $hourStart
     * @return Planning
     */
    public function setHourStart($hourStart)
    {
        $this->hourStart = $hourStart;

        return $this;
    }

    /**
     * Get hourStart
     *
     * @return \DateTime 
     */
    public function getHourStart()
    {
        return $this->hourStart;
    }

    /**
     * Set hourEnd
     *
     * @param string $hourEnd
     * @return Planning
     */
    public function setHourEnd($hourEnd)
    {
        $this->hourEnd = $hourEnd;

        return $this;
    }

    /**
     * Get hourEnd
     *
     * @return string 
     */
    public function getHourEnd()
    {
        return $this->hourEnd;
    }
}
